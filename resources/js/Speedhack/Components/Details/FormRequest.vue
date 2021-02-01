<template>
	<section class="form-request">
		<div class="container">
			 <div class="row justify-content-center">
			    <div class="col-12 col-md-7">
			      	<div class="content">
			      		<p class="title">Оставьте заявку</p>
			      		<p class="subtitle">Оставьте нам заявку мы свяжемся с вами и ответим на любые возникшие вопросы</p>
			      		<form class="form-wrap" @submit.prevent="submitForm()">
			      			<div class="form-group">
							    <label>ФИО</label>
							    <input v-model.trim="$v.fullname.$model"
                                       :class="{invalid: ($v.fullname.$invalid && $v.fullname.$dirty)}"
                                    type="text" class="form-control" placeholder="Ваша имя и фамилия">
                                <span class="invalid-message" v-if="($v.fullname.$invalid && $v.fullname.$dirty)">
                                    Ошибка!
                                </span>
							</div>

							<div class="form-group">
							    <label>Ваш e-mail</label>
							    <input  v-model.trim="$v.email.$model"
                                    type="text" class="form-control"
                                        :class="{ invalid: ($v.email.$invalid && $v.email.$dirty) }"
                                        placeholder="Введите e-mail">
                                <span class="invalid-message" v-if="($v.email.$invalid && $v.email.$dirty)">
                                    Ошибка!
                                </span>
							</div>

							<div class="form-group">
							    <label>Ваш номер телефона</label>
							    <input  v-model.trim="$v.phone.$model"
                                        :class="{invalid: ($v.phone.$invalid && $v.phone.$dirty)}"
                                        type="text" class="form-control" placeholder="Введите номер">
                                <span class="invalid-message" v-if="($v.phone.$invalid && $v.phone.$dirty)">
                                    Ошибка!
                                </span>
							</div>
							<p class="text_info">
								Нажимая кнопку “Записаться” вы оставляете заявку и наш менеджер свяжется с Вами в ближайшее время
							</p>
							<button type="submit" class="btn-main">
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
import {required, email, minLength} from 'vuelidate/lib/validators';
export default {
    data: () => ({
        fullname: '',
        email: '',
        phone: '+7',
    }),
    validations: {
        fullname: {required},
        email: {required, email},
        phone: {required, minLength: minLength(11)},
    },
    methods: {
        submitForm(){
            this.$v.$touch();
        }
    }
}
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
		text-align: center;
		font-size: 36px;
		line-height: 34px;
	}
	.content .subtitle{
		font-family: 'Inter', sans-serif;
		text-align: center;
		font-size: 18px;
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

    .invalid {
        border: 2px solid #E36018 !important;
    }
    .invalid-message {
        font-family: Inter;
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        /* identical to box height, or 150% */

        display: flex;
        align-items: center;

        color: #E36018;
    }

    @media only screen and (max-width: 768px) {
		.form-wrap{
			width: 100%;
		}
	}
</style>

