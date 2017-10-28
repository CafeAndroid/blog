@extends('layouts.app')

@section('content')
  <pagina col="12">
    <painel title="Artigos">
      <tabela-lista criar="#criar" editar="#editar" deletar="#deletar" detalhe="#detalhe" token="3242421341234"
      v-bind:titulos="['#', 'Título', 'Descrição', 'Autor', 'Data']"
 	  v-bind:itens="[[1, 'PHP OO', 'Aula de PHP', 'Lucas', '22/12/1212'], [2, 'Java OO', 'Descrição do Java', 'Lucas', '22/12/1212']]">
 	  
 	  </tabela-lista>
    </painel>
  </pagina>
@endsection
