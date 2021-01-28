<template>
	<section>
    <div class="anwers-wrap">
    	<span class="info">Выберите слова и перетаскайте к нужной предложении</span>
      	<div class="anwers" style="display: flex;">
	      	<draggable
		        class="dragArea list-group"
		        :list="answers_all"
		        group="people"
		        @change="log"
		        :move="checkMove" 
		      	>
	      		<div v-for="element in answers_all" 
	      			:key="element.id" 
	      			class="item-anwer" 
	      			:class="{ 'false': element.currect == false, 'true': element.currect == true}">
		          <div>{{ element.name }}</div>
		        </div>
			</draggable>
	    </div>
   	</div>

	<template v-for="(item, key) in questions">
		<div class="wrap-question">
			<span class="key">{{ ++key }}.</span>
			<item-drag 
				:item="item" 
				:right_answer="item[0].right"
				@on-true="PushCorrect" 
	            @on-false="FalseCorrect">
	        </item-drag>
		</div>
		
    </template>
   	
    </section>
</template>
<script>
	import draggable from 'vuedraggable';
	import ItemDrag from '@/Speedhack/Components/Test/FourDragItem';

	export default {
		props: {
	      	test: Array,
	      	answers: Array,
	    },
		components: {
	    	draggable,
	    	ItemDrag
	    },
	    data() {
	        return {
	        	questions: [],
		       	answers_all: [],
		       	indexItem: null,
		    }
	    },
	    mounted() {
		  	this.answers_all = this.answers;
		  	this.questions = this.test;
		},
		methods: {
			checkMove: function(e) {
		      	this.indexItem = e.draggedContext.index;
		    },
		    log: function(evt) {
		    	
		    },
		    PushCorrect(evt){
		    	console.log('true');
		    	this.answers_all.splice(this.indexItem,  0, {name: evt.added.element.name, id: evt.added.element.id, currect: true});
		    	//this.answers_all.push({name: evt.added.element.name, id: evt.added.element.id, currect: true});
		    },
		    FalseCorrect(evt){
		    	console.log('false');
		    	this.answers_all.splice(this.indexItem,  0, {name: evt.added.element.name, id: evt.added.element.id, currect: false});
		    }
		},
	}
</script>
<style scoped>
	.anwers-wrap{
		border: 2px solid rgba(0, 62, 203, 0.69);
		border-radius: 10px;
		padding: 20px 40px 20px;
		margin-bottom: 40px;
	}
	.anwers-wrap .info{
		font-family: 'Inter', sans-serif;
		color: #979797;
		font-size: 14px;
		display: inline-block;
		margin-bottom: 16px;
	}
	.anwers .list-group{
		flex-direction: row;
		flex-wrap: wrap;
	}
	.item-anwer{
		background: #FFFFFF;
		box-shadow: 0px 4px 16px rgba(110, 120, 130, 0.12);
		border-radius: 4px;
		margin-right: 20px;
		margin-bottom: 0px;
		padding: 6px 12px;
	}
	.true{
		pointer-events: none;
		opacity: 0.2;
	}
	.false{
		/*background-color: red;*/
		border: 1px solid #EEA5A5;
	}
	.wrap-question{
		display: flex;
		align-items: center;
		margin-bottom: 20px;
	}

	.wrap-question .key{
		margin-right: 16px;
		font-family: 'Inter', sans-serif;
		font-size: 16px;
		color: #050A1C;
	}
</style>