<template>
  <div>
    <NavBarVue></NavBarVue>
    <cardVue></cardVue>
  </div>
</template>

<script>

import NavBarVue from "./Frontend/components/NavBar.vue";
import CardVue from "./Frontend/components/Card.vue";

export default {
  components: { NavBarVue, CardVue },
  data() {
    return {
      message: "Ciao ",
    };
  },
};
</script>

<style>
</style>