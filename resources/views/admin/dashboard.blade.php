@extends('layout.app')

@section('title', 'Dashboard')

@section('content')


@if(auth()->check())
<h3>Welcome, {{ auth()->user()->name }}</h3>
@else
<h3>You are not logged in</h3>
@endif

@endsection