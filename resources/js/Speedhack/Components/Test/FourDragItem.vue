<template>
	<div class="drag-item">
		<span>{{ first_word }}</span>
		<div class="input-wrap">
			<draggable
		        class="dragArea list-group"
		        :list="options"
		       	group="people"
		       	@change="log"
		       	v-if="currect == null"
	    	>
	    	</draggable>
	  		<div class="currect_word"> {{currect}} </div>
		</div>
		<span> {{ last_word }} </span>
	</div>
</template>
<script>
	import draggable from 'vuedraggable'
	export default {
		props: {
	      	item: Array,
	      	right_answer: Number
	    },
	    components: {
	    	draggable,
	    },
	    data() {
	        return {
	        	options: [],
	        	id: 2,
	        	currect: null,
	        	first_word: '',
	        	last_word: '',
	        	currect_answer: null,
	        }
	    },
	    mounted() {
		  	this.options = this.item;
		  	this.currect_answer = this.right_answer;

		  	//oбрез текста
			const text = this.options[0].name;
		  	var first_symbol = text.indexOf('#??#', 0);
		 	this.first_word = text.slice(0, first_symbol);
		 	first_symbol = first_symbol + 4;
		 	this.last_word = text.slice(first_symbol);
		 	//oбрез текста
		},
		methods: {
			log: function(evt) {
				console.log("currect_answer: " + this.currect_answer);
				console.log("event_answer: " + evt.added.element.id);
				if(this.currect_answer == evt.added.element.id){
		      		this.currect = evt.added.element.name;
		      		this.$emit('on-true', evt);
		      	}else{
		      		var index = this.options.findIndex(item => item.id === evt.added.element.id);
		      		this.options.splice(index, 1);
		      		this.$emit('on-false', evt);
		      	}
		    },
		   
		},
	}
</script>
<style scoped>
	.input-wrap{
		background-color: transparent;
		min-width: 100px;
		max-height: 28px;
		padding-left: 6px;
		border-bottom: 1px solid rgba(196, 196, 196, 0.61);
		margin-left: 4px;
		margin-right: 4px;
	}
	.drag-item{
		display: flex;
		color: #050A1C;
		font-family: 'Inter', sans-serif;
		line-height: 34px;
		font-size: 18px;
	}
	.currect_word{
		font-family: 'Inter', sans-serif;
		color: #3BA972;
	}
</style>