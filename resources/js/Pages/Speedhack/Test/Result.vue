<template>
	<student-layout>
    	<section class="bg-account">
    		<aside class="menu-wrap">
				<div class="ball-wrap">
					 <div class="image">
		                <img src="/images/ilustration/result.svg" alt="CUP">
		            </div>
					<span class="title">You're on Results page</span>
					<button class="mobile-btn" @click="toggleMenu">Progress bar <img src="/images/icons/arraw-blue.svg"></button>
				</div>
				<div class="main-lists" :class="{'active': mobileMenu}">
					<div class="lists-wrap">
						<span class="title-main">Trainer To Do:</span>
						<ul class="lists">
							<li class="item success-item">
								<img src="/images/icons/check-green.svg">
								<span class="title">Answer the questuions</span>
								<b class="ball">7.0</b>
							</li>

							<li class="item no-access">
								<img src="/images/icons/check-grey.svg">
								<span class="title">Answer the questuions</span>
								<b class="ball">7.0</b>
							</li>

							<li class="item current">
								<img src="/images/icons/check-black.svg">
								<span class="title">Answer the questuions</span>
								<b class="ball">7.0</b>
							</li>

							<li class="item done">
								<img src="/images/icons/flag.svg">
								<span class="title">Answer the questuions</span>
								<b class="ball">7.0</b>
							</li>
						</ul>
					</div>
				</div>
			</aside>
    		<section class="content-wrap">
    			<div class="account-title">
	    			<img src="/images/icons/arrow-left-blue.svg"><span>Present Simple - Homework</span>
	    		</div>

    			 <div class="container">
			        <h3 class="title-main">
			            Homework results
			        </h3>
			        <div class="result">
			            <div class="points">
			                <p class="full_point"><b>7.4</b> <span>points</span></p>
			                <span class="comment">We'd like to say</span>
			                <h2 class="congratulations">You are so inspiring!</h2>
			                <div class="point">
			                    <span class="grammar">
			                        Grammar
			                        <div>7.8</div>
			                    </span>
			                    <span class="vocabulary">
			                        Vocabulary
			                        <div>6.8</div>
			                    </span>
			                </div>
			            </div>
			            <div class="image">
			                <img src="/images/ilustration/goblet.svg" alt="CUP">
			            </div>
			        </div>
			    </div>
    		</section>
    	</section>
    </student-layout>
</template>
<script>
	import MenuAside from '@/Speedhack/Components/Test/AsideMenu';

	export default {
		components: {
			MenuAside
		},
	    data() {
	        return {
	        	mobileMenu: false
			}
	    },
	    methods: {
	        toggleMenu(){
	            this.mobileMenu = !this.mobileMenu;
	        },
	    }
	}
