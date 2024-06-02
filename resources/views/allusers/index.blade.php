@extends('layouts.app')

@section('content')

@include('layouts.message')

<h2 class="font-bold text-4xl text-black-700">Users</h2> 
<hr class="h-1 bg-red-500">

<div class="my-4 text-right px-10">
    <a href="{{route('allusers.create')}}" class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300">Add New User</a>
</div>

<div class="py-2">
    <table id="mytable" class="display">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Role</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone No</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($allusers as $usr)
            <tr>
                <td>{{$usr->id}}</td>
                <td>{{$usr->name}}</td>
                <td>{{$usr->role->name}}</td>
                <td>{{$usr->email}}</td>
                <td>{{$usr->address}}</td>
                <td>{{$usr->phone}}</td>
                <td>
                    <a href="{{route('allusers.edit',$usr->id)}}" class="bg-blue-600 text-white px-2 py-1 rounded shadow hover:shadow-blue-400">Edit</a>
                    <a onclick="showDelete('{{$usr->id}}')" class="bg-red-600 text-white px-2 py-1 rounded shadow hover:shadow-blue-400">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

 {{-- backdrop-filter: blur(15px); --}}
 <div id="deleteModal" class="fixed hidden left-0 top-0 right-0 bottom-0 bg-opacity-50 backdrop-blur-sm bg-blue-400">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white p-4 rounded-lg">
            <form action="{{route('allusers.destroy')}}" method="POST">
                @csrf
                <p class="text-2xl">Are you sure want to Delete?</p>
                <input type="hidden" name="dataid" id="dataid" value="">
                <div class="flex justify-center">
                    <input type="submit" value="Yes" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg cursor-pointer">
                    <a onclick="hideDelete()" class="bg-red-600 text-white px-4 py-2 mx-2 rounded-lg cursor-pointer">No</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    let table = new DataTable('#mytable');
</script>

<script>

    function showDelete(x)
    {
        // $('#dataid').val(x);
        document.getElementById('dataid').value = x;
        document.getElementById('deleteModal').style.display = "block";
    }

    function hideDelete()
    {
        document.getElementById('deleteModal').style.display = "none";
    }
</script>


@endsection

