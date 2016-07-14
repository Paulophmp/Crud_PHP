

        @extends("layout.user")

        @section("container")

            {{--<tr>--}}
                {{--<td>Nome: {{$user->nome}}</td>--}}

                {{--<hr>Telefone: {{$user->telefone}}</hr>--}}

                {{--<hr>E-mail: {{$user->email}}</hr>--}}

                {{--<hr>Estado: {{$user->estado}}</hr>--}}

                {{--<hr>Cidade: {{$user->cidade}}</hr>--}}

                {{--<hr>Endereço: {{$user->endereco}}</hr>--}}

            {{--</tr>--}}
            {{--<hr>--}}
            {{--<a href="{{url('usuarios')}}" class="btn btn-primary">Voltar</a>--}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dados Completos
                </div>
            <div class="form-group">
            </div>
                <div class="panel-body">
                    <div class="pull-right">
                        <a href="{{url('usuarios')}}" class="btn btn-default">Voltar</a>
                    </div>
                    <div class="form-group">
                        <strong>Name: </strong> {{ $user->nome  }}
                    </div>

                    <div class="form-group">
                        <strong>Telefone: </strong> {{ $user->telefone  }}
                    </div>

                    <div class="form-group">
                        <strong>E-mail: </strong> {{ $user->email  }}
                    </div>

                    <div class="form-group">
                        <strong>Estado: </strong> {{ $user->estado  }}
                    </div>

                    <div class="form-group">
                        <strong>Cidade: </strong> {{ $user->cidade  }}
                    </div>

                    <div class="form-group">
                        <strong>Endereco: </strong> {{ $user->endereco  }}
                    </div>

                </div>
            </div>
        @endsection


