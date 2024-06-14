<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';


</script>

<template>
    <Head title="Admin" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Administation Homepage</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
                        <p>Welcome on the administation Homepage</p>
                        
                    
                </div>
                <div class="bg-white my-2 p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="flex justify-center py-5">Pokemon</h3>
                    <p>When you create a new pokemon, you will just see the startings attacks.</p>
                    <p>we recommend to set the level at 1, and leaving the input empty for the attacks not learned.</p>
                    <p>You can add more attacks in the edit form when the pokemon is created</p>
                    <p>The stats (hp, vit, attspe, ...) should be between 1 and 150</p>
                    <p>You can add one attack to a pokemon many times(a pokemon can learn the same attack at different level)</p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>