<template>



    <div class="panel ">
        <div class="panel  panel-heading">
          Push to the Stream...

        </div>

        <div class="panel-body">
          <form @submit.prevent="onSubmit">
              <textarea class="form-control" placeholder="I have something to say" v-model="form.body" ></textarea>
<p
  v-if="form.errors.has('body')"
  v-text="form.errors.get('body')"
  >
</p>

          <button type="submit" class="btn btn-primary" name="button">Submit</button>
              </form>
        </div>

    </div>





</template>

<script>
export default {

data(){
  return{
    form: new Form ({body:''})
  }
},

  methods:{
    onSubmit(){
      console.log('submitBtn');
      this.form
        .post('/statuses')
        .then(status=> this.$emit('completed', status));
    }

  }

}
</script>
