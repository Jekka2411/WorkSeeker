@extends('main_template');
@section('title','Список вакансий')
@section('content')
  <div class="container vacancy_list">
    @foreach ($vacancy as $item)
    <div class="row vacancy_info">
      <div class="col-md-12">
         <div class="row">
            <div class="vacancy_row_header">
               <span class="vacancy_title"><a href="{{route('getVacance',$item->id)}}">{{$item->title}}</a></span>
               <span class="vacanvy_salary">{{$item->salary}} руб</span>
            </div>
            <div class="vacancy_additional_info">
              <div class="vac_add_info_wrap">
               <span class="info_row">Можно работать из дома</span>
               <span class="info_row"><a href="{{route('getCompany',$item->getUser->id)}}">{{$item->getUser->name}}</a></span>
               <span class="info_row"><a href="">{{$item->city}}</a></span>
             </div>
            </div>
            <div class="vacancy_description">
              {{$item->description}}
            </div>
            <div class="cavancy_control">
              <div class="row">
                 <div class="col-md-3">
                     <a href="#" class="btn btn-info">Откликнуться</a>
                 </div>
                 <div class="col-md-3">
                     <a href="#" class="btn btn-outline-secondary">В избранное</a>
                 </div>
              </div>
            </div>
         </div>
      </div>
    </div>
    @endforeach

  </div>
@endsection
