<template>
    <section class="account-wrap">
        <header-student @toggleClass="toggleClassAside()" ></header-student>
        <div class="wrap-content">
            <aside-student :activeClass="activeClass"></aside-student>
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
import AsideStudent from '@/Speedhack/Components/Account/AsideStudent';

export default {
    components: {
        FooterMain,
        HeaderStudent,
        AsideStudent
    },
    data() {
        return {
           activeClass: true
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