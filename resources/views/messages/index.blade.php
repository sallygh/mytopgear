@extends('layouts.app')
@section('title', 'messages')
@section('content')

<div class="container">
<table class="table">

    <thead>
        <th> id </th>
        <th> name </th>
        <th> phone </th>
        <th> received at</th>
    </thead>
    <tbody>
        @foreach ($messages as $loops)

        <tr>
            <td>{{$loops->id}}</td>
            <td>{{$loops->name}}</td>
            <td>{{$loops->phone}}</td>
            <td>{{$loops->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection
