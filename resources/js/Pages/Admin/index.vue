<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    pokemon: Number,
    attacks: Number,
})

console.log(props);

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
                    <div class="flex">
                        <div class="mr-auto">Welcome on the administation Homepage</div>
                        <div class="flex flex-col">
                            <Link :href="route('pokemon.index')">Count of pokemon: {{ props.pokemon }}</Link>
                            <Link :href="route('attack.index')">Count of attacks: {{ props.attacks }}</Link>
                        </div>
                    </div> 
                </div>
                <div class="bg-white my-2 p-6 text-gray-900">
                    <h3 class="flex justify-center py-5">Pokemon</h3>
                    <p>When you create a new pokemon, you will just see the startings attacks.</p>
                    <p>We recommend to set level at 1 for each attacks you want to learn or leaving the input empty.</p>
                    <p>You can add more attacks in the edit form when the pokemon is created.</p>
                    <p>The stats (hp, vit, attspe, ...) should be between 1 and 150.</p>
                    <p>You can add one attack to a pokemon more than one time. (a pokemon can learn the same attack at different level)</p>
                </div>
                <div class="bg-white my-2 p-6 text-gray-900">
                    <h3 class="flex justify-center py-5">Attacks</h3>
                    <p>Be careful when you delete an attack, the Pokemon will lost the attack too.</p>
                    <p>Rules for the attacks:</p>
                    <ul>
                        <li>All attacks should have a category: physical, special or status</li>
                        <li>Attacks should have a type too</li>
                        <li>The power should be between 0 and 200</li>
                        <li>The accuracy between 10 and 100</li>
                        <li>Maxpp between 5 and 40</li>
                        <li>"Is Starting" checkbox is for the starter attacks, if is it checked = true</li>
                    </ul>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>