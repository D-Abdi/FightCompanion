@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gym's</h1>
        @foreach($gyms as $gym)
            <div class="gym-card">
                <img src="{{asset('/storage/logos/'.$gym->logo)}}" id="gym-image" style="width: 100%;height: 150px"/>
                <div class="gym-container">
                    <h4>{{$gym->name}}</h4>
                    <p>{{$gym->phone_number}}</p>
                    <p>{{$gym->email}}</p>
                </div>
            </div>
        @endforeach

    </div>

@endsection
