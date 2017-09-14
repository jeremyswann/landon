@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h4>Edit Client</h4>
        </div>
    </div>
    <form class="row" action="/clients/new" method="post">
        <div class="col-4 form-group">
            <label class="form-control-label" for="formGroupTitleSelect">Title</label>
            <select class="form-control" id="formGroupTitleSelect" name="form[title]">
                <option value="mr" selected="selected">Mr.</option>
                <option value="ms">Ms.</option>
                <option value="mrs">Mrs.</option>
                <option value="dr">Dr.</option>
                <option value="mx">Mx.</option>
            </select>
        </div>
        <div class="col-md-4 form-group">
            <label>Name</label>
            <input class="form-control" name="form[name]" type="text">
        </div>
        <div class="col-md-4 form-group">
            <label>Last Name</label>
            <input class="form-control" name="form[lastName]" type="text">
        </div>
        <div class="col-md-8 form-group">
            <label>Address</label>
            <input class="form-control" name="form[address]" type="text">
        </div>
        <div class="col-md-4 form-group">
            <label>Post Code</label>
            <input class="form-control" name="form[zipCode]" type="text">
        </div>
        <div class="col-md-4 form-group">
            <label>City</label>
            <input class="form-control" name="form[city]" type="text">
        </div>
        <div class="col-md-4 form-group">
            <label>State</label>
            <input class="form-control" name="form[state]" type="text">
        </div>
        <div class="col-md-4 form-group">
            <label>Email</label>
            <input class="form-control" name="form[email]" type="text">
        </div>
        <div class="col-md-4 form-group">
            <input value="SAVE" class="btn btn-outline-success" type="submit">
        </div>
    </form>
@endsection