<template>
	<section class="comments-block">
		<block-title 
	        title="Отзывы"
	        subtitle="Предлагаем вам почитать отзывы наших учеников"
	    ></block-title>
	    <div class="container">
	    	<div class="raiting">
		    	<span class="number">4.2</span>
		    	<stars :count="stars"></stars>
		    	<span class="info">84 оценок</span>
		    </div>
		    <div class="commnets-wrap">
		    	<template v-for="item in commnets">
		    		<item-comment
		    			:comment="item"
			    	 	></item-comment>
		    	</template>
		    </div>
		    <a href="/comments" class="btn-link">Посмотреть все отзывы</a>
	    </div>
	</section>
</template>
<script>
	import BlockTitle from '@/Speedhack/Components/Details/BlockTitle';
	import Stars from '@/Speedhack/Components/Details/Stars';
	import ItemComment from '@/Speedhack/Components/Details/ItemComment';
	export default {
   	components: {
      	BlockTitle,
      	Stars,
      	ItemComment
    },
     data() {
        return {
        	stars: 4,
           	commnets: [
           		{
           			name: "Махметова Азиза",
           			img: "/images/users/avatar-1.jpg",
           			stars: 3,
           			text: "Этот курс прошел на Ураа! Отдельно ограмное спасибо моему учителю Айдын агай. Сейчас мой уровень английского языка стал намного лучше и программа у вас самая Этот курс прошел на Ураа! Отдельно ограмное спасибо моему учителю Айдын агай. Сейчас мой уровень английского языка стал намного лучше и программа у вас самая.",
           			date: "03.12.20",
           		},
           		{
           			name: "Махметова Азиза 2",
           			img: "/images/users/avatar-1.jpg",
           			stars: 2,
           			text: "Этот курс прошел на Ураа! Отдельно ограмное спасибо моему учителю Айдын агай. Сейчас мой уровень английского языка стал намного лучше и программа у вас самая Этот курс прошел на Ураа! Отдельно ограмное спасибо моему учителю Айдын агай. Сейчас мой уровень английского языка стал намного лучше и программа у вас самая.",
           			date: "03.12.20",
           		},
           ]

          
        }
	},
}
</script>
<style scoped>
	.raiting{
		display: flex;
		align-items: center;
		margin-bottom: 32px;
	}
	.number{
		font-family: 'Inter', sans-serif;
		font-weight: 600;
		font-size: 46px;
		color: #003ECB;
		margin-right: 40px;
	}
	.info{
		font-family: 'Inter', sans-serif;
		font-weight: 500;
		font-size: 20px;
		margin-left: 40px;
	}
	.btn-link{
		font-family: 'Inter', sans-serif;
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		color: #003ECB;
		margin-top: 12px;
	}
	.btn-link:hover{
		text-decoration: none;
		color: #003ECB;
	}
	.comments-block{
		margin-bottom: 100px;
	}
</style>