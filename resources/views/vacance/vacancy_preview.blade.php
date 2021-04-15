@extends('main_template')
@section('title','Главная')
@section('content')
<div class="vacancy_page_info">
   <h1 class="vacancy_title">{{$vacancy->title}}</h1>
   <p> @if ($vacancy->salary>0)
         {{$vacancy->salary}}
       @else
         з/п ек указана
       @endif
    </p>

    <div class="company_info">
       <p><a href="{{route('getCompany',$vacancy->getUser->id)}}">{{$vacancy->getUser->name}}</a></p>
       <p>{{$vacancy->city}}</p>
    </div>

    <div class="vacancy_controls">
    </div>

    <div class="vacancy_description">
       {{$vacancy->description}}
    </div>

    <h4>Ключевые навыки</h4>
    <?php
       $tags = explode(';',$vacancy->tags);
     ?>
     @foreach ($tags as $tag)
       <div class="tag_inline">
         <span class="tag_text">{{$tag}}</span>
       </div>
     @endforeach
</div>
 @endsection
