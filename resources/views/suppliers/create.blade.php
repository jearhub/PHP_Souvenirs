<?php?>
@extends('Shared._header')
@section('title', 'Supplier Create')
@section('content')
    <h2>Create</h2>
    <h4>Supplier</h4>
    <hr />
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="{{url('suppliers/create')}}">
                @csrf
                <div class="form-group">
                    <label  class="control-label">Name</label>
                    <input name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">Phone number</label>
                    <input name="phone_number" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">Email</label>
                    <input name="email" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-default" />
                </div>
            </form>
        </div>
    </div>
    <div>
        <a href="{{url('suppliers/')}}">Back to List</a>
    </div>
@endsection
