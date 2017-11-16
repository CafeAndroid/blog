<modal idmodal="modal-show" v-bind:titulo="$store.state.item.titulo">
	<label for="titulo">Titulo</label>
    <p id="titulo">@{{$store.state.item.titulo}}</p>

    <label for="descricao">Descrição</label>
    <p id="descricao">@{{$store.state.item.descricao}}</p>
</modal>