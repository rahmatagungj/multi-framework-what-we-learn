@extends('layouts.app')

@section('title', $title)

@section('content')
    @include('layouts.navigation')
    <main class="container mb-5">
        <form action="submit/add" method="post">
            @csrf
            <div class="form-group my-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group my-2">
                <label for="url">Url</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Example.com">
            </div>
            <div class="form-group my-2">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Put description here ..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-2">Submit</button>
        </form>
    </main>
    @include('layouts.footer')
@endsection
