
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
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/toastr.css" rel="stylesheet">
        <link href="/media/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="/css/modal_template1.css" rel="stylesheet">
        <link rel="stylesheet" href="/font-awesome-4.6.3/css_awesome/font-awesome.min.css">
    @show
    @section('script')
        <script src="/js/jquery-2.0.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/toastr.min.js"></script>
        <script src="/media/js/dataTables.bootstrap.js"></script>
    @show
</head>

<body>

<div class="container ">
    <div class="header clearfix">
        <nav class="block">
            <ul class="nav nav-pills pull-right">
                @if(Auth::user())
                    <li role="presentation" class="active"><a href="/">Home</a></li>
                    <li role="presentation" ><a href="sobre">Sobre</a></li>
                    <li role="presentation"><a href="usuarios">Usuários</a></li>
                    <li role="presentation"><a href="contato">Contato</a></li>
                @endif
                {{--<ul class="nav navbar-nav navbar-right">--}}
                <li>
                    @if(Auth::check())
                        <p>{{Auth::user()->name}} <a href="{{url('auth/logout')}}">Sair</a></p>
                {{--<li><a href="{{url('auth/logout')}}">Sair</a></li>--}}
                @else
                    <li>
                        {{--este que eu uso atualmente--}}
                        <a href="{{url('auth/register')}}">Registro</a>
                    </li>
                    @endif
                    </li>
                    {{--</ul>--}}
            </ul>

        </nav>
        <h3 class="text-muted">Project name</h3>
    </div>

    @yield('container')

</div> <!-- /container -->
</body>
</html>
