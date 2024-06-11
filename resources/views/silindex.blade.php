@extends('home')

@section('title', 'Home Product List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Product List</h1>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <div class="flex justify-end">
        <form method="get" action="{{ route('products/search') }}" class="mr-3"> <!-- Formu sağ tarafta hizalamak için bir margin ekliyoruz -->
            <div class="input-group">
                <input class="form-control" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search</button> <!-- Butonu arama kutusundan biraz sağa kaydırmak için bir margin ekliyoruz -->
            </div>
        </form>
    </div>



    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Price</th>
                <th scope="col" class="px-6 py-3">Product Code</th>
                <th scope="col" class="px-6 py-3">Description</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)

                 <tr>
                   <th scope="row">{{ $product->id }}</th>
                   <td>{{ $product->title }}</td>
                   <td>{{ $product->category->name }}</td>
                   <td>{{ $product->user->name }}</td>
                   <td>{{ $product->description }}</td>
                   <td>
                       <a href="" class="btn btn-danger" >Delete</a >
                       <a href="" class="btn btn-primary">Edit</a>
                   </td>
                 </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection
