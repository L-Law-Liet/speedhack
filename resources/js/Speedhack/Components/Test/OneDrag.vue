<template>
	<div class="drag-wrap" :class="{'green': currect }">
		<draggable v-model="list" :move="checkMove"  @change="log">
		    <transition-group>
		        <div v-for="element in list" :key="element.id">
		            <div class="item-drag" :class="{'error': error}">
		            	{{ element.name }}
		            </div>
		        </div>
		    </transition-group>
		</draggable>
		<div class="progress">
			<div class="procent" :style="{height: percent + '%' }"></div>
		</div>
	</div>
</template>
<script>
	import draggable from 'vuedraggable'
	
	export default {
		props: {
	      	test: Array
	    },
		components: {
	    	draggable,
	    },
	    data() {
	        return {
	        	list: [
			        { name: "John", id: 0 },
			        { name: "Joao", id: 1 },
			        { name: "Jean", id: 2 }
		      	],
		      	currect: false,
		      	error: false,
		      	percent: 50,
		    }
	    },
	    mounted() {
		  	this.list = this.test;
		},
		methods: {
			checkMove: function(e) {
		      	console.log("Future index: " + e.draggedContext.futureIndex);
		    },
		    log: function(evt) {
		      	console.log(evt);
		    }
		},
	}
</script>
<style scoped>
	.drag-wrap{
		background: #D4EAFF;
		border-radius: 8px;
		padding: 10px;
		width: 100%;
		display: flex;
    	justify-content: space-between;
	}
	.drag-wrap.green{
		background: #EEFADE;
	}
	.drag-wrap div span{
		display: flex;
	}
	.drag-wrap div span div{
		margin-right: 8px;
	}
	.drag-wrap div span div:hover{
		cursor: pointer;
	}
	.drag-wrap div span div:active{
		cursor: grabbing;
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
	.item-drag{
		padding: 2px 16px;
		border-radius: 8px;
		background: #A9D3FB;
		font-family: 'Inter', sans-serif;
		font-size: 18px;
		color: #050A1C;
	}
	.drag-wrap .item-drag.error{
		background: #EEA5A5;
		border: 1px solid #D06666;
	}
	.drag-wrap.green .progress{
		background: #A5C579;
	}
	.drag-wrap.green .item-drag{
		background: #D5F0B0;
		border: none;
		justify-content: flex-end;
    padding-right: 40px;
	}
</style>