
    @extends('layout.template1')
    @section('title', 'Usuários')
    @section('container')

        <h2>Usuários</h2>

        {{--@if(session('status'))--}}
            {{--<div class="row" id="teste">--}}
                {{--<div class="alert alert-success alert-dismissable fa in text-center col-md-6 col-md-offset-3">--}}
                    {{--<button href="#" class="close" data-dismiss="alert" id="close">&times;</button>--}}
                    {{--<h4><i class="icon fa fa-check">Alerta!</i></h4>--}}
                    {{--<strong>{{session('status')}}</strong>...--}}
                {{--</div>--}}
            {{--</div>--}}

        @if(session('status1'))
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
                    <tr style="background-color: #00b0ff;color: white">
                        <th data-toggle="tooltip" data-placement="top" title="clique para Ordenar" class="text-center">Id</th>
                        <th data-toggle="tooltip" data-placement="top" title="clique para Ordenar" class="text-center">Nome</th>
                        <th class="text-center">Telefone</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Autor</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>

                {{--<div class="">--}}
                {{--<a class="btn btn-info" onclick="toastr.info('Ola , seja bem-VIndo .');">Info message</a>--}}
                        {{--<a class="btn btn-warning" id="toastrPwarning">Warning Alerta</a>--}}
                    {{--<a id="toastr-warning" class="btn btn-warning ">Warning</a>--}}
                {{--</div>--}}
                <?php foreach($users as $usuario) { ?>
                    <tr>
                        <td class="text-center"><?php echo $usuario->id; ?></td>
                        <td class="text-center"><?php echo $usuario->nome ?></td>
                        <td class="align-center"><?php echo $usuario->telefone ?></td>
                        <td class="text-center"><?php echo $usuario->email ?></td>
                        <td class="text-center"><?php echo $usuario->estado ?></td>
                        <td class="text-center"><p class="autor"><?php echo $usuario->user->name ?></p></td>
                        <td class="text-center">
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

{{--script Datatable--}}
<script src="/media/js/jquery.dataTables.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
//                "scrollY":        "200px",
//                "scrollCollapse": true,
            "paging": true,
            "info": true,
            "aoColumnDefs":[
                {
                    'bSortable' : false, 'aTargets': [5, 6]
                }
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json",
//                "lengthMenu": "Display _MENU_ records per page",
//                "sSearch": "Pesquisar: ",
//                "zeroRecords": "<h4 style='color:#FFF; background-color: #00A65A;'>Nenhum dado encontrado !</h4>",
//                "info": "Página _PAGE_ de _PAGES_",
//                "infoEmpty": "Não há registros disponíveis",
//                    "infoFiltered": "(filtered from _MAX_ total records)"
            }
        });
    });
</script>
<script type="text/javascript">
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
        <script type="text/javascript">
            $(document).ready(function () {
                toastr.options = {
                        "closeButton": true, // true/false
                        "debug": false, // true/false
                        "newestOnTop": false, // true/false
                        "progressBar": false, // true/false
                        "positionClass": "toast-top-right", // toast-top-right / toast-top-left / toast-bottom-right / toast-bottom-left
                        "preventDuplicates": false,
                "onclick": null,
                    "showDuration": "300", // in milliseconds
                    "hideDuration": "1000", // in milliseconds
                    "timeOut": "5000", // in milliseconds
                    "extendedTimeOut": "1000", // in milliseconds
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                },
                    $('#toastrPwarning').click(function () {
                        toastr.warning('Alerta')
                    });

                $('#toastr-warning').click(function () {
                    toastr.warning('This is a warning notification provided by toastr.')
                });

                $('#suc').click(function () {
                    toastr.success(' Apagado com Sucesso.')
                });
//                $(document).ready(function () {
//                    (toastr.success('Deletado com Sucesso!!'));
//                });
            });
        </script>
    @endsection
