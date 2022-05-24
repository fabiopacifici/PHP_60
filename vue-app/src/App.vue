<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">

    <div class="product" v-for="product in products" :key="product.id">
      <img :src="product.image" :alt="product.title">
      <h3>{{product.title}}</h3>
      <p>{{product.description}}</p>
      <p>{{product.price}}</p>
    </div>

  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'App',
  data() {
    return {
      products: null
    }
  },
  mounted() {
    axios
    .get('http://live-php-json.test/') // http://localhost/PHP/live-json
    .then(response => {
      console.log(response.data);
      this.products = response.data;
    })
    .catch(err => {
      console.error(err);
    })
  }
}
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
