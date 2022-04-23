<template>
  <div class="main-wrapper dark-bg">
    <!-- Navbar section -->
    <Header></Header>

    <!-- Offcanvas section -->
    <Offcanvas></Offcanvas>

    <!-- Pricing Banner Section -->
    <Pricingbanner></Pricingbanner>

    <!-- PricingTable section -->
    <PricingTable></PricingTable>

    <!-- Faq section -->
    <Faq></Faq>

    <!-- Testimonial section -->
    <Testimonial></Testimonial>

    <!-- Footer section -->
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "@/Components/Header";
import Offcanvas from "@/Components/Offcanvas";
import Pricingbanner from "@/Components/Pricingbanner";
import PricingTable from "@/Components/PricingTable";
import Faq from "@/Components/Faq";
import Testimonial from "@/Components/Testimonial";
import Footer from "@/Components/Footer";

export default {
  components: {
    Header,
    Offcanvas,
    Pricingbanner,
    PricingTable,
    Faq,
    Testimonial,
    Footer,
  },
};
</script>
