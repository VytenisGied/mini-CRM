<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Company extends Model
{
  use HasFactory;
  protected $table="company";

  protected $fillable = [
    'name',
    'email',
    'logo',
    'website',
  ];

  public function employee(){
    return $this->hasMany(Employee::class, 'company_id');
  }
  
  public function getEmployeesPaginated(){
    return $this->employee()->paginate(10);
  }
}