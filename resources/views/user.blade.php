

        @extends("layout.user")

        @section("container")

            <tr>
                <td>Nome: {{$user->nome}}</td>

                <hr>Telefone: {{$user->telefone}}</hr>

                <hr>E-mail: {{$user->email}}</hr>

                <hr>Estado: {{$user->estado}}</hr>

                <hr>Cidade: {{$user->cidade}}</hr>

                <hr>Endereço: {{$user->endereco}}</hr>

            </tr>
            <hr>
            <a href="{{url('usuarios')}}" class="btn btn-primary">Voltar</a>

        @endsection