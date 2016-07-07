<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title', 'Página Inicial')</title>

    <!-- Bootstrap core CSS -->
    @section('style')
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/jumbotron-narrow.css" rel="stylesheet">
    @show
</head>

<body>

<div class="container ">
    <div class="header clearfix">
        <h4 class="text-primary">Dados Completos</h4>
    </div>

    @yield('container')

</div> <!-- /container -->
@section('style')
    <scrip src="/js/modal.js"></scrip>
@show
</body>
</html>
