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
            <th>Name</th>
            <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="pokemon in pokemons.data" :key="pokemon.id">
            <td>{{ pokemon.name }}</td>
            <td>{{ pokemon.description }}</td>
            </tr>
        </tbody>
        </table>
        <img src="/storage/images/layout/background.jpg"/>
    </GuestLayout>

</template>