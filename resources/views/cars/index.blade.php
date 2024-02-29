@extends('cars.layout')

@section('content')

INDEX


<p><a href="{{ route('cars.create') }}">차량등록</a></p>

<table border="1">
    <tr>
        <th>번호</th>
        <th>연료</th>
        <th>사이즈</th>
        <th>모델</th>
        <th>제조사</th>
        <th>렌트비용</th>
        <th>렌트가능여부</th>
    </tr>
    @foreach($datas as $ds)
    <tr>
        <td>{{ $ds->id }}</td>
        <td>{{ $ds->cev }}</td>
        <td>{{ $ds->csize }}</td>
        <td>{{ $ds->cmodel }}</td>
        <td>{{ $ds->cmaker }}</td>
        <td>{{ $ds->cmoney }}</td>
        <td>{{ $ds->cpossible }}</td>
    </tr>
    @endforeach
</table>

@endsection


