<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach ($a as $student)
    <p>Name: {{$student['name']}}</p>
    <p>Age: {{$student['age']}}</p>
            
        @endforeach
    </div>
</body>
</html>