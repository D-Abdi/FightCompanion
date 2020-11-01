@extends('layouts.app')

@section('content')
    <div id="container" style="font-family:Verdana,sans-serif">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="" style="text-align:center;font-size: x-large">Update Gym Information</h1>
                <div class="card-body">
                    <form  method="post" action="/gym/{{$gym->id}}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="titel">Gym Name</label>

                            <div class="col-md-6">
                                <input type="text" name="name" id="name" class="form-control" value="{{$gym->name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input type="text" name="city" class="form-control" id="city" value="{{$gym->city}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adres" class="col-md-4 col-form-label text-md-right">Adres & Number</label>

                            <div class="col-md-6">
                                <input type="text" name="adres" class="form-control" id="adres" value="{{$gym->adres}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="zip_code">Zip Code</label>

                            <div class="col-md-6">
                                <input type="text" name="zip_code" class="form-control" id="zip_code" value="{{$gym->zip_code}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="phone_number">Phone Number</label>

                            <div class="col-md-6">
                                <input type="number" name="phone_number"  class="form-control" id="phone_number" value="{{$gym->phone_number}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="email">Email</label>

                            <div class="col-md-6">
                                <input type="email" name="email"  class="form-control" id="email" value="{{$gym->email}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="website">Website</label>

                            <div class="col-md-6">
                                <input type="url" name="website"  class="form-control" id="website" value="{{$gym->website}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="instagram">Instagram</label>

                            <div class="col-md-6">
                                <input type="text" name="instagram"  class="form-control" id="instagram" value="{{$gym->instagram}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="facebook">Facebook</label>

                            <div class="col-md-6">
                                <input type="text" name="facebook"  class="form-control" id="facebook" value="{{$gym->facebook}}">
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
                            <label class="col-md-4 col-form-label text-md-right" for="Logo">Upload Logo</label>
                            <div class="col-md-6">
                                <input type="file" name="logo" id="logo"  class="btn-light" accept="image/jpeg,image/png,image/jpg" value="{{$gym->logo}}">
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
