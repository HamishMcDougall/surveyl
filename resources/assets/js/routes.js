import VueRouter from 'vue-router';


let routes =[

  {
    path: '/1',
    component: require('./components/sections/goalsAndObjectivies.vue')
  }

]



export default new VueRouter({

  routes,
//  mode: 'history'
//  linkActiveClass:'active'

});
