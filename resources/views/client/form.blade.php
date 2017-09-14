@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h4>{{ $modify == 1 ? 'Modify Client' : 'New Client' }}</h4>
        </div>
    </div>
    <form class="row" action="{{ $modify == 1 ? route('update_client', [ 'client_id' => $client_id ]) : route('create_client') }}" method="post">
        <div class="col-4 form-group">
            <label class="form-control-label" for="formGroupTitleSelect">Title</label>
            <select class="form-control" id="formGroupTitleSelect" name="title">

                @foreach( $titles as $title )
                    <option value="{{ $title }}">{{ $title }}.</option>
                @endforeach

            </select>
        </div>
        <div class="col-md-4 form-group">
            <label>Name</label>
            <input class="form-control" name="name" value="{{ old('name') ? old('name') : $name }}" type="text">
            <small id="nameHelp" class="form-text text-danger">{{ $errors->first('name') }}</small>
        </div>
        <div class="col-md-4 form-group">
            <label>Last Name</label>
            <input class="form-control" name="last_name" value="{{ old('last_name') ? old('last_name') : $last_name }}" type="text">
            <small id="lastNameHelp" class="form-text text-danger">{{ $errors->first('last_name') }}</small>
        </div>
        <div class="col-md-8 form-group">
            <label>Address</label>
            <input class="form-control" name="address" value="{{ old('address') ? old('address') : $address }}" type="text">
            <small id="addressHelp" class="form-text text-danger">{{ $errors->first('address') }}</small>
        </div>
        <div class="col-md-4 form-group">
            <label>Post Code</label>
            <input class="form-control" name="post_code" value="{{ old('post_code') ? old('post_code') : $post_code }}" type="text">
            <small id="postCodeHelp" class="form-text text-danger">{{ $errors->first('post_code') }}</small>
        </div>
        <div class="col-md-4 form-group">
            <label>City</label>
            <input class="form-control" name="city" value="{{ old('city') ? old('city') : $city }}" type="text">
            <small id="cityHelp" class="form-text text-danger">{{ $errors->first('city') }}</small>
        </div>
        <div class="col-md-4 form-group">
            <label>State</label>
            <input class="form-control" name="state" value="{{ old('state') ? old('state') : $state}}" type="text">
            <small id="stateHelp" class="form-text text-danger">{{ $errors->first('state') }}</small>
        </div>
        <div class="col-md-4 form-group">
            <label>Email</label>
            <input class="form-control" name="email" value="{{ old('email') ? old('email') : $email}}" type="text">
            <small id="emailHelp" class="form-text text-danger">{{ $errors->first('email') }}</small>
        </div>
        <div class="col-md-4 form-group">
            <input value="SAVE" class="btn btn-outline-success" type="submit">
        </div>
    </form>
@endsection