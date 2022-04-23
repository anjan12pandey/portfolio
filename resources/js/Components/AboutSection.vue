<template>
  <div class="overflow-hidden section bg-dark">
    <!-- About Start -->
    <div class="about-section section-padding mt-n3 mb-n1">
      <div
        class="about-images"
        :style="{ backgroundImage: `url(${aboutBg})` }"
      ></div>

      <div class="container">
        <div class="row justify-content-end">
          <div class="col-lg-6">
            <div
              class="about-content wow fadeInRight"
              data-wow-delay="0.5s"
              data-wow-duration="2s"
            >
              <h3 class="title">{{ aboutTitle }}</h3>
              <p class="about-text">
                I have been working as a professional full stack developer for
                3+ years.
              </p>
              <p>
                During my career I have worked on various types of projects with
                various technologies, but very often I feel that i am a junior
                develper who just started coding. <br />
                <br />
              </p>

              <img class="signechar" src="/images/signechar.png" alt="" />
              <h6 class="name">Niranjan Pandey</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->
  </div>
</template>
<script>
export default {
  data() {
    return {
      aboutBg: "/images/about-images.png",
      aboutTitle: "Niranjan Pandey",
    };
  },
};
</script>
