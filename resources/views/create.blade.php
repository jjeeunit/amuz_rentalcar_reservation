<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <form action="{{ route('cars.create')}}" method="get">
        @csrf
        <table border="1">
            <tr>
                <th>연료</th>
                <td>
                    <select name="cev">
                        <option value="0">전기차</option>
                        <option value="1">휘발유</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>사이즈</th>
                <td>
                    <select name="csize">
                        <option value="s">소형</option>
                        <option value="m">중형</option>
                        <option value="l">대형</option>
                        <option value="xl">SUV</option>
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
                <th>렌트비용</th>
                <td><input type="number" name="cdollar" required></td>
            </tr>
            <tr>
                <th></th>
                <td><button type="submit">만들기</button></td>
            </tr>
        </table>
    </form>
</body>
</html>