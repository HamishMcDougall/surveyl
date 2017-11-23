<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <draggable :list="statuses" class="dragArea">
                      <div class="panel panel-default" v-for="(status,index) in statuses">
                          <div class="panel-heading">
                            {{index}} said...
                          </div>
                            <div class="panel-body" v-text="status.body">
                            </div>
                      </div>
                </draggable>

                <form @submit.prevent="updateDBorder">
                  <button type="submit" class="btn btn-primary" name="button">Submit</button>

                </form>

                  <add-to-stream @completed="addStatus"></add-to-stream>
            </div>
        </div>


    </div>




</template>

<script>

  import AddToStream from '../form/AddToStream.vue';
import draggable from 'vuedraggable';

    export default {
      components:{
        AddToStream,
         draggable
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
      },
      methods:{
        addStatus(status){
          this.statuses.unshift(status);
          window.scrollTo(0,0);
        },
        updateDBorder(){


        var  passData = this.statuses;
          //    console.log( passData)

          axios.patch('/statuses', {
              passData
          })
          .then(function (response) {
            console.log(response);
          })
          .catch(function (error) {
            console.log(error);
          });
        }
      }

    }
</script>
