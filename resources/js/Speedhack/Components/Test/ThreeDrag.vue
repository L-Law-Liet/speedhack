<template>
	<div class="test-item">
		<span> {{ first_word }} </span>
		<div class="input_wrap"> <input type="text" v-model="input"> </div>
		<span> {{ last_word }} </span>
	</div>
</template>
<script>
	export default {
		props: {
	      	test: Object,
	    },
		components: {
	    	
	    },
	    data() {
	        return {
	        	ex:'',
	        	first_word: '',
	        	last_word: '',
	        	input: '',
		    }
	    },
	    mounted() {
	    	const text = this.test.text;
			var first_symbol = text.indexOf('#??#', 0);
		 	this.first_word = text.slice(0, first_symbol);
		 	first_symbol = first_symbol + 4;
		 	this.last_word = text.slice(first_symbol);

		},
		methods: {
			
		},
		
	}
</script>
<style scoped>
	.test-item{
		display: flex;
		align-items: center;
		font-family: "Inter", sans-serif;
		color: #050A1C;
		margin-bottom: 20px;
	}
	.test-item .input_wrap{
		display: flex;
		align-items: center;
	}

	.test-item .input_wrap input{

	}
</style>