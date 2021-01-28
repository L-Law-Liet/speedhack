<template>
    <student-layout>
    	<section class="bg-account">
    		<div class="account-title">
    			<img src="/images/icons/arrow-left-blue.svg"><span>General English</span>
    		</div>
    		<section class="tab-wrap">
    			<div class="item active">Общий обзор</div>
    			<div class="item">Мои оценки</div>
    		</section>

    		<section class="overview-wrap">
    			<div class="item">
    				<img src="/images/icons/file-text.svg">
    				<div class="text-wrap">
    					<span class="title">18 / 24</span>
    					<span class="subtitle">Уроков</span>
    				</div>	
    			</div>

    			<div class="item">
    				<img src="/images/icons/book-open.svg">
    				<div class="text-wrap">
    					<span class="title">7 / 12</span>
    					<span class="subtitle">Задания</span>
    				</div>	
    			</div>

    			<div class="item">
    				<img src="/images/icons/clock.svg">
    				<div class="text-wrap">
    					<span class="title">18 часов</span>
    					<span class="subtitle">Длительность курса</span>
    				</div>	
    			</div>

    			<div class="item">
    				<img src="/images/icons/online-learning 1.svg">
    				<div class="text-wrap">
    					<span class="title">Айсауле Азаматова</span>
    					<span class="subtitle">Имя учителя</span>
    				</div>	
    			</div>
    		</section>

    		<div class="course-title">Онлайн-уроки</div>
    		<div class="colapse-wrap">
    			<lesson-collapse :lessons="lessons"></lesson-collapse>
    		</div>	
    	</section>
    </student-layout>
</template>
<script>
	import LessonCollapse from '@/Speedhack/Components/Account/LessonCollapse';

	export default {
	   
	    components: {
	    	LessonCollapse
	    },
	    data() {
	        return {
	        	h: 'fds',
	    		lessons:[
           			{
           				title: "Introduction",
           				count_lessons: 4, 
           				homeworks: 1,
           				status: 'done',
           				lessons: [
           					{
           						title: "Present Simple",
           						min: 60,
           						files: 2,
           						status: 'done',
           					},
           					{
           						title: "Past Simple",
           						min: 60,
           						files: 1,
           						status: 'done',
           					},
           					{
           						title: "Vocabulary ",
           						min: 60,
           						files: 1,
           						status: 'done',
           					},
           				]
           			},
           			{
           				title: "Started",
           				count_lessons: 2, 
           				homeworks: 2,
           				status: 'current',
           				lessons: [
           					{
           						title: "Present Simple",
           						min: 60,
           						files: 2,
           						status: 'done',
           					},
           					{
           						title: "Past Simple",
           						min: 60,
           						files: 1,
           						status: 'current',
           					},
           					{
           						title: "Past Simple",
           						min: 60,
           						files: 1,
           						status: 'wait',
           					},
           				]
           			},
           			{
           				title: "Getting started",
           				count_lessons: 2, 
           				homeworks: 2,
           				status: 'wait',
           				lessons: [
           					{
           						title: "Present Simple",
           						min: 60,
           						files: 2,
           						status: 'wait',
           					},
           					{
           						title: "Past Simple",
           						min: 60,
           						files: 1,
           						status: 'wait',
           					},
           				]
           			},
           		]
	    	}
	    }
	}
</script>
<style scoped>
	.bg-account{
		background: #F5F7F8;
		width: 100%;
    height: 100%;
    
	}
	.account-title{
		font-family: "Inter-Bold", sans-serif;
		padding: 30px 20px;
		font-weight: 600;
		color: #050A1C;
		font-size: 28px;
	}
	.account-title img{
		margin-right: 16px;
	}
	.tab-wrap{
		border-bottom: 1px solid #E0E3EB;
		display: flex;
		padding-right: 60px;
		padding-left: 60px;
		margin-bottom: 26px;
	}
	.tab-wrap .item{
		padding: 8px 0px;
		font-size: 18px;
		font-family: "Inter", sans-serif;
		color: rgb(123, 131, 139);
		margin-right: 40px;
		margin-bottom: -1px;
	}
	.tab-wrap .item.active{
		color: #003ECB;
		border-bottom: 1px solid #003ECB;
	}

	.overview-wrap{
		display: flex;
		border-bottom: 1px solid #E0E3EB;
		padding-right: 60px;
		padding-left: 60px;
		padding-bottom: 26px;
	}

	.overview-wrap .item{
		display: flex;
		margin-right: 70px;
	}
	.overview-wrap .item:last-child{
		margin-right: 0px;
	}
	.overview-wrap .item img{
		width: 26px;
		height: 26px;
		margin-right: 12px;
		margin-top: 7px;
	}
	.overview-wrap .item .text-wrap{
		display: flex;
		flex-direction: column;
	}

	.overview-wrap .item .text-wrap .title{
		font-family: "Inter-Bold", sans-serif;
		font-size: 20px;
		color: #050A1C;
	}
	.overview-wrap .item .text-wrap .subtitle{
		color: rgb(123, 131, 139);
		font-size: 14px;
		font-family: "Inter", sans-serif;
	}
	.course-title{
		font-family: "Inter", sans-serif;
		font-size: 20px;
		color: #414246;
		margin-bottom: 20px;
		margin-top: 32px;
		padding-right: 60px;
		padding-left: 60px;
	}
	.colapse-wrap{
		padding-right: 60px;
		padding-left: 60px;
		margin-bottom: 60px;
	}
</style>