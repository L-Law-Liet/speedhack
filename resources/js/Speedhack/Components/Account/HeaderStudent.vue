<template>
	<header class="account-header">
		<div class="indicator one">
			<button class="btn-menu" @click="toggleClassAside"><img src="/images/icons/align-justify.svg"></button>
			<a href="/" class="logo"><img src="/images/logo_2.png"></a>	
			<div class="form-group search-inputs">
			    <input type="text" class="form-control" placeholder="Поиск">
			    <img src="/images/icons/search.svg" class="icon">
			</div>
		</div>

		<div class="indicator two">
			<button class="btn-icon"><img src="/images/icons/heart.svg"></button>
			<button class="btn-icon active">
				<img src="/images/icons/bell.svg">
				<div class="message-modal-wrap">
					<!-- <modal-messages></modal-messages> -->
				</div>	
			</button>
			<a href="" class="avatar"><img src="/images/users/avatar-1.jpg"></a>
		</div>
	</header>
</template>
<script>
	import ModalMessages from '@/Speedhack/Components/Account/ModalMessages';

	export default {
		data() {
	        return {

	        }
	    },
	    components: {
	    	ModalMessages
	    },
	    methods: {
	        toggleClassAside() {
	        	this.$emit('toggleClass');
	        }
	    },
	}
</script>
<style scoped>
	.account-header{
		padding: 20px 40px;
		background-color: #fff;
		display: flex;
		justify-content: space-between;
		align-items: center;
		border-bottom: 1px solid #E0E3EB;
	}

	.account-header .indicator{
		display: flex;
		align-items: center;
	}
	.message-modal-wrap{
		position: absolute;
	    top: 50px;
	    right: -26px;
	    z-index: 3;
	}
	.btn-menu{
		background-color: transparent;
		border: none;
		margin-right: 30px;
		padding: 0px;
		width: 34px;
    	height: 36px;
	}
	.btn-menu img{
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.account-header .logo{
		width: 180px;
		height: 36px;
		margin: 0px;
		margin-right: 60px;
		padding-top: 5px;
	}
	.account-header .logo img{
		width: 100%;
	}
	.search-inputs{
		position: relative;
		margin-bottom: 0px;
	}
	.search-inputs .icon{
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		left: 13px;
		width: 24px;
		height: 24px;
	}
	.search-inputs .form-control{
		background: rgba(224, 229, 240, 0.4);
		border-radius: 8px;
		padding: 13px;
		border: none;
		padding-left: 47px;
		font-family: "Inter", sans-serif;	
		font-size: 18px;
		line-height: 22px;
		margin: 0px;
		min-width: 400px;
	}
	.search-inputs .form-control:placeholder{
		color: #B5B4B4;
	}
	.btn-icon{
		background-color: transparent;
		border: none;
		position: relative;
		margin-right: 20px;
	}
	.btn-icon.active:after{
		content: '';
		display: block;
		position: absolute;
		width: 10px;
		height: 10px;
		background: #E46E67;
		border: 1px solid #FFFFFF;
		border-radius: 50%;
		top: 2px;
		right: 6px;
	}
	.btn-icon img{
		width: 24px;
		height: 24px;
	}
	.avatar{
		width: 60px;
		height: 60px;
		border-radius: 50%;
		overflow: hidden;
	}
	.avatar img{
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
</style>