@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Gym's</h1>
        <form class="form-group row justify-content-center" type="GET" action="{{route('gym.search')}}">
            <input type="text" placeholder="Search Gym" name="query" >
            <button type="submit" class="btn btn-dark">
                {{ __('Search') }}
            </button>
        </form>
        @foreach($gyms as $gym)
            <a href="{{route('gym.show', $gym)}}" class="gym-link">
                <div class="gym-card">
                    <img src="{{asset('/storage/logos/'.$gym->logo)}}" id="gym-image" style="width: 100%;height: 150px"/>
                    <div class="gym-container">
                        <h4 class="cap">{{$gym->name}}</h4>
                        <p>{{$gym->phone_number}}</p>
                        <p>{{$gym->email}}</p>
                        @foreach($gym->disciplines as $disciplines)
                            <p class="cap">{{$disciplines->name}}</p>
                        @endforeach
                    </div>
                </div>
            </a>
        @endforeach

    </div>

@endsection
