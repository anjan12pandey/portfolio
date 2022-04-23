<template>
  <div class="main-wrapper dark-bg">
    <!-- Navbar section -->
    <Header></Header>

    <!-- Offcanvas section -->
    <Offcanvas></Offcanvas>

    <!-- BlogGrid Section -->
    <BlogGrid></BlogGrid>

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
};
</script>
