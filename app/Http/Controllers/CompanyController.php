<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Providers\RouteServiceProvider;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function __construct() {
      $this->middleware('auth', ['except' => ['']]);
      $this->middleware('verified', ['except' => ['']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Inertia::render('Company/Index', [
        'data' => Company::paginate(10)
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return Inertia::render('Company/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validated = $request->validate([
        'name' => ['required'],
        'email' => ['email', 'nullable'],
        'logo' => ['image', 'mimes:jpg,png,jpeg,gif,svg', 'dimensions:min_width=100,min_height=100', 'max:2048', 'nullable'],
        'website' => ['url', 'nullable'],
      ]);

      if($validated['logo'] != null) {
        $temp_path = $validated['logo']->store('public/company_logos/'.$request->user()->id);
        $path = explode("/", $temp_path);
        array_shift($path);
        $validated['logo'] = implode("/", $path);
      }

      $company = Company::create($validated);

      return redirect()->route('company', ['companyId' => $company->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $company = Company::findOrFail($id);
      return Inertia::render('Company/Company', [
        'data' => $company,
        'employees' => $company->getEmployeesPaginated()
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return Inertia::render('Company/Edit', [
        'data' => Company::findOrFail($id)
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validated = $request->validate([
        'name' => ['nullable'],
        'email' => ['email', 'nullable'],
        'logo' => ['image', 'mimes:jpg,png,jpeg,gif,svg', 'dimensions:min_width=100,min_height=100', 'max:2048', 'nullable'],
        'website' => ['url', 'nullable'],
      ]);

      $company = Company::findOrFail($id);

      if($validated['name']!=null)
        $company->name = $validated['name'];
      if($validated['email']!=null)
        $company->email = $validated['email'];
      if($validated['website']!=null)
        $company->website = $validated['website'];
      
      if($validated['logo'] != null) {
        if($company->logo != null)
          Storage::delete('public' . $company->logo);
        $temp_path = $validated['logo']->store('public/company_logos/'.$request->user()->id);
        $path = explode("/", $temp_path);
        array_shift($path);
        $company->logo = implode("/", $path);
      }

      $company->save();

      return redirect()->route('company', ['companyId' => $company->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $company = Company::find($id);
      if($company->logo != null)
        Storage::delete('public' . $company->logo);
      Company::destroy($id);
      return redirect()->fullUrlWithQuery(['page ' => null])->back();
    }
}
