<template>
    <student-layout>
    	<section class="bg-account">
    		<div class="account-title">
    			<img src="/images/icons/arrow-left-blue.svg"><span>Раздел 1: Introduction</span>
    		</div>
    	
        <section class="lesson-wrap">
          <section class="video-wrap">
              <div class="title">
                1.1 Present Simple
              </div>
              <div class="video"></div>
          </section>
          <section class="class-wrap">
            <class-course></class-course>
          </section>
        </section>
    	 
       <div class="content-wrap">
         <span class="title">Описание</span>
         <p>В этом уроке вы проходите тему Present Simple - Настоящее время. Ознакомитесь 
          с грамматикой и словарем. Пройдете тему Счасливая Семья.</p>
       </div>

       <div class="content-wrap">
         <span class="title">Материалы</span>
         <div class="btn-wrap">
            <a @click="download('http://127.0.0.1:8000/images/logo.png')"  class="btn-download"> 
              <img src="/images/icons/file-text-white.svg" class="img-1"> 
              present simple.pdf 
              <img src="/images/icons/download.svg" class="img-2">
            </a>

            <a @click="download('http://127.0.0.1:8000/images/logo.png')"  class="btn-download"> 
              <img src="/images/icons/file-text-white.svg" class="img-1"> 
              vocabulary.pdf
              <img src="/images/icons/download.svg" class="img-2">
            </a>
         </div> 
        
       </div>
    	</section>
    </student-layout>
</template>
<script>
	import ClassCourse from '@/Speedhack/Components/Account/ClassCourse';
  export default {
	     components: {
	    	ClassCourse
	    },
	    data() {
	        return {
	        
	    	}
	    },
      methods: {
        download(link) {
              axios({
                    url: link,
                    method: 'GET',
                    responseType: 'blob',
                }).then((response) => {
                     var fileURL = window.URL.createObjectURL(new Blob([response.data]));
                     var fileLink = document.createElement('a');
   
                     fileLink.href = fileURL;
                     fileLink.setAttribute('download', 'file.png');
                     document.body.appendChild(fileLink);
   
                     fileLink.click();
                });
        }
    },
	}
</script>
<style scoped>
	.bg-account{
		background: #F5F7F8;
		width: 100%;
    height: 100%;
	}
	.account-title{
		font-family: "Inter-Bold", sans-serif;
		padding: 30px 20px;
		font-weight: 600;
		color: #050A1C;
		font-size: 28px;
    border-bottom: 1px solid #E0E3EB;
	}
	.account-title img{
		margin-right: 16px;
	}
	.lesson-wrap{
    display: flex;
    padding-right: 60px;
    padding-left: 60px;
    margin-bottom: 60px;
    padding-top: 40px;
    width: 100%;
    max-width: 100%;
    overflow: auto;
  }
  .video-wrap{
    width: 50%;
    padding-right: 15px;
  }
  .video-wrap .title{
    font-family: "Inter-Bold", sans-serif;
    font-weight: 600;
    font-size: 26px;
    color: #003ECB;
    margin-bottom: 24px;
  }
  .video-wrap .video{
    width: 100%;
    height: 570px;
    border-radius: 8px;
    overflow: hidden;
    background-color: #003ECB;
  }

  .class-wrap{
    width: 50%;
    padding-left: 15px;
  }
  .content-wrap{
    margin-bottom: 40px;
    padding-right: 60px;
    padding-left: 60px;
  }
  .content-wrap .title{
    font-family: "Inter", sans-serif;
    font-size: 20px;
    color: #7B838B;
     display: block;
    margin-bottom: 8px;

  }
    .content-wrap p{
      font-family: "Inter", sans-serif;
      font-size: 18px;
      color: #2C2D32;
    }

    .btn-download{
      
      background: #003ECB;
      border-radius: 8px;
      font-family: "Inter", sans-serif;
      padding: 16px 20px;
      font-size: 16px;
      color: #FFFFFF;
    }
    .btn-download .img-1{
      margin-right: 16px;
    }
    .btn-download .img-2{
      margin-left: 16px;
    }

    .content-wrap .btn-wrap{
      display: flex;
    }
    .content-wrap .btn-wrap .btn-download{
      margin-right: 16px;
    }
</style>