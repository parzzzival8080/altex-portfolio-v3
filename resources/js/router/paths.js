import Landing from "../components/views/Landing.vue";
import PrivacyPolicy from "../components/views/PrivacyPolicy.vue";
import About from "../components/views/About.vue";
import Signin from "../components/views/Signin.vue";
import Signup from "../components/views/Signup.vue";
import Pusher from '../components/views/Pusher.vue';

import Sample from '../components/views/Sample.vue'

const routes = [
  {
    path: "/",
    name: "Landing",
    component: Landing,
  },
  {
    path: "/login",
    name: "Signin",
    component: Signin,
  },
  {
    path: "/register",
    name: "Signup",
    component: Signup,
  },
  {
    path: "/privacy-policy",
    name: "privacy-policy",
    component: PrivacyPolicy
  },

  {
    path: "/about",
    name: "about",
    component: About
  },
//   subsriberRoutes,

  // Sample Route For Pusher
  {
      path: "/pusher",
      name: "Pusher",
      component: Pusher
  },

  {
    path: "/sample",
    name: "Sample",
    component: Sample
}
];

export default routes;
