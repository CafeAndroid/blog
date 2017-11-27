<modal idmodal="modal-edit" titulo="Editar artigo">
	<formulario id="form-edit" css="" acao="#" metodo="put" anexo="multipart/form-data">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="campo_user">Título</label>
			<input type="text" class="form-control" id="campo_user" aria-describedby="emailHelp" placeholder="Titulo" v-model="$store.state.item.titulo">
		</div>
		<div class="form-group">
			<label for="descricao">Descrição</label>
			<input type="text" class="form-control" id="descricao" placeholder="Descrição" v-model="$store.state.item.descricao">
		</div>
	</formulario>

	<span slot="botoes">
		<button form="form-edit" type="submit" class="btn btn-primary">Salvar Alterações</button>
	</span>
	
</modal>