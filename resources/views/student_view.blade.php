<!DOCTYPE html>
<html>
<head>
    <title>学生管理システム</title>
</head>
<body>
    <h1>学生一覧</h1>
    <a href="{{ route('students.create') }}">新規登録</a>
    <table>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>メール</th>
            <th>学年</th>
            <th>操作</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->grade }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}">編集</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
