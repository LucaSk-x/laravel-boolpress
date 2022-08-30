<template>
  <div>
    <div class="py-5">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card mb-3">
          <img
            :src="'/storage/' + post.imgUrl"
            class="card-img-top"
            :alt="post.title"
          />
          <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">
              {{ post.content }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</template>

<script>

import CardVue from '../../Frontend/components/Card.vue';
import axios from 'axios';

export default {
    components: { CardVue },

    data() {
      return {
        post: {},
      }
    },

    mounted() {
      axios.get("/api/posts/")
      .then((resp) => {
        this.post = resp.data[this.$route.params.id];
        console.log(this.post)
      })
    }
    
}
</script>

<style>

</style>