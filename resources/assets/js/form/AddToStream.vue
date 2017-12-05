<template>

    <div class="panel ">

        <div class="panel-body">
          <form @submit.prevent="onSubmit">
              <input class="form-control" placeholder="Section Name" v-model="form.body" ></input>
        <p
          v-if="form.errors.has('body')"
          v-text="form.errors.get('body')"
          >
        </p>
          
            <button type="submit" class="btn btn-default" name="button">+ Add Section</button>
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
