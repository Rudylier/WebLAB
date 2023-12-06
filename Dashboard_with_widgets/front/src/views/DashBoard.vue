<template>
  <div class="header">
    <div class="content">
      <h2>Панель администратора</h2>
    </div>
  </div> 
  <div class="page">
    <div class="justify-between mt mb">
      <sum-authors-income />
      <sum-pictures-cost-income />
    </div>

    <div class="graph mt mb">
      <Pie />
    </div>

    <div class="justify-between mt mb">
      <count-authors />
      <count-pictures />
    </div>

    <div class="graph mt mb">
      <Line />
    </div>

    <div class="justify-between mt mb">
      <max-picture-cost />
      <max-author-income />
    </div>

    <div class="graph mt mb">
      <Bar />
    </div>
  </div>

  
</template>

<style>
.header {
  color: white;
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: #151515;
  margin-bottom: 40px;
}

.card {
  background-color: #313131;
  color: white;
  text-align: center;
  align-items: center;
}

p {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
}
.content {
  text-align: center
}
</style>

<script setup>
import Bar from "@/components/Bar.vue";
import CountAuthors from "@/components/CountAuthors.vue";
import CountPictures from "@/components/CountPictures.vue";
import Line from "@/components/Line.vue";
import MaxPictureCost from "@/components/MaxPictureCost.vue";
import MaxAuthorIncome from "@/components/MaxAuthorIncome.vue";
import Pie from "@/components/Pie.vue";
import SumPicturesCostIncome from "@/components/SumPicturesCostIncome.vue";
import SumAuthorsIncome from "@/components/SumAuthorsIncome.vue";
</script>

<style scoped>
.page {
  padding-right: 10%;
  padding-left: 10%;
}
.justify-between {
  display: flex;
  justify-content: space-between;
}
.flex-center {
  display: flex;
  justify-content: center;
}
.mt {
  margin-top: 30px;
}
.mb {
  margin-bottom: 30px;
}
.graph {
  width: 100%;
}
</style>
