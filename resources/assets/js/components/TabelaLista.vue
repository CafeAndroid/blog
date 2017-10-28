<template>
    <div class="table-responsive">
      
      <div class="form-inline">
        <a v-if="criar" class="btn btn-info" v-bind:href="criar">Novo artigo</a>
        <div class="form-group pull-right">
          <input type="search" name="" class="form-control" placeholder="Buscar" v-model="buscar">
        </div>      
      </div>

      <hr>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th v-for="titulo in titulos">{{titulo}}</th>
            <th v-if="detalhe || editar || deletar">Ação</th>
          </tr>
        </thead>
        <tbody>
          
          <tr v-for="item in lista">
            <td v-for="i in item">{{ i }}</td>

            <td v-if="detalhe || editar || deletar">
              <form v-if="deletar && token" v-bind:action="deletar" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" v-bind:value="token">

                <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-info">Detalhes</a>
                <a v-if="editar"  v-bind:href="editar" class="btn btn-warning">Editar</a>
                <button v-if="deletar || token" class="btn btn-danger">Excluir</button>
              </form>
              
              <div v-if="!token">
                <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-info">Detalhes</a>
                <a v-if="editar"  v-bind:href="editar" class="btn btn-warning">Editar</a>
              </div>

            </td>

          </tr>

        </tbody>
      </table>
    </div>
</template>

<script>
    export default {
        props:['titulos', 'itens', 'criar', 'editar', 'deletar', 'detalhe', 'token'],
        data: function(){
          return {
            buscar: ''
          }
        },
        computed:{
          lista: function () {

            this.itens.sort(function(a,b){
              if(a[0] > b[0]) return 1;
              if(a[0] < b[0]) return -1;
              return 0;
            });


            return this.itens.filter(response => {
              for(let k = 0; k < response.length ; k++){
                if((response[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                  return true;  
                }
              }
              return false;
            });
            
            return this.itens;
          }
        }
    }
</script>