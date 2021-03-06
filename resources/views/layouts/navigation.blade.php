@php
$NAVIGATIONS = [
    [
        'name' => 'Help',
        'url' => 'help',
    ],
];
@endphp


<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap py-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/">
            <span class="ml-3 text-xl uppercase">What We Learn</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            @foreach ($NAVIGATIONS as $nav)
                <a class="mr-5 hover:text-gray-900 {{ $title === $nav['name'] ? 'active' : '' }}" aria-current="page"
                    href="{{ $nav['url'] }}">{{ $nav['name'] }}</a>
            @endforeach
        </nav>
        <a href="submit">
            <button
                class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Submit
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </a>
    </div>
</header>
