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
                Home
            </Link>
            <Link :href="route('front.attack.index')" :active="route().current('front.attack.index')" class="inline-block px-4 py-2 rounded-md bg-red-600 hover:bg-red-700 focus:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                Attacks
            </Link>
            <!-- Ajoutez ici d'autres liens de la navigation -->
        </div>
    </nav>

    <div class="w-full min-h-screen bg-custom-background bg-fixed bg-cover bg-center bg-no-repeat flex flex-col items-center justify-start pt-6 sm:pt-0">

        <header class="bg-yellow-400 text-red-600 text-4xl shadow my-2 rounded-lg" v-if="$slots.header">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <slot name="header" />
            </div>
        </header>

        <!-- https://dev.to/mmcclure11/mobile-responsive-table-with-tailwindcss-57db -->

        <div>
            <slot />
        </div>
    </div>

</template>

