<template>
  <div v-if="!loading">
    <Bar :data="data" :options="options" />
  </div>
</template>

<script setup>
import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale,
} from "chart.js";
import { Bar } from "vue-chartjs";
import { ref, onMounted } from "vue";
import axios from "axios";

ChartJS.register(
  CategoryScale,
  LinearScale,
  BarElement,
  Title,
  Tooltip,
  Legend
);

const loading = ref(false);
const link = "http://localhost/rest/index.php/";

onMounted(async () => {
  loading.value = true;
  let answer = await axios.get(link + "authors/list.json");
  answer.data.forEach((el) => {
    data.value.labels.push(el.fullname);
    data.value.datasets[0].data.push(el.income);
  });
  loading.value = false;
});

const data = ref({
  labels: [],
  datasets: [
    {
      label: "Распределедние дохода у авторов",
      backgroundColor: "#1371FF",
      data: [],
    },
  ],
});

const options = {
  responsive: true,
  maintainAspectRatio: false,
};
</script>

<style scoped></style>
