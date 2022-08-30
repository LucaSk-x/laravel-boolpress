import VueRouter from "vue-router"
import Home from "../Pages/Home.vue";
import Contacts from "../Pages/Contacts"
import PostShow from "../Pages/Posts/show.vue"

export const routes = [
  {path: "/", component: Home, name: "home"},
  {path: "/contacts", component: Contacts, name: "contacts"},
  {path: "/posts/:id", component: PostShow, name: "posts.show"}
]