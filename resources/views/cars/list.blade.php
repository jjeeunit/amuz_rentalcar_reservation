@extends('cars.layout')

@section('content')


<p><a href="{{ route('cars.create') }}">차량등록</a></p>

<table border="1">
    <tr>
        <th>순서</th>
        <th>연료</th>
        <th>사이즈</th>
        <th>모델</th>
        <th>제조사</th>
        <th>차량번호</th>
        <th>렌트비용</th>
        <th>렌트가능여부</th>
        <th></th>
    </tr>
    @foreach($cars as $cs)
    <tr>
        <td>{{ $cs->id }}</td>
        <td>{{ $cs->cev }}</td>
        <td>{{ $cs->csize }}</td>
        <td>{{ $cs->cmodel }}</td>
        <td>{{ $cs->cmaker }}</td>
        <td>{{ $cs->cnum }}</td>
        <td>{{ $cs->cmoney }}</td>
        <td>{{ $cs->cpossible }}</td>
        <td>
            <?php if ($cs['cpossible'] == '예약가능') { ?>
                <a href="{{ route('cars.show', $cs->id) }}">예약하기</a>
            <?php } else if ($cs['cpossible'] == '예약불가') { ?>
                <a href="{{ route('cars.show', $cs->id) }}">예약정보확인</a>
            <?php } ?>
        </td>
    </tr>
    @endforeach
</table>

@endsection


