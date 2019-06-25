<?php?>
@extends('Shared._layout')
@section('title', 'Categories Index')
@section('content')
    <h2>Categories</h2>
    <p>
        <a href="{{url('categories/create')}}"><input type="submit" value="Create New" class="btn btn-default" /></a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>
                Name
            </th>

        </tr>
        </thead>
        <tbody>
        {{--Here we need a model to view data in the database--}}
        @foreach($categories as $category)
            <tr>
                <td>
                    {{ $category->name}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
