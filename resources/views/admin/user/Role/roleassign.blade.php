@extends('layout.app')
@section('title', 'Sliders')

@section('content')

<div class="container">

    <form method="POST" action="{{ route('assign.role', ['userId' => $user->id, 'roleName' => 'admin']) }}">
        @csrf
        <button type="submit">Assign Admin Role</button>
    </form>

</div>

@endsection