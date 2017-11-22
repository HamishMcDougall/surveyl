<template>



    <div class="panel ">
        <div class="panel  panel-heading">
          Push to the Stream...

        </div>

        <div class="panel-body">
          <form @submit.prevent="onSubmit">
              <textarea class="form-control" placeholder="I have something to say"></textarea>
          </form>

          <button type="button" class="btn btn-primary" name="button">Submit</button>
        </div>

    </div>





</template>

<script>
export default {
  methods:{
    onSubmit(){
      
    }

  }

}
</script>
