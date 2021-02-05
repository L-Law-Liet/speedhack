<template>
    <section class="page-wrap">
        <slot></slot>
        <footer-main></footer-main>

        <modal name="formReguest" 
            :width="450"
            :height="499"
            :adaptive="true"> 
            <modal-form></modal-form>
        </modal>
        

         <modal name="formReguestTeacher" 
            :width="450"
            :height="499"
            :adaptive="true"> 
            <modal-form-teacher></modal-form-teacher>
        </modal>


        <modal name="successModel" 
            :width="450"
            :height="366"
            :adaptive="true"> 
            <modal-success></modal-success>
        </modal>
        
        
    </section>
</template>

<script>
import FooterMain from '@/Speedhack/Components/Details/Footer';

export default {
    components: {
        FooterMain,
    },
    methods: {
        
    },
}
</script>
