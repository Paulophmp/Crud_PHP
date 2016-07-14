{{--Modal Editar--}}
<div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" value="{{$usuario->nome}}">
                    </div>

                    <div class="form-group">
                        <label for="fone" class="control-label">Telefone:</label>
                        <input type="text" class="form-control" id="fone" value="{{$usuario->telefone}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">Email:</label>
                        <input type="email" class="form-control" id="email" value="{{$usuario->email}}">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
{{--Fim Modal Editar--}}