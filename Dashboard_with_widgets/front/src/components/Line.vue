<template>
  <div v-if="!loading">
    <Line :data="dataSet" :options="options" />
  </div>
</template>

<script setup>
import {
  Chart as ChartJS,
  CategoryScale,
  LinearScale,
  PointElement,
  LineElement,
  Title,
  Tooltip,
  Legend,
} from "chart.js";
import { Line } from "vue-chartjs";
import { ref, onMounted } from "vue";
import axios from "axios";

ChartJS.register(
  CategoryScale,
  LinearScale,
  PointElement,
  LineElement,
  Title,
  Tooltip,
  Legend
);

const dataSet = ref({
  labels: [],
  datasets: [
    {
      label: "Кол-во регистраций",
      backgroundColor: "#1371FF",
      data: [],
    },
  ],
});

const options = {
  responsive: true,
  maintainAspectRatio: false,
};

const loading = ref(false);
const link = "http://localhost/rest/index.php/";

onMounted(async () => {
  loading.value = true;
  let answer = await axios.get(link + "authors/line");
  answer.data.forEach((el) => {
    dataSet.value.labels.push(getMonthName(el.month));
    dataSet.value.datasets[0].data.push(el.num_authors);
  });
  let monthNames = [
    "Январь",
    "Февраль",
    "Март",
    "Апрель",
    "Май",
    "Июнь",
    "Июль",
    "Август",
    "Сентябрь",
    "Октябрь",
    "Ноябрь",
    "Декабрь",
  ];

  monthNames.forEach((el, index) => {
    if (!dataSet.value.labels.includes(el)) {
      dataSet.value.labels.splice(index, 0, el);
      dataSet.value.datasets[0].data.splice(index, 0, 0);
    }
  });
  loading.value = false;
});

const getMonthName = (monthNumber) => {
  let monthNames = [
    "Январь",
    "Февраль",
    "Март",
    "Апрель",
    "Май",
    "Июнь",
    "Июль",
    "Август",
    "Сентябрь",
    "Октябрь",
    "Ноябрь",
    "Декабрь",
  ];

  if (monthNumber >= 1 && monthNumber <= 12) {
    return monthNames[monthNumber - 1];
  }
};
</script>
