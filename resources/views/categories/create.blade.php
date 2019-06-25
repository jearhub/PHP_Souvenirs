<?php?>
@extends('Shared._header')
@section('title', 'Category Create')
@section('content')
    <h2>Create</h2>
    <h4>Category</h4>
    <hr />
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="{{url('categories/create')}}">
                @csrf
                <div class="form-group">
                    <label  class="control-label">Name</label>
                    <input name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-default" />
                </div>
            </form>
        </div>
    </div>
    <div>
        <a href="{{url('categories/')}}">Back to List</a>
    </div>
@endsection
