<template>
  <inertia-head>
    <title>Blogs | Niranjan Pandey </title>
    <meta
      name="description"
      content="Hi! My name is Niranjan Pandey, I'm a full stack developer having 3 years of experience in Laravel."
    >
  </inertia-head>
  <div class="main-wrapper dark-bg">
    <!-- Navbar section -->
    <Header></Header>

    <!-- Offcanvas section -->
    <Offcanvas></Offcanvas>

    <!-- BlogGrid Section -->
    <BlogGrid :data="posts"></BlogGrid>

    <!-- Footer section -->
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "@/Components/Header";
import Offcanvas from "@/Components/Offcanvas";
import BlogGrid from "@/Components/BlogGrid";
import Footer from "@/Components/Footer";

export default {
  components: {
    Header,
    Offcanvas,
    BlogGrid,
    Footer,
  },

  props: ["posts"],
};
</script>
