@extends('main_template');
@section('title','Список компаний')
@section('content')
  @foreach ($companies as $item)
     <p><a href="{{route('getCompany',$item->id)}}">{{$item->name}}</a></p>
  @endforeach
@endsection
 
