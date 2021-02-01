<template>
	<welcome-layout>
		<header-white></header-white>
		<bread :breads="breads"></bread>

		<div class="container news-item-wrap">
			<div class="row">
				<div class="col-12 col-md-8 col-lg-7">
					<section class="content-wrap">
						<span class="title">
							Новости
						</span>
						<span class="news_title">Награждение учеников</span>
						<span class="date">25 май, 2020</span>
						<span class="text">У нас открылись курсы по рисованию. Если вы любите рисовать, тогда этот курс именно для вас. Ты можешь увидеть результат даже после трех уроков с нашим профессионалным учителем. Вы просили мы добавили! Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.

						Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информациюЭто текст о компании. 

						Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании. о деятельности компании. Наша компания (швейное производство) в поисках лучшего сотрудника на позицию «Маркетолог». Если вы креативны, полны идей и интересных предложений, то обязательно ознакомьтесь с нашими условиями и откликайтесь на вакансию.Умеете собирать и анализировать данные по рынку. Знаете основы проведения маркетинговых исследований.</span>
					</section>
					
				</div>
				<div class="col-12 col-md-4 col-lg-5">
					<div class="img">
						<img src="/images/ilustration/news-5.jpg">
					</div>
				</div>
			</div>
		</div>	
		</welcome-layout>
</template>
<script>
	import HeaderWhite from '@/Speedhack/Components/Details/HeaderWhite';
	import Bread from '@/Speedhack/Components/Details/Bread';

	export default {
	    props: {
	      
	    },
	    components: {
	        HeaderWhite,
	        Bread
	    },
	    data() {
	        return {
	           	breads: [
	           		{
	           			title: "Главная",
	           			link: "/",
	           		},
	           		{
	           			title: "Новости",
	           			link: "/news",
	           		},
           		],
	        }
	    },
	    methods: {
		    
		}
	}

</script>
<style scoped>
	.news-item-wrap{
		margin-top: 50px;
		margin-bottom: 60px;
	}
	.title{
		font-family: 'Inter-Bold', sans-serif;
		font-weight: 600;
		font-size: 50px;
		color: #050A1C;
		display: block;
		margin-bottom: 24px;
	}
	.news_title{
		font-family: 'Inter', sans-serif;
		font-weight: 500;
		font-size: 32px;
		color: #050A1C;
	}
	.date{
		font-family: 'Inter', sans-serif;
		font-weight: 500;
		font-size: 14px;
		display: block;
		margin-bottom: 20px;
		color: #7B838B;
	}
	.text{
		font-family: 'Inter', sans-serif;
		color: #414246;
		opacity: 0.9;
		font-size: 16px;
	}
	.content-wrap{
		width: 86%;
	}
	.img{
		width: 100%;
		height: 490px;
		border-radius: 8px;
		overflow: hidden;
		margin-top: 20px;
	}
	.img img{
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	@media only screen and (max-width: 768px) {
		.content-wrap{
			width: 100%;
		}
	}
	@media only screen and (max-width: 1024px) {
		.img{
			height: 290px;
		}

	}
</style>