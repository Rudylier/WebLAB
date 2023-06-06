<template>
<Header />
  
  <router-view v-slot="{ Component }">
    <keep-alive>
      <component :is="Component" />
    </keep-alive>
  </router-view>
</template>

<script setup>
import Header from './components/Header.vue';
</script>

<style lang="scss">
.container {
  margin: 0 auto;
}
</style>
