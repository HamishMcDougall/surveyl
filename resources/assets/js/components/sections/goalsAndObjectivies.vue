<template>

<div class="backgroundSection">
<h3>{{sectionHeading.heading}}</h3>

<draggable :list="sectionQuestions" >
  <div class="panel panel-default" v-for="(questions,index) in sectionQuestions" key="questions.id">
    <div class="panel-heading">
      <h3 class="panel-title"> {{questions.title}}</h3>
    </div>
    <div class="panel-body">
      <div v-if="questions.type === 'text'">
        <input type="text" class="form-control" v-model="questions.answer" >
      </div>

<!-- work out how to make this into a checkbox -->

         <div v-if="questions.type === 'checkbox'">
           <p v-for="options in questions.options ">
             <input
             type='checkbox'
             :value="options"
             v-model='questions.answer'> {{options}}
         </p>
         <p v-model:"questions.answer">{{questions.answer}}</p>

          </div>


    </div>
  </div>
</draggable>

</div>


</template>

<script>


import draggable from 'vuedraggable';

export default {


  components:{

     draggable

  },

data(){
  return{
    sectionHeading:{
      heading:"Goals And Objectivies"
    },
    sectionQuestions:[
      {
          title:"What is the main reason you are seeking advice ?",
          type:'text',
          answer:["Answer here"],
          sort_order:0
      },
      {
          title:"Describe your short term objectives",
          type:'text',
          answer:["Answer here"],
          sort_order:1
      },
      {
          title:"Describe your long term objectives",
          type:'text',
          answer:["Answer here"],
          sort_order:2
      },
      {
          title:"Scope of Advice",
          type:'checkbox',
          options:[
            "Wealth Creation",
            "Personal Risk Insurance",
            "Retirement Planning",
            "Superannuation",
            "Social Security & Aged Care",
            "Investment",
            "Other"
          ],
          answer:[],
          sort_order:3
      },
      {
          title:"Scope of Advice",
          type:'text',
          answer:["Answer here"],
          sort_order:4
      },
      {
          title:"What have you done to ensure you are able to meet your objectivs?",
          type:'text',
          answer:["Answer here"],
          sort_order:5
      },
    {
          title:"Are you aware of any significant risks that may impact your life goals?",
          type:'text',
          answer:["Answer here"],
          sort_order:6

      }
    ]
  }
}

}
</script>


<style>



</style>
