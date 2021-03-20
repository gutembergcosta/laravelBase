<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <script src="{{url('assets/bootstrap/js/jquery.js')}}"></script>
    <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>


    <title>Document</title>

    @yield('estilos')

</head>
<body>
    
    @yield('navbar')
    @yield('pagina')

    @yield('scriptsPagina')

</body>

</html>