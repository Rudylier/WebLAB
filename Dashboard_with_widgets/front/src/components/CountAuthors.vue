<template>
  <div class="card">
    <p> <img src="img/Count.svg"> Общее количество авторов:{{ " " + count["COUNT(*)"] + "шт." }}</p>
  </div>
</template>

<script setup>
import { onMounted, ref } from "vue";
import axios from "axios";

const count = ref(0);
const link = "http://localhost/rest/index.php/";

onMounted(async () => {
  let answer = await axios.get(link + "authors/count");
  count.value = answer.data[0];
});
</script>

<style scoped>
.card {
  width: 300px;
  border: 1px solid black;
  border-radius: 10px;
  padding: 15px;
}
</style>
