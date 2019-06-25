<?php?>
@extends('Shared._header')
@section('title', 'Sign up Index')
@section('content')
    <br>
<div class="loginbox">
    <div class="logininfo">
        <h3 style="text-align:center">Create a new account.</h3>
        <hr/>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form action="{{route('users.signup')}}" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <div><input type="text" id="name" name="name" class="form-control"></div>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <div><input type="text" id="email" name="email" class="form-control"></div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div><input type="password" id="password" name="password" class="form-control"></div>
            </div>
            <button type="submit" class="btn btn-default">Sign up</button>
            {{csrf_field()}}
        </form>
    </div>
</div>
@endsection