<template>
    <student-layout>
    	<section class="bg-account">
    		<div class="account-title">
    			<img src="/images/icons/arrow-left-blue.svg"><span>Новости</span>
    		</div>
    		<div class="news-wrap">	
    		<div class="row">
	    		<template v-for="item in news">
	    			<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 item-news">
	    				<item-news :news="item"></item-news>
	    			</div>
				</template>
			</div>
			</div>	
    	</section>
    </student-layout>
</template>
<script>
	import ItemNews from '@/Speedhack/Components/Details/ItemNews';

	export default {
	    components: {
	    	ItemNews
	    },
	    data() {
	        return {
	        	news: [
				{
					img: "/images/ilustration/news-1.jpg",
					date: "22 сентябрь, 2020",
					title: "Онлайн обучение",
					text: "У нас открылись курсы по рисованию. Если вы любите рисовать, тогда этот курс именно для вас. Вы просили мы добавили!"
				},
				{
					img: "/images/ilustration/news-2.jpg",
					date: "22 сентябрь, 2020",
					title: "Онлайн обучение",
					text: "У нас открылись курсы по рисованию. Если вы любите рисовать, тогда этот курс именно для вас. Вы просили мы добавили!"
				},
				{
					img: "/images/ilustration/news-3.jpg",
					date: "22 сентябрь, 2020",
					title: "Онлайн обучение",
					text: "У нас открылись курсы по рисованию. Если вы любите рисовать, тогда этот курс именно для вас. Вы просили мы добавили!"
				},
				{
					img: "/images/ilustration/news-4.jpg",
					date: "22 сентябрь, 2020",
					title: "Онлайн обучение",
					text: "У нас открылись курсы по рисованию. Если вы любите рисовать, тогда этот курс именно для вас. Вы просили мы добавили!"
				},
				{
					img: "/images/ilustration/news-4.jpg",
					date: "22 сентябрь, 2020",
					title: "Онлайн обучение",
					text: "У нас открылись курсы по рисованию. Если вы любите рисовать, тогда этот курс именно для вас. Вы просили мы добавили!"
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
		border-bottom: 1px solid #E0E3EB;
	}
	.account-title img{
		margin-right: 16px;
	}
	.item-news {
		margin-bottom: 20px;
	}
	.item-news .wrap-news-slider-item{
		padding: 0px;
		margin-bottom: 16px;
	}
	.news-wrap{
		padding-left: 60px;
		padding-right: 60px;
		padding-top: 40px;
	}
	@media only screen and (max-width: 767px) {
		.news-wrap{
			padding-left: 20px;
    		padding-right: 20px;
		}
	}
</style>