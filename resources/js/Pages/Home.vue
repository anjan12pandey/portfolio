<template>
  <div class="main-wrapper dark-bg">
    <!-- Navbar section -->
    <Header></Header>

    <!-- Slider section -->
    <Slider></Slider>

    <!-- Offcanvas section -->
    <Offcanvas></Offcanvas>

    <!-- BrandLogo section -->
    <BrandLogo></BrandLogo>

    <!-- About section -->
    <AboutSection></AboutSection>

    <!-- Features section -->
    <Features></Features>

    <!-- Fanfact section -->
    <Funfact></Funfact>

    <!-- Workgallery section -->
    <Workgallery></Workgallery>

    <!-- BlogArticle section -->
    <BlogArticle></BlogArticle>

    <!-- Testimonial section -->
    <Testimonial></Testimonial>

    <!-- Footer section -->
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "@/Components/Header";
import Slider from "@/Components/Slider";
import Offcanvas from "@/Components/Offcanvas";
import BrandLogo from "@/Components/BrandLogo";
import AboutSection from "@/Components/AboutSection";
import Features from "@/Components/Features";
import Funfact from "@/Components/Funfact";
import Workgallery from "@/Components/Workgallery";
import BlogArticle from "@/Components/BlogArticle";
import Testimonial from "@/Components/Testimonial";
import Footer from "@/Components/Footer";

export default {
  components: {
    Header,
    Slider,
    Offcanvas,
    BrandLogo,
    AboutSection,
    Features,
    Funfact,
    Workgallery,
    BlogArticle,
    Testimonial,
    Footer,
  },
};
</script>