@extends('cars.layout')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<form action="{{ route('cars.stores')}}" method="post">
    @csrf
    <table border="1">
        @foreach($cars as $cs)
        @if($cs->id == $id)
        <tr>
            <th>예약 시작일</th>
            <td><input type="datetime-local" id="startflatpickr" name="started_at" value="{{ date('Y-m-d H:i:s') }}"></td>
        </tr>
        <tr>
            <th>예약 종료일</th>
            <td><input type="datetime-local" id="endflatpickr" name="ended_at" value="{{ date('Y-m-d H:i:s') }}"></td>
        </tr>
        <tr>
            <th>
                <input type="hidden" name="cid" value="{{ $cs->id }}">
                <input type="hidden" name="reservated_at" value="{{ date('Y-m-d H:i:s') }}">
            </th>
            <td><button type="submit">만들기</button></td>
        </tr>

        @endif
        @endforeach
    </table>
</form>

<script>
    flatpickr("#startflatpickr", {
        enableTime: true,
        dateFormat: "Y-m-d H:i:s",
    });

    flatpickr("#endflatpickr", {
        enableTime: true,
        dateFormat: "Y-m-d H:i:s",
    });
</script>

@endsection
