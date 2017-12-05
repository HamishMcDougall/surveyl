import VueRouter from 'vue-router';


let routes =[

  {
    path: '/Goals and Objectivies',
    component: require('./components/sections/goalsAndObjectivies.vue')
  }

]



export default new VueRouter({

  routes
//  linkActiveClass:'active'

});
