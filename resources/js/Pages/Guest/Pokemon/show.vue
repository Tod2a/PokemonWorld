<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    pokemon: Object,
    pokemonAttaques: Array
})

</script>

<template>
    <head title="Pokedex"/>
    <GuestLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ pokemon.name }}</h2>
        </template>
    
        <div>
        <h1>{{ pokemon.name }}</h1>
        <p>Type 1: {{ pokemon.type1.name }}</p>

        <h2>Attaques</h2>
        <ul>
            <li v-for="pokemonAttaque in pokemonAttaques" :key="pokemonAttaque.attaque.id">
                {{ pokemonAttaque.attaque.name }} 
                {{ pokemonAttaque.attaque.category.name }}
            </li>
        </ul>
  </div>

    </GuestLayout>
    
</template>