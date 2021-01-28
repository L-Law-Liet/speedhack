<template>
    <section class="account-wrap">
        <header-student @toggleClass="toggleClassAside()" ></header-student>
        <div class="wrap-content">
            <aside-teacher :activeClass="activeClass"></aside-teacher>
            <section class="content-wrap" :class="{'active': activeClass}">
                <slot></slot>  
            </section>
        </div>
       
        <footer-main></footer-main>
    </section>
</template>

<script>
import FooterMain from '@/Speedhack/Components/Details/Footer';
import HeaderStudent from '@/Speedhack/Components/Account/HeaderStudent';
import AsideTeacher from '@/Speedhack/Components/Account/AsideTeacher';

export default {
    components: {
        FooterMain,
        HeaderStudent,
        AsideTeacher
    },
    data() {
        return {
           activeClass: false
        }
    },
    methods: {
        toggleClassAside(){
            this.activeClass = !this.activeClass;
        }
    },
}
</script>
<style scoped>
    .wrap-content{
        display: flex;
    }
    .content-wrap{
        width: calc(100% - 320px);
    }

    .content-wrap.active{
        width: calc(100% - 100px);
    }
</style>