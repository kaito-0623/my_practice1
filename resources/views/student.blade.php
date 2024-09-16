<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h1>Students List</h1>
    <ul>
        @foreach ($student_result as $student)
            <li>{{ $student->name }}</li>
        @endforeach
    </ul>
</body>
</html>
