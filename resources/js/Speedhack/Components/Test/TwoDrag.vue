<template>
	<section class="wrap-test">
		<ul class="wrap-static">
			<template v-for="(item, key) in first_lists">
				<li class="item" @click="activate(key)" :class="{ green_border : active_el == key, green_full: currect_el == key }"> 
					{{ item.name }}
				</li>
			</template>
		</ul>

		<div class="drag-wrap" :class="{'green': currect }">
			<draggable v-model="secound_lists" :move="checkMove"  @change="log">
			    <transition-group>
			        <div v-for="(element, key) in secound_lists" :key="element.id" 
			        	class="item" 
			        	:class="{green_border : active_el == key, green_full: currect_el == key,  error: error}">
			            <div class="item-drag" >
			            	{{ element.name }}
			            </div>
			            <div class="progress">
							<div class="procent" :style="{height: percent + '%' }"></div>
						</div>
			        </div>
			    </transition-group>
			</draggable>
			
		</div>
	</section>
</template>
<script>
	import draggable from 'vuedraggable'
	
	export default {
		props: {
	      	first_column: Array,
	      	secound_column: Array,
	    },
		components: {
	    	draggable,
	    },
	    data() {
	        return {
	        	first_lists: null,
	        	secound_lists: null,
		      	currect: false,
		      	error: false,
		      	percent: 50,
		      	active_el: null,
		      	currect_el: null,
		    }
	    },
	    mounted() {
		  	this.first_lists = this.first_column;
		  	this.secound_lists = this.secound_column;
		},
		methods: {
			checkMove: function(e) {
		      	console.log("Future index: " + e.draggedContext.futureIndex);
		    },
		    log: function(evt) {
		      	console.log(evt);
		    },
		    activate:function(el){
		        this.active_el = el;
		        this.currect_el = el;
		    }
		},
	}
</script>
<style scoped>
	.wrap-test{
		display: flex;
		padding: 0px 60px;
	}
	.wrap-static{
		padding-right: 40px;
		width: 100%;
	}
	.drag-wrap{
		padding-left: 40px;
		width: 100%;
	}
	.wrap-static .item{
		padding: 15px 30px;
		font-size: 18px;
		line-height: 22px;
		margin-bottom: 20px;
		border-radius: 8px;
		background-color: #fff;
		color: #050A1C;
		position: relative;
		border: 2px solid #fff;
		box-shadow: 0px 4px 16px rgba(110, 120, 130, 0.12);
		font-family: "Inter", sans-serif;
	}
	.wrap-static .item:after{
		content: '';
		display: block;
		width: 12px;
		height: 12px;
		border-radius: 2px;
		background-color: #fff;
		position: absolute;
		top: 50%;
		right: -7px;
		border-top: 2px solid #fff;
    	border-right: 2px solid #fff;
		transform: rotate(45deg) translate(-40%, -50%);
	}
	.wrap-static .item.green_border{
		border: 2px solid #D5F0B0;
	}		
	.wrap-static .item.green_border:after{
		border-top: 2px solid #D5F0B0;
    	border-right: 2px solid #D5F0B0;
	}
	.wrap-static .item.green_full{
		background: #D5F0B0;
		border: 2px solid #D5F0B0;
	}
	.wrap-static .item.green_full:after{
		background: #D5F0B0;
		border-top: 2px solid #D5F0B0;
    	border-right: 2px solid #D5F0B0;
	}
	.wrap-static .item:hover{
		cursor: pointer;
	}

	.drag-wrap .item{
		display: flex;
		align-content: center;
		justify-content: space-between;
	}
	.drag-wrap .item .item-drag{
		padding: 15px 30px;
		width: 100%;
		margin-right: 8px;
		font-size: 18px;
		line-height: 22px;
		margin-bottom: 20px;
		border-radius: 8px;
		background-color: #fff;
		color: #050A1C;
		position: relative;
		border: 2px solid #fff;
		box-shadow: 0px 4px 16px rgba(110, 120, 130, 0.12);
		font-family: "Inter", sans-serif;
	}

	.drag-wrap .item .item-drag:before{
		content: '';
		display: block;
		width: 12px;
		height: 12px;
		border-radius: 2px;
		background-color: #fff;
		position: absolute;
		top: 50%;
		left: -8px;
		border-bottom: 2px solid #fff;
    	border-left: 2px solid #fff;
		transform: rotate(45deg) translate(-40%, -50%);
	}

	.drag-wrap .item.green_border .item-drag{
		border: 2px solid #D5F0B0;
	}		
	.drag-wrap .item.green_border .item-drag:before{
		border-bottom: 2px solid #D5F0B0;
    	border-left: 2px solid #D5F0B0;
	}
	.drag-wrap .item.green_full .item-drag{
		background: #D5F0B0;
		border: 2px solid #D5F0B0;
	}
	.drag-wrap .item.green_full .item-drag:before{
		background: #D5F0B0;
		border-bottom: 2px solid #D5F0B0;
    	border-left: 2px solid #D5F0B0;
	}

	.drag-wrap .item.error .item-drag{
		border: 2px solid #EEA5A5;
	}
	.drag-wrap .item.error .item-drag:before{
		border-bottom: 2px solid #EEA5A5;
    	border-left: 2px solid #EEA5A5;
	}
	.drag-wrap .item:hover{
		cursor: pointer;
	}

	.progress{
		width: 6px;
		height: 100%;
		background: #BAC9DF;
		border-radius: 8px;
		height: 40px;
		margin-top: 8px;
		display: flex;
    	justify-content: space-between;
	}
	.progress .procent{
		display: block;
		width: 100%;
		background: #E46E67;
		margin-top: auto;
	}
</style>