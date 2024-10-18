<x-header></x-header>

{{-- @extends('layouts.app') --}}

<section class="flex flex-col items-center pt-10 pb-20">
    <a href="/ourproduct" class="font-medium text-blue-500 hover:underline mx-auto pb-10 hover:text-pink-500">
        &laquo;  Back to Product
    </a>
    <div class="w-full flex justify-center">
        <img class="rounded-lg max-w-lg w-full object-contain mx-5" src="{{ asset($template->pathtemplate) }}" alt="{{ $template->namatemplate }}" />
        <div class="flex flex-col items-center mx-5">
            <div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5">
                    <h1 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $template->namatemplate }}</h1>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $template->deskripsitemplate }}</p>
                    <h1 class="font-bold">Rp 10.000</h1>
                </div>
            </div>
        </div>
    </div> 
</section>

