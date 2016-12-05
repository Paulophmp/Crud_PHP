	

    @extends('layout.master')
    @section('container')

        <script src="/js/jquery-2.0.0.min.js"></script>
        <script src="/js/mascara-telefone.js"></script>
        <script>
            jQuery(function($){
                $("#phone").mask("(99) 9999-9999");
            });

        </script>

        <h3>Atualizar Usuário</h3>

            @if($errors->any())
                <ul class="alert alert-danger text-center">
                    @foreach($errors->all() as $error)
                        <ul>{{  $error }}</ul>
                    @endforeach
                </ul>
            @endif

            {!! Form::open(['url'=>"usuarios/atualizar/$editar->id", "method"=>"put"]) !!}

                <div class="form-group">
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome', $editar->nome, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('telefone', 'Telefone:') !!}
                    {!! Form::text('telefone', $editar->telefone, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'E-mail:') !!}
                    {!! Form::text('email', $editar->email, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('estado', 'Estado:') !!}
                    {!! Form::text('estado', $editar->estado, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('cidade', 'Cidade:') !!}
                    {!! Form::text('cidade', $editar->cidade, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('cidade', 'Endereco') !!}
                    {!! Form::text('endereco', $editar->endereco, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::submit('Atualizar Usuário',['class'=>'btn btn-default']) !!}
                    <a href="{{url('usuarios')}}" class="btn btn-default">Voltar</a>
                </div>


            {!! Form::close() !!}
            {{--<hr>--}}
            {{--<form method="put" action="{{url("usuarios/atualizar/$editar->id")}}" class="form-horizontal">--}}
                {{--{!! csrf_field() !!}--}}

                {{--<div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">--}}
                    {{--<label class="control-label col-sm-2">Nome:</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<input type="text" name="nome" value="{{$editar->nome}}" class="form-control" value="{{ old('nome') }}">--}}
                        {{--@if ($errors->has('nome'))--}}
                            {{--<span class="help-block">--}}
                                       {{--<strong>{{ $errors->first('nome') }}</strong>--}}
                                   {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label class="control-label col-sm-2">Telefone:</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<input type="tel" name="telefone" value="{{$editar->telefone}}" class="form-control">--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label class="control-label col-sm-2">Email:</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<input type="email" name="email" class="form-control" value="{{$editar->email}}">--}}
                    {{--</div>--}}
                {{--</div>--}}


                {{--<div class="form-group">--}}
                    {{--<label class="control-label col-sm-2">Cidade:</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<input type="text" name="cidade" class="form-control" value="{{$editar->cidade}}">--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label class="control-label col-sm-2">Endereço:</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<input type="text" name="endereco" class="form-control" value="{{$editar->endereco}}">--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<button class="btn btn-default" type="submit">Salvar</button>--}}
                {{--<button type="submit">Enviar</button>--}}
                {{--<a href="{{url('usuarios')}}" class="btn btn-default">Voltar</a>--}}

            {{--</form>--}}

    @endsection
