@extends('layouts.app')

@section('title', $title)

@section('content')
    @include('layouts.navigation')
    <main class="mb-5">
        <x-homepage-heroes/>
        <div id="trend"></div>
    </main>
@endsection
