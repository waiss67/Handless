<template>
  <div id="app">
    <div>BAKA2</div>
    <codemirror></codemirror>
  </div>
</template>

<script>
//import Vue from 'vue'
import { codemirror } from 'vue-codemirror'
import 'codemirror/lib/codemirror.css'

export default {
  name: 'app',
  data() {
    return {
      test: "baka"
    };
  },
  components: {
     codemirror
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
