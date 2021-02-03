<template>
    <student-layout>
    	<section class="bg-account">
    		<div class="account-title">
    			<span>Мои курсы</span>
    		</div>
    			<div class="pg-50">
    				<div class="row" v-if="!empty">
	    				<template v-for="item in courses">
		    				<div class="col-12 col-md-4">
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
    </student-layout>
</template>
<script>
	import Course from '@/Speedhack/Components/Account/CoursePercent';

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
	        toggleClassAside(){
	            this.activeClass = !this.activeClass;
	        }
	    },
	}
</script>
<style scoped>
	.bg-account{
		background: #F5F7F8;
		width: 100%;
	}
	.account-title{
		font-family: "Inter-Bold", sans-serif;
		border-bottom: 1px solid #E0E3EB;
		padding: 30px 60px;
		font-weight: 600;
		color: #050A1C;
		font-size: 28px;
	}
	.pg-50{
		padding: 50px;
	}
	 @media only screen and (max-width: 768px) {
	    .account-title{
	        padding: 20px;
	    }
	    .pg-50{
	    	padding: 40px 20px;
	    }
	  }
</style>