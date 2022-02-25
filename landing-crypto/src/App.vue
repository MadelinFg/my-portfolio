<template>
  <div id="app">
    <Navbar />
    <Hero author="madelin flores" />
    <Info />
    <Featuredin />
    <Section />
    <Press />
    <Section />
    <Gallery />
  </div>
</template>

<script>
import Navbar from "./components/Navbar.vue";
import Hero from "./components/Hero.vue";
import Info from './components/Info.vue';
import Featuredin from './components/Featuredin.vue';
import Section from './components/Section.vue';
import Press from './components/Press.vue';
import Gallery from './components/Gallery.vue';

// import {Graphic} from './assets/graphic.png';

export default {
  name: 'App',
  components: {
    Navbar,
    Hero,
    Info,
    Featuredin,
    Section,
    Press, 
    Gallery
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
  /* background: var(--light2); */
}
@import url(./assets/css/root.css);
</style>
