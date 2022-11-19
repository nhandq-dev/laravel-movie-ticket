<template>
  <div class="navbar bg-base-200 sticky top-0 z-10">
    <div class="navbar-start">
      <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </label>
        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
          <li><a>Home</a></li>
          <li><a>Blogs</a></li>
          <li><a>Contact</a></li>
        </ul>
      </div>
      <ApplicationLogo class="btn btn-ghost btn-link" />
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal p-0">
        <li><a>Home</a></li>
        <li><a>Blogs</a></li>
        <li><a>Contact</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <div class="dropdown dropdown-bottom dropdown-end">
        <label tabindex="0" class="btn btn-secondary m-1 gap-2">
          <component v-bind:is="themeOptions[currTheme].iconComponent" />
          {{ currTheme }}
        </label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-secondary rounded-box w-52">
          <li v-for="(option, theme) in themeOptions" :key="theme">
            <button @click="changeTheme(theme)" class="btn btn-secondary gap-2"
              :class="theme === currTheme ? 'btn-disabled' : ''" role="button" :aria-disabled="theme === currTheme">
              <component v-bind:is="option.iconComponent" />
              {{ option.value }}
            </button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import ApplicationLogo from '@/Components/Logos/ApplicationLogo.vue';
import { THEMES, THEME_LIGHT } from '@/Utils/themes';

export default {
  data() {
    return {
      currTheme: THEME_LIGHT,
      themeOptions: THEMES,
    }
  },
  components: {
    ApplicationLogo,
  },
  mounted() {
    if (!localStorage['data-theme']) {
      localStorage['data-theme'] = THEME_LIGHT;
      document.querySelector('html').setAttribute('data-theme', THEME_LIGHT);
    }
    this.currTheme = localStorage['data-theme'];
  },
  watch: {
    currTheme(newTheme) {
      localStorage['data-theme'] = newTheme;
      document.querySelector('html').setAttribute('data-theme', newTheme);
    }
  },
  methods: {
    changeTheme: function (theme) {
      this.currTheme = theme;
    }
  }
}
</script>
