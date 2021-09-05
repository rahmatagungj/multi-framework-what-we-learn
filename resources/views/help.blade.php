@extends('layouts.app')

@section('title', $title)

@section('content')
    @include('layouts.navigation')
    <main class="mb-5 container mx-auto px-3">
        <section class="my-4">
            <h3 class="font-bold text-2xl text-gray-600 uppercase">Help and Information</h3>
            <div class="card mt-3">
                <div class="card-body">
                    <p class="my-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus eius in ut ipsum saepe omnis ea.
                        Cumque voluptas mollitia repellat officiis amet perspiciatis natus nihil labore, nesciunt nostrum
                        corporis quisquam!</p>

                    <p class="my-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus eius in ut ipsum saepe omnis ea.
                    </p>
                    <p class="my-2">Cumque voluptas mollitia repellat officiis amet perspiciatis natus nihil labore, nesciunt nostrum
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus eius in ut ipsum saepe omnis
                        ea.
                    </p>
                    <p class="my-2">Cumque voluptas mollitia repellat officiis amet perspiciatis natus nihil labore, nesciunt nostrum
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus eius in ut ipsum saepe omnis
                        ea.
                    </p>
                </div>
            </div>
        </section>
    </main>
@endsection
