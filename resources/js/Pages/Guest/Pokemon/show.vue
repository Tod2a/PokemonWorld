<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    pokemon: Object,
    pokemonAttaques: Array,
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
        <div class="flex flex-col">
            <div class="flex space-x-10">
                <div class="w-full sm:max-w-md">
                    <img :src="`http://pokemonworld.test/${pokemon.imgurl}`" :alt="pokemon.name" class="rounded-lg"/>
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
                <ul class="flex items-center space-x-4">
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
                    <div class="flex flex-col">
                        <p>Hp</p>
                        <div :class="['h-4', getStatColor(pokemon.hp)]" :style="{ weight: (pokemon.hp / 150 * 100) + '%' }"></div>
                        <p>{{ pokemon.hp }}</p>
                    </div>
                    <div class="flex flex-col">
                        <p>Att</p>
                        <div :class="['h-4', getStatColor(pokemon.att)]" :style="{ weight: (pokemon.att / 150 * 100) + '%' }"></div>
                        <p>{{ pokemon.att }}</p>
                    </div>
                    <div class="flex flex-col">
                        <p>Def</p>
                        <div :class="['h-4', getStatColor(pokemon.def)]" :style="{ weight: (pokemon.def / 150 * 100) + '%' }"></div>
                        <p>{{ pokemon.def }}</p>
                    </div>
                    <div class="flex flex-col">
                        <p>AttSpe</p>
                        <div :class="['h-4', getStatColor(pokemon.attspe)]" :style="{ weight: (pokemon.attspe / 150 * 100) + '%' }"></div>
                        <p>{{ pokemon.attspe }}</p>
                    </div>
                    <div class="flex flex-col">
                        <p>DefSpe</p>
                        <div :class="['h-4', getStatColor(pokemon.defspe)]" :style="{ weight: (pokemon.defspe / 150 * 100) + '%' }"></div>
                        <p>{{ pokemon.defspe }}</p>
                    </div>
                    <div class="flex flex-col">
                        <p>Vit</p>
                        <div :class="['h-4', getStatColor(pokemon.vit)]" :style="{ weight: (pokemon.vit / 150 * 100) + '%' }"></div>
                        <p>{{ pokemon.vit }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white px-4 py-4 my-4 rounded-lg">
                <h3>Attacks</h3>
                <ul class="py-2">
                    <li>
                        <span class="px-3">Category</span>
                        <span class="px-3">Name</span>
                        <span class="px-3">Level</span>
                        <span class="px-3">Power</span>
                        <span class="px-3">Accuracy</span>
                        <span class="px-3">MaxPP</span>
                        <span class="px-3">Type</span>
                        <span>Description</span>
                    </li>
                    <li v-for="pokemonAttaque in pokemonAttaques" :key="pokemonAttaque.attaque.id" class="flex py-2">
                        <span class="px-6"><img :src="pokemonAttaque.attaque.category.imgurl" :alt="pokemonAttaque.attaque.category.name"/></span>
                        <span class="px-6">{{ pokemonAttaque.attaque.name }}</span>
                        <span class="px-6">{{ pokemonAttaque.level }}</span>
                        <span class="px-6">{{ pokemonAttaque.attaque.power }}</span>
                        <span class="px-8">{{ pokemonAttaque.attaque.accuracy }}</span>
                        <span class="px-8">{{ pokemonAttaque.attaque.maxpp }}</span>
                        <span class="px-2"><img :src="pokemonAttaque.attaque.type.imgurl" :alt="pokemonAttaque.attaque.type.name" class="w-1/4"/></span>
                        <span class="px-1">{{ pokemonAttaque.attaque.description }}</span>
                    </li>
                </ul>
            </div>
        </div>

    </GuestLayout>

</template>
