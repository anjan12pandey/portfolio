<template>
  <!-- Contact Start -->
  <div class="section contact-section">
    <div
      class="contact-bg"
      :style="{ backgroundImage: `url(${contactBg})` }"
    ></div>

    <div class="container">
      <div class="row justify-content-end">
        <div class="col-lg-7">
          <!-- Contact Section Wrapper Start -->
          <div
            class="contact-section-wrapper wow fadeInRight"
            data-wow-delay="0.3s"
            data-wow-duration="1.5s"
          >
            <!-- Contact Info Start -->
            <div class="contact-info">
              <span class="mail text-sm">Thanks for taking the time to reach out. How can i help you today?</span>
            </div>
            <!-- Contact Info End -->

            <!-- Contact Form Start -->
            <div
              class="contact-form"
              style="min-height: 300px"
            >
              <form
                @submit.prevent="submit"
                id="contact-form"
                method="POST"
                v-if="!form.wasSuccessful"
              >
                <div class="row">
                  <div class="col-md-6">
                    <!-- Single Form Start -->
                    <div class="single-form">
                      <input
                        type="text"
                        name="name"
                        v-model="form.name"
                        placeholder="Enter your name..."
                        required
                      />
                    </div>
                    <!-- Single Form Start -->
                  </div>
                  <div class="col-md-6">
                    <!-- Single Form Start -->
                    <div class="single-form">
                      <input
                        type="email"
                        name="email"
                        v-model="form.email"
                        placeholder="youemail@domain.com"
                        required
                      />
                    </div>
                    <!-- Single Form Start -->
                  </div>
                  <div class="col-md-12">
                    <!-- Single Form Start -->
                    <div class="single-form">
                      <input
                        type="text"
                        name="subject"
                        v-model="form.subject"
                        placeholder="Subject (optional)"
                        required
                      />
                    </div>
                    <!-- Single Form Start -->
                  </div>
                  <div class="col-md-12">
                    <!-- Single Form Start -->
                    <div class="single-form">
                      <textarea
                        name="message"
                        v-model="form.message"
                        placeholder="Here goes your message"
                      ></textarea>
                    </div>
                    <!-- Single Form Start -->
                  </div>
                  <p class="form-message"></p>
                  <div class="col-md-12">
                    <!-- Single Form Start -->
                    <div class="form-btn">
                      <button type="submit">Send Message <svg
                          v-if="form.processing"
                          :disabled="form.processing"
                          xmlns="http://www.w3.org/2000/svg"
                          width="45"
                          height="45"
                          viewBox="0 0 45 45"
                          stroke="#fff"
                        >
                          <g
                            fill="none"
                            fill-rule="evenodd"
                            transform="translate(1 1)"
                            stroke-width="2"
                          >
                            <circle
                              cx="22"
                              cy="22"
                              r="6"
                              stroke-opacity="0"
                            >
                              <animate
                                attributeName="r"
                                begin="1.5s"
                                dur="3s"
                                values="6;22"
                                calcMode="linear"
                                repeatCount="indefinite"
                              />
                              <animate
                                attributeName="stroke-opacity"
                                begin="1.5s"
                                dur="3s"
                                values="1;0"
                                calcMode="linear"
                                repeatCount="indefinite"
                              />
                              <animate
                                attributeName="stroke-width"
                                begin="1.5s"
                                dur="3s"
                                values="2;0"
                                calcMode="linear"
                                repeatCount="indefinite"
                              />
                            </circle>
                            <circle
                              cx="22"
                              cy="22"
                              r="6"
                              stroke-opacity="0"
                            >
                              <animate
                                attributeName="r"
                                begin="3s"
                                dur="3s"
                                values="6;22"
                                calcMode="linear"
                                repeatCount="indefinite"
                              />
                              <animate
                                attributeName="stroke-opacity"
                                begin="3s"
                                dur="3s"
                                values="1;0"
                                calcMode="linear"
                                repeatCount="indefinite"
                              />
                              <animate
                                attributeName="stroke-width"
                                begin="3s"
                                dur="3s"
                                values="2;0"
                                calcMode="linear"
                                repeatCount="indefinite"
                              />
                            </circle>
                            <circle
                              cx="22"
                              cy="22"
                              r="8"
                            >
                              <animate
                                attributeName="r"
                                begin="0s"
                                dur="1.5s"
                                values="6;1;2;3;4;5;6"
                                calcMode="linear"
                                repeatCount="indefinite"
                              />
                            </circle>
                          </g>
                        </svg></button>
                    </div>
                    <!-- Single Form Start -->
                  </div>
                </div>
              </form>
              <div
                v-else
                class="mt-10 fs-2 fw-bold"
              >Thank's for contacting us. We will reach you soon.</div>
            </div>
            <!-- Contact Form End -->

            <!-- Contact Social Start -->
            <div class="contact-social">
              <ul>
                <li
                  v-for="(social, socials) in socials"
                  :key="socials"
                >
                  <a
                    target="_blank"
                    :class="social.classname"
                    :href="social.link"
                  >{{ social.text }}</a>
                </li>
              </ul>
            </div>
            <!-- Contact Social End -->
          </div>
          <!-- Contact Section Wrapper End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->
</template>

<script>
export default {
  data() {
    return {
      socials: [
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
      contactBg: "/images/contact-bg-1.jpg",
      form: this.$inertia.form({
        name: null,
        email: null,
        subject: null,
        message: null,
      }),
    };
  },

  methods: {
    onSwiper(swiper) {
      this.swiper = swiper;
    },
    submit() {
      this.form.post(route("contacts.store"), {
        preserveState: true,
        preserveScroll: true,
        onSuccess: () => this.form.reset(),
      });
    },
  },
};
</script>