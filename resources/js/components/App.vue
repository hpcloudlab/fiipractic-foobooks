<script>

import FetchData from "./FetchData.vue"
import TestApi from "./TestApi.vue"

export default {
  components:{
    FetchData,
    TestApi
  },
  data() {
    return {
      message: 'Hello World!',
      anotherMessage:"this is another message"
    }
  },
  methods: {
    reverseMessage() {
      this.message = this.message.split('').reverse().join('')
    },appendEM() {
      this.message += '!'
    },
    
    notify() {
      alert('navigation was prevented.')
    }
  }
}
</script>

<template>
  <div>
    <TestApi name="this is a prop"></TestApi>
    <h1>{{ message }}</h1>
    <button @click="reverseMessage">Reverse Message</button>
    <button @click="appendEM">Append "!"</button>
    <FetchData></FetchData>
  </div>  
</template>

<style>
button, a {
  display: block;
  margin-bottom: 1em;
}
</style>