<template>
<Head>
  <title>Welcome: </title>
  <meta name="description" content="Your page description">
</Head>
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
    <hr>
    <!-- Fanfact section -->
    <!-- <Funfact></Funfact> -->

    <!-- Skill section -->
    <Skill></Skill>
    
    <!-- Workgallery section -->
    <!-- <Workgallery class="skills-wrapper"></Workgallery> -->

    <!-- BlogArticle section -->
    <!-- <BlogArticle></BlogArticle> -->

    

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
import Skill from "@/Components/Skill";
import Testimonial from "@/Components/Testimonial";
import Footer from "@/Components/Footer";
import { Head } from '@inertiajs/inertia-vue3'


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
    Skill,
    Footer,
    Head,
  },
};
</script>