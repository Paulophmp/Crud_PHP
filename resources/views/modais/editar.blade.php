{{--Modal Editar--}}
{{--<div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">--}}
    {{--<div class="modal-dialog" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                {{--<h4 class="modal-title" id="exampleModalLabel">New message</h4>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<form>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="nome" class="control-label">Nome:</label>--}}
                        {{--<input type="text" class="form-control" id="nome" value="{{$usuario->nome}}">--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="fone" class="control-label">Telefone:</label>--}}
                        {{--<input type="text" class="form-control" id="fone" value="{{$usuario->telefone}}">--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label class="control-label" for="email">Email:</label>--}}
                        {{--<input type="email" class="form-control" id="email" value="{{$usuario->email}}">--}}
                    {{--</div>--}}

                {{--</form>--}}
            {{--</div>--}}
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>--}}
                {{--<button type="button" class="btn btn-primary">Send message</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="modal fade" id="modal-delete_{{$usuario->id}}" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Formulário de Atualização</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form  class="form-horizontal" method="PUT">
                    {!! csrf_field() !!}
                    <div class="form-group has-feedback">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" value="{{$usuario->nome}}" id="name" value="{{ old('nome') }}"  name="nome">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="mail">Telefone</label>
                        <input type="text" class="form-control" value="{{$usuario->telefone}}" id="mail" value="{{ old('telefone') }}"  name="telefone">
                        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="mail"> Email</label>
                        <input type="text" class="form-control" value="{{$usuario->email}}" id="mail" value="{{ old('email') }}"  name="email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="mail">Estado</label>
                        <input type="text" class="form-control" value="{{$usuario->estado}}" id="mail" value="{{ old('estado') }}"  name="email">
                        <span class="glyphicon glyphicon-road form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="mail">Cidade</label>
                        <input type="text" class="form-control"value="{{$usuario->cidade}}"  id="mail" value="{{ old('cidade') }}"  name="email">
                        <span class="glyphicon glyphicon-road form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" value="{{$usuario->endereco}}" id="endereco" value="{{ old('endereco') }}"  name="endereco">
                        <span class="glyphicon glyphicon-road form-control-feedback"></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="{{url("usuarios/atualizar/$usuario->id")}}" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-off"></span> Salvar Mudanças</a>
            </div>
        </div>
    </div>
</div>
{{--Fim Modal Editar--}}