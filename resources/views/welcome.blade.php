@extends('main_template')
@section('title','Главная')
@section('main_header')
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Лучший поиск работы в стране</h1>
    <p class="lead">С помощью этого сервиса вы сможете найти себе работу по душе.</p>
  </div>
@endsection
 
@section('content')
<div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
  <div class="col">
    <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Ищу работу</h4>
    </div>
    <div class="card-body">
      <ul class="list-unstyled mt-3 mb-4">
        <li class="mb-2"><a type="button" class="btn btn-lg btn-block btn-outline-primary">Создать резюме</a></li>
        <li><a type="button" class="btn btn-lg btn-block btn-outline-primary" href="{{route('getVacancies')}}">Найти работу</a></li>
      </ul>

    </div>
  </div>
  </div>
  <div class="col">
    <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Предлагаю работу</h4>
    </div>
    <div class="card-body">
      <ul class="list-unstyled mt-3 mb-4">
        <li class="mb-2"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Создать вакансию</button></li>
        <li><button type="button" class="btn btn-lg btn-block btn-outline-primary">Найти работников</button></li>
      </ul>
    </div>
  </div>
  </div>
</div>
@endsection
