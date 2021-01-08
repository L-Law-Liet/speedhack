<template>
	<welcome-layout>
		<header-white></header-white>
		<bread :breads="breads"></bread>
		
		<div class="container">
	        <div class="wrap-center">
	            <span class="title-center">Наши курсы</span>
	        </div>
        	<div class="tab-course">
		  		<b-tabs
		  			active-nav-item-class="active-tab-nav-item">
			    	<b-tab active>
		      		<template #title>
		        		<span class="circle"></span> Онлайн-урок
		      		</template>
			      		<div class="row top-40">
			      			<template v-for="item in courses">
			      				<div class="col-md-4">
			      					<item-course-block :course="item"></item-course-block>
					                
					            </div> 
			      			</template>
			        	</div>
	    			</b-tab>

	    			<b-tab>
		      		<template #title>
		        		<span class="circle"></span> Казахский язык
		      		</template>
			      		<div class="row top-40">
			      			<template v-for="item in courses">
			      				<div class="col-md-4">
			      					<item-course-block :course="item"></item-course-block>
					                
					            </div> 
			      			</template>
			        	</div>
	    			</b-tab>
 				</b-tabs>
		  	</div>
    	</div>
    	<form-request></form-request>
	</welcome-layout>
</template>
<script>
	import HeaderWhite from '@/Speedhack/Components/Details/HeaderWhite';
	import ItemCourseBlock from '@/Speedhack/Components/Details/ItemCourseBlock';
	import FormRequest from '@/Speedhack/Components/Details/FormRequest';
	import Bread from '@/Speedhack/Components/Details/Bread';

	export default {
	    props: {
	      
	    },
	    components: {
	        HeaderWhite,
	        ItemCourseBlock,
	        FormRequest,
	        Bread
	    },
	    data() {
	        return {
	           courses: [
	           		{
	           			text: "Профессия",
	           			img: "/images/ilustration/course-1.png",
	           			title: "Английский язык",
	           			date: "18 месяцев",
	           		},
	           		{
	           			text: "Профессия",
	           			img: "/images/ilustration/course-2.png",
	           			title: "Казахский язык",
	           			date: "18 месяцев",
	           		},
           		],
           		breads: [
	           		{
	           			title: "Главная",
	           			link: "/",
	           		},
           		],
	        }
	    },
	    methods: {
		    
		}
	}
</script>
<style scoped>
	.title-center{
		text-align: center;
		font-family: 'Inter', sans-serif;
		font-weight: bold;
		font-size: 50px;
		line-height: 78px;
		color: #050A1C;
	}
	.wrap-center{
		display: flex;
		justify-content: center;
		margin-top: 80px;
	}
	.circle{
		display: block;
		width: 8px;
		height: 8px;
		background-color: #A339FF;
		border-radius: 50%;
		overflow: hidden;
		margin-right: 8px;
	}
	.top-40{
		margin-top: 40px;
	}

	.tab-course .nav-tabs .nav-link{
		display: flex;
		justify-content: center;
		align-items: center;
	}
</style>