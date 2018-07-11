<template>
  <div id="app">
    <div>BAKA</div>
    <mycodemirror></mycodemirror>

  </div>
</template>

<script>
//    <img src="./assets/logo.png">
//       <HelloWorld msg="Welcome to Your Vue.js App"/>
 import HelloWorld from './components/HelloWorld.vue'
//    <handless></handless>

import mycodemirror from './handlessMain/codemirrorComponent.vue'

export default {
  name: 'app',
  data() {
    return {
      test: "baka"
    };
  },
  components: {
     HelloWorld,
     mycodemirror
  },
  props: [],
  methods: {
    save: function () {
    }
  },
  mounted() {}
  
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
