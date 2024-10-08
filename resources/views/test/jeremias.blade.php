<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Jeremias</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>

    <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ul>

    @foreach (range(1, 10) as $number)
        <li>{{ $number }}</li>
    @endforeach
</body>
</html>
