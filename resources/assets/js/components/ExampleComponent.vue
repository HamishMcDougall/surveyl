<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
            <ul class="list-group">
                <draggable @update="updateDBorder" :list="statuses" >
                      <li v-for="(status,index) in statuses" class="list-group-item">
                                  <router-link :to="`${status.id}`" exact >
                        {{status.body}}
                          <!--  <p @click="deleteItem(index)" id="thisisid">Delete {{status.id}}</p>-->
                            </router-link>
                      </li>

                </draggable>
                  </ul>
                  <add-to-stream @completed="addStatus"></add-to-stream>
            </div>

<!-- Right hand side -->
              <div class="col-xs-8">


              <router-view></router-view>




                <form @submit.prevent="updateDBorder">
                  <button type="submit" class="btn btn-primary pull-right" name="button">Save and continue</button>
                </form>

              </div>
<!-- end right hand side -->

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
            console.log('Component created.', this.statuses)
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
        deleteItem:function(index) {
            this.statuses.splice(index, 1);
            var  passData = this.statuses;
        },
        addStatus(status){
          this.statuses.unshift(status);
          window.scrollTo(0,0);
        },
        updateDBorder(){
          // passing the status data
        var  passData = this.statuses;
          //    console.log( passData)
          axios.patch('/statuses', {
              passData
          })
          .then(function (response) {
            console.log(passData);
          })
          .catch(function (error) {
            console.log(error);
          });
        }



      },


    }
</script>

<style>
.router-link-active{
  background-color: black;
  color:white;
}

.sortable-chosen{
    box-shadow: 0px 0px 20px grey;
}

</style>
