import Vue from 'vue'
import VueRouter  from 'vue-router'
import Home from './pages/Home'
import About from './pages/About'
import Blog from './pages/Blog'


Vue.use(VueRouter);

const router = new VueRouter({
  mode:'history',
  routes:[
    {
      path:'/',
      name:'home',
      component: Home
    },
    {
      path:'/about',
      name:'about',
      component: About
    },
    {
      path:'/blog',
      name:'blog',
      component: Blog
    }
  ]
});
export default router;