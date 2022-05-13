<template>
  <inertia-head>
    <title>{{post.post.seo_title ?? post.post.title}} | Niranjan Pandey</title>
    <meta
      name="description"
      :content="post.post.meta_description"
    >
  </inertia-head>
  <div class="main-wrapper dark-bg">
    <!-- Navbar section -->
    <Header></Header>

    <!-- Offcanvas section -->
    <Offcanvas></Offcanvas>

    <!-- SingleBlog Section -->
    <SingleBlog
      :data="post"
      :categories="categories"
    ></SingleBlog>

    <!-- Footer section -->
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "@/Components/Header";
import Offcanvas from "@/Components/Offcanvas";
import SingleBlog from "@/Components/SingleBlog";
import Footer from "@/Components/Footer";

export default {
  components: {
    Header,
    Offcanvas,
    SingleBlog,
    Footer,
  },
  props: ["post", "categories"],
};
</script>