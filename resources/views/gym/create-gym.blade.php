@extends('layouts.app')

@section('content')
    <div id="container" style="font-family:Verdana,sans-serif">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="" style="text-align:center;font-size: x-large">Create a gym</h1>
                    <div class="card-body">
                        <form  method="post" action="/gym"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="titel">Gym Name</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           class="form-control @error('name') border-warning @enderror" value="{{old('name')}}">

                                    @error('name')
                                        <p class="text-warning">{{$errors->first('name')}}</p>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="city"
                                           class="form-control @error('city') border-warning @enderror"
                                           value="{{old('city')}}">

                                    @error('city')
                                    <p class="text-warning">{{$errors->first('city')}}</p>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="adres" class="col-md-4 col-form-label text-md-right">Adres & Number</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="adres"
                                           class="form-control @error('adres') border-warning @enderror"
                                           value="{{old('adres')}}">

                                    @error('adres')
                                    <p class="text-warning">{{$errors->first('adres')}}</p>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="zip_code">Zip Code</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="zip_code"
                                           class="form-control @error('zip_code') border-warning @enderror"
                                           value="{{old('zip_code')}}">

                                    @error('zip_code')
                                    <p class="text-warning">{{$errors->first('zip_code')}}</p>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="phone_number">Phone Number</label>

                                <div class="col-md-6">
                                    <input type="number"
                                           name="phone_number"
                                           class="form-control @error('phone_number') border-warning @enderror"
                                           value="{{old('phone_number')}}">

                                    @error('phone_number')
                                    <p class="text-warning">{{$errors->first('phone_number')}}</p>
                                    @enderror

                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="email">Email</label>

                                <div class="col-md-6">
                                    <input type="email"
                                           name="email"
                                           class="form-control @error('email') border-warning @enderror"
                                           value="{{old('email')}}">

                                    @error('email')
                                    <p class="text-warning">{{$errors->first('email')}}</p>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="website">Website URL (optional)</label>

                                <div class="col-md-6">
                                    <input type="url"
                                           name="website"
                                           class="form-control"
                                           value="{{old('website')}}">
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
                                    <div class="col-md-6">
                                        <label class="" for="Boxing">Boxing</label>
                                        <input type="checkbox" name="disciplines"  class="form-check" value="Boxing">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="" for="MMA">MMA</label>
                                        <input type="checkbox" name="disciplines"  class="form-check" value="MMA">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="" for="Kickboxing">Kickboxing</label>
                                        <input type="checkbox" name="disciplines"  class="form-check" value="Kickboxing">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="" for="BJJ">BJJ</label>
                                        <input type="checkbox" name="disciplines"  class="form-check" value="BJJ">
                                    </div>
                            </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="Logo">Upload Logo</label>

                                <div class="col-md-6">
                                    <input type="file"
                                           name="logo" id="logo"
                                           class="btn-light"
                                           accept="image/jpeg,image/png,image/jpg"
                                           required>

                                    @error('logo')
                                    <p class="text-warning">{{$errors->first('logo')}}</p>
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
