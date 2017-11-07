<template>
	<div class="">
	    <!-- Button trigger modal -->
		<button type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nomemodal">
		  {{acao}}
		</button>
	</div>
</template>

<script>
    export default {
        props: ['nomemodal', 'acao', 'css']
    }
</script>
