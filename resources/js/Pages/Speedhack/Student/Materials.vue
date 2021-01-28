<template>
    <student-layout>
    	<section class="bg-account">
    		<div class="title-page"><span>Мои материалы</span></div>
    		<section class="tab-wrap">
    			<div class="item active">Grammar</div>
    			<div class="item">Vocabulary</div>
    		</section>
    		<section class="table-wrap">
    			<table class="table-main">
		            <tr>
		                <th>№</th>
		                <th>Name</th>
		                <th>Subject</th>
		                <th>Actions</th>
		            </tr>
		            <tr>
		                <td>1</td>
		                <td>Present Simple</td>
		                <td>Introduction</td>
		                <td class="btns-wrap">
		                	<a class="btn-table"> <img src="/images/icons/trash-2.svg"> </a>
		                	<a class="btn-table"> <img src="/images/icons/download-blue.svg"> </a>
		            	</td>
		             
		            </tr>
		             <tr>
		                <td>2</td>
		                <td>Past Simple</td>
		                <td>Introduction</td>
		                <td class="btns-wrap">
		                	<a class="btn-table"> <img src="/images/icons/trash-2.svg"> </a>
		                	<a class="btn-table"> <img src="/images/icons/download-blue.svg"> </a>
		            	</td>
		            </tr>
		        </table>
		        
		        <a class="btn-next"> Загружить еще </a>
    		</section>
		</section>
	</student-layout>
</template>
<script>
	export default {
	    components: {
	    	
	    },
	    data() {
	        return {
	        }
	    }
	}
</script>
<style scoped>
	.bg-account{
		background: #F5F7F8;
		width: 100%;
    	height: 100%;
    }
	.title-page{
		padding: 30px 60px;
	}
	.title-page span{
		font-size: 24px;
		font-family: "Inter-Bold", sans-serif;
		color: #050A1C;
	}
	.tab-wrap{
		border-bottom: 1px solid #E0E3EB;
		display: flex;
		padding-right: 60px;
		padding-left: 60px;
		margin-bottom: 46px;
	}
	.tab-wrap .item{
		padding: 8px 0px;
		font-size: 18px;
		font-family: "Inter", sans-serif;
		color: rgb(123, 131, 139);
		margin-right: 40px;
		margin-bottom: -1px;
	}
	.tab-wrap .item.active{
		color: #003ECB;
		border-bottom: 1px solid #003ECB;
	}

	.table-wrap{
		padding-left: 60px;
		padding-right: 60px;
		display: flex;
		flex-direction: column;
	}

	.table-main{
		font-family: "Inter", sans-serif;
	  	border-collapse: collapse;
	  	width: 100%;
	  	background: #FFFFFF;
	  	box-shadow: 0px 4px 16px rgba(110, 120, 130, 0.12);
	  	border-radius: 8px;
	  	margin-bottom: 20px;
	}

	.table-main th {
		text-align: left;
		padding: 26px 0px 26px 40px; 
		font-family: "Inter", sans-serif;
		font-size: 18px;
		color: #979797;
	}

	.table-main td {
	   	border-collapse: collapse;
	  	text-align: left;
	  	padding: 26px 0px 26px 40px; 
		font-family: "Inter", sans-serif;
		font-size: 18px;
	    color: #050A1C;
	}

	.table-main tr:nth-child(even) {
	  background-color: #F9F9FA;
	}

	.btns-wrap{
		display: flex;
		align-items: center;
	}
	.btn-table img{
		width: 24px;
		height: 24px;
	}
	.btn-table:first-child{
		margin-right: 10px;
	}

	.btn-table:last-child{
		margin-left: 10px;
	}
	.btn-next{
		font-family: "Inter", sans-serif;
		font-size: 16px;
		line-height: 19px;
		text-align: right;
		text-decoration-line: underline;
		color: rgba(44, 44, 42, 0.8);
	}
</style>