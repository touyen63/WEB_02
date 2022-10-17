<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Update student</h2>
    <form action="/student/update/{{ $student->id }}" method="post">
        @csrf
        <label for="Name">
            Fullname:
            <input type="text" name="fullname" value="{{ $student->fullname }}">
        </label><br><br>
        <label for="Email">
            Birthday:
            <input type="text" name="birthday" value="{{ $student->birthday }}">
        </label><br><br>
        <label for="Password">
            Address:
            <input type="text" name="address" value="{{ $student->address }}">
        </label><br><br>
        <button type="submit">Edit</button>
    </form>

</body>
</html>