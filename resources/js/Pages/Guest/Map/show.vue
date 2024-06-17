<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    zone: Object,
})

</script>

<template>
    <head title="Pokedex"/>
    <GuestLayout>
        
        <template #header>
            <h2 class="font-semibold text-xl text-red-600 dark:text-gray-200 leading-tight">{{ props.zone.name }}</h2>
        </template>
        <div class="flex">
            <div class="w-full sm:max-w-md bg-white rounded-lg px-2 py-2 bg-yellow-200 border-4 border-red-600">
                <div>Description: </div>
                <div>{{ props.zone.description }}</div>
            </div>
            <img :src="props.zone.imgurl" class="m-auto"/>
        </div>

        <div class="bg-white px-4 py-4 my-4 rounded-lg bg-yellow-200 border-4 border-red-600">
            <h3 class="font-bold">Pokemon there</h3>
            <div v-if="props.zone.pokemon.length > 0">
                <div v-for="poke in props.zone.pokemon" :key="poke.id" class="py-2">
                    {{ poke.name }}
                    <Link :href="route('pokemon.show', poke.id)" class="bg-red-600 p-1 rounded-lg text-white">Details</Link>
                </div>
            </div>
            <div v-else>
                No pokemon have been encountered here yet
            </div>
        </div>
        
    </GuestLayout>
</template>