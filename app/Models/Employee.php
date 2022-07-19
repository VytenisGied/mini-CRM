<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Employee extends Model
{
  use HasFactory;
  protected $table="employee";

  protected $fillable = [
    'name',
    'lastname',
    'company_id',
    'email',
    'phone',
  ];

  public function company(){
    return $this->belongsTo(Company::class, 'company_id');
  }
}
