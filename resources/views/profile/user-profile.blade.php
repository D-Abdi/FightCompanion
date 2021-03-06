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
                                <img src="{{'/storage/logos/'.$attribute->profile_picture}}" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="">{{$attribute->user->first_name}}</h4>
                                    @foreach($attribute->disciplines as $disciplines)
                                        <p class="text-secondary mb-1 cap" style="padding-bottom: 10px;">{{$disciplines->name}}</p>
                                    @endforeach
                                    @can('update', $attribute)
                                    <button class="btn btn-outline-primary d-block message"><a href="{{route('profile.edit', auth()->user()->attribute->id)}}" class="text-decoration-none gym-link-styling">Edit</a></button>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                <a href="https://www.instagram.com/{{$attribute->instagram}}"><span class="text-secondary">&commat;{{$attribute->instagram}}</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                <a href="https://www.facebook.com/{{$attribute->facebook}}"><span class="text-secondary">{{$attribute->facebook}}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Weight</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$attribute->weightclass}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Height (cm)</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$attribute->height}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Record (w-l-d)</h6>
                                </div>
                                <div class="col-sm-9 text-secondary cap">
                                    {{$attribute->record}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Active in Competition</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$attribute->competitive}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
