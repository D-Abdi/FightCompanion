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
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                </div>

                            <div class="form-group row">
                                <label for="adres" class="col-md-4 col-form-label text-md-right">Adres & Number</label>

                                <div class="col-md-6">
                                    <input type="text" name="adres" class="form-control" id="adres">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="zip_code">Zip Code</label>

                                <div class="col-md-6">
                                    <input type="text" name="zip_code" class="form-control" id="zip_code">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="phone_number">Phone Number</label>

                                <div class="col-md-6">
                                    <input type="number" name="phone_number"  class="form-control" id="phone_number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="email">Email</label>

                                <div class="col-md-6">
                                    <input type="email" name="email"  class="form-control" id="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="website">Website (optional)</label>

                                <div class="col-md-6">
                                    <input type="url" name="website"  class="form-control" id="website">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="instagram">Instagram</label>

                                <div class="col-md-6">
                                    <input type="text" name="instagram"  class="form-control" id="instagram">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="facebook">Facebook</label>

                                <div class="col-md-6">
                                    <input type="text" name="facebook"  class="form-control" id="facebook">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="disciplines">Disciplines</label>
                                <div class=" form-check form-check-inline">
                                    <div class="col-md-6">
                                        <label class="" for="disciplines">Boxing</label>
                                        <input type="checkbox" name="disciplines"  class="form-check" value="Boxing">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="" for="disciplines">MMA</label>
                                        <input type="checkbox" name="disciplines"  class="form-check" value="MMA">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="" for="disciplines">Kickboxing</label>
                                        <input type="checkbox" name="disciplines"  class="form-check" value="Kickboxing">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="" for="disciplines">BJJ</label>
                                        <input type="checkbox" name="disciplines"  class="form-check" value="BJJ">
                                    </div>
                            </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="Logo">Upload Logo</label>

                                <div class="col-md-6">
                                    <input type="file" name="logo" id="logo"  class="btn-light" accept="image/jpeg,image/png,image/jpg">
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
