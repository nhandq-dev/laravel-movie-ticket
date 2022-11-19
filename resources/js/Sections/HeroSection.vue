<template>
  <section class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <img :src="messIllustration" class="max-w-lg w-full rounded-lg shadow-2xl" />
      <div class="flex flex-col items-start justify-center">
        <h2 class="font-title mb-2 text-2xl font-extrabold sm:text-5xl lg:text-7xl">I'm Nhandq</h2>
        <h2 class="font-title mb-2 text-2xl font-extrabold sm:text-5xl lg:text-7xl text-primary">And Let's Coding!</h2>
        <h4 class="font-title text-base font-extrabold sm:text-2xl lg:text-2xl pb-4">
          This website was made by a young handsome developer, to talk about
          everything in a software engineer's life, to
          <div class="badge badge-error gap-2">fail</div>, to <div class="badge badge-success gap-2">success</div>, and
          to grow together with you, properly another young and handsome
          developer guys :)
        </h4>
        <button class="btn btn-primary">Get Started</button>
      </div>
    </div>
  </section>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
  data() {
    return {
      messIllustration: '/mess_illustration.png'
    }
  },
  created() {
    this.updateHeroMess();
  },
  methods: {
    updateHeroMess: function () {
      setTimeout(() => {
        switch (this.messIllustration) {
          case '/mess_illustration.png':
            this.messIllustration = '/mess_2_illustration.png';
            break;
          case '/mess_2_illustration.png':
            this.messIllustration = '/mess_3_illustration.png';
            break;
          case '/mess_3_illustration.png':
            this.messIllustration = '/mess_illustration.png';
            break;

          default:
            this.messIllustration = '/mess_illustration.png';
            break;
        }
        this.updateHeroMess()
      }, 1000)
    }
  }
}
</script>
