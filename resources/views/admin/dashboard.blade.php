@extends('admin.templates.header')
@section('content')
    <h4 class="card-header">Hello {{ Auth::user()->name}}</h4>
@endsection