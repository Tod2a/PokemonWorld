<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';


const searchQuery = ref('');
const pokemons = ref([]);

const debouncedSearch = (() => {
    let timerId;

    return () => {
        clearTimeout(timerId);

        timerId = setTimeout(async () => {
            const response = await axios.get(route('pokemon.search'), {params: {query:searchQuery.value}});
            pokemons.value = response.data;
        }, 300);
    };
})();

onMounted(() => {
    debouncedSearch();
})
</script>

<template>
    <Head title="Pokedex" />

    <GuestLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Pokedex</h2>
        </template>

        <input type="text" v-model="searchQuery" @input="debouncedSearch" placeholder="Search by name" />
        <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="pokemon in pokemons.data" :key="pokemon.id">
                <td><img :src="pokemon.imgurl" :alt="'Image ' + pokemon.name"/></td>
                <td>{{ pokemon.name }}</td>
                <td>
                    <img :src="pokemon.type1.imgurl" :alt="'Image ' + pokemon.name" v-if="pokemon.type1"/>
                    <img :src="pokemon.type2.imgurl" :alt="'Image ' + pokemon.name" v-if="pokemon.type2"/>
                </td>
                <td>{{ pokemon.description }}</td>
            </tr>
        </tbody>
        </table>
    </GuestLayout>

</template>
