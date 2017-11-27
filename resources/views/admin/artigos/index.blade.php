@extends('layouts.app') @section('content')
<pagina col="12">
	@if($errors->all())
		<alerta classe="alert-danger">
			<ul>
				@foreach($errors->all() as $e)
					<li>{{$e}}</li>
				@endforeach
			</ul>
		</alerta>
	@endif

	<painel title="Artigos">
		<breadcrumb v-bind:lista={{$breadcrumbs}}></breadcrumb>
		<tabela-lista criar="#criar" editar="#editar" deletar="#deletar" detalhe="#detalhe" token="3242421341234" v-bind:titulos="['#', 'Título', 'Descrição', 'Data']"
		 v-bind:itens="{{$artigos}}" ordem="asc" ordemcol="2" modal="sim"></tabela-lista>
	</painel>
</pagina>

@include('admin.artigos.modais.create')
@include('admin.artigos.modais.show')
@include('admin.artigos.modais.edit')

@endsection