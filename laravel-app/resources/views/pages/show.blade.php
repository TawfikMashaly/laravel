@extends('layouts.master')

@section('main')
    <section class="container my-5">
        <div class="text-light bg-dark py-4 w-50 mx-auto my-4 text-center">
            <h2> Event Details </h2>
        </div>
        {{-- Displaying event --}}
        <div class="w-50 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                  {{$event->title}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">Event Price : {{$event->price}}</h5>
                    <p class="card-text">
                        {{$event->description}}
                    </p>
                    <hr>
                    <div class="alert alert-info p-3 m-2">
                        Created at : {{$event->created_at}}<br>
                        by : <strong class="text-secondary">{{$event->speaker}}</strong>
                    </div>
                    <hr>
                    <a href="{{url('/events')}}" class="btn btn-primary">Events</a>
                </div>
              </div>
        </div>
       
    </section>
    
@endsection