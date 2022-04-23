<template>
  <div class="main-wrapper dark-bg">
    <!-- Navbar section -->
    <Header></Header>

    <!-- Offcanvas section -->
    <Offcanvas></Offcanvas>

    <!-- About Banner Section -->
    <Aboutbanner></Aboutbanner>

    <!-- BrandLogo section -->
    <BrandlogoTwo></BrandlogoTwo>

    <!-- BlogArticle section -->
    <BlogArticle></BlogArticle>

    <!-- Skill section -->
    <Skill></Skill>

    <!-- Footer section -->
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "@/Components/Header";
import Offcanvas from "@/Components/Offcanvas";
import Aboutbanner from "@/Components/Aboutbanner";
import BrandlogoTwo from "@/Components/BrandlogoTwo";
import BlogArticle from "@/Components/BlogArticle";
import Skill from "@/Components/Skill";
import Footer from "@/Components/Footer";

export default {
  components: {
    Header,
    Offcanvas,
    Aboutbanner,
    BrandlogoTwo,
    BlogArticle,
    Skill,
    Footer,
  },
};
</script>
