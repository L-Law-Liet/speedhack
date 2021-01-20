<template>
	<section class="lessons">
		<template v-for="(lesson, index) in lessons">
			<div class="item">
				<div class="white-bg" v-if="lesson.status == 'wait'"></div>
				<b-button v-b-toggle="'collapse-' + index" class="content-wrap">
					<div class="texts">
						<span class="title">Раздел {{ index + 1 }} {{ lesson.title }}</span>
						<div class="wrap">
							<div class="icons"><img src="/images/icons/video.svg"> {{ lesson.count_lessons }} lessons & task</div>
							<div class="icons"><img src="/images/icons/file-text.svg"> {{ lesson.homeworks }}  lessons & task</div>
						</div>	
					</div>
					<div class="wrap-rigth">
						<div class="status" v-if="lesson.status == 'done'">
							<img src="/images/icons/check-success.svg"> Пройдено
						</div>
						<div class="status" v-if="lesson.status == 'current'">
							<img src="/images/icons/pause-circle.svg"> Доступно
						</div>
						<div class="status" v-if="lesson.status == 'wait'">
							<img src="/images/icons/alert-circle.svg"> В ожидании
						</div>

						<div class="collapse-button"><img src="/images/icons/arraw-blue.svg"></div>
					</div>
					
				</b-button>
				<b-collapse :id="'collapse-' + index" v-if="lesson.status !== 'wait'">
				    <ul class="lessons-list">
				    	<template v-for="(item, i) in lesson.lessons">
				    		<li :class="{'active': item.status == 'current' }">
				    			<span class="lesson_title"> <b>{{ index + 1}}.{{ i + 1 }}</b> {{ item.title }}</span>

				    			<div class="fasts">
				    				<div class="icons">
				    					<img src="/images/icons/clock.svg" v-if="item.status !== 'current'">
				    					<img src="/images/icons/clock-white.svg" v-else>
				    					 {{ item.min }} min
				    				</div>
				    				<div class="icons">
				    					<img src="/images/icons/paperclip.svg" v-if="item.status !== 'current'"> 
				    					<img src="/images/icons/paperclip-white.svg" v-else>
				    					{{ item.files }} file
				    				</div>
				    				<div class="icons">
				    					<img src="/images/icons/check-success.svg" v-if="item.status == 'done'">
										<img src="/images/icons/pause-circle-white.svg" v-if="item.status == 'current'"> 
										<img src="/images/icons/alert-circle.svg" v-if="item.status == 'wait'">
									</div>
				    			</div>	
				    		</li>
				    	</template>
				    </ul>
				</b-collapse>
			</div>
		</template>
	</section>
	
</template>
<script>
	export default {
	    props: {
	      lessons: Array,
	    },
	}
</script>
<style scoped>
	.plans{
		padding-bottom: 100px;
		padding-top: 100px;
	}
	
	.item{
		margin-bottom: 30px;
		background: #FFFFFF;
		box-shadow: 0px 4px 16px rgba(110, 120, 130, 0.12);
		border-radius: 8px;
		position: relative;
	}
	.lessons .item:last-child{
		margin-bottom: 0px;
	}	
	.content-wrap{
		padding: 26px 26px 28px;
		display: flex;
		justify-content: space-between;
		background-color: transparent !important;
		border: none !important;
		box-shadow: none !important;
		width: 100%;
		align-items: center;
	}
	.content-wrap.not-collapsed .collapse-button{
		transform: rotateX(180deg);
	}
	
	.content-wrap .title{
		font-family: 'Inter-Bold', sans-serif;
		font-size: 20px;
		display: block;
		margin-bottom: 16px;
		color: #000;
		text-align: left;
	}
	.icons{
		display: flex;
		align-items: center;
		margin-right: 60px;
		font-size: 14px;
		font-family: 'Inter', sans-serif;
		color: #7B838B;
	}
	.icons img{
		width: 23px;
		height: 23px;
		margin-right: 16px;
	}
	.white-bg{
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0px;
		left: 0px;
		background-color: #fff;
		opacity: .5;
	}
	.content-wrap .wrap{
		display: flex;
	}
	.collapse-button{
		background-color: transparent !important;
		border: none !important;
		box-shadow: none !important;
	}
	.collapse-button:active{
		background-color: transparent;
		border: none;
		box-shadow: none;
	}
	.collapse-button:focus{
		background-color: transparent;
		border: none;
		box-shadow: none;
	}

	.wrap-rigth{
		display: flex;
	}
	.wrap-rigth .status{
		display: flex;
		align-items: center;
		font-size: 14px;
		color: #414247;
		font-family: 'Inter', sans-serif;
		margin-right: 40px;
	}

	.wrap-rigth .status img{
		margin-right: 8px;
	}
	.lessons-list{
		border-top: 1px solid #F1F2F2;
		margin-bottom: 0px;
	}
	.lessons-list li{
		padding: 22px 26px;
		display: flex;
		justify-content: space-between;
		align-items: center;
		border-bottom: 1px solid #F1F2F2;
	}
	.lessons-list li:last-child{
		border-bottom: none;
	}
	.lesson_title{
		font-family: 'Inter', sans-serif;
		font-size: 16px;
		color: #414247;
	}
	.lesson_title b{
		margin-right: 20px;
	}
	.fasts{
		display: flex;
		align-items: center;
	}
	.fasts .icons:first-child{
		min-width: 120px;
		margin: 0px;
	}
	.icons:last-child{
		margin: 0px;
	}
	.lessons-list li.active{
		background: linear-gradient(269.61deg, #0B55FF -0.41%, rgba(12, 75, 220, 0.863663) 17.86%, rgba(13, 62, 175, 0.690452) 37.18%, rgba(16, 21, 32, 0.136305) 59.8%, rgba(165, 181, 217, 0.0676675) 71.9%, rgba(177, 189, 216, 0) 82.5%), #003ECB;
	}
	.lessons-list li.active .lesson_title{
		color: #fff;
	}

	.lessons-list li.active .fasts .icons{
		color: #fff;
	}
</style>