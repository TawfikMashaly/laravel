@extends('layouts.master')


@section('main')
    <main class="text-center w-50 mx-auto py-5 my-5
    bg-dark text-light rounded border">
        <h2> Home Page </h2>
        <hr class="w-25 mx-auto my-2">
        <a href="{{route('events')}}" class="btn btn-light mt-3">Show All Events</a>
    </main>    
@endsection






{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>All Products</h4>
    @if(count($products) > 0)
        <ul>
            @foreach ($products as $product)
                <li> {{$product->title}} </li>
            @endforeach
        </ul>
    @endif
</body>
</html> --}}