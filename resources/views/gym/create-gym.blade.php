@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">Create a gym</h1>

        <form  method="post" action="/gym">
            @csrf
            <div class="field">
                <label class="label" for="titel">Name</label>

                <div class="control">
                    <input type="text" name="name" id="name">
                </div>
            </div>

            <div class="field">
                <label class="label" for="adres">Adres</label>

                <div class="control">
                    <input type="text" name="adres" id="adres">
                </div>
            </div>

            <div class="field">
                <label class="label" for="zip_code">Zip Code</label>

                <div class="control">
                    <input type="text" name="zip_code" id="zip_code">
                </div>
            </div>

            <div class="field">
                <label class="label" for="phone_number">Phone Number</label>

                <div class="control">
                    <input type="number" name="phone_number" id="phone_number">
                </div>
            </div>

            <div class="field">
                <label class="label" for="email">Email</label>

                <div class="control">
                    <input type="email" name="email" id="email">
                </div>
            </div>

            <div class="field">
                <label class="label" for="Logo">Upload Logo</label>

                <div class="control">
                    <input type="file" name="logo" id="logo" accept="image/jpeg,image/png,image/jpg">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>

        </form>
        </div>
    </div>

@endsection
