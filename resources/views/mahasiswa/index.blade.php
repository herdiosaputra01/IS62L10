<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>List Mahasiswa Kelas {{$kelas}}</h2>
    <ol>
        @foreach ($data as $nama)
        <li>{{$nama}}</li>  
        @endforeach
    </ol>
    {{--<ol>
        <li>Erix</li>
        <li>Hanif</li>
        <li>Herdio</li>
        <li>Rahmat</li>
        <li>Ihwan</li>
    </ol>--}}
</body>
</html>