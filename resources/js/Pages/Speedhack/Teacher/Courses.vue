<template>
	<teacher-layout>
		<section class="bg-account">
    		<div class="title-page"><span>Мои курсы</span></div>
    		
    			<div class="pg-50">
    				<div class="row" v-if="!empty">
	    				<template v-for="item in courses">
		    				<div class="col-12 col-md-6 col-lg-6 col-xl-4">
		    					<course :course="item"></course>
		    				</div>
		    			</template>
	    			</div>

	    			<div class="empty-wrap" v-else>
	    				<span class="title">В данный момент у вас нет онлайн курсов</span>
	    				<a class="btn-main">Начать курс</a>
	    			</div>
    			</div>		
    		
    	</section>
	</teacher-layout>
</template>
<script>
	import Course from '@/Speedhack/Components/Account/CoursePercentTeacher';

	export default {
    components: {
       Course
    },
    data() {
        return {
           	empty: false,
           	courses:[
           		{
	           		title: "General English",
	           		lessons: 12,
	           		img: '/images/course/course-1.jpg',
	           		percent: 90,
           		},
           		{
	           		title: "Начальная арифметика",
	           		lessons: 8,
	           		img: '/images/course/course-2.jpg',
	           		percent: 50,
           		},
           		{
	           		title: "General English",
	           		lessons: 12,
	           		img: '/images/course/course-1.jpg',
	           		percent: 90,
           		},
           		{
	           		title: "Начальная арифметика",
	           		lessons: 8,
	           		img: '/images/course/course-2.jpg',
	           		percent: 50,
           		},
           ]
        }
    },
    methods: {
        
    },
}
</script>
<style scoped>
	.bg-account{
		background: #F5F7F8;
		width: 100%;
    	height: 100%;
	}

	.title-page{
		padding: 30px 60px;
		border-bottom: 1px solid #E0E3EB;
		margin-bottom: 30px;
	}
	.title-page span{
		font-size: 24px;
		font-family: "Inter-Bold", sans-serif;
		color: #050A1C;
	}
	.container{
		padding-left: 45px;
		padding-right: 45px;
	}
	.pg-50{
		padding-left: 60px;
		padding-right: 60px;
	}
	@media only screen and (max-width: 768px) {
	    .account-title{
	        padding: 20px;
	    }
	    .title-page{
	      	padding: 30px 20px;
	   	}
	   	.pg-50{
	   		padding-right: 20px;
	   		padding-left: 20px;
	   	}
  	}
</style>