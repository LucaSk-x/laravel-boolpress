<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-4" v-for="post in posts" :key="post.id">
        <div class="card mb-3" style="width: 18rem">
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
            <router-link :to="{ name: 'posts.show', params: { id: post.id } }" class="btn btn-primary">Visualizza Post</router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      posts: [],
    };
  },
  methods: {
    fetchPosts() {
      axios.get("/api/posts").then((resp) => {
        this.posts = resp.data;
      });
    },
  },
  mounted() {
    this.fetchPosts();
  },
};
</script>