@extends('layouts.guests')
@section('title', 'Welcome Page')
@section('content')
    <main-vue :movie-list="{{ json_encode($movies) }}" :categories-list="{{ json_encode($categoriesList) }}"></main-vue>
@endsection
