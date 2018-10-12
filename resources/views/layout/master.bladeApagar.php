<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title', 'Página Inicial')</title>

    <!-- Bootstrap core CSS -->
    @section('style')
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/jumbotron-narrow.css" rel="stylesheet">
        <link href="/css/modal.css" rel="stylesheet">
        <link rel="stylesheet" href="/font-awesome-4.6.3/css_awesome/font-awesome.min.css">
        <link rel="stylesheet" href="/jquery_upload/css/jquery.fileupload.css">
        <link rel="stylesheet" href="/bootstrap-datepicker/css/bootstrap-datepicker3.css">
        <link rel="stylesheet" href="/bootstrap-datepicker/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="/bootstrap-datepicker/css/bootstrap-datepicker.standalone.css">
        <link rel="stylesheet" href="/craftyslide/css/craftyslide.css">
        <!-- Rhinoslider-->
        <link rel="stylesheet" href="/rhinoslider/css/rhinoslider-1.05.css">
    @show
</head>

<body>

<div class="container ">
    <div class="header clearfix">
        <nav class="block">
            <ul class="nav nav-pills pull-right">
                {{--@if(Auth::user())--}}
                    {{--<li role="presentation" class="active"><a href="/">Home</a></li>--}}
                {{--@endif--}}
                {{----}}
                @if(Auth::user())
                    <li role="presentation" class="active"><a href="/">Home</a></li>

                    <li role="presentation"><a href="sobre">Sobre</a></li>
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

                                <!-- Trigger the modal with a button -->
                                <a type="button" class="" id="myBtn" data-toggle="modal" data-target="#myModalTeste">Registro</a>

                                <!-- Modal -->
                                <div class="modal fade" id="myModalTeste" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header" style="padding:35px 50px;">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                                            </div>
                                            <div class="modal-body" style="padding:40px 50px;">
                                                <form method="POST" class="form-horizontal" action="{{url('/auth/register')}}">
                                                    {!! csrf_field() !!}
                                                    <div class="form-group has-feedback">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter Nome" name="name">
                                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="mail"><span class="glyphicon glyphicon-envelope"></span> E-mail</label>
                                                        <input type="text" class="form-control" id="mail" value="{{ old('name') }}" placeholder="Enter email" name="email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                                        <input type="password" class="form-control" id="psw" placeholder="Enter password" name="password">
                                                    </div>

                                                    <div class="form-group has-feedback">
                                                        <label for="conf_psw"> Confirme Password</label>
                                                        <input type="password" class="form-control" id="conf_psw" placeholder="" name="password_confirmation">
                                                        <span class="glyphicon glyphicon glyphicon-log-in form-control-feedback"></span>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="" checked>Remember me</label>
                                                    </div>
                                                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Registrar</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                                                <p>Not a member? <a href="#">Sign Up</a></p>
                                                <p>Forgot <a href="#">Password?</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{--Fim Modal--}}
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
    @section('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        {{--<!--<script>window.jQuery || document.write('<script src="/js/jquery-3.0.0.js"><\/script>')</script>-->--}}
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery-2.0.0.min.js"></script>
        <script src="/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="/craftyslide/js/craftyslide.min.js"></script>
        <!--Rhinoslider-->
        <script type="text/javascript" src="/rhinoslider/js/rhinoslider-1.05.min.js"></script>
        <script type="text/javascript" src="/rhinoslider/js/mousewheel.js"></script>
        <script type="text/javascript" src="/rhinoslider/js/easing.js"></script>
    @show
<hr>
<footer>
    <p>&copy; 2015 - <?= date('Y') ; ?> by Laravel Technologies Ltd. All rights reserved.</p>
</footer>
</body>
</html>
