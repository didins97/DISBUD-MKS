<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
</head>
<body>
   
    
    <div class="qrcode">
        {{QrCode::size(200)->generate( route($req.'_detail', $cetak->slug) );}}
    </div>
    <h1>{{$cetak->nama}}</h1>
    
    <script type="text/javascript">
        window.print();
        window.onafterprint = function() {
        history.go(-1);
    };
    </script>
</body>
</html>