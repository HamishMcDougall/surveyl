<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" v-for="status in statuses">
                    <div class="panel-heading">
                      {{status.user.name}} said...
                    </div>
                      <div class="panel-body" v-text="status.body">
                      </div>
                </div>

                  <add-to-stream></add-to-stream>


            </div>
        </div>
    </div>
</template>

<script>

  import AddToStream from '../form/AddToStream.vue';


    export default {
      components:{
        AddToStream
      },

      created(){
        axios.get('/statuses')
          .then(response => this.statuses = response.data);
            console.log('Component created.')
      },
        mounted() {
            console.log('Component mounted.')
        },
      data:function(){
        return{
          statuses:[]
        }
      }

    }
</script>
