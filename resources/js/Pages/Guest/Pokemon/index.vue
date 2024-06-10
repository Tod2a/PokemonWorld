<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
  pokemons: Object
})

</script>

<template>
    <Head title="Pokedex" />

    <GuestLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Pokedex</h2>
        </template>


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
