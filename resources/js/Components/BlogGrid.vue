<template>
  <!-- Project Start -->
  <div class="pb-10 section">
    <div class="container">
      <!-- Page Banner Title Start -->
      <div class="page-banner-title">
        <h2 class="title">Latest Post</h2>
      </div>
      <!-- Page Banner Title End -->

      <!-- Filter  Section Start -->
      <!-- <div class="filter-menu">
        <ul class="menu-list">
          <li>Latest Posts</li>
        </ul>
      </div> -->
      <!-- Filter  Section End -->
    </div>

    <div class="container">
      <!-- Blog Section Start -->
      <div class="mb-10 blog-section mt-n4 lg:grid grid-cols-3 gap-4">
        <div class="col-span-2">
          <div
            v-for="(post, index) in blogs"
            :key="index"
            class="divide-y divide-dashed single-blog"
          >
            <!-- Single Project Start -->
            <!-- <div
              v-if="selectedCat === blog.category.name || selectedCat === 'All'"
              :class="'blog ' + blog.category.name"
            > -->
            <div class="lg:grid grid-cols-2 gap-2 pb-6 lg:pb-0 border-b lg:border-b-0">
              <div class="blog-images col-span-1 pb-2 lg:pb-0">
                <inertia-link :href="route('posts.show', {post: post.slug})"><img
                    :src="`/storage/${post.image}`"
                    class="lg:max-h-52 w-auto"
                    :alt="post.title"
                  /></inertia-link>
              </div>

              <div class="col-span-1">
                <h3 class="title">
                  <inertia-link
                    :href="route('posts.show', {post: post.slug})"
                    class="capitalize"
                  >{{
                      post.title
                    }}</inertia-link>
                </h3>
                <p v-text="post.excerpt"></p>

              </div>
              <ul class="col-span-2 flex space-x-4 bg-slate-800 px-2 py-1">
                <li>
                  <span>{{ formatDate(post.updated_at) }}</span>
                </li>
                <li>
                  <span>By Admin</span>
                </li>
              </ul>
            </div>
            <!-- </div> -->
            <!-- Single Project End -->
          </div>
        </div>
        <div class="col-sapn-1 mt-6 lg:pt-0">
          <h4 class="capitalize">Recent Posts</h4>
          <ul>
            <li
              class="capitalize divide-y divide-slate-100"
              v-for="(post, index) in blogs"
              :key="index"
            >
              <inertia-link :href="route('posts.show', {post: post.slug})">{{post.title}}</inertia-link>
            </li>
          </ul>
        </div>
      </div>
      <!-- Blog Section End -->
    </div>
  </div>
  <!-- Project End -->
</template>

<script>
import FormatDate from "@/Mixins/FormatDate.js";
export default {
  el: "#app",

  props: ["data"],

  mixins: [FormatDate],

  data() {
    return {
      blogs: this.data.data,
      selectedCat: "all",
    };
  },

  methods: {
    // filter(selection) {
    //   this.selectedCat = selection;
    // },
    // shuffle: function () {
    //   this.blogs = _.shuffle(this.blogs).groupBy("category.name");
    // },
    // filterCategories: function () {
    //   this.categories = [
    //     ...new Set(this.blogs.map((item) => item.category.name)),
    //   ];
    // },
  },
  // mounted() {
  //   this.filterCategories();
  // },
};
</script>

<style lang="scss">
.singleproject-view:empty {
  display: none;
}
.blog {
  opacity: 0;
  animation: appear 0.5s ease-in-out forwards;
}
@keyframes appear {
  to {
    width: 100%;
    opacity: 1;
  }
}
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