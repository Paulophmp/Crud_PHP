
<!-- Modal Delete-->
<div class="modal fade modal" id="delete-modal_{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <img src="/img/intelbras.png">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
            </div>
            <div class="modal-body">
                <p>Deseja realmente excluir este {{$usuario->nome}}?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                <a type="button" class="btn btn-success delete" href="{{url("usuarios/excluir/$usuario->id")}}">Sim</a>
            </div>
        </div>
    </div>
</div>
<!-- Fim Modal Delete-->