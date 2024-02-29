@extends('cars.layout')

@section('content')

<a href="{{ route('cars.index') }}">list</a>

<table border="1">
    <tr>
        <th>예약 시작일</th>
        <th>예약 종료일</th>
        <th>예약 상태</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

@endsection