@extends('layouts.app')

@section('content')
    <div id="container" style="font-family:Verdana,sans-serif">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="" style="text-align:center;font-size: x-large">Create a Profile</h1>
                <div class="card-body">
                    <form  method="post" action="/profile"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="competitive" class="col-md-4 col-form-label text-md-right">Active in Competition</label>

                            <div class="col-md-6">
                                Yes<input id="coach" type="radio" name="competitive" value="Yes" required autofocus>
                                No<input id="fighter" type="radio" name="competitive" value="No" required autofocus>

                                @error('coach')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="weightclass">Weight</label>

                            <div class="col-md-6">
                                <input type="number"
                                       name="weightclass"
                                       id="weightclass"
                                       class="form-control @error('weightclass') border-warning @enderror"
                                       value="{{old('weightclass')}}">

                                @error('weightclass')
                                <p class="text-warning">{{$errors->first('weightclass')}}</p>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">Height</label>

                            <div class="col-md-6">
                                <input type="text"
                                       name="height"
                                       class="form-control @error('Height') border-warning @enderror"
                                       value="{{old('height')}}">

                                @error('height')
                                <p class="text-warning">{{$errors->first('height')}}</p>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="record">Record</label>

                            <div class="col-md-6">
                                <input type="text"
                                       name="record"
                                       class="form-control @error('record') border-warning @enderror"
                                       value="{{old('record')}}">

                                @error('record')
                                <p class="text-warning">{{$errors->first('record')}}</p>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="instagram">Instagram (optional)</label>

                            <div class="col-md-6">
                                <input type="text"
                                       name="instagram"
                                       class="form-control"
                                       value="{{old('instagram')}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="facebook">Facebook (optional)</label>

                            <div class="col-md-6">
                                <input type="text"
                                       name="facebook"
                                       class="form-control"
                                       value="{{old('facebook')}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="disciplines">Disciplines</label>
                            <div class=" form-check form-check-inline">
                                <select name="disciplines[]"
                                        multiple
                                        class="form-control"
                                >
                                    @foreach($disciplines as $discipline)
                                        <option value="{{$discipline->id}}">{{$discipline->name}}</option>
                                    @endforeach
                                </select>

                                @error('disciplines')
                                <p class="text-warning">{{$errors->first('disciplines')}}</p>
                                @enderror

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="Logo">Profile Picture</label>

                            <div class="col-md-6">
                                <input type="file"
                                       name="profile_picture" id="profile_picture"
                                       class="btn-light"
                                       accept="image/jpeg,image/png,image/jpg"
                                       required>

                                @error('profile_picture')
                                <p class="text-warning">{{$errors->first('profile_picture')}}</p>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
