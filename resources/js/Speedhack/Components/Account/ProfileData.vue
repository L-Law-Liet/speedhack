<template>
	<section class="form-wrap">
		<div class="avatar">
			<label class="upload__type">
                <input type="file" 
                    accept="image/jpeg, image/png" 
                    ref="image" 
                    @change="uploadImage"
                   >
                <span class="upload__type-photo">
                    <img v-if="photoPreview" :src="photoPreview" alt="Фото" class="preview">
                    <img v-else src="/images/icons/avatar.jpg">
                </span>

                <span class="upload__type-desc">
                   <img src="/images/icons/camera.svg"> Заменить аватарку
                </span>

            </label>
		</div>
		
		<form class="form-wrap-main">
			<div class="column-wrap">
				<div class="form-group">
				    <label>Ваша имя</label>
				    <input type="text" class="form-control" placeholder="Введите имя">
				</div>
				<div class="form-group">
				    <label>Ваша фамилия</label>
				    <input type="text" class="form-control" placeholder="Введите фамилию">
				</div>
				<div class="form-group">
				    <label>Ваше отчество</label>
				    <input type="text" class="form-control" placeholder="Введите отчество">
				</div>
			</div>
			<div class="column-wrap">
				<div class="form-group">
				    <label>Ваш e-mail</label>
				    <input type="text" class="form-control" placeholder="Введите e-mail">
				</div>
				<div class="form-group">
				    <label>Ваш номер телефона</label>
				    <input type="text" class="form-control" placeholder="Введите номер">
				</div>
				<div class="form-group">
				    <label>Ваш город</label>
				    <input type="text" class="form-control" placeholder="Введите отчество">
				</div>
				<button class="btn-main">Добавить</button>
			</div>
		</form>
		
	</section>
</template>
<script>
	export default {
	    components: {
	    	
	    },
	    data() {
	        return {
	        	 photoPreview: null,
	        }
	    },
	    methods: {
	    	async uploadImage() {
	            let formData = new FormData();
	            formData.append('file', this.$refs.image.files[0]);
	            const { data} = await window.axios.post(route('account.print_save').url(), formData);
	           	console.log(data.nameFile);
	          	this.updatePhotoPreview();
	        },
	        updatePhotoPreview() {
	            const reader = new FileReader();
	            reader.onload = (e) => {
	                this.photoPreview = e.target.result;
	            };
	            reader.readAsDataURL(this.$refs.image.files[0]);
        	},
	    },
	}
</script>
<style scoped>
	.form-wrap{
		background: #FFFFFF;
		box-shadow: 0px 4px 16px rgba(110, 120, 130, 0.12);
		border-radius: 8px;
		display: flex;
		padding: 60px;
		margin-left: 60px;
		margin-right: 60px;
	}
	.form-wrap-main{
		display: flex;
		width: 100%;
	}
	.upload__type{
		width: auto;
		display: flex;
		flex-direction: column;
		align-items: center;
	}
	.column-wrap{
		width: 50%;
		padding: 25px;
	}
	.upload__type-photo{
		border: 4px solid #F2994A;
		border-radius: 50%;
		overflow: hidden;
		width: 210px;
		height: 210px;
		margin-bottom: 16px;
	}
	.avatar{
		margin-right: 20px;
	}
	.upload__type-photo img{
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.upload__type-desc{
		display: flex;
		align-items: center;
		font-size: 16px;
		text-decoration-line: underline;
		color: #7B838B;
	}

	.upload__type-desc img{
		margin-right: 10px;
	}

	.form-group label{
		font-family: 'Inter', sans-serif;
		font-size: 16px;
		line-height: 24px;
	}
	.form-control{
		padding: 11px;
		height: auto;
		border: 1px solid #CCCCCC;
		box-sizing: border-box;
		border-radius: 8px;
	}
	.form-control:focus{
		border-color: #F2994A;
	}
	.form-control:placeholder{
		color: #CCCCCC;
	}
	.btn-main{
		width: 100%;
		padding: 12px;
		font-size: 16px;
		margin-top: 20px;
	}
</style>