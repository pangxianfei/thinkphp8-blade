@extends('layout.app')
@section('title'){{ $name}} @endsection
@section('keyword'){{$keyword??''}}@endsection
@section('description'){{$description??''}}@endsection
@section('css')

@endsection
@section('topjs')
@endsection
@section('main') 
<h1>blade 模板引擎</h1>


@if($name)

<h1>hello {{ $name }}</h1>

@endif

@endsection
@section('footerjs') 
@endsection

