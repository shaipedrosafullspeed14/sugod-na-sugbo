import { createRouter, createWebHistory } from 'vue-router'
import Home from '../components/Home.vue'
import volunteer from '../components/Volunteer.vue'
import Charities from '../components/Charities.vue'
import Donate from '../components/Donate.vue'
const routes=[
   {
       path:'/',
       name: 'home',
       component:Home
   },
   {
     path: '/be-a-volunteer',
     name: 'volunteer',
     component:volunteer
   },
   {
     path: '/discover-charities',
     name: 'charities',
     component:Charities
   },
   {
     path: '/ways-to-donate',
     name: 'Donate',
     component:Donate
   }
];

const router = createRouter({
   history: createWebHistory(),
   routes
});

export default router;