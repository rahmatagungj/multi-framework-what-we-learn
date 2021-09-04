@extends('layouts.app')

@section('title', $title)

@section('content')
    @include('layouts.navigation')
    <main class="container mb-5">
        <div class="col-xxl-8">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-3">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="https://skksooriarachchi.com/wp-content/uploads/2019/05/online-learning.png"
                        class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Share your skills</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi rem laborum
                        blanditiis neque iure debitis! Explicabo sunt, laudantium, unde minus dicta, est eum consequatur
                        dolore laboriosam accusamus fugit animi ut.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="submit" class="btn btn-info bg-red btn-lg rounded-1 px-4 me-md-2">
                            Submit
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="trend"></div>
    </main>
    @include('layouts.footer')
@endsection
