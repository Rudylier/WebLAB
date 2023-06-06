<template>
    <section class="container">
        <h1 class="text-center">
            Редактирование записи
        </h1>
        <form @submit.prevent="onSubmit">
            <label for="id" class="form-label">ID</label>
            <input type="number" class="form-control" id="id" v-model="form.id" disabled>

            <label for="hall-name" class="form-label">Название зала</label>
            <select class="form-control" id="hall-name" v-model="form.hall">
                <option v-for="hall in hallList" :value="hall.hall">
                    {{ hall.hall }}
                </option>
            </select>

            <label for="hall-speciality" class="form-label">Название жанра</label>
            <input type="text" v-model="form.speciality" class="form-control" id="hall-speciality">

            <button type="submit" class="btn btn-primary mt-3" :disabled="!valid">
                Изменить
            </button>
        </form>

        <div v-show="!valid" class="text-danger">
          Заполните все поля
        </div>
    </section>
</template>

<script setup>
import { useStore } from 'vuex';
import { updateItem, selectItemById, fetchItems, selectItems } from '@/store/halls/selectors';
import { useRoute, useRouter } from 'vue-router';
import { computed, onMounted, reactive, watchEffect } from "vue";

const store = useStore();
const route = useRoute();
const router = useRouter();

const hallList = computed(() => selectItems(store));

const form = reactive({
    id: '',
    hall: '',
    speciality: '',
});

const valid = computed(() => !!(form.hall && form.speciality));

const onSubmit = () => {
    updateItem(store, form.id, form.hall, form.speciality);
    router.push({ name: 'halls' })
}

watchEffect(() => {
    const hall = selectItemById(store, route.params.id);
    Object.keys(hall).forEach(key => {
        form[key] = hall[key]
    })
});

onMounted(() => {
    fetchItems(store);
})
</script>

<style lang="scss" scoped></style>