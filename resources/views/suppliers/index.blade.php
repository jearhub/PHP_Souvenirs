<?php?>
@extends('Shared._layout')
@section('title', 'Suppliers Index')
@section('content')
    <h2>Suppliers</h2>
    <p>
        <a href="{{url('suppliers/create')}}"><input type="submit" value="Create New" class="btn btn-default" /></a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Phone number
            </th>
            <th>
                Email
            </th>
        </tr>
        </thead>
        <tbody>
        {{--Here we need a model to view data in the database--}}
        @foreach($suppliers as $supplier)
            <tr>
                <td>
                    {{ $supplier->name}}
                </td>

                <td>
                    {{ $supplier->phone_number}}
                </td>

                <td>
                    {{ $supplier->email}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
