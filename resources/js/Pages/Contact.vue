<template>
  <inertia-head>
    <title>Contact us </title>
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

    <!-- ContactUs section -->
    <ContactUs></ContactUs>
  </div>
</template>

<script>
import Header from "@/Components/Header";
import Offcanvas from "@/Components/Offcanvas";
import ContactUs from "@/Components/ContactUs";

export default {
  components: {
    Header,
    Offcanvas,
    ContactUs,
  },
};
</script>