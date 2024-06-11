<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    pokemon:Array
})

</script>

<template>
    <Head title="Admin" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Administation Pokemon</h2>
        </template>
        <div class="flex justify-center">
            <div class="bg-gray-300 my-2 px-2 py-2 rounded-lg">
                <a :href="route('pokemon.create')">Create</a>
            </div>
        </div>
        
        

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        incomming
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>