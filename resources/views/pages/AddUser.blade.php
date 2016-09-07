@extends('master')

@section('title')
    UserAddition
@stop
@section('headsection')
    <link rel="stylesheet" href="assets/css/Registration.css">
@stop

@section('body')
    @include('partials.Header')   
    @include('partials.Registration')
@stop