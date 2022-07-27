<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($rumah1 as $data)
        <h4>{{$data->judul}}</h4>
        <p>{{$data->artikel}}</p>
        <p>{{$data->tanggal}}</p>
    @endforeach
</body>
</html>