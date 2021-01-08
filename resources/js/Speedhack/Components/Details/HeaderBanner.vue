<template>
	<header class="header-welcome">
		<a href="/" class="logo_main">
			<img src="/images/logo.png">
		</a>

		<ul class="links">
			<li class="item"><a href="#">Новости</a></li>
			<li class="item"><a href="#">Курсы</a></li>
			<li class="item"><a href="#">Стать учителем</a></li>
			<li class="item"><a href="#"> <img src="/images/icons/log-in.svg"> Войти</a></li>
		</ul>
	</header>
</template>
<script>
	
</script>

<style scoped>
	.header-welcome{
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 42px 0px;
	}
	.header-welcome .logo_main{
		width: 187px;
	}
	.header-welcome .links{
		display: flex;
		align-items: center;
		margin-bottom: 0px;
	}
	.header-welcome .links .item{
		margin-right: 90px;
	}
	.header-welcome .links .item:last-child{
		margin-right: 0px;
	}
	.header-welcome .links .item a{
		font-family: 'Inter', sans-serif;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 32px;
		color: #FFFFFF;
		text-decoration: none;
	}
</style>
