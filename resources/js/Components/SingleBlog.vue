<template>

  <!-- Page Banner Start -->
  <div class="section">

    <div class="container">

      <!-- Page Banner Title Start -->
      <div class="page-banner-title pb-4 md:max-w-4xl">
        <h2 class="title capitalize">{{ post.title }}</h2>
        <ul class="meta">
          <!-- <li><span>{{post.category.title}}</span></li> -->
          <!-- <li><span>{{post.date}}</span></li> -->
          <!-- <li><span>{{post.admin}}</span></li> -->
        </ul>
      </div>
    </div>

    <div class="container">
      <div class="md:grid grid-cols-3 gap-6">
        <div class="col-span-2">
          <div class="post-details mb-3">
            <img
              :src="`/storage/${post.image}`"
              class="mx-auto"
              alt=""
            >
          </div>
          <!-- post Details Content Start -->
          <div class="post-details-content">
            <div v-html="post.body"></div>
            <!-- Post Tags Share Start -->
            <!-- <div class="post-tags-share text-center">

              <div class="post-share">
                <h6 class="label">Share :</h6>
                <ul class="social">
                  <li><a href="#"><i class="icofont-facebook"></i></a></li>
                  <li><a href="#"><i class="icofont-twitter"></i></a></li>
                  <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                </ul>
              </div>
            </div> -->
            <!-- Post Tags Share End -->

            <!-- Comment Form End -->
            <div
              class="comment-form comments pt-10"
              aria-labelledby="comment"
            >
              <h3 class="post-label">Leave A Comment</h3>

              <div class="comment-form-wrapper">
                <form action="#">
                  <div class="row">
                    <div class="col-md-12">
                      <Disqus shortname='Admin' />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- Comment Form End -->

          </div>
          <!-- post Details Content End -->

        </div>
        <div class="col-span-1">
          <div class="mb-4">
            <ul>
              <h4 class="font-bold">Categories</h4>
              <li
                class="text-sm capitalize"
                v-for="category in categories"
                :key="category.id"
              >
                <inertia-link :href="route('categories.posts.index', {category: category.slug})">{{category.name}}</inertia-link>
              </li>
            </ul>
          </div>
          <div class="mb-4">
            <ul>
              <h4 class="font-bold">Related Blogs</h4>
              <li
                class="text-sm capitalize"
                v-for="post in relatedPost"
                :key="post.id"
              >
                <inertia-link :href="route('posts.show', {post: post.slug})">{{post.title}}</inertia-link>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>

  </div>
  <!-- Page Banner End -->

</template>

<script>
import { Disqus } from "vue-disqus";

import { highlight } from "@/Services/SyntaxHighlighting.js";

export default {
  name: "PostPage",
  components: {
    Disqus,
  },
  props: ["data", "categories"],
  data() {
    return {
      post: this.data.post,
      relatedPost: this.data.relatedPost,
    };
  },

  mounted() {
    highlight();
  },
};
</script>

<style lang="scss">
.meta {
  li {
    span {
      font-size: 13px;
      color: hsla(0, 0%, 100%, 0.5);
      text-transform: uppercase;
    }
  }
}
</style>


