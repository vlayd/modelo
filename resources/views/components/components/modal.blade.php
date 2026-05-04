<div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="saveModalTitulo" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                <h5 class="modal-title text-white" id="configuracaoUsuarioModalTitulo">Salvar Usuário</h5>
                <span role="button" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark text-white"></i>
                </span>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            @if ($showButton)
            <div class="modal-footer">
                <button type="submit" form="form_current_save" class="btn bg-gradient-primary">Salvar</button>
                <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Fechar</button>
            </div>
            @endif
        </div>
    </div>
</div>