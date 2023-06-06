<template>
    <section class="container">
        <h1 class="text-center">
        Залы
        </h1>

        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Фильтрация по жанрам
        </button>

        <ul class="dropdown-menu">
            <li @click="filterValue = speciality" v-for="speciality in getSpeciality">
                {{ speciality }}
            </li>
        </ul>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Зал</th>
                    <th scope="col">Жанр зала</th>
                    <th scope="col">Действия</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in getList">
                <th scope="row">{{ item.id }}</th>
                <td>{{ item.hall }}</td>
                <td>{{ item.speciality }}</td>
                <td> 
                    <button @click="onClickEdit(item.id)" type="button" class="btn btn-primary"> Изменить</button>    
                    <button @click="onClickRemove(item.id)" type="button" class="btn btn-danger offset-1"> Удалить</button>    
                </td>
                </tr>
            </tbody>
        </table>
    </section>
</template>

<script setup>
import { onMounted, computed, ref } from 'vue';
import { useStore } from 'vuex';
import { useRouter } from 'vue-router';
import { removeItem, fetchItems, selectItems, hallsFilter } from '@/store/halls/selectors';

const store = useStore();
const router = useRouter();

const hallList = computed(() => selectItems(store));

const filterValue = ref("");

const onClickRemove = id => {
    const isConfirmRemove = confirm('Вы действительно хотите удалить запись?')
    if (isConfirmRemove) {
        removeItem(store, id)
    }
}

const onClickEdit = (id) => {
    router.push({ name: 'hall-edit', params: { id } })
}

const getList = computed(() => {
    if (filterValue.value.length) {
        hallsFilter(store, filterValue.value);
        return hallList.value.filter((val) => val.speciality == filterValue.value);
    }
    else
        return hallList.value;

})

const getSpeciality = computed(() => {
    const set = new Set();
    hallList.value.map((val) => set.add(val.speciality));
    return set;
})

onMounted(() => {
    fetchItems(store);
})
</script>

<style lang="scss" scoped>
li {
    cursor: pointer;
}
</style>