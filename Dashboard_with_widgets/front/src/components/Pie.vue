<!--  https://docs.google.com/document/d/1rKj6SFTLrKHnVcyX2sCJbt5rj4peIMCdt0tdNWX4-lQ/edit?usp=sharing -->
  

<template>
  <div class="pie" v-if="!loading">
    <Pie :data="dataset" :options="options" />
  </div>
</template>

<script setup>
import { Chart as ChartJS, ArcElement, Tooltip, Legend } from "chart.js";
import { Pie } from "vue-chartjs";
import { ref, onMounted } from "vue";
import axios from "axios";

ChartJS.register(ArcElement, Tooltip, Legend);

const dataset = ref({
  labels: [],
  datasets: [
    {
      backgroundColor: [],
      data: [],
    },
  ],
});

const loading = ref(false);
const options = {
  responsive: true,
  maintainAspectRatio: false,
};

const link = "http://localhost/rest/index.php/";

onMounted(async () => {
  loading.value = true;
  let answer = await axios.get(link + "paintings/pie");
  let types = await axios.get(link + "type/list.json");

  answer.data.forEach((el) => {
    types.data.forEach((el2) => {
      if (el.type_id == el2.type_id) {
        dataset.value.labels.push(el2.type_name);
        dataset.value.datasets[0].backgroundColor.push(getRandomColor());
        dataset.value.datasets[0].data.push(el.num_of_types);
      }
    });
  });
  loading.value = false;
});

const getRandomColor = () => {
  let red = Math.floor(Math.random() * 256);
  let green = Math.floor(Math.random() * 256);
  let blue = Math.floor(Math.random() * 256);
  let color = "#" + red.toString(16) + green.toString(16) + blue.toString(16);
  return color;
};
</script>
<style scoped>
.pie {
  display: flex;
  justify-content: center;
}
</style>

