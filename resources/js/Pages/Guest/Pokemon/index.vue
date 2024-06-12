<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';

const props = defineProps({
  types: Array
})

const searchQuery = ref('');
const typeQuery = ref('');
const pokemons = ref([]);

const debouncedSearch = (() => {
    let timerId;
    return () => {
        clearTimeout(timerId);

        timerId = setTimeout(async () => {
            const response = await axios.get(route('pokemon.search'), {
                params: {
                    query: searchQuery.value,
                    type: typeQuery.value
                }});
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
            <h2 class="font-semibold leading-tight">Pokedex</h2>
        </template>

        <div class="w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <input type="text" v-model="searchQuery" @input="debouncedSearch" placeholder="Search by name" />

            <select v-model="typeQuery" @change="debouncedSearch">
                <option v-for="type in props.types" :value="type.name" :key="type.id">{{ type.name }}</option>
            </select>

            <table>
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
                        <td class="px-6"><img :src="'storage/' + pokemon.imgurl" :alt="'Image ' + pokemon.name" class="sm:max-w-md"/></td>
                        <td class="px-6">{{ pokemon.name }}</td>
                        <td class="px-6">
                            <img :src="pokemon.type1.imgurl" :alt=" pokemon.type1.name" v-if="pokemon.type1" class="sm:max-w-md"/>
                            <img :src="pokemon.type2.imgurl" :alt=" pokemon.type2.name" v-if="pokemon.type2" class="sm:max-w-md"/>
                        </td>
                        <td class="px-6"><a :href="'/pokemon/' + pokemon.id" class="bg-blue-400 px-2 py-2 rounded-lg">Details</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </GuestLayout>

</template>
