<template>
	<section>
    <div class="col-3">
      	<h3>Anwers</h3>
      	<div class="anwers" style="display: flex;">
      	<draggable
	        class="dragArea list-group"
	        :list="anns"
	        group="people"
	        @change="log"
	        :move="checkMove" 
	      	>
      		<div v-for="element in anns" :key="element.id" style="margin-right: 16px;" :class="{ 'false': element.currect == false, 'true': element.currect == true}">
	          <div>{{ element.name }}</div>
	        </div>
		</draggable>
	    </div>
   	</div>
	<template v-for="item in list3">
		<drags :item="item" 
			@on-true="PushCorrect" 
            @on-false="FalseCorrect">
        </drags>
    </template>
   	
    </section>
</template>
<script>
	import draggable from 'vuedraggable'
	import Drags from '@/Speedhack/Components/Test/Dag';

	export default {
		props: {
	      	test: Array,
	      	answers: Array,
	    },
		components: {
	    	draggable,
	    	Drags
	    },
	    data() {
	        return {
	        	list3: [],
		       	anns: [],
		       	indexItem: null,
		    }
	    },
	    mounted() {
		  	this.anns = this.answers;
		  	this.list3 = this.test;
		},
		methods: {
			checkMove: function(e) {
		      	this.indexItem = e.draggedContext.index;
		    },
		    log: function(evt) {
		    	
		    },
		    PushCorrect(evt){
		    	console.log('true');
		    	this.anns.splice(this.indexItem,  0, {name: evt.added.element.name, id: evt.added.element.id, currect: true});
		    	//this.anns.push({name: evt.added.element.name, id: evt.added.element.id, currect: true});
		    	
		    },
		    FalseCorrect(evt){
		    	console.log('false');
		    	this.anns.splice(this.indexItem,  0, {name: evt.added.element.name, id: evt.added.element.id, currect: false});
		    	//this.anns.push({name: evt.added.element.name, id: evt.added.element.id, currect: false});
		    	
		    }
		},
	}
</script>
<style scoped>
	.anwers .list-group{
		flex-direction: row;
	}
	.hide{
		pointer-events: none;
	}
	.true{
		background-color: green;
		pointer-events: none;
	}
	.false{
		background-color: red;
	}
</style>