<?php?>
@extends('Shared._layout')
@section('title', 'Users Index')
@section('content')
    <h2>Accounts</h2>

    <table class="table">
        <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Status
            </th>
        </tr>
        </thead>
        <tbody>
        {{--Here we need a model to view data in the database--}}
        @foreach($users as $user)
            <tr>
                <td>
                    {{ $user->name}}
                </td>

                <td>
                    {{ $user->email}}
                </td>
                <td>
                    {{ $user->status}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

