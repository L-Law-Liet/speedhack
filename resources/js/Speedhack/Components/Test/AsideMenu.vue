<template>
	<aside class="menu-wrap">
		<div class="ball-wrap">
			<span class="number">0</span>
			<span class="title">score</span>
		</div>
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
	</aside>
</template>
<script>
	
</script>
<style scoped>
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
		font-size: 20px;
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

</style>