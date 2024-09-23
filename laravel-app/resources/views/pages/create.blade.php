@extends('layouts.master')

@section('main')
    <section class="container my-5">
        <div class="text-light bg-dark py-4 w-50 mx-auto my-4 text-center">
            <h2> Create Events </h2>
        </div>
        
        <div class="w-50 mx-auto my-4">
            <form action="/store" method="POST">
                @csrf
                <div class="form-group my-2">
                    <label for="title">Event Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group my-2">
                    <label for="price">Event Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="form-group my-2">
                    <label for="speaker">Event Speaker</label>
                    <input type="text" class="form-control" id="speaker" name="speaker">
                </div>
                <div class="form-group my-2">
                    <label for="description">Event Description</label>
                    <textarea class="form-control" name="description" id="description">

                    </textarea>
                </div>

                <input type="submit" value="Add Event" class="btn btn-dark mt-2">
            </form>
        </div>
    </section>
@endsection