<x-header></x-header>

{{-- @extends('layouts.app') --}}

<main>
    <div class="container mx-auto my-10">
        <img class="rounded-lg " src="{{ asset($template->pathtemplate) }}" alt="{{ $template->namatemplate }}" />
    </div>
    <div class="container mx-auto my-10">
        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="p-5">
                <h1 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $template->namatemplate }}</h1>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $template->deskripsitemplate }}</p>
            </div>
        </div>
    </div>
</main>