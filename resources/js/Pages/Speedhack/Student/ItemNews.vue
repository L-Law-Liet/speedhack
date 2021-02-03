<template>
    <student-layout>
    	<section class="bg-account">
    		<div class="account-title">
    			<img src="/images/icons/arrow-left-blue.svg"><span>Новости</span>
    		</div>
    		<section class="news-item">
    			<div class="content-wrap">
    				<span class="title">Награждение учеников</span>
    				<span class="date">25 май, 2020</span>
    				<p class="text">
    					У нас открылись курсы по рисованию. Если вы любите рисовать, тогда этот курс именно для вас. Ты можешь увидеть результат даже после трех уроков с нашим профессионалным учителем. Вы просили мы добавили! Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.

						Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информациюЭто текст о компании. 

						Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании. о деятельности компании. Наша компания (швейное производство) в поисках лучшего сотрудника на позицию «Маркетолог». Если вы креативны, полны идей и интересных предложений, то обязательно ознакомьтесь с нашими условиями и откликайтесь на вакансию.Умеете собирать и анализировать данные по рынку. Знаете основы проведения маркетинговых исследований.
    				</p>
    			</div>
    			<div class="img-wrap">
    				<div class="img">
    					<img src="/images/ilustration/404.png">
    				</div>
    			</div>
    		</section>
    	</section>
    </student-layout>
</template>
<script>
	export default {
	    components: {
	    	
	    },
	    data() {
	        return {
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

	.account-title{
		font-family: "Inter-Bold", sans-serif;
		padding: 30px 20px;
		font-weight: 600;
		color: #050A1C;
		font-size: 28px;
		border-bottom: 1px solid #E0E3EB;
	}
	.account-title img{
		margin-right: 16px;
	}
	.news-item{
		padding: 40px;
		background: #FFFFFF;
		box-shadow: 0px 4px 16px rgba(110, 120, 130, 0.12);
		border-radius: 8px;
		display: flex;
		margin: 40px 60px 60px;
	}
	.content-wrap{
		width: 60%;
		margin-right: 16px;
	}
	.title{
		font-family: "Inter", sans-serif;
		color: #050A1C;
		font-size: 32px;
		display: inline-block;
	}	
	.date{
		font-family: "Inter", sans-serif;
		font-size: 14px;
		color: #7B838B;
		display: block;
		margin-bottom: 12px;
	}
	.text{
		font-size: 16px;
		color: #414246;
	}
	.img-wrap{
		width: 40%;
	}
	.img{
		width: 100%;
		height: 350px;
		overflow: hidden;
		border-radius: 8px;
	}
	.img img{
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	@media only screen and (max-width: 768px) {
		.news-item{
			margin: 20px 30px 20px;
		}
		.news-item{
			flex-direction: column;
			margin: 10px 15px 10px;
    		padding: 20px;
    		margin-top: 40px;
    		margin-bottom: 100px;
		}
		.content-wrap{
			width: 100%;
		}
		.img-wrap{
			margin-bottom: 50px;
			width: 100%;
			order: 1;
		}
		.img{
			height: 250px;
		}
		.content-wrap{
			margin-right: 0px;
			order: 2;
		}
	}
</style>
