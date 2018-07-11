<template>
  <div id="app">
    <img src="./assets/logo.png">
       <HelloWorld msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
 import HelloWorld from './components/HelloWorld.vue'
//    <handless></handless>

//import handless from './handlessMain/codemirrorComponent.vue'

export default {
  name: 'app',
  data() {
    return {
      test: "baka"
    };
  },
  components: {
    // HelloWorld
    handless
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
