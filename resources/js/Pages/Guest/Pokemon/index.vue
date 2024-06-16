<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';

const props = defineProps({
  types: Array
})

const searchQuery = ref('');
const typeQuery = ref('');
const pokemons = ref([]);

const fetchPokemons = async (url) => {
    const response = await axios.get(url, {
        params: {
            query: searchQuery.value,
            type: typeQuery.value
        },
    });
    pokemons.value = response.data;
};

const debouncedSearch = (() => {
    let timerId;
    return () => {
        clearTimeout(timerId);

        timerId = setTimeout(() => {
            fetchPokemons(route('pokemon.search'));
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
            <h2 class="font-semibold leading-tight">Pokedex</h2>
        </template>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 px-12 py-12 bg-white shadow-md sm:rounded-lg overflow-x-auto">
            <input type="text" v-model="searchQuery" @input="debouncedSearch" placeholder="Search by name" />

            <select v-model="typeQuery" @change="debouncedSearch">
                <option value="">All Types</option>
                <option v-for="type in props.types" :value="type.name" :key="type.id">{{ type.name }}</option>
            </select>

            <table class="table-auto w-full overflow-x-auto">
                <thead>
                    <tr>
                        <th class="px-6">Image</th>
                        <th class="px-6">Name</th>
                        <th class="px-6">Type</th>
                        <th class="px-6">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="pokemon in pokemons.data" :key="pokemon.id">
                        <td class="px-6"><img :src="pokemon.imgurl" :alt="'Image ' + pokemon.name" class="w-full sm:max-w-xs h-auto object-contain"/></td>
                        <td class="px-6">{{ pokemon.name }}</td>
                        <td class="px-6">
                            <img :src="pokemon.type1.imgurl" :alt=" pokemon.type1.name" v-if="pokemon.type1" class="sm:max-w-md"/>
                            <img :src="pokemon.type2.imgurl" :alt=" pokemon.type2.name" v-if="pokemon.type2" class="sm:max-w-md"/>
                        </td>
                        <td class="px-6"><Link :href="route('pokemon.show', pokemon.id)" :id="'detail' + pokemon.id" class="bg-blue-400 px-2 py-2 rounded-lg">Details</Link></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="px-6">
                            <button @click="fetchPokemons(pokemons.prev_page_url)" v-if="pokemons.prev_page_url">&lt; Previous</button>
                            Page {{ pokemons.current_page }} of {{ pokemons.last_page }}
                            <button @click="fetchPokemons(pokemons.next_page_url)" v-if="pokemons.next_page_url">Next &gt;</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </GuestLayout>

</template>
