@extends('layouts.default')
@section('title', $user->name)
@section('content')
    {{ $user->name }} - {{ $user->email }}
    <img src="{{ $user->gravatar('600') }}" alt="{{ $user->name }}" class="gravatar"/>
@stop