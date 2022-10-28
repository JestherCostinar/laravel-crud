@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('navbar')
    @parent
 
@endsection
 
@section('content')



<div class="w-ful bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700" style="margin: 0 100px">
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 bg-gray-50 rounded-t-lg border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
        <li class="mr-2">
            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-tl-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500 hover:text-blue-600 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500 disabled">Update Product: <span class="text-red-500 underline"> {{ $product->product_name }}</span></button>
        </li>   
    </ul>
    <div>

        <div class=" p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" >
            
            <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-6">
                <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product name: <span class="text-red-500"> *</span></label>
                <input type="text" id="product_name" name="product_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Product name..." value="{{ $product->product_name }}">
                <small class="text-red-500 font-semibold">@error('product_name') {{ $errors->first('product_name') }} @enderror</small>
            </div>
            <div class="mb-6">
                <label for="product_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product price <span class="text-red-500"> *</span></label>
                <input type="number" id="price" name="price" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Product price..." value="{{ $product->price }}">
                <small class="text-red-500 font-semibold">@error('price') {{ $errors->first('price') }} @enderror</small>
            </div>
            <div class="mb-6">
                <label for="product_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description<span class="text-red-500"> *</span></label>
                <textarea id="ck_editor" name="product_description" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">{{ $product->product_description }}</textarea>
                <small class="text-red-500 font-semibold">@error('product_description') {{ $errors->first('product_description') }} @enderror</small>
            </div>

            
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Product Image<span class="text-red-500"> *</span></label>
            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" name="image" type="file">
            <small class="text-red-500 font-semibold">@error('image') {{ $errors->first('image') }} @enderror</small>
            <div class="mb-6 mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A product image is useful to showcase the product image</div>


            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit new product</button>
            </form>

        </div>

    </div>
</div>



@endsection