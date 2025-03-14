<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark text-white p-3 d-inline-block">{{$nama}}</h1>
        <h1 class="bg-info text-white p-3 d-inline-block">{{$nilai}}</h1>
            <h3 class=" d-inline-block" >
                @if(($nilai >= 85) and ($nilai <=100))
                <div class="alert alert-success d-inline-block">A</div>

                @elseif(($nilai >= 70) and ($nilai <=84))
                <div class="alert alert-success d-inline-block">B</div>

                @elseif(($nilai >= 55) and ($nilai <=69))
                <div class="alert alert-warning d-inline-block">C</div>

                @elseif(($nilai >= 40) and ($nilai <=54))
                <div class="alert alert-danger d-inline-block">D</div>

                @elseif(($nilai >= 0) and ($nilai <=39))
                <div class="alert alert-danger d-inline-block">E</div>

                @else
                <div class="alert alert-secondary d-inline-block">Nilai Tidak Valid</div>

                @endif
            </h3>
          
    <br>
    @if(($nilai >= 0) and ($nilai <=50))
        <div class="alert alert-danger d-inline-block">Tidak Lulus</div>

    @elseif(($nilai > 50) and ($nilai <=100))
        <div class="alert alert-success d-inline-block">Lulus</div>

    @else
        <div class="alert alert-secondary d-inline-block">Nilai Tidak Valid</div>

    @endif

    <br>
    {{-- @foreach ($nilai2 as $val)
    <div class="alert alert-secondary d-inline-block">{{$val}}</div>
        
    @endforeach --}}

    @forelse ($nilai2 as $val)
            @if(($val >= 85) and ($val <=100))
            <div class="alert alert-success d-inline-block">{{$val}}</div>

            @elseif(($val >=0) and ($val <=50))
            <div class="alert alert-danger d-inline-block">{{$val}}</div>
            @else
            <div class="alert alert-success d-inline-block">{{$val}}</div>

            @endif
           
        
    @empty
        <div class="alert alert-secondary d-inline-block">Data Nilai Tidak Ada</div>   
    @endforelse
            <hr>

    {{-- break continue--}}
            @forelse ($nilai2 as $val2)
            @if ($val2 <= 50)
                @continue
            @endif
            <div class="alert alert-success d-inline-block">
                {{$val2}}
            </div>
            @empty
            <div class="alert alert-secondary d-inline-block">Data Nilai Tidak Ada</div>   
            @endforelse


    </div>
    <hr>
    <div class="text-center">
        @for ($i=1;$i<=10;$i++)
            <div class="alert alert-info d-inline-block">{{$i}}</div>
        @endfor
    </div>        

    <script src="{{asset('/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>
</body>
</html>