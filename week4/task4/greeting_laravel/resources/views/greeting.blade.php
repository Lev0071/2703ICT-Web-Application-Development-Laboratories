@extends('layouts.master')
@section('title')
Greeting
@endsection
  
@section('content')
    <p>
    Hello {{ $name }}.
    Next year, you will be {{ $age + 1}} years old.

    <hr>
@endsection

