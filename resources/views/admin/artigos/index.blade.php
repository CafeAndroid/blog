@extends('layouts.app')

@section('content')
  	<pagina col="12">
	    <painel title="Artigos">
	  		<breadcrumb v-bind:lista={{$breadcrumbs}}></breadcrumb>
	      	<tabela-lista criar="#criar" editar="#editar" deletar="#deletar" detalhe="#detalhe" token="3242421341234"
		      	v-bind:titulos="['#', 'Título', 'Descrição', 'Autor', 'Data']"
		 	  	v-bind:itens="[[1, 'PHP OO', 'Aula de PHP', 'Lucas', '22/12/1212'], [2, 'Java OO', 'Descrição do Java', 'Lucas', '22/12/1212']]"
	     		ordem="asc" ordemcol="2"></tabela-lista>
	    </painel>
		<linkmodal nomemodal="meumodal" acao="Abrir modal" css="btn btn-primary">
  	</pagina>

  	<modal idmodal="meumodal" titulo="Titulo modal">
	    <form>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			</div>
			<div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-check">
			    <label class="form-check-label"><input type="checkbox" class="form-check-input">Check me out</label>
			</div>
				<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</modal>
@endsection
