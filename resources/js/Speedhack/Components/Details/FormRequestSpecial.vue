<template>
	<section class="form-request">
		<div class="container">
			 <div class="row">
			 	<div class="col-12 col-md-6">
			 		<section class="price-wrap">
			 			<div class="wrap">
				 			<span class="title-main">Стоимость обучения</span>
					 		<div class="new-price">
					 			<span>Первый урок бесплатный</span>
					 			<p>18 000 ₸</p>
					 		</div>
					 		<div class="old-price">
					 			<span>Без скидки</span>
					 			<p>24 000 ₸</p>
					 		</div>
				 		</div>
			 		</section>
			 	</div>
			    <div class="col-12 col-md-6">
			      	<div class="content">
			      		<p class="title">Оставьте заявку</p>
			      		<p class="subtitle">Оставьте нам заявку мы свяжемся с вами и ответим на любые возникшие вопросы</p>
			      		<form class="form-wrap">
			      			<div class="form-group">
							    <label>ФИО</label>
							    <input type="text" class="form-control" placeholder="Ваша имя и фамилия">
							</div>

							<div class="form-group">
							    <label>Ваш e-mail</label>
							    <input type="text" class="form-control" placeholder="Введите e-mail">
							</div>

							<div class="form-group">
							    <label>Ваш номер телефона</label>
							    <input type="text" class="form-control" placeholder="Введите номер">
							</div>
							<p class="text_info">
								Нажимая кнопку “Записаться” вы оставляете заявку и наш менеджер свяжется с Вами в ближайшее время
							</p>
							<button class="btn-main">
								Записаться
							</button>
			      		</form>
			      	</div>
			    </div>
			</div>
		</div>		
	</section>
</template>
<script>

</script>
<style scoped>
	.form-request{
		background-image: url(/images/bg/yellow-bg.jpg);
		background-repeat: no-repeat;
		background-position: top center;
    	background-size: cover;
    	padding: 100px 0px;
	}
		
	.content .title{
		font-family: 'Inter-Bold', sans-serif;
		font-size: 36px;
		width: 70%;
		margin: 0 auto;
		margin-bottom: 8px;
		line-height: 34px;
	}
	.content .subtitle{
		font-family: 'Inter', sans-serif;
		font-size: 18px;
		width: 70%;
		margin: 0 auto;
		margin-bottom: 16px;
		line-height: 28px;
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
		color: #050A1C;
		margin-bottom: 32px;
	}
	.btn-main{
		width: 100%;
		font-size: 18px;
	    line-height: 20px;
	    text-align: center;
	    padding: 16px;
	}
	.title-main{
		font-family: 'Inter-Bold', sans-serif;
		font-size: 63px;
		line-height: 74px;
		color: #050A1C;
		display: block;
		margin-bottom: 50px;
	}
	.new-price{
		margin-bottom: 30px;
	}
	.new-price span{
		font-size: 18px;
		line-height: 22px;
		color: #2C2D32;
		font-family: 'Inter', sans-serif;
	}
	.new-price p{
		font-family: 'Inter-Bold', sans-serif;
		font-weight: 800;
		font-size: 70px;
		margin-bottom: 0px;
		line-height: 68px;
	}
	.old-price span{
		font-size: 16px;
		line-height: 19px;
		font-family: 'Inter', sans-serif;
		color: #9B8839;
	}
	.price-wrap{
		display: flex;
		flex-direction: column;
		align-items: center;
	}
	.price-wrap .wrap{
		width: 70%;
	}
	.old-price p{
		font-family: 'Inter-Bold', sans-serif;
		text-decoration-line: line-through;
		color: #9B8839;
		margin-bottom: 0px;
		font-size: 36px;
		line-height: 40px;
	}	
</style>