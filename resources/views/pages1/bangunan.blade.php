<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <h3><b>TOKO MATERIAL</b></h3>
    Hallo Pesanan Anda  <b>{{$b}}</b>
    @if ($b == 'Pasir Urug')
    <br>Harga {{$b}} : <u>Rp.50000</u>
    @elseif ($b == 'Batako Besar')
    <br>Harga {{$b}} : <u>Rp.30000</u>
    @elseif ($b == 'Bata Merah')
    <br>Harga {{$b}} : <u>Rp.40000</u>
    @elseif ($b == 'Batu Apung')
    <br>Harga {{$b}} : <u>Rp.65000</u>
    @else
    <br>Harga tidak Ada
    @endif
    <br><hr>

    Hallo Pesanan Anda  <b>{{$b1}}</b>
    @if ($b1 == 'Pasir Urug')
    <br>Harga {{$b1}} : <u>Rp.50000</u>
    @elseif ($b1 == 'Batako Besar')
    <br>Harga {{$b1}} : <u> Rp.30000</u>
    @elseif ($b1 == 'Bata Merah')
    <br>Harga {{$b1}} : <u>Rp.40000</u>
    @elseif ($b1 == 'Batu Apung')
    <br>Harga {{$b1}} : <u>Rp.65000</u>
    @else
    <br>Harga tidak Ada
    @endif
    
</body>
</html>