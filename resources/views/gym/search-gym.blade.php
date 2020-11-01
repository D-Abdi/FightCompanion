@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center gym-h1">All Gym's</h1>
        <form class="form-group row justify-content-center" type="GET" action="{{route('gym.search')}}">
            <div class="custom-control custom-switch gym-search-criteria">
                <input type="checkbox" class="custom-control-input" id="website" name="website" value="{{true}}">
                <label class="custom-control-label" for="website">Website?</label>
            </div>
            <select name="name" class="gym-search-criteria" id="name" data-dependent="state">
                <option value="">Name</option>
                @foreach($gyms as $gym)
                    <option>{{$gym->name}}</option>
                @endforeach
            </select>
            <select name="city" class="gym-search-criteria" id="city" data-dependent="state">
                <option value="">City</option>
                @foreach($gyms as $gym)
                    <option>{{$gym->city}}</option>
                @endforeach
            </select>
            <select name="discipline" class="gym-search-criteria" id="discipline" data-dependent="state">
                <option value="">Discipline</option>
                @foreach($gym->disciplines as $disciplines)
                    <option>{{$disciplines->name}}</option>
                @endforeach
            </select>
            <input type="text" class="gym-search-criteria" placeholder="Search Gym" name="query" >
            <button type="submit" class="btn btn-dark gym-search-criteria">
                Search
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
