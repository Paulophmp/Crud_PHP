    <!-- resources/views/auth/register.blade.php -->

    @extends('layout.master')
    @section('title', 'Registro')
    @section('container')

    <div class="panel panel-default">
        <div class="panel-heading">Registro</div>
        <div class="panel-body">
            {{-- Form --}}
            <form method="POST" class="form-horizontal" action="{{url('/auth/register')}}">
                {!! csrf_field() !!}
                @if(count($errors) > 0 )
                    {{--                     @if($errors->any())--}}
                    <ul class="alert alert-danger text-center">
                        @foreach($errors->all() as $error)
                            <ul>{{  $error }}</ul>
                        @endforeach
                    </ul>
                @endif


                <div class="form-group has-feedback">
                    <label class="col-md-4 control-label" for="nome">Nome</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="nome">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label class="col-md-4 control-label" for="email">Email</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('name') }}">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                </div>


                <div class="form-group has-feedback">
                    <label class="col-md-4 control-label">Senha</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control"  name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label class="col-md-4 control-label">Confirma Senha</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control"  name="password_confirmation">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                </div>

                {{--<div class="form-group">--}}
                    {{--<label>Phone</label>--}}
                    {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-phone"></i>--}}
                        {{--</div>--}}
                        {{--<input type="text" class="form-control" id="phone">--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <a href="{{ url('/login') }}">Já tenho Cadastro</a>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        $('#phone').mask("(99) 9999-9999");
    </script>

    @endsection

