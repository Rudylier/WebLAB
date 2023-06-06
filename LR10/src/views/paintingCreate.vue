<template>
    <section class="container">

    <h1 class="text-center">
        Создание записи
    </h1>

    <form @submit.prevent="onSubmit">
        <label for="name" class="form-label">Имя</label>
        <input type="text" class="form-control" id="name" v-model="form.name">

        <label for="surname" class="form-label">Фамилия</label>
        <input type="text" class="form-control" id="surname" v-model="form.surname">


        <label for="hall" class="form-label">Зал</label>
        <select v-model="form.hall" class="form-control" id="hall">
            <option v-for="hall in gethalls" :value="hall">
                {{ hall }}
            </option>
        </select>

        <button  type="submit" class="btn btn-primary mt-3" :disabled="!valid">
            Создать
        </button>
    </form>

    <div v-show="!valid" class="text-danger">
        Заполните все поля
    </div>

    </section>
</template>

<script setup>
import { useStore } from 'vuex';
import { updateItem, selectItemById, fetchItems, selectItems } from '@/store/paintings/selectors';
import { useRoute, useRouter } from 'vue-router';
import { computed, onMounted, reactive, watchEffect } from "vue";

const store = useStore();
const route = useRoute();
const router = useRouter();

const paintingList = computed(() => selectItems(store));

const form = reactive({
    id: '',
    name: '',
    surname: '',
    hall: '',
});

const valid = computed(() => !!(form.name && form.surname));

const onSubmit = () => {
    updateItem(store, form.id, form.hall, form.speciality);
    router.push({ name: 'paintings' })
}

watchEffect(() => {
    const hall = selectItemById(store, route.params.id);
    Object.keys(hall).forEach(key => {
        form[key] = hall[key]
    })
});

const gethalls = computed(() => {
    const set = new Set();
    paintingList.value.map((val) => set.add(val.hall));
    return set;
})

onMounted(() => {
    fetchItems(store);
})
</script>

<style lang="scss" scoped></style>