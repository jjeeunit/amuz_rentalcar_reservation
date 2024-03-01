@extends('cars.layout')

@section('content')


<br>

<form action="{{ route('cars.store')}}" method="post">
    @csrf
    <table border="1">
        <tr>
            <th>연료</th>
            <td>
                <select name="cev">
                    <option value="휘발유">휘발유</option>
                    <option value="전기차">전기차</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>사이즈</th>
            <td>
                <select name="csize">
                    <option value="소형">소형</option>
                    <option value="중형">중형</option>
                    <option value="대형">대형</option>
                    <option value="SUV">SUV</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>모델</th>
            <td><input type="text" name="cmodel" required></td>
        </tr>
        <tr>
            <th>제조사</th>
            <td><input type="text" name="cmaker" required></td>
        </tr>
        <tr>
            <th>차량번호</th>
            <td><input type="text" name="cnum" required></td>
        </tr>
        <tr>
            <th>렌트비용</th>
            <td><input type="number" name="cmoney" required></td>
        </tr>
        <tr>
            <th></th>
            <td><button type="submit">만들기</button></td>
        </tr>
    </table>
</form>

@endsection
