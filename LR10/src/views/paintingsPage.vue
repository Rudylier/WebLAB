<template>
    <section class="container">
        <h1 class="text-center">
            Художники
        </h1>

        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Фильтрация по залу
        </button>
        <i> &nbsp;&nbsp;</i>
                    <button @click="onClickCreate()" type="button" class="btn btn-primary"> Создать</button>    
        <ul class="dropdown-menu">
            <li @click="filter = hall" v-for="hall in gethalls">
                {{ hall }}
            </li>
        </ul>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Зал</th>

                </tr>
            </thead>
            <tbody>
                <tr v-for="item in getList">
                <th scope="row">{{ item.id }}</th>
                <td>{{ item.name }}</td>
                <td>{{ item.surname }}</td>
                <td>{{ item.hall }}</td>
                <td> 
                    <button @click="onClickEdit(item.id)" type="button" class="btn btn-primary"> Изменить</button>    
                    <button @click="onClickRemove(item.id)" type="button" class="btn btn-danger offset-1"> Удалить</button>    
                </td>
                </tr>
            </tbody>
        </table>
            <!-- <Popup/> -->
    </section>
</template>

<script setup>
import Popup from '@/components/Popup.vue';
import { onMounted, computed, ref } from 'vue';
import { useStore } from 'vuex';
import { useRouter } from 'vue-router';
import { removeItem, fetchItems, selectItems, paintingsFilter } from '@/store/paintings/selectors';

const store = useStore();
const router = useRouter();

const paintingList = computed(() => selectItems(store));

const filter = ref("");

const onClickRemove = id => {
    const isConfirmRemove = confirm('Вы действительно хотите удалить запись?')
    if (isConfirmRemove) {
        removeItem(store, id)
    }
}

const onClickEdit = (id) => {
    router.push({ name: 'painting-edit', params: { id } })
}


const gethalls = computed(() => {
    const set = new Set();
    paintingList.value.map((val) => set.add(val.hall));
    return set;
})

const getList = computed(() => {
    if (filter.value.length) {
        paintingsFilter(store, filter.value);
        return paintingList.value.filter((val) => val.hall == filter.value);
    }
    else
        return paintingList.value;

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