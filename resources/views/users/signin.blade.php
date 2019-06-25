<?php?>
@extends('Shared._header')
@section('title', 'Sign in')
@section('content')
    <br>
    <div class="loginbox">
        <div class="logininfo">
            <h3 style="text-align:center">Sign in</h3>
            <hr/>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{route('users.signin')}}" method="post">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <div><input type="text" id="email" name="email" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div><input type="password" id="password" name="password" class="form-control"></div>
                </div>
                <button type="submit" class="btn btn-default">Sign in</button>
                {{csrf_field()}}
            </form>
            <hr />
            <p>Don't have an account? <a href="{{route('users.signup')}}">Sign up.</a></p>
        </div>
    </div>
@endsection
