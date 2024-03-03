@extends('cars.layout')

@section('content')

<p>show page</p>

<table border="1">
    <tr>
        <th>차량ID</th>
        <th>예약 시작일</th>
        <th>예약 종료일</th>
    </tr>
    @foreach($reservs as $rs)
    <tr>
        <td>{{ $rs->cid }}</td>
        <td>{{ $rs->started_at }}</td>
        <td>{{ $rs->ended_at }}</td>
    </tr>
    @endforeach
</table>

<p><a href="{{ route('cars.reservation', $rs->cid) }}">예약하기</a></p>






