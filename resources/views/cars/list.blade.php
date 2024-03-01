@extends('cars.layout')

@section('content')


<p><a href="{{ route('cars.create') }}">차량등록</a></p>

<table border="1">
    <tr>
        <th>ID</th>
        <th>연료</th>
        <th>사이즈</th>
        <th>모델</th>
        <th>제조사</th>
        <th>차량번호</th>
        <th>렌트비용</th>
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
        <td>{{ number_format($cs->cmoney) }}원</td>
        <td>
            @php
                $reserved = false;
            @endphp

            @foreach($reservs as $rs)
                @if($rs->cid == $cs->id)
                    @php
                        $reserved = true;
                        break;
                    @endphp
                @endif
            @endforeach

            @if($reserved == true)
                <a href="{{ route('cars.show', $cs->id) }}">예약정보확인</a>
            @else
                <a href="{{ route('cars.reservation', $cs->id) }}">예약하기</a>
            @endif
        </td>
    </tr>
    @endforeach
</table>


@endsection


