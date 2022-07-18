<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
        LIST
       </legend>
       <h3 align = "center">Menghitung Total Belanjaan Alfian & Dida</h3>
        @foreach ($belanja as $data)
        @php
            $total = 0;
        @endphp
        Nama : {{ $data['nama'] }}<br> <br>
        Jenis Barang : 
        @foreach($data['membeli'] as $belikan) 
        <br>
        <li>
            Membeli : {{ $belikan['beli'] }} <br>
            Harga : Rp. {{ $belikan['harga'] }}
        </li>
          @php $total += $belikan['harga'] @endphp

         @endforeach

         <br>

          Total Belanja : {{$total}}<br>

          @if($total < 500000)
          Selamat Anda Mendapatkan Cashback <b>5% </b>
          @php
          $cashback = 0.5 * $total @endphp
          @elseif ($total >= 500000)
          Selamat Anda Mendapatkan Cashback <b>10%</b>
          
          @php
          $cashback = 0.10 * $total @endphp
          @endif
          <br> <br>
          <b>Total Belanja {{$data['nama']}} Setelah Dapat Cashback  : {{$total - $cashback}}</b>
          <hr>
        @endforeach
    </fieldset>
</body>
</html>