<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
 
class CompanyController extends Controller
{
    public function GetCompanies()
    {
      $company = User::where('user_type',2)->get();
      return view('companies_list',['companies'=>$company]);
    }

    public function getCompany($id)
    {
      $company = User::where('id',$id)->first();
      return view('company',['company'=>$company]);
    }
}
