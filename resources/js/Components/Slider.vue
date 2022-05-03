<template>
  <div class="section slider-section">
    <div class="slider-active">
      <swiper
        class="mySwiper"
        :breakpoints="swiperOptions.breakpoints"
        :slides-per-view="1"
        :loop="true"
        :effect="fade"
        :navigation="swiperOptions.navigation"
        @swiper="onSwiper"
      >
        <swiper-slide v-for="(slider, sliders) in sliders" :key="sliders">
          <div
            class="single-slider d-flex align-items-center animation-style-01"
            :style="{ backgroundImage: `url(${slider.sliderBg})` }"
          >
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>

            <div class="container">
              <!-- Slider Content Start -->
              <div class="slider-content">
                <h4 class="sub-title">{{ slider.slidersubTitle }}</h4>
                <h1 class="main-title" v-html="slider.sliderTitle"></h1>
                <p v-html="slider.sliderDesc"></p>
                <a target="_blank" :href="slider.link" class="slider-btn">{{
                  slider.btntext
                }}</a>
              </div>
              <!-- Slider Content End -->
            </div>
          </div>
        </swiper-slide>
      </swiper>

      <!-- Add Arrows -->

      <div class="swiper-button-next">
        <i class="icofont-long-arrow-right"></i>
      </div>
      <div class="swiper-button-prev">
        <i class="icofont-long-arrow-left"></i>
      </div>
    </div>

    <!-- Social Start -->
    <ul class="social">
      <li v-for="(social, socials) in slidersocials" :key="socials">
        <a target="_blank" :href="social.link"
          ><i :class="social.classname"></i
        ></a>
      </li>
    </ul>
    <!-- Social End -->
  </div>
</template>

<script>
import SwiperCore, { Navigation } from "swiper/core";

SwiperCore.use([Navigation]);

import { Swiper, SwiperSlide } from "swiper/vue";

export default {
  name: "App",
  components: {
    Swiper,
    SwiperSlide,
  },

  data() {
    return {
      swiperOptions: {
        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          576: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 1,
          },
          992: {
            slidesPerView: 1,
          },
        },
        navigation: {
          nextEl: ".slider-active .swiper-button-next",
          prevEl: ".slider-active .swiper-button-prev",
        },
      },
      sliders: [
        {
          sliderBg: "/images/slider/slider-2.jpg",
          slidersubTitle: "Latest project",
          sliderTitle: "Moms's <br> Bakery",
          sliderDesc:
            "Combine with ideas of owner, Anurag Raj. <br> I completed a e-commerce web app with many powerful features, <br> help owner gets what he wants.",
          btntext: "See Project",
          link: "https://momsbakery.in"
        },
        {
          sliderBg: "/images/slider/slider-3.jpg",
          slidersubTitle: "Ro Care",
          sliderTitle: "Ro Customer <br> Care Ranchi",
          sliderDesc:
            "Combine with ideas of owner, Pankaj Chaubey. <br> I completed a web app with many powerful features, <br> help owner gets what he wants.",
          btntext: "See Project",
          link: "https://ro-customer-care-ranchi.in"
        },
      ],
      slidersocials: [
        {
          link: "https://facebook.com/",
          classname: "fa fa-facebook-f",
        },
        {
          link: "https://twitter.com/",
          classname: "fa fa-twitter",
        },
        {
          link: "https://www.behance.net/",
          classname: "fa fa-behance",
        },
      ],
    };
  },

  methods: {
    onSwiper(swiper) {
      this.swiper = swiper;
    },
  },
};
</script>



