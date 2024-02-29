@extends('cars.layout')

@section('content')

reservs show

<table border="1">
    <tr>
        <th>1</th>
        <th>1</th>
    </tr>
    @foreach($dataer as $dy)
    <tr>
        <td>{{ $dy->cid }}</td>
        <td>{{ $dy->cid }}</td>
    </tr>
    @endforeach
</table>