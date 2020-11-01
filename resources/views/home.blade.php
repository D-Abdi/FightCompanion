@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center home-picandname">
        <h1 class="home-company-name">Fight Companion</h1>
        <img src="css/images/homescreen.jpg" alt="dude flying in for a superman punch" class="home-image">
    </div>

    <h2 class="row justify-content-center home-lookforagym">Look for a gym</h2>
    <form class="form-group row justify-content-center" type="GET" action="{{route('gym.search')}}">
        <input type="text" class="gym-search-criteria" placeholder="Search Gym" name="query" >
        <button type="submit" class="btn btn-dark gym-search-criteria">
            Search
        </button>
    </form>
</div>
@endsection
