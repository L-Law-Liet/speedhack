<template>
	<header class="header-white">
		<div class="container">
			<div class="wrap-header-white">
				<a href="/" class="logo_main">
					<img src="/images/logo_2.png">
				</a>

				<ul class="links">
					<li class="item"><a href="/news">Новости</a></li>
					<li class="item"><a href="/all/courses">Курсы</a></li>
					<li class="item"><a href="/teacher">Стать учителем</a></li>
					<li class="item"><a href="/login/main"> <img src="/images/icons/log-in-black.svg"> Войти</a></li>
				</ul>
			</div>
		</div>
	</header>
</template>
<script>
	
</script>

<style scoped>
	.header-white{
		padding: 20px 0px;
		border-bottom: 1px solid  #E0E3EB;
	}
	.wrap-header-white{
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	.logo_main{
		width: 187px;
	}
	.logo_main img{
		width: 100%;
		height: 100%;
		object-fit: contain;
	}
	.wrap-header-white .links{
		display: flex;
		align-items: center;
		margin-bottom: 0px;
	}
	.wrap-header-white .links .item{
		margin-right: 90px;
	}
	.wrap-header-white .links .item:last-child{
		margin-right: 0px;
	}
	.wrap-header-white .links .item a{
		font-family: 'Inter', sans-serif;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 32px;
		color: #050A1C;;
		text-decoration: none;
	}
</style>

