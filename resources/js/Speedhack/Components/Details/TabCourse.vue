<template>
	<div class="container">
        <div class="wrap-center">
            <span class="title-center">Как мы учим</span>
        </div>
        <div class="tab-course">
		  	<b-tabs
		  		active-nav-item-class="active-tab-nav-item">
		    	<b-tab active>
		      		<template #title>
		        		<img src="/images/icons/television.svg"> Онлайн-урок
		      		</template>
		      		<item-tab-course 
		      			img="/images/ilustration/tab-1.png" 
		      			title="Онлайн-урок"
		      			text="Большинство курсов мы проводим в формате живых вебинаров. Вы не просто слушаете лекции, но и общаетесь с преподавателем в режиме реального времени. Для курсов в записи мы предусмотрели живые воркшопы и QA-сессии. Всё — чтобы вы максимально вовлеклись в обучение."
		      		></item-tab-course>
		      	</b-tab>

		    	<b-tab>
			      	<template #title>
			        	<img src="/images/icons/pencil.svg">  Домашняя работа
			      	</template>
			      	<item-tab-course 
		      			img="/images/ilustration/tab-2.png" 
		      			title="Домашняя работа"
		      			text="Большинство курсов мы проводим в формате живых вебинаров. Вы не просто слушаете лекции, но и общаетесь с преподавателем в режиме реального времени. Для курсов в записи мы предусмотрели живые воркшопы и QA-сессии. Всё — чтобы вы максимально вовлеклись в обучение."
		      		></item-tab-course>
		    	</b-tab>

		    	<b-tab>
			      	<template #title>
			        	<img src="/images/icons/student.svg">  Обратная связь
			      	</template>
			      	<item-tab-course 
		      			img="/images/ilustration/tab-3.png" 
		      			title="Обратная связь"
		      			text="Большинство курсов мы проводим в формате живых вебинаров. Вы не просто слушаете лекции, но и общаетесь с преподавателем в режиме реального времени. Для курсов в записи мы предусмотрели живые воркшопы и QA-сессии. Всё — чтобы вы максимально вовлеклись в обучение."
		      		></item-tab-course>
		    	</b-tab>

		    	<b-tab>
			      	<template #title>
			        	<img src="/images/icons/mortarboard.svg"> Сертификат
			      	</template>
			      	<item-tab-course 
		      			img="/images/ilustration/tab-4.png" 
		      			title="Сертификат"
		      			text="Большинство курсов мы проводим в формате живых вебинаров. Вы не просто слушаете лекции, но и общаетесь с преподавателем в режиме реального времени. Для курсов в записи мы предусмотрели живые воркшопы и QA-сессии. Всё — чтобы вы максимально вовлеклись в обучение."
		      		></item-tab-course>
		    	</b-tab>
			</b-tabs>
		</div>
    </div>
</template>
<script>
	import ItemTabCourse from '@/Speedhack/Components/Details/ItemTabCourse';

	export default {
	    props: {
	      
	    },
	    components: {
	        ItemTabCourse,
	    },
	    data() {
	        return {
	           
	        }
	    },
	    methods: {
	       
	    },
	    mounted() {
	        
	    },
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


</style>