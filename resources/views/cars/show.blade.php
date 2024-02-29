@extends('cars.layout')

@section('content')

show

<table border="1">
    <tr>
        <th>순서</th>
        <th>차량FK</th>
        <th>예약 시작일</th>
        <th>예약 종료일</th>
        <th>예약 생성일</th>
        <th>예약가능여부</th>
    </tr>
    @foreach($reservs as $rs)
    <tr>
        <td>{{ $rs->id }}</td>
        <td>{{ $rs->cid }}</td>
        <td>{{ $rs->created_at }}</td>
        <td>{{ $rs->updated_at }}</td>
        <td>{{ $rs->reservated_at }}</td>
        <td>{{ $rs->cpossible }}</td>
    </tr>
    @endforeach
</table>