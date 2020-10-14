@extends('layouts.app')

@section('content')
    <h1>Gym's</h1>
    @foreach($gyms as $gym)
        <li>
            <img src="{{asset('/storage/logos/'.$gym->logo)}}"/>
            <h2>{{$gym->name}}</h2>
            <p>{{$gym->phone_number}}</p>
            <p>{{$gym->email}}</p>
        </li>
    @endforeach


@endsection
