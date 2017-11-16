<template>
    <div class="table-responsive">

    	<linkmodal v-if="criar && modal" nomemodal="modal-adicionar" acao="Novo artigo" css="btn btn-info"></linkmodal>
    	<a v-if="criar && !modal" class="btn btn-default" v-bind:href="criar">Novo artigo</a>

		<div class="form-inline">
			<div class="form-group pull-right">
			<input type="search" name="" class="form-control" placeholder="Buscar" v-model="buscar">
			</div>      
		</div>

		<table class="table table-striped table-hover">
			<thead>
			<tr>
				<th style="cursor:pointer" v-on:click="ordenaColuna(coluna)" v-for="(titulo, coluna) in titulos">{{titulo}}</th>
				<th v-if="detalhe || editar || deletar">Ação</th>
			</tr>
			</thead>
			<tbody>
				<tr v-for="(item,index) in lista">
				<td v-for="i in item">{{i}}</td>
					<td v-if="detalhe || editar || deletar">
					<form v-if="deletar && token" v-bind:action="deletar" method="post">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" v-bind:value="token">
						<linkmodal v-if="criar && modal" v-bind:item="item" nomemodal="modal-show" acao="Detalhes" css="btn btn-warning"></linkmodal>
						<linkmodal v-if="criar && modal" v-bind:item="item" nomemodal="modal-edit" acao="Editar" css="btn btn-info"></linkmodal>
						<button v-if="deletar || token" class="btn btn-danger">Excluir</button>
					</form>
					</td>
				</tr>
			</tbody>
		</table>
		
    </div>
</template>

<script>
    export default {
      	props:['titulos', 'itens', 'criar', 'editar', 'deletar', 'detalhe', 'token', 'ordem', 'ordemcol', 'modal'],
        data: function(){
          return {
            buscar: '',
            ordemaux: this.ordem || 'asc',
            ordemcolaux: this.ordemcol || 0
          }
      	},
      methods:{
        ordenaColuna: function(coluna){
          this.ordemcolaux = coluna;
          if(this.ordemaux.toLowerCase() === "asc"){
            this.ordemaux = "desc"
          }else{
            this.ordemaux = "asc"
          }
        }
      },
      computed:{
        lista: function () {
          let ordem = this.ordemaux;
          let ordemCol = this.ordemcolaux;

          ordem = ordem.toLowerCase();
          ordemCol = parseInt(ordemCol);

          if(ordem == "asc"){
            this.itens.sort(function(a,b){
              if(Object.values(a)[ordemCol] > Object.values(b)[ordemCol]) return 1;
              if(Object.values(a)[ordemCol] < Object.values(b)[ordemCol]) return -1;
              return 0;
            });
          }else{
            this.itens.sort(function(a,b){
              if(Object.values(a)[ordemCol] < Object.values(b)[ordemCol]) return 1;
              if(Object.values(a)[ordemCol] > Object.values(b)[ordemCol]) return -1;
              return 0;
            });
          }

          if(this.buscar){
            return this.itens.filter(response => {
              for(let k = 0; k < response.length ; k++){
                if((Object.values(response)[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                  return true;  
                }
              }
              return false;
            });
          }
          
          return this.itens;
        }
      }
    }
</script>