@extends('layouts.app')

@section('title', $title)

@section('content')
    @include('layouts.navigation')
    <main class="bg-gray-200">

        <div class="px-4 py-10 bg-blue-900">
            <div class="mx-auto container text-white">
                <h3 class="font-bold text-xl">Submit Resources</h3>
                <p>Get easy to share your Knowledge</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row md:justify-between px-5 mx-auto w-full">
            <section class="my-2 md:my-10 bg-white p-10 rounded-lg flex-1 md:mr-3">
                <h4 class="text-xl font-semibold mb-5">{{ $title }} Resource</h4>
                <div class="border-b border-gray-200 mb-5"></div>
                <form action="{{ route('submit_add') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="text-gray-700 dark:text-gray-200" for="name">Name</label>
                        <input id="name" type="text" name="name"
                            class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div class="form-group">
                        <label class="text-gray-700 dark:text-gray-200" for="url">Email Address</label>
                        <input id="url" type="email" name="email"
                            class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div class="form-group">
                        <label class="text-gray-700 dark:text-gray-200" for="description">Description</label>
                        <textarea id="description" name="description"
                            class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                    </div>
                    <div class="flex justify-start mt-6">
                        <button type="submit"
                            class="px-6 py-3 leading-5 text-white bg-gray-700 rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
                    </div>
                </form>
            </section>
            <section class="my-2 md:my-10 bg-white p-10 rounded flex-1 md:ml-3">
                <h4 class="text-xl font-semibold mb-5">Information</h4>
                <div class="border-b border-gray-200 mb-5"></div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta neque possimus iure, aliquam assumenda
                    laborum molestias reprehenderit sit, ex necessitatibus dignissimos quo, ratione mollitia soluta odio
                    incidunt est quidem veritatis.
                </p>
            </section>
        </div>
    </main>
@endsection
