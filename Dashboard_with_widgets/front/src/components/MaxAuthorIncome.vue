<template>
  <div class="card">
    <p> <img src="img/Cash.svg"> Максимальный доход автора:{{ " " + count + "₽" }}</p>
  </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

const count = ref(0);
const link = "http://localhost/rest/index.php/";

onMounted(async () => {
  let answer = await axios.get(link + "authors/max");
  count.value = answer.data[0].income;
});
</script>

<style scoped>
.card {
  width: 300px;
  border: 1px solid black;
  border-radius: 10px;
  padding: 15px;
}
.count {
  display: flex;
  justify-content: center;
}
</style>
