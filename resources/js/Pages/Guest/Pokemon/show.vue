<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import PokemonLink from '@/Components/PokemonLink.vue';
import StatShow from '@/Components/StatShow.vue';

defineProps({
    pokemon: Object,
    pokemonAttacks: Array,
    types: Array
})

</script>

<template>
    <head title="Pokedex"/>
    <GuestLayout>
        
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ pokemon.name }}</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex">
                    <PokemonLink id="navprevo" :evopokemon="pokemon.prevolution.prevolution_pokemon" :level="pokemon.prevolution.level" v-if="pokemon.prevolution !== null" class="mr-auto"/>
                    <PokemonLink id="navevo" :evopokemon="pokemon.evolution.evolution_pokemon" :level="pokemon.evolution.level" v-if="pokemon.evolution !== null" class="ml-auto"/>
                </div>   
                <div class="flex flex-col">
                    <div class="flex space-x-10">
                        <div class="w-full sm:max-w-md">
                            <img :src="'/' + pokemon.imgurl" :alt="pokemon.name" class="rounded-lg"/>
                        </div>
                        <div class="w-full sm:max-w-md flex flex-col justify-center items-center">
                            <img :src="pokemon.type1.imgurl"/>
                            <img :src="pokemon.type2.imgurl" :alt="pokemon.type2.name" v-if="pokemon.type2"/>
                        </div>
                        <div class="w-full sm:max-w-md bg-white rounded-lg px-2 py-2 bg-yellow-200 border-4 border-red-600">
                            <h3 class="font-bold">About {{ pokemon.name }}</h3>
                            <div><div class="font-bold">Size: </div>{{ pokemon.size/100 }}M</div>
                            <div><div class="font-bold">Weight: </div>{{ pokemon.weight/1000 }}Kg</div>
                            <div>
                                <div class="font-bold">Location: </div>
                                <div v-if="pokemon.zones.length > 0">
                                    <div v-for="zone in pokemon.zones" :key="zone">{{ zone.name }}<Link :href="route('front.map.show', zone.id)" class="text-white mx-1 bg-red-600 rounded-lg p-1">Go To</Link></div>
                                </div>
                                <div v-else>
                                    No information
                                </div>
                            </div>
                            <div><div class="font-bold">Description: </div>{{ pokemon.description }}</div>
                        </div>
                    </div>
                    <div class="bg-white px-4 py-4 my-4 rounded-lg bg-yellow-200 border-4 border-red-600">
                        <h3 class="font-bold mb-2">Resistances/Weaknesses</h3>
                        <ul class="flex flex-wrap items-center justify-around gap-2">
                            <li v-for="type in types" :key="type.id" class="flex items-center">
                                <div class="flex flex-col items-center">
                                    <img :src="type.imgurl" class="w-10 h-10" />
                                    <div v-if="pokemon.resistances.some(resistance => resistance.name === type.name)" class="w-8 h-7 bg-green-300 mt-1"></div>
                                    <div v-else-if="pokemon.weaknesses.some(weakness => weakness.name === type.name)" class="w-8 h-7 bg-red-300 mt-1"></div>
                                    <div v-else class="w-8 h-7 bg-transparent mt-1"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white px-4 py-4 my-4 rounded-lg bg-yellow-200 border-4 border-red-600">
                        <h3 class="font-bold">Stats</h3>
                        <div class="flex justify-between px-10">
                            <StatShow :stat="pokemon.hp"/>
                            <StatShow :stat="pokemon.att"/>
                            <StatShow :stat="pokemon.def"/>
                            <StatShow :stat="pokemon.attspe"/>
                            <StatShow :stat="pokemon.defspe"/>
                            <StatShow :stat="pokemon.vit"/>
                        </div>
                    </div>
                    <div class="bg-white px-4 py-4 my-4 rounded-lg bg-yellow-200 border-4 border-red-600">
                        <h3 class="font-bold">Attacks</h3>
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border-collapse">
                                <thead>
                                    <tr class="bg-yellow-400">
                                        <th class="border px-4 py-2">Category</th>
                                        <th class="border px-4 py-2">Name</th>
                                        <th class="border px-4 py-2">Level</th>
                                        <th class="border px-4 py-2">Power</th>
                                        <th class="border px-4 py-2">Accuracy</th>
                                        <th class="border px-4 py-2">MaxPP</th>
                                        <th class="border px-4 py-2">Type</th>
                                        <th class="border px-4 py-2">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="pokemonAttack in pokemonAttacks" :key="pokemonAttack.attack.id" class="hover:bg-gray-100">
                                        <td class="border px-4 py-2"><img :src="pokemonAttack.attack.category.imgurl" :alt="pokemonAttack.attack.category.name" class="max-w-xs h-auto object-contain"/></td>
                                        <td class="border px-4 py-2">{{ pokemonAttack.attack.name }}</td>
                                        <td class="border px-4 py-2">{{ pokemonAttack.level }}</td>
                                        <td class="border px-4 py-2">{{ pokemonAttack.attack.power }}</td>
                                        <td class="border px-4 py-2">{{ pokemonAttack.attack.accuracy }}</td>
                                        <td class="border px-4 py-2">{{ pokemonAttack.attack.maxpp }}</td>
                                        <td class="border px-4 py-2"><img :src="pokemonAttack.attack.type.imgurl" :alt="pokemonAttack.attack.type.name" class="max-w-xs h-auto object-contain"/></td>
                                        <td class="border px-4 py-2 whitespace-normal">{{ pokemonAttack.attack.description }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </GuestLayout>

</template>
