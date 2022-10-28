@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('navbar')
    @parent
 
@endsection
 
@section('content')



<div class="w-auto bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700" style="margin: 0 700px">
    <a href="#" class="  flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-auto md:rounded-none md:rounded-l-lg p-4" src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->product_name }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{!! $product->product_description !!}</p>
        </div>
    </a>
</div>

@endsection