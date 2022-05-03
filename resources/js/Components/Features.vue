<template>
  <div class="section section-padding-02">
    <div class="container">
      <!-- Why Choose Start -->
      <div class="why-choose-section mt-n3">
        <!-- Section Title Start -->
        <div class="section-title">
          <h2 class="title">why choose me</h2>
        </div>
        <!-- Section Title End -->

        <!-- Why Choose Wrapper Start -->
        <div class="why-choose-wrapper" id="why-choose-wrapper">
          <div class="row gx-0">
            <div
              class="col-lg-3 col-sm-6"
              v-for="(feature, index) in featureLogos"
              :key="index"
            >
              <!-- Service Box Start -->
              <div
                class="service-box wow fadeInUp"
                data-wow-delay="0.3s"
                data-wow-duration="2s"
                @mouseover="show = index"
                @mouseout="show = false"
                :class="{ active: show === index }"
              >
                <div class="box-content">
                  <h4 class="title">{{feature.title}}</h4>
                  <p>{{ feature.text }}</p>
                </div>
                <div class="box-icon">
                  <i :class="feature.icon"></i>
                  <!-- <router-link to="/about" class="more">{{feature.more}}</router-link> -->
                </div>
              </div>
              <!-- Service Box End -->
            </div>
          </div>
        </div>
        <!-- Why Choose Wrapper End -->
      </div>
      <!-- Why Choose End -->
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      show: false,
      featureLogos: [
        {
          title: "Fast",
          text: "Fast load times and lag free interaction, my highest priority.",
          icon: "icofont-speed-meter",
          more: "Read more",
        },
        {
          title: "Intutive",
          text: "Strong preference for easy to use, intuitive UX/UI.",
          icon: "icofont-light-bulb",
          more: "Read more",
        },
        {
          title: "Responsive",
          text: "My layouts will work on any device, big or small.",
          icon: "icofont-responsive",
          more: "Read more",
        },
        {
          title: "Dynamic",
          text: "Websites don't have to be static, I love making pages come to life.",
          icon: "icofont-dashboard-web",
          more: "Read more",
        },
      ],
    };
  },
};
</script>
