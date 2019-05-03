<template>
  <div>
    <h2 class="mb-5">HELLO from {{name}}</h2>
    <v-btn @click="sayHello">say Hello !</v-btn>
  </div>
</template>

<script>
export default {
  data: () => ({
    name: ""
  }),

  methods: {
    sayHello() {
      this.name = this.$store.state.name;
    }
  }
};
</script>

<style>
</style>
