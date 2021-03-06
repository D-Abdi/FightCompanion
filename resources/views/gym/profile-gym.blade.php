@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-body">
            <!-- /Breadcrumb -->
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{'/storage/logos/'.$gym->logo}}" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="">{{$gym->name}}</h4>
                                    @foreach($gym->disciplines as $disciplines)
                                    <p class="text-secondary mb-1 cap" style="padding-bottom: 10px;">{{$disciplines->name}}</p>
                                    @endforeach
                                    @can('imAFighter')
                                        @if(auth()->user()->hasAttribute() == false)
                                            <a class="btn-link text-decoration-none" href="{{route('profile.create')}}"><button type="submit" class="btn btn-outline-primary d-block message">Join Gym</button></a>
                                        @elseif(auth()->user()->hasJoined() == false && auth()->user()->attribute !== null)
                                            <form method="post" action="/joinFightersList/{{$gym->id}}">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-primary d-block message">Join Gym</button>
                                                </form>
                                        @endif
                                    @endcan
                                    @can('imACoach')
                                        @if(auth()->user()->id == $gym->user_id)
                                        <a class="btn-link text-decoration-none" href="{{route('gym.edit', $gym->id)}}"><button type="submit" class="btn btn-outline-primary d-block message">Edit Gym</button></a>
                                        @endif
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                <a href="{{$gym->website}}"><span class="text-secondary">{{$gym->website}}</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                <a href="https://www.instagram.com/{{$gym->instagram}}"><span class="text-secondary">&commat;{{$gym->instagram}}</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                <a href="https://www.facebook.com/{{$gym->facebook}}"><span class="text-secondary">{{$gym->facebook}}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$gym->email}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone Number</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$gym->phone_number}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">City</h6>
                                </div>
                                <div class="col-sm-9 text-secondary cap">
                                    {{$gym->city}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Adres and Zip code</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$gym->adres}} - {{$gym->zip_code}}
                                </div>
                            </div>
                        </div>
                    </div>
                        <table class="table table-hover text-center">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Height (cm)</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Discipline</th>
                                <th scope="col">Competitive</th>
                                <th scope="col">Record</th>
                                <th scope="col">Profile</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <td colspan="8">&copy; List of Fighters</td>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($gym->listOfFighters as $fighters)
                            <tr>
                                <td>{{$fighters->first_name}}</td>
                                <td>{{$fighters->attribute['weightclass']}}</td>
                                <td>{{$fighters->attribute['height']}}</td>
                                <td>{{\Carbon\Carbon::parse($fighters->DOB)->format('d/m/Y')}}</td>
                                <td>{{$fighters->attribute['disciplines'][0]['name']}}</td>
                                <td>{{$fighters->attribute['competitive']}}</td>
                                <td>{{$fighters->attribute['record']}}</td>
                                <td><button class="btn-sm btn-outline-dark gym-show-profile"><a href="{{route('profile.show', $fighters->attribute->id)}}" class="text-decoration-none gym-link-styling">Show</a></button></td>
                                @can('update', $gym)
                                    <td>
                                        <form method="post" action="/gym/{{$fighters->id}}/deleteFighter" class="fighter_delete_form">
                                            @csrf
                                            <input type="hidden" value="_method" name="DELETE" />
                                            <button type="submit" class="btn-sm btn-outline-danger gym-show-profile">Delete</button>
                                        </form>
                                    </td>
                                @endcan
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <script>
        $(document).ready(function (){
            $('.fighter_delete_form').on('submit', function (){
                if(confirm('Are you sure you want to delete this user?')) {
                    return true;
                }
                else {
                    return false;
                }
            });
        });
    </script>
@endsection
