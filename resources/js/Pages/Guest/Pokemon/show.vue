<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import PokemonLink from '@/Components/PokemonLink.vue';

defineProps({
    pokemon: Object,
    pokemonAttacks: Array,
    types: Array
})

const getStatColor = (stat) => {
    if (stat >= 100) {
        return 'bg-green-500';
    } else if (stat >= 50) {
        return 'bg-yellow-500';
    } else {
        return 'bg-red-500';
    }
}

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
                    <PokemonLink :evopokemon="pokemon.evolution.prevolution_pokemon" :level="pokemon.evolution.level" v-if="pokemon.evolution !== null" class="mr-auto"/>
                    <PokemonLink :evopokemon="pokemon.prevolution.evolution_pokemon" :level="pokemon.prevolution.level" v-if="pokemon.prevolution !== null" class="ml-auto"/>
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
                        <div class="w-full sm:max-w-md bg-white rounded-lg px-2 py-2">
                            <h3>About {{ pokemon.name }}</h3>
                            <p>size: {{ pokemon.size/100 }}M</p>
                            <p>weight: {{ pokemon.weight/100 }}Kg</p>
                            <p>description: {{ pokemon.description }}</p>
                        </div>
                    </div>
                    <div class="bg-white px-4 py-4 my-4 rounded-lg">
                        <h3>Resistances/Weaknesses</h3>
                        <ul class="flex items-center justify-between">
                            <li v-for="type in types" :key="type.id" class="flex items-center">
                                <div>
                                    <img :src="type.imgurl" class="w-10 h-10" />
                                    <div v-if="pokemon.resistances.some(resistance => resistance.name === type.name)" class="w-8 h-7 bg-green-300 ml-1"></div>
                                    <div v-else-if="pokemon.weaknesses.some(weakness => weakness.name === type.name)" class="w-8 h-7 bg-red-300 ml-1"></div>
                                    <div v-else class="w-8 h-7 bg-white ml-1"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white px-4 py-4 my-4 rounded-lg">
                        <h3>Stats</h3>
                        <div class="flex justify-between px-10">
                            <div class="flex flex-col items-center">
                                <p>Hp</p>
                                <div class="h-20 w-6 bg-gray-300 relative">
                                    <div :class="['absolute bottom-0 left-0 w-full', getStatColor(pokemon.hp)]" :style="{ height: (pokemon.hp / 150 * 100) + '%' }"></div>
                                </div>
                                <p>{{ pokemon.hp }}</p>
                            </div>
                            <div class="flex flex-col items-center">
                                <p>Att</p>
                                <div class="h-20 w-6 bg-gray-300 relative">
                                    <div :class="['absolute bottom-0 left-0 w-full', getStatColor(pokemon.att)]" :style="{ height: (pokemon.att / 150 * 100) + '%' }"></div>
                                </div>
                                <p>{{ pokemon.att }}</p>
                            </div>
                            <div class="flex flex-col items-center">
                                <p>Def</p>
                                <div class="h-20 w-6 bg-gray-300 relative">
                                    <div :class="['absolute bottom-0 left-0 w-full', getStatColor(pokemon.def)]" :style="{ height: (pokemon.def / 150 * 100) + '%' }"></div>
                                </div>
                                <p>{{ pokemon.def }}</p>
                            </div>
                            <div class="flex flex-col items-center">
                                <p>AttSpe</p>
                                <div class="h-20 w-6 bg-gray-300 relative">
                                    <div :class="['absolute bottom-0 left-0 w-full', getStatColor(pokemon.attspe)]" :style="{ height: (pokemon.attspe / 150 * 100) + '%' }"></div>
                                </div>
                                <p>{{ pokemon.attspe }}</p>
                            </div>
                            <div class="flex flex-col items-center">
                                <p>DefSpe</p>
                                <div class="h-20 w-6 bg-gray-300 relative">
                                    <div :class="['absolute bottom-0 left-0 w-full', getStatColor(pokemon.defspe)]" :style="{ height: (pokemon.defspe / 150 * 100) + '%' }"></div>
                                </div>
                                <p>{{ pokemon.defspe }}</p>
                            </div>
                            <div class="flex flex-col items-center">
                                <p>Vit</p>
                                <div class="h-20 w-6 bg-gray-300 relative">
                                    <div :class="['absolute bottom-0 left-0 w-full', getStatColor(pokemon.vit)]" :style="{ height: (pokemon.vit / 150 * 100) + '%' }"></div>
                                </div>
                                <p>{{ pokemon.vit }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white px-4 py-4 my-4 rounded-lg">
                        <h3>Attacks</h3>
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border-collapse">
                                <thead>
                                    <tr class="bg-gray-200">
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
