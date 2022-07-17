<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Providers\RouteServiceProvider;
use Inertia\Inertia;

class CompanyController extends Controller
{
    public function index() {
      $data = Company::all();

      // $data = [
      //   'success' => true,
      //   'test' => 'testing',
      // ];
      return Inertia::render('Companies', compact('data'));
    }

    public function getCompany($companyId) {
      $data = Company::find($companyId);
      return Inertia::render('Company', compact('data'));
    }
}
