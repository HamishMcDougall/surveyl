<template>

<div>

  <h3>{{sectionQuestions.questionSection}}</h3>

<ul class="list-group">


  <draggable :list="sectionQuestions.questionsText" >
          <li v-for="(Question, index) in sectionQuestions.questionsText"
          v-bind:key="Question.id"
          class="list-group-item"
          >
          <!-- remove it from the vue array
           <button v-on:click="sectionQuestions.questionsText.splice(index, 1)">X</button>-->

            {{Question.question}}


            <div v-for="(Option, index) in Question.options.qoptions">

                    <input
                    id="checkbox"
                      type="checkbox"
                      :value="Option"
                    >{{Option}}<br>
            </div>


              <!--  <p @click="deleteItem(index)" id="thisisid">Delete {{status.id}}</p> <router-link :to="`${Questions.id}`" exact >       </router-link>-->

          </li>

        </draggable>

      </ul>

</div>


</template>

<script>


import draggable from 'vuedraggable';

export default {


  components:{

     draggable

  },
  created(){
    axios.get('/settings/layout/1')
      .then(response => {
        this.sectionQuestions = response.data
        for(var i = 0; i<this.sectionQuestions.questionsText.length; i++){
          var question = this.sectionQuestions.questionsText[i];
          //overwriting the string data with the array
          question.options = JSON.parse(question.options)
          console.log(question);
        }
      });
        console.log('Component created.', this.sectionQuestions)
  },
    mounted() {
        console.log('Component mounted.')
    },

data(){
  return{
    sectionQuestions:
    [
      ]
  }
}

}
</script>


<style>



</style>
