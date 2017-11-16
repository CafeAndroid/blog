<modal idmodal="modal-adicionar" titulo="Novo artigo">
	<formulario css="" acao="#" metodo="put" anexo="multipart/form-data">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="campo_user">Título</label>
			<input type="text" class="form-control" id="campo_user" aria-describedby="emailHelp" placeholder="Titulo">
		</div>
		<div class="form-group">
			<label for="descricao">Descrição</label>
			<input type="text" class="form-control" id="descricao" placeholder="Descrição">
		</div>
		<button type="submit" class="btn btn-primary">Salvar novo Artigo</button>
	</formulario>
</modal>