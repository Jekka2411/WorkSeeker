<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Users;
 
class VacancyController extends Controller
{
   public function getVacancie(){
      $vacancy =Vacancy::get();
      return view('vacance\vacancy_list',['vacancy'=>$vacancy]);
   }

   public function getVacance($id){
      $vacancy =Vacancy::where('id',$id)->first();
      return view('vacance\vacancy_preview',['vacancy'=>$vacancy]);
   }


}
