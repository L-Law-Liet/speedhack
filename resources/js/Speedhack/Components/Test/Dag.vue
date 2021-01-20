<template>
	<div style="display: flex;">
		<span>{{ first_word }}</span>
		<div class="tipa-input">
			<draggable
		        class="dragArea list-group"
		        :list="options"
		       	group="people"
		       	@change="log"
		       	v-if="currect == null"
	    	>
	    	<!--  <div class="list-group-item" v-for="element in options" :key="element.id">
	          	<span>{{ element.id }}</span>
	        </div> -->
	  		</draggable>
	  		<div class="cuur" style="color: green"> {{currect}} </div>
		</div>
		
  		<span> {{ last_word }} </span>
  		{{options}}
  	</div>
</template>
<script>
	import draggable from 'vuedraggable'
	export default {
		props: {
	      	item: Array,
	      	
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
	        }
	    },
	    mounted() {
		  	this.options = this.item;

		  	const text = this.options[0].name;
		  	var first_symbol = text.indexOf('#??#', 0);
		 	this.first_word = text.slice(0, first_symbol);
		 	first_symbol = first_symbol + 4;
		 	this.last_word = text.slice(first_symbol);
		},
		methods: {
			log: function(evt) {
				console.log('pered');
				if(this.id == evt.added.element.id){
		      		this.currect = evt.added.element.name;
		      		this.$emit('on-true', evt);
		      	}else{
		      		let ioio = this.options.find((item) => item.id == evt.added.element.id );
		      		var index = this.options.findIndex(item => item.id === evt.added.element.id);
		      		console.log(ioio);
		      		console.log(index);
		      		this.options.splice(index, 1);
		      		// let gog = this.options.findIndex(ioio);
		      		// console.log(gog);
		      		// this.options = this.options.splice(-1,1);
		      		this.$emit('on-false', evt);
		      	}
		    },
		   
		},
	}
</script>
<style scoped>
	.tipa-input{
		background-color: #fff;
		width: 100px;
		border-bottom: 1px solid red;
	}
</style>