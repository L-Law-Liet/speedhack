<template>
    <student-layout>
    	<section class="bg-account">
    		<div class="date-picker-wrap">
    			<section class="date-wrap">
	    			<date-picker
	    				class="custom-calendar max-w-full"
	    				:attributes="attrs"
	    				mode="date" 
	    				v-model="date" 
	    				is-expanded>
	    				</date-picker>
	    		</section>
    		</div>
    		
    		<ul style="background-color: red;">
    			<template v-for="item in events_curse">
					<li>{{item.customData.title}}</li>
				</template>
    		</ul>
    	</section>
	</student-layout>
</template>

<script>
	import moment from 'moment';
	import DatePicker from 'v-calendar/lib/components/date-picker.umd'
	
	export default {
	    components: {
	    	DatePicker,
	    },
	    data() {
	        return {
	        	date: "",
	        	date1: '2021-01-14 14:38:00',
	        	events_curse: null,
	        	attrs: [
	        		{
			          	key: 'today',
			          	highlight: 'green',
			        	dates: new Date(2021, 0, 5),
			        	customData: {
				            title: 'Lunch 111',
				            class: 'bg-red-600 text-white',
				        },
			        },
			        {
			          	key: 'today',
			          	highlight: 'yellow',
			         	dates: '2021-01-14 14:38:00',
			         	customData: {
				            title: 'Lunch 222',
				            class: 'bg-red-600 text-white',
				        },
			        },
				],
	    	}
	    },
      	methods: {
        	
    	},
    	watch: {
	     	date: {
	     		handler: function (value) {
	     			var valObj = this.attrs.filter(function(elem){
	     				//console.log(moment(elem.dates).locale("ru").format('LL'));
		    			if(moment(elem.dates).locale("ru").format('LL') == moment(value).locale("ru").format('LL')) 
					    	return elem;
					});

					if(valObj.length > 0){
						this.events_curse = valObj;
					}else{
						this.events_curse = null;
					}
		    	},
		        deep: true
	     	}
	   	},
	   
	}
</script>

<style scoped>
	.bg-account{
		background: #F5F7F8;
		width: 100%;
    	height: 100%;
	}

	.date-wrap{
		width: 50%;
	}
	.date-picker-wrap{
		display: flex;
		padding: 20px 60px;
	}
	.mine{
		position: absolute;
	}
</style>