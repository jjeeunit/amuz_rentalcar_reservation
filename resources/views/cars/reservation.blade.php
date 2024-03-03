@extends('cars.layout')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<form action="{{ route('cars.stores') }}" method="post">
    @csrf
    <table border="1">
        @foreach($cars as $cs)
        @if($cs->id == $id)
        <tr>
            <th>예약 시작일</th>
            <td><input type="datetime" id="startflatpickr" name="started_at" value="{{ date('Y-m-d H:i:s') }}"></td>
        </tr>
        <tr>
            <th>예약 종료일</th>
            <td><input type="datetime" id="endflatpickr" name="ended_at" value="{{ date('Y-m-d H:i:s') }}"></td>
        </tr>
        <tr>
            <th>
                <input type="hidden" name="cid" value="{{ $cs->id }}">
            </th>
            <td><button type="submit">만들기</button></td>
        </tr>

        @endif
        @endforeach
    </table>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        flatpickr("#startflatpickr", {
            onChange: function(selectedDates, dateStr, instance) {
                var endDateTime = document.getElementById('endflatpickr').value;
                checkReservationOverlap(dateStr, endDateTime);
            },
            minDate: "today",
            dateFormat: "Y-m-d H:i:s"
        });

        flatpickr("#endflatpickr", {
            onChange: function(selectedDates, dateStr, instance) {
                var startDateTime = document.getElementById('startflatpickr').value;
                checkReservationOverlap(startDateTime, dateStr);
            },
            minDate: "today",
            dateFormat: "Y-m-d H:i:s"
        });

        //duplicate메서드 중복예약막기
        function checkReservationOverlap(startDateTime, endDateTime) {

            let formData = new FormData(document.querySelector('form'));

            fetch("{{ route('cars.duplicate') }}", {
                body: formData,
                method: 'POST',
            })
            .then(response => response.json())
            .then(data => {
                if (data.overlap) {
                    alert('중복된 예약이 있습니다. check');
                }
            })
            .catch(error => {
                console.error('에러 발생:', error);
            });
        }


        //stores메서드 중복예약막기
        @if(session('error'))
            alert('{{ session('error') }}');
        @endif

    });
</script>

@endsection