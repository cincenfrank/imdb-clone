@extends('layouts.guests')
@section('title', 'Welcome Page')
@section('content')
<main-vue :movie-list="{{ json_encode($movies) }}"></main-vue>
@endsection
