<template>
	<div class="course">
		<div class="img">
			<img :src="course.img">
			<b-progress :value="course.percent" :max="100" class="mb-3"></b-progress>
		</div>
		<div class="content-wrap">
			<span class="subtitle">Название курса</span>
			<span class="title">{{ course.title }}</span>
			<div class="wrap">
				<div class="lesson"><img src="/images/icons/book-open.svg"> {{ course.lessons }} уроков</div>
				<a class="status">Active</a>
			</div>
			<div class="wr-details mb-10">
				<span>Стоимость курса:</span> 
				<b>24 000 ₸</b>
			</div>
			<div class="wr-details">
				<span>Количество учеников:</span> 
				<b>1</b>
			</div>
		</div>
	</div>
</template>
<script>
	export default {
	    props: {
	    	course: Object
	    }
	}
</script>
<style scoped>
	.course{
		background: #FFFFFF;
		box-shadow: 0px 4px 16px rgba(110, 120, 130, 0.12);
		border-radius: 8px;
		overflow: hidden;
		margin-bottom: 30px;
	}
	.course .progress{
		width: 100%;
		margin-bottom: 0px;
		height: 7px;
		border-radius: 0px;
		background-color: #E0E3EB;
	}
	.wrap{
		display: flex;
		align-items: center;
		justify-content: space-between;
		margin-bottom: 12px;
	}
	.wr-details{
		display:  flex;
		align-items: center;
		justify-content: space-between;
	}
	.status{
		padding: 5px 30px;
		font-size: 16px;
		color: #FFFFFF;
		background: #3BA972;
		border-radius: 8px;
	}
	.wr-details span{
		font-size: 16px;
		color: #7B838B;
		opacity: 0.9;
		font-family: "Inter", sans-serif;	
	}
	.wr-details b{
		font-family: "Inter-Bold", sans-serif;
		font-size: 16px;	
	}
	.course .img{
		height: 230px;
		width: 100%;
	}
	.course .img img{
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.content-wrap{
		padding: 20px 20px 25px;
		display: flex;
		flex-direction: column;
	}
	.content-wrap .subtitle{
		font-size: 14px;
		color: #7B838B;
		font-family: "Inter", sans-serif;	
		margin-bottom: 8px;
	}
	.content-wrap .title{
		font-family: "Inter-Bold", sans-serif;	
		font-size: 18px;
		line-height: 16px;
		color: #050A1C;
		margin-bottom: 16px;
	}
	.content-wrap .lesson{
		display: flex;
		align-items: center;
		font-size: 14px;
		line-height: 17px;
		color: #003ECB;
	}
	.content-wrap .lesson img{
		margin-right: 8px;

	}
</style>