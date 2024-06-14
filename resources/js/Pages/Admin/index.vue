<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';


</script>

<template>
    <Head title="Admin" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Administation Homepage</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
                        <p>Welcome on the administation Homepage</p>
                        
                    
                </div>
                <div class="bg-white my-2 p-6 text-gray-900">
                    <h3 class="flex justify-center py-5">Pokemon</h3>
                    <p>When you create a new pokemon, you will just see the startings attacks.</p>
                    <p>we recommend to set the level at 1, and leaving the input empty for the attacks not learned.</p>
                    <p>You can add more attacks in the edit form when the pokemon is created</p>
                    <p>The stats (hp, vit, attspe, ...) should be between 1 and 150</p>
                    <p>You can add one attack to a pokemon many times(a pokemon can learn the same attack at different level)</p>
                </div>
                <div class="bg-white my-2 p-6 text-gray-900">
                    <h3 class="flex justify-center py-5">Attacks</h3>
                    <p>Carefull when you delete attacks, the pokemons will lost the attack too.</p>
                    <p> the rules for the attacks:</p>
                    <ul>
                        <li>all attacks should have a category, physical, special or status</li>
                        <li>one type too</li>
                        <li>the power should be between 0 and 200</li>
                        <li>the accuracy between 10 and 100</li>
                        <li>mappp between 5 and 40</li>
                        <li>is starting checkbox is for the starter attacks, if checked = true</li>
                    </ul>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>