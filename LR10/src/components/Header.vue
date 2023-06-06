<template>
    <header class="header">
        <nav class="row container">
            <router-link 
            class="col-1"
            :class="{ active: route.name == 'paintings' }" 
            :to="{ name: 'paintings' }"
            >
                Художники
            </router-link>

            <router-link
            class="col-1"
            :class="{ active: route.name == 'halls' }" 
            :to="{ name: 'halls' }"
            >
                Залы
            </router-link>
        </nav>
    </header>
</template>

<script setup>
import { useRoute } from 'vue-router';

const route = useRoute();

</script>

<style lang="scss" scoped>
a {
    color: black;
    margin-top: 8px;
}

.active {
    color: rgb(0, 4, 255);
}

.header {
    background: #d8d8d8;
    height: 60px;
    padding-top: 10px;  
}
</style>