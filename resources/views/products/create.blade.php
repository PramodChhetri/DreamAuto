@extends('layouts.app')
@section('content')
<h2 class="font-bold text-4xl text-black-700">Add Parts</h2> 
<div class="rounded-lg border-4 border-green-500 my-2 py-2 px-2">
    <form action="{{route('products.store')}}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf
        

        <input type="text" placeholder="Part Name" name="name" class="w-full rounded-lg border-2 border-red-300 my-2" value="{{old('name')}}">
        @error('name')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <input type="text" placeholder="Part Code" name="code" class="w-full rounded-lg border-2 border-red-300 my-2" value="{{old('code')}}">
        @error('code')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <input type="text" placeholder="Alternate Part Code" name="alternate_code" class="w-full rounded-lg border-2 border-red-300 my-2" value="{{old('alternate_code')}}">
        @error('alternate_code')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror


        <input type="number" placeholder="Price" name="price" class="w-full rounded-lg border-2 border-red-300 my-2" value="{{old('price')}}">
        @error('price')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror


        <input type="number" placeholder="Stock" name="stock" class="w-full rounded-lg border-2 border-red-300 my-2" value="{{old('stock')}}">
        @error('stock')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <textarea placeholder="Description" name="description" class="w-full rounded-lg border-2 border-red-300 my-2" ></textarea>
        @error('description')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <div class=" rounded-lg border-2 border-red-300 my-2">
        <label for="photopath_1" class="w-full "> Select Photo 1</label>
        <input type="file" name="photopath_1" accept="image/*" class="w-full rounded-lg border-2 border-red-300 my-2">
        </div>
        @error('photopath_1')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror
        
        <div class=" rounded-lg border-2 border-red-300 my-2">
        <label for="photopath_2" class="w-full "> Select Photo 2</label>
        <input type="file" name="photopath_2" accept="image/*" class="w-full rounded-lg border-2 border-red-300 my-2">
        </div>
        @error('photopath_2')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <div class=" rounded-lg border-2 border-red-300 my-2">
        <label for="photopath_2" class="w-full "> Select Photo 2</label>
        <input type="file" name="photopath_3" accept="image/*" class="w-full rounded-lg border-2 border-red-300 my-2">
        </div>
        @error('photopath_3')
            <p class="text-red-400 text-xs -mt-2">{{$message}}</p>
        @enderror

        <div class="flex">
            <input type="submit" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg" value="Add Product">

            <a href="{{route('products.index')}}" class="bg-red-600 text-white px-10 py-2 mx-2 rounded-lg">Exit</a>
        </div>
    </form>
</div>

@endsection