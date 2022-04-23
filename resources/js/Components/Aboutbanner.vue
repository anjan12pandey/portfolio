<template>
  <!-- About Banner Start -->
  <div class="overflow-hidden section about-banner-section">
    <!-- About Banner Start -->
    <div class="about-banner d-flex align-items-center">
      <div class="container">
        <!-- About Banner Content Start -->
        <div class="about-banner-content">
          <h1 class="banner-title">
            <span>Hallo!</span> I am Niranjan, <br />
            Interactive Full Stack Developer based <br />
            in India.
          </h1>

          <div class="banner-social">
            <p>
              I am Developer with 3+ years of experience.<br />
              I love sharing my knowledge to others, that's why I am going to
              soon launch YouTube Channel.
            </p>
            <ul>
              <li v-for="(social, socials) in bannersocialtext" :key="socials">
                <a
                  target="_blank"
                  :class="social.classname"
                  :href="social.link"
                  >{{ social.text }}</a
                >
              </li>
            </ul>
          </div>

          <div class="banner-service">
            <div class="section-title-2">
              <h2 class="title">Service</h2>
            </div>
            <h4 class="service-text">
              <router-link to="/contact"
                >Frontend Design, Laravel Web App & <br />
                Logo Design</router-link
              >
            </h4>
          </div>
        </div>
        <!-- About Banner Content End -->
      </div>

      <!-- About Banner Image Start -->
      <div class="about-banner-image">
        <img src="/images/about-images-2.jpg" alt="" />
      </div>
      <!-- About Banner Image End -->
    </div>
    <!-- About Banner End -->

    <!-- Social Start -->
    <ul class="social">
      <li v-for="(social, socials) in bannersocialico" :key="socials">
        <a target="_blank" :href="social.link"
          ><i :class="social.classname"></i
        ></a>
      </li>
    </ul>
    <!-- Social End -->
  </div>
  <!-- About Banner End -->
</template>


<script>
export default {
  data() {
    return {
      bannersocialtext: [
        {
          classname: "twitter",
          link: "https://twitter.com/",
          text: "Twitter",
        },
        {
          classname: "behance",
          link: "https://www.behance.net/",
          text: "Behance",
        },
        {
          classname: "dribbble",
          link: "https://dribbble.com/",
          text: "Dribbble",
        },
      ],

      bannersocialico: [
        {
          classname: "fa fa-twitter",
          link: "https://twitter.com/",
          text: "Twitter",
        },
        {
          classname: "fa fa-facebook-f",
          link: "https://www.facebook.com/",
        },
        {
          classname: "fa fa-behance",
          link: "https://www.behance.net/",
        },
      ],
    };
  },
};
</script>