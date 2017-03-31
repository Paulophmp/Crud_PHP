{{--Modal Editar--}}
<div class="modal fade" id="modal-delete_{{$usuario->id}}" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:15px 20px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Formulário de Atualização</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form  class="form-horizontal" method="PUT">
                    {!! csrf_field() !!}
                    <div class="form-group has-feedback">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" value="{{$usuario->nome}}" id="name" name="nome">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="phone">Data Nascimento</label>
                        <input type="text" class="form-control" value="{{$usuario->dataNascimento}}" id="phone" name="telefone">
                        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="phone">Telefone</label>
                        <input type="text" class="form-control" value="{{$usuario->telefone}}" id="phone" name="telefone">
                        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="mail"> Email</label>
                        <input type="text" class="form-control" value="{{$usuario->email}}" id="mail" name="email">
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
                <a type="submit" class="btn btn-danger btn-default" data-dismiss="modal">
                     Cancelar <span class="glyphicon glyphicon-remove"></span></a>
                <a href="{{url("usuarios/atualizar/$usuario->id")}}" type="submit" class="btn btn-primary">
                    Salvar Mudanças <span class="glyphicon glyphicon-send"></span> </a>
            </div>
        </div>
    </div>
</div>
{{--Fim Modal Editar--}}