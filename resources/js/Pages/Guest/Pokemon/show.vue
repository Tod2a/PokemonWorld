<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    pokemon: Object
})

</script>

<template>
    <head title="Pokedex"/>
    <GuestLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ pokemon.name }}</h2>
        </template>
    
    

    </GuestLayout>
    
</template>