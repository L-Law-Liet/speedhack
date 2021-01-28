<template>
	<div class="test-item">
		<span class="first_word"> {{ first_word }} </span>
		<div class="wrap-form"> 
			<div class="input_wrap">
				<input type="text" v-model="input"> 
			</div>
			<div class="progress">
				<div class="procent" :style="{height: percent + '%' }"></div>
			</div>
		</div>
		<span class="last_word"> {{ last_word }} </span>
		<button class="help-btn"><img src="/images/icons/help.svg"></button>
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
	        	percent: 50,
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
	.first_word{
		margin-right: 4px;
	}
	.last_word{
		margin-left: 4px;
	}
	.test-item{
		display: flex;
		align-items: center;
		font-family: "Inter", sans-serif;
		color: #050A1C;
		font-size: 18px;
    	line-height: 20px;
		color: #050A1C;
	}
	.test-item .input_wrap{
		display: flex;
		align-items: center;
		background: #FFFFFF;
		box-shadow: 0px 4px 6px rgba(110, 120, 130, 0.18);
		border-radius: 4px;
		padding: 5px;
		align-items: flex-end;
		margin-right: 6px;
		width: 130px;
	}

	.test-item .input_wrap input{
		width: 100%;
		border-bottom: 1px solid rgba(196, 196, 196, 0.58);
	}
	.wrap-form{
		display: flex;
	}
	.progress{
		width: 5px;
		height: 100%;
		background: #BAC9DF;
		border-radius: 8px;
		height: 31px;
		display: flex;
    	justify-content: space-between;
	}
	.progress .procent{
		display: block;
		width: 100%;
		background: #E46E67;
		margin-top: auto;
	}
	.help-btn{
		background-color: transparent;
		padding: 0px;
		margin-left: 5px;
	}
	.help-btn img{
		width: 25px;
		height: 25px;
	}
</style>