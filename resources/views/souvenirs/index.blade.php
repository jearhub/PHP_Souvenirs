<?php?>
@extends('Shared._layout')
@section('title', 'Souvenirs Index')
@section('content')
    <h2>Souvenirs</h2>
    <p>
        <a href="{{url('souvenirs/create')}}"><input type="submit" value="Create New" class="btn btn-default" /></a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Description
            </th>
            <th>
                Price
            </th>
            <th>
                Image
            </th>
            <th>
                Supplier Id
            </th>
            <th>
                Category Id
            </th>
        </tr>
        </thead>
        <tbody>
        {{--Here we need a model to view data in the database--}}
        @foreach($souvenirs as $souvenir)
            <tr>
                <td>
                    {{ $souvenir->name}}
                </td>

                <td>
                    {{ $souvenir->description}}
                </td>

                <td>
                    {{ $souvenir->price}}
                </td>

                <td>
                    {{ $souvenir->imagePath}}
                </td>

                <td>
                    {{ $souvenir->supplier_id}}
                </td>

                <td>
                    {{ $souvenir->category_id}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$souvenirs->links()}}
@endsection