</script>
<style scoped>
	.account-title{
		font-family: "Inter-Bold", sans-serif;
		padding: 30px 20px;
		font-weight: 600;
		color: #050A1C;
		font-size: 28px;
	}
	.account-title img{
		margin-right: 16px;
	}
	.wrap-content{
        display: flex;
    }
    .content-wrap{
        width: calc(100% - 320px);
    }
    .container{
    	padding-left: 60px;
    	padding-right: 60px;
    }
    .content-wrap.active{
        width: calc(100% - 100px);
    }
    .bg-account{
		background: #F5F7F8;
		width: 100%;
    	height: 100%;
    	display: flex;
	}

	.content-wrap{
		width: 100%;
	}

	.title-main {
	    font-family: "Inter", sans-serif;
	  	color: #003ECB;
	    font-size: 32px;
   		margin-bottom: 30px;
	}

	.result {
	    background: rgba(213, 240, 176, 0.76);
	    border-radius: 8px;
	    padding: 50px 70px;
	    display: flex;
	}

	.full_point {
	    font-family: "Inter", sans-serif;
	    
	    font-size: 80px;
	    
	    color: #050A1C;
	}

	.full_point span{
	    font-size: 40px;
	}

	.comment {
	    font-family: Inter;
	    font-style: normal;
	    font-weight: normal;
	    font-size: 28px;
	   	color: #478566;
	}

	.congratulations {
	    font-family: Inter;
	    font-style: normal;
	    font-weight: 600;
	    font-size: 42px;
	    
	    color: #050A1C;
	}

	.point {
	    display: flex;
	    max-width: 80%;
    	justify-content: space-between;
	}

	.point span {
	    display: flex;
	   	align-items: center;
	}

	.point .grammar div {
	    margin-left: 16px;
	    padding: 2px 6px;
	    background: #3BA972;
	    border-radius: 5px;
	}

	.point .vocabulary div {
	    margin-left: 16px;
	    padding: 2px 6px;
	    background: #3BA972;
	    border-radius: 5px;
	}

	.image {
	    margin-left: 14%;
	}

	.image img{
	    max-width: 80%;
	    margin-top: -10%;
	}


	.menu-wrap{
		width: 340px;
		height: 100%;
		background-color: #fff;
	}
	.ball-wrap{
		height: 200px;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		border-bottom: 1px solid  #E0E3EB;
		padding-bottom: 20px;
	}
	.ball-wrap .number{
		color: #003ECB;
		font-size: 78px;
		line-height: 80px;
		font-family: 'Inter', sans-serif;
	}
	.ball-wrap .title{
		color: #7B838B;
		font-size: 18px;
		font-family: 'Inter', sans-serif;
	}
	.lists-wrap{
		padding: 20px 15px;
	}
	.lists-wrap .title-main{
		font-family: 'Inter-Bold', sans-serif;
		font-size: 20px;
		color: #050A1C;
		display: inline-block;
		margin-bottom: 20px;
	}
	.lists .item{
		display: flex;
		margin-bottom: 16px;
	}
	.lists .item img{
		margin-right: 8px;
	}

	.lists .item .title{
		color: #979797;
		font-size: 14px;
		font-family: 'Inter', sans-serif;
		margin-right: auto;
	}
	.lists .item .ball{
		font-family: 'Inter', sans-serif;
		color: #979797;
		font-size: 14px;
	}
	.lists .item.current .title{
		color: #050A1C;
	}

	.lists .item.current .ball{
		color: #050A1C;
	}
	.ball-wrap .image{
		width: 92px;
		height: 92px;
	}
	.ball-wrap .image img{
		width: 100%;
		height: 100%;
		object-fit: contain;
	}

		.mobile-btn{
		display: none;
	}
	@media only screen and (max-width: 768px) {
		.mobile-btn{
			display: flex;
			width: 100%;
			border: none;
			background-color: #fff;
			justify-content: space-between;
			align-items: center;
			border-top: 1px solid #E0E3EB;
			padding: 14px 20px;
    		margin-top: 16px;
		}
		.mobile-btn img{
			width: 16px;
			height: 16px;
		}
		.menu-wrap{
			width: 100%;
		}
		.ball-wrap{
			height: auto;
			padding-bottom: 0px;
    		padding-top: 16px;
		}
		.ball-wrap .number{
			font-size: 42px;
    		line-height: 52px;
		}

		.main-lists{
			display: none;
    	}
		.main-lists.active{
			display: block;
			animation: fade-in 1s;
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

	@media only screen and (max-width: 1024px){
		.result .points{
			width: 60%;
		}
		.image{
			width: 40%;
			margin: 0px;
		}
		.image img{
			width: 100%;
			max-width: 100%;
			height: 100%;
			object-fit: contain;
		}
		.result{
			padding: 50px 40px;
		}
	}
	@media only screen and (max-width: 1010px) and (min-width: 768px){
		.result .points{
			width: 80%;
		}
		.image{
			width: 20%;
		}
		.image img{
			width: 100%;
			max-width: 100%;
			height: 100%;
			object-fit: cover;
		}
	}

	@media only screen and (max-width: 768px) {
		.bg-account{
			flex-direction: column;
		}
		.tab-wrap{
			padding-right: 20px;
    		padding-left: 20px;
		}
		.tab-wrap .item:last-child{
			margin: 0px;
		}
		.text-test{
			margin-right: 20px;
			margin-left: 20px;
		}
		.container{
			padding-left: 20px;
    		padding-right: 20px;
		}
		.result{
			padding: 30px 20px;
			margin-bottom: 100px;
		}
		.full_point{
			font-size: 60px;
		}
		.congratulations{
			font-size: 24px;
		}
		.image{
			margin-left: 0px;
		}
		.image img{
			max-width: 130%;
		}
		.point .grammar div{
			margin-right: 16px;
		}
	}
</style>