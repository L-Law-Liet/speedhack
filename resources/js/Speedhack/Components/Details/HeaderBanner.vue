<template>
	<header class="header-welcome">
		<a href="/" class="logo_main">
			<img src="/images/logo.png">
		</a>

		<ul class="links" :class="{'active': mobileMenu}">
			<li class="item"><a href="/news">Новости</a></li>
			<li class="item"><a href="/all/courses">Курсы</a></li>
			<li class="item"><a href="/teacher">Стать учителем</a></li>
			<li class="item"><a href="/login/main"> <img src="/images/icons/log-in.svg"> Войти</a></li>
		</ul>
		<button @click="toggleMenu" class="menu-btn"><img src="/images/icons/menu-mobile.svg"></button>
		
	</header>
</template>
<script>
	export default {
    data() {
        return {
           	mobileMenu: false
        }
    },
    methods: {
        toggleMenu(){
            this.mobileMenu = !this.mobileMenu;
        },
        
    },
   	}
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
	.menu-btn{
		display: none;
		background-color: transparent;
		
	}
	.menu-btn img{
		width: 35px;
		height: 35px;
	}
	@media only screen and (max-width: 768px) {
		.header-welcome .links{
			width: 100%;
			flex-direction: column;
			align-items: flex-start;
			display: none;
			transition: all .3s linear;
			margin-top: 20px;
		}
		.header-welcome .links.active{
			display: flex;
			animation: fade-in 1s;
		}
		.header-welcome .links .item{
			margin-right: 0px;
			padding: 10px;
			width: 100%;
		}

		.header-welcome{
			flex-direction: column;
			align-items: flex-start;
			position: relative;
		}

		.menu-btn{
			display: block;
			position: absolute;
			top: 42px;
			right: 15px;
		}

		@keyframes fade-in {
		  from {
		    opacity: 0;
		  }
		  to {
		    opacity: 1;
		  }
		}
	}
</style>
