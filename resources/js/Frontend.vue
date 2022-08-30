<template>
  <div>
    <NavBarVue></NavBarVue>
    <router-view></router-view>
  </div>
</template>

<script>

import NavBarVue from "./Frontend/components/NavBar.vue";
import CardVue from "./Frontend/components/Card.vue";

export default {
  components: { NavBarVue },
  data() {
    return {
      message: "Ciao ",
    };
  },
};
</script>

<style>
</style>