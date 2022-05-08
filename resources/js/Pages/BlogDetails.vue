<template>
  <inertia-head>
    <title>Blog details </title>
    <meta
      name="description"
      content="Hi! My name is Niranjan Pandey, I'm a full stack developer having 3 years of experience."
    >
  </inertia-head>
  <div class="main-wrapper dark-bg">
    <!-- Navbar section -->
    <Header></Header>

    <!-- Offcanvas section -->
    <Offcanvas></Offcanvas>

    <!-- SingleBlog Section -->
    <SingleBlog></SingleBlog>

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
};
</script>