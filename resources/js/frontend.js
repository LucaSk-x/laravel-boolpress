import Vue from "vue";
import Frontend from "./Frontend.vue";
import VueRouter, { RouterLink } from "vue-router"
import { routes } from "./Frontend/routes"

Vue.use(VueRouter);

new Vue({
  el: "#app",
  render: h => h(Frontend),
  router: new VueRouter ({
    routes,
    mode: "history"
  })
})