@extends('layouts.app')

@section('content')
  <pagina col="12">
    <painel title="Dashboard">
      <div class="row">

        <div class="col-lg-3">
          <box title="Usuários" url="{{ url('/') }}" color="bg-purple" icon="fa-users">
            10
          </box>
        </div>

        <div class="col-lg-3">
          <box title="Categorias" url="{{ url('/') }}" color="bg-green" icon="fa-tags">
            100
          </box>
        </div>

        <div class="col-lg-3">
          <box title="Comentários" url="{{ url('/') }}" color="bg-blue" icon="fa-comments">
            300
          </box>
        </div>

        <div class="col-lg-3">
          <box title="Artigos" url="{{ route('artigos.index') }}" color="bg-orange" icon="fa-paper-plane">
            433
          </box>
        </div>


      </div>
    </painel>
  </pagina>
@endsection
