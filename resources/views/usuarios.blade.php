
    @extends('layout.template1')
    @section('title', 'Usuários')
    @section('container')

<script src="/js/usuarios.js"></script>
<script src="/js/jquery-2.0.0.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function () {
            $('#close').trigger('click');
        }, 1500);

        $('h2').animate({
            "margin-left": "+=480",
            "font-size": "3em"
        },1000, function () {
            $('h2').css("text-decoration", "underline");
        });
    });
</script>
        <h2>Usuários</h2>

        @if(session('status'))
            <div class="row" id="teste">
                <div class="alert alert-success alert-dismissable fa in text-center col-md-6 col-md-offset-3">
                    <button href="#" class="close" data-dismiss="alert" id="close">&times;</button>
                    <h4><i class="icon fa fa-check">Alerta!</i></h4>
                    <strong>{{session('status')}}</strong>...
                </div>
            </div>

        @elseif(session('status1'))
            <div class="row" id="teste">
                <div class="alert alert-danger alert-dismissable fa in text-center col-md-6 col-md-offset-3">
                    <button href="#" class="close" data-dismiss="alert" id="close">&times;</button>
                    <h4><i class="icon fa fa-check">Alerta!</i></h4>
                    <strong>{{session('status1')}}</strong>...
                </div>
            </div>
        @endif

            <a href="{{url("create")}}" class="btn btn-primary" id="novoUser">Novo Usuario</a>
                {{--Incio Form Busca usuário--}}
                <form class="navbar-form navbar-right" method="get" action="{{url('search')}}">
                    <div class="input-group">
                        <input name="nome" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                    </div>
                </form>
                {{--Fim Form Busca usuário--}}

        @if($users->isEmpty())
            <div class="alert alert-info text-center">Nenhum usuário cadastrado</div>
        @else
            <table  id="datatable" class="table table-bordered table-hover table-condensed table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Estado</th>
                        <th>Autor</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($users as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario->id; ?></td>
                        <td><?php echo $usuario->nome ?></td>
                        <td><?php echo $usuario->telefone ?></td>
                        <td><?php echo $usuario->email ?></td>
                        <td><?php echo $usuario->estado ?></td>
                        <td><p class="autor"><?php echo $usuario->user->name ?></p></td>
                        <td>
                            <a href="{{url('contato/user',['id'=>$usuario->id])}}" class="btn btn-success editable-table-button btn-xs">Visualizar</a>
                            @can('autorizacao', $usuario)
{{--                            <a href="{{url("usuarios/editar",['id'=>$usuario->id])}}" class="btn btn-warning editable-table-button btn-xs">Editar</a>--}}
                                @include("modais.editar")
                                    <a class="btn btn-warning editable-table-button btn-xs"  data-toggle="modal"
                                       data-target="#modal-delete_{{$usuario->id}}">Editar</a>
{{--                                <a href="{{url("usuarios/excluir/$usuario->id")}}" onclick="return confirm('Deseja Excluir {{$usuario->nome}}')" class="btn btn-danger editable-table-button btn-xs">Excluir</a>--}}
                                @include("modais.delete")
                                    <a class="btn btn-danger editable-table-button btn-xs" data-toggle="modal"  data-target="#delete-modal_{{$usuario->id}}">Excluir</a>
                            @endcan
                        </td>
                    </tr>
                <?php }?>

                </tbody>

             </table>
            {!! $users->render() !!}

            {{--<div class="form-group">--}}
                {{--<div class="input-group margin-bottom-sm">--}}
                    {{--<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>--}}
                    {{--<input class="form-control" type="text" placeholder="Email address">--}}
                {{--</div>--}}
            {{--</div>--}}
                {{--<div class="input-group">--}}
                        {{--<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>--}}
                    {{--<input class="form-control" type="" placeholder="Password">--}}
                {{--</div>--}}
            {{--</div>--}}
        @endif
    @endsection
