<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    pokemon: Number,
    attacks: Number,
})


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
                            <Link id="linkpoke" :href="route('pokemon.index')">Count of pokemon: {{ props.pokemon }}</Link>
                            <Link id="linkattack" :href="route('attack.index')">Count of attacks: {{ props.attacks }}</Link>
                        </div>
                    </div>
                </div>
                <div class="bg-white my-2 p-6 text-gray-900">
                    <h3 class="flex justify-center py-5">Pokemon</h3>
                    <p>When you create a new pokemon, you will just see no attacks.</p>
                    <p>You can add attacks in the edit form when the pokemon is created.</p>
                    <p>You can add one attack to a pokemon more than one time. (a pokemon can learn the same attack at different level)</p>
                    <p>You can add one evolution and one prevolution to your pokemon on the edit page, be careful to don't try ton put two prevolution/evolution to the same pokemon.</p>
                    <p>For the zone management, you can add/delete zone on the pokemon's edit page</p>
                    <p>Rules for the pokemon creation/edition: </p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Stats (hp, att, def, attspe, defspe, vit) should be between 1 and 150</li>
                        <li>Type 1 is required, type2 is optional</li>
                        <li>image is required</li>
                        <li>a weakness can't be a resistance and a resistance can't be a weakness</li>
                    </ul>
                </div>
                <div class="bg-white my-2 p-6 text-gray-900">
                    <h3 class="flex justify-center py-5">Attacks</h3>
                    <p>Be careful when you delete an attack, the Pokemon will lost the attack too.</p>
                    <p>Rules for the attacks:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>All attacks should have a category: physical, special or status</li>
                        <li>Attacks should have a type too</li>
                        <li>The power should be between 0 and 200</li>
                        <li>The accuracy between 10 and 100</li>
                        <li>Maxpp between 5 and 40</li>
                    </ul>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
