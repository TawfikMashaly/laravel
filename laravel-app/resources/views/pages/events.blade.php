@extends('layouts.master')

@section('main')
    <section class="container my-5">
        <div class="text-light bg-dark py-4 w-50 mx-auto my-4 text-center">
            <h2> All Events </h2>
        </div>
        {{-- Displaying all events --}}
        @if (count($events) > 0)
            <div class="row text-center my-2">
                @foreach ($events as $event)
                    <div class="col col-lg-4 col-md-6 col-sm-12 my-3">
                        <div class="card text-bg-light mb-3" 
                        style="max-width: 21rem;">
                            <div class="card-header">
                                {{$event->title}}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Event Price : {{$event->price}}
                                </h5>
                                <p class="card-text">
                                    {{$event->description}}
                                </p>
                                <hr>
                                <div class="alert alert-info p-3 m-2">
                                    Created at : {{$event->created_at}}<br>
                                    by : <strong class="text-secondary">{{$event->speaker}}</strong>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <a href="{{'/events/' . $event->id}}" 
                                        class="btn btn-primary mx-1 my-2">Show</a>
                                    <a href="{{'/events/' . $event->id . '/edit'}}" 
                                        class="btn btn-success mx-1 my-2">Edit</a>
                                    <form class="mx-1 my-2" method="POST" action="{{route('delete' , ['id' => $event->id])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                          </div>
                    </div>
                @endforeach
            </div>
        @endif
        {{-- Pagination links --}}
        <div class="d-flex justify-content-center my-4">
            {{$events->links()}}
        </div>
    </section>
    
@endsection