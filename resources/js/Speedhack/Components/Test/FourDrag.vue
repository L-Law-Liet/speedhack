<template>
	<section>
		<div class="row">
    <div class="col-8">
      <h3>Draggable</h3>
      <draggable
        v-model="rows"
       	class="row wrap fill-height align-center sortable-list"
        style="background: grey;     flex-direction: column;"
      >
        <div
          v-for="row in rows"
          :key="row.index"
          class="sortable"
          
          style="background: blue; display: flex;"
        >
          <draggable
            :list="row.items"
           	:group="{ name: 'row' }"
            class="row wrap justify-space-around"
          >
            <div
              v-for="item in row.items"
              :key="item.title" lass="row-v"
            >
              <div style="height: 100px; width: 200px; margin-right: 20px; background-color: red">{{ item.title }}</div>
            </div>
          </draggable>
        </div>
      </draggable>
    </div>

    
  </div>
	</section>
</template>
<script>
	import draggable from 'vuedraggable'
	
	export default {
		props: {
	      	test: Array
	    },
		components: {
	    	draggable,
	    },
	    data() {
	        return {
	        	//rows:'',
		      	enabled: true,
      rows: [
        {
          index: 1,
          items: [
            {
              title: "item 1"
            },
            {
              title: "item 4"
            },
          ]
        },
        {
          index: 2,
          items: [
            {
              title: "item 2"
            },
            {
              title: "item 3"
            }
          ]
        }
      ]
		    }
	    },
	    mounted() {
		  	//this.rows = this.test;
		  	
		},
		methods: {
			
		},
	}
</script>
<style scoped>
</style>