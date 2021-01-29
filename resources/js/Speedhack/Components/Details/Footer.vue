<template>
	<footer class="footer-wrap">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-3">
			     	<div class="left-land">
			     		<a class="logo-footer">
			     			<img src="/images/logo.png">
			     		</a>
			     		<ul class="social-links">
			     			<li><a href="/"><img src="/images/icons/vk.svg"></a></li>
			     			<li><a href="/"><img src="/images/icons/instagram.svg"></a></li>
			     			<li><a href="/"><img src="/images/icons/facebook.svg"></a></li>
			     			<li><a href="/"><img src="/images/icons/youtube.svg"></a></li>
			     		</ul>
			     	</div>
			    </div>
			    <div class="col-12 col-md-6">
			    	<section class="main-links">
			    		<div class="links-wrap">
				    		<span class="title">Главная</span>
				    		<ul class="links">
				    			<li><a href="/">Курсы</a></li>
				    			<li><a href="/">Новости</a></li>
				    			<li><a href="/">Стать учителем</a></li>
				    			<li><a href="/">Войти</a></li>
				    		</ul>
				    	</div>
				    	<div class="links-wrap">
				    		<span class="title">Обучение</span>
				    		<ul class="links">
				    			<li><a href="/">Английский язык</a></li>
				    			<li><a href="/">Казахский язык</a></li>
				    			<li><a href="/">Руский язык</a></li>
				    			<li><a href="/">Математика</a></li>
				    			<li><a href="/">Физика</a></li>
				    		</ul>
				    	</div>
				    	<div class="links-wrap">
				    		<span class="title">О нас</span>
				    		<ul class="links">
				    			<li><a href="/">О компаний</a></li>
				    			<li><a href="/comments">Отзывы</a></li>
				    			<li><a href="/">Политика </br> конфиденциальности</a></li>
				    		</ul>
				    	</div>
			    	</section>
			    </div>
			    <div class="col-12 col-md-3">
			      	<div class="links-wrap">
			    		<span class="title">Контакты</span>
			    		<p class="address">РК, Алматы, пр. Назарбаева 301, ЖК Ренессанс, Блок Б2</p>
			    		<p class="phone">+ 7 777 123 45 67</p>
			    	</div>
			    </div>
			</div>
			<div class="row justify-content-between footer-bottom">
				<div class="col-12 col-md-3">
					<div class="text-bottom-left">
						<span class="text-bottom">2020, Speedhuck</span>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="text-bottom-right">
						<span class="text-bottom">Разработано в NIDGE Digital Agency</span>
					</div>

				</div>
			</div>
		</div>
	</footer>
</template>
<script>
export default {
    components: {

    },
    methods: {

    },
    computed: {

    }
}
</script>

<style scoped>
	.footer-wrap{
		background-image: url('/images/bg/footer.jpg');
		background-repeat: no-repeat;
		background-position: center;
    	background-size: cover;
    	padding: 68px 0 0px;
	}
	.left-land{
		height: 100%;
		margin-left: auto;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}
	.logo-footer{
		width: 80%;
		height: 40px;
	}
	.logo-footer img{
		width: 100%;
		height: 100%;
		object-fit: contain;
		object-position: left;
	}
	.social-links{
		padding: 0px;
		margin: 0px;
		display: flex;
		align-items: center;
	}
	.social-links li a{
		width: 50px;
		height: 50px;
	}
	.social-links li a img{
		width: 100%;
		height: 100%;
		object-fit: contain;
	}
	.main-links{
		display: flex;
		justify-content: space-between;
	}
	.links-wrap .title{
		font-family: 'Inter', sans-serif;
		font-weight: 500;
		font-size: 18px;
		line-height: 24px;
		color: #BBBBBB;
		display: inline-block;
		margin-bottom: 24px;
	}
	.links-wrap .links li a{
		font-family: 'Inter', sans-serif;
		font-weight: 500;
		font-size: 16px;
		line-height: 20px;
		display: inline-block;
		margin-bottom: 16px;
		color: #fff;
	}
	.links-wrap .address{
		font-family: 'Inter', sans-serif;
		font-weight: 500;
		font-size: 16px;
		margin-bottom: 22px;
		color: #fff;
	}
	.links-wrap .phone{
		font-family: 'Inter', sans-serif;
		font-weight: 500;
		font-size: 16px;
		line-height: 18px;
		color: #fff;
	}
	.footer-bottom{
		margin-top: 68px;
		border-top: 1px solid #646566;
		padding-top: 30px;
		padding-bottom: 30px;
	}
	.text-bottom{
		font-family: 'Inter', sans-serif;
		font-size: 14px;
		line-height: 17px;
		color: #FFFFFF;
	}
	.text-bottom.right{
		text-align: right;
	}
	.text-bottom-right{
		text-align: right;
	}
</style>
