<template>
	<section class="form-request">
		<div class="container">
			 <div class="row justify-content-center">
			    <div class="col-7">
			      	<div class="content">
			      		<p class="title">Можете оставить отзыв</p>
			      		<p class="subtitle">Если вы ученик нашего образовательного центра то можете оставить нам отзыв</p>
			      		<form class="form-wrap">
			      			<div class="form-group">
							    <label>ФИО</label>
							    <input type="text" class="form-control" placeholder="Ваша имя и фамилия">
							</div>

							<div class="form-group">
							    <label>Ваш комментарий</label>
							    <textarea class="form-control" rows="3" placeholder="Напишите комментарий"></textarea>
							</div>

							<div class="form-group">
							    <label>Можете оценить</label>
							    <set-stars></set-stars>
							</div>

							<p class="text_info">
								Нажимая кнопку “Записаться” вы оставляете заявку и наш менеджер свяжется с Вами в ближайшее время
							</p>
							<button class="btn-main">
								Отправить
							</button>
			      		</form>
			      	</div>
			    </div>
			</div>
		</div>		
	</section>
</template>
<script>
	import SetStars from '@/Speedhack/Components/Details/SetStars';

	export default {
	    components: {
	        SetStars,
	    },
	    methods: {
	        
	    },
	}
</script>
<style scoped>
	.form-request{
		background-image: url(/images/bg/bg-2.jpg);
		background-repeat: no-repeat;
		background-position: top center;
    	background-size: cover;
    	padding: 100px 0px;
	}
	
	.content .title{
		font-family: 'Inter-Bold', sans-serif;
		text-align: center;
		font-size: 36px;
		line-height: 34px;
		color: #fff;
	}
	.content .subtitle{
		font-family: 'Inter', sans-serif;
		text-align: center;
		font-size: 18px;
		line-height: 28px;
		color: #fff;
	}
	.form-wrap{
		width: 70%;
		margin: 0 auto;
	}
	.form-group{
		margin-bottom: 20px;
	}
	.form-group label{
		font-family: 'Inter', sans-serif;
		font-size: 18px;
		line-height: 24px;
		margin-bottom: 8px;
		color: #fff;
	}
	.form-group .form-control{
		padding: 16px;
    	height: auto;
		background: #FFFFFF;
		border-radius: 8px;
		border:none;
	}
	.form-group .form-control::placeholder{
		color: #C4C4C4;
	}
	.text_info{
		font-family: 'Inter', sans-serif;
		font-size: 16px;
		line-height: 19px;
		text-align: center;
		color: #fff;
		margin-bottom: 32px;
	}
	.btn-main{
		width: 100%;
		font-size: 18px;
	    line-height: 20px;
	    text-align: center;
	    padding: 16px;
	}
</style>