<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <nav class="flex items-center justify-between flex-wrap bg-red-800 p-6">
        <div>
            <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-white" />
            </Link>
        </div>
        <div class="flex-grow flex justify-center space-x-4 text-white">
            <Link :href="route('pokemon.home')" :active="route().current('pokemon.home')" class="inline-block px-4 py-2 rounded-md bg-red-600 hover:bg-red-700 focus:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                Pokemon
            </Link>
            <Link :href="route('front.attack.index')" :active="route().current('front.attack.index')" class="inline-block px-4 py-2 rounded-md bg-red-600 hover:bg-red-700 focus:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                Attacks
            </Link>
            <Link :href="route('front.map.index')" :active="route().current('front.attack.index')" class="inline-block px-4 py-2 rounded-md bg-red-600 hover:bg-red-700 focus:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                Maps
            </Link>
            <!-- Ajoutez ici d'autres liens de la navigation -->
        </div>
    </nav>

    <div class="w-full min-h-screen bg-custom-background bg-fixed bg-cover bg-center bg-no-repeat flex flex-col items-center justify-start pt-6 sm:pt-0 overflow-x-hidden">

        <header class="w-full flex justify-center items-center my-2">
        <div class="bg-yellow-400 text-red-600 text-lg shadow rounded-lg border-4 border-red-800 flex justify-center items-center" v-if="$slots.header">
            <div class="p-4 sm:p-6 lg:p-8">
                <slot name="header" />
            </div>
        </div>
    </header>

<div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <slot />
</div>
</div>

</template>

