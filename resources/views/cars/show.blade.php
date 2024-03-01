@extends('cars.layout')

@section('content')

<p>show page</p>

<table border="1">
    <tr>
        <th>순서</th>
        <th>차량ID</th>
        <th>예약 시작일</th>
        <th>예약 종료일</th>
        <th>예약 생성일</th>
    </tr>
    @foreach($reservs as $rs)
    <tr>
        <td>{{ $rs->id }}</td>
        <td>{{ $rs->cid }}</td>
        <td>{{ $rs->created_at }}</td>
        <td>{{ $rs->updated_at }}</td>
        <td>{{ $rs->reservated_at }}</td>
    </tr>
    @endforeach
</table>

<p><a href="{{ route('cars.reservation', $rs->cid) }}">예약하기</a></p>






