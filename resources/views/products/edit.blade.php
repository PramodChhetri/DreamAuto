@extends('layouts.app')
@section('content')
<h2 class="font-bold text-4xl text-black-700">Update Part</h2> 
<div class="rounded-lg border-4 border-green-500 my-2 py-2 px-2">
    <form action="{{route('products.update',$product->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf

        <input type="text" placeholder="Part Name" name="name" class="w-full rounded-lg border-2 border-red-300 my-2" value="{{$product->name}}">
        @error('name')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <input type="text" placeholder="Part Code" name="code" class="w-full rounded-lg border-2 border-red-300 my-2" value="{{$product->code}}">
        @error('code')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <input type="text" placeholder="Alternate Part Code" name="alternate_code" class="w-full rounded-lg border-2 border-red-300 my-2" value="{{$product->alternate_code}}">
        @error('alternate_code')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <input type="number" placeholder="Price" name="price" class="w-full rounded-lg border-2 border-red-300 my-2" value="{{$product->price}}">
        @error('price')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror


        <input type="number" placeholder="Stock" name="stock" class="w-full rounded-lg border-2 border-red-300 my-2" value="{{$product->stock}}">
        @error('stock')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <textarea placeholder="Description" name="description" class="w-full rounded-lg border-2 border-red-300 my-2"> {{$product->description}}</textarea>
        @error('description')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror
        
        <img class="w-44 border-2 border-red-300 my-1 p-1" src="{{ asset('images/products/'.$product->photopath_1) }}" alt="">

        <input type="file" accept="image/*"  name="photopath_1" class="w-full rounded-lg border-2 border-red-300 my-2">
        @error('photopath_1')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <img class="w-44 border-2 border-red-300 my-1 p-1" src="{{ asset('images/products/'.$product->photopath_2) }}" alt="">

        <input type="file" accept="image/*"  name="photopath_2" class="w-full rounded-lg border-2 border-red-300 my-2">
        @error('photopath_2')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <img class="w-44 border-2 border-red-300 my-1 p-1" src="{{ asset('images/products/'.$product->photopath_3) }}" alt="">

        <input type="file" accept="image/*"  name="photopath_3" class="w-full rounded-lg border-2 border-red-300 my-2">
        @error('photopath_3')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <div class="flex">
            <input type="submit" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg" value="Update Product">

            <a href="{{route('products.index')}}" class="bg-red-600 text-white px-10 py-2 mx-2 rounded-lg">Exit</a>
        </div>
    </form>
</div>

@endsection