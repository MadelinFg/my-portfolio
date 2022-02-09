<template>
  <div id="app">
    <Navbar />
    <Hero author="madelin flores" />
  </div>
</template>

<script>
import Navbar from "./components/Navbar.vue";
import Hero from "./components/Hero.vue";

export default {
  name: 'App',
  components: {
    Navbar,
    Hero
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #000;
  margin-top: 40px;
}
@import url(./assets/css/root.css);
</style>
