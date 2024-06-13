<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';

defineProps({
    types: Array,
    attacks: Array,
})


const form = useForm({
    name: null,
    description: null,
    hp: null,
    att: null,
    def: null,
    attspe: null,
    defspe: null,
    vit: null,
    size: null,
    weight: null,
    type1: null,
    type2: null,
    imgurl: null,
    resistances: [],
    weaknesses: [],
    attacks: [],
})

</script>

<template>
    <Head title="Admin" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Make a new pokemon</h2>
        </template>



        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form @submit.prevent="form.post(route('pokemon.store'), { forceFormData: true })" class="flex flex-col">
                            <div>
                                <label for="name">Name: </label>
                                <input class="block mt-1 w-full" id="name" type="text" v-model="form.name">
                                <div v-if="form.errors.name">{{ form.errors.name }}</div>
                            </div>

                            <div>
                                <label for="description">Description: </label>
                                <textarea class="block mt-1 w-full" id="description" v-model="form.description"/>
                                <div v-if="form.errors.description">{{ form.errors.description }}</div>
                            </div>

                            <div>
                                <label for="hp">hp: </label>
                                <input class="block mt-1 w-full" id="hp" type="number" v-model="form.hp" step="1" max="150">
                                <div v-if="form.errors.hp">{{ form.errors.hp }}</div>
                            </div>

                            <div>
                                <label for="att">att: </label>
                                <input class="block mt-1 w-full" id="att" type="number" v-model="form.att" step="1" max="150">
                                <div v-if="form.errors.att">{{ form.errors.att }}</div>
                            </div>

                            <div>
                                <label for="def">def: </label>
                                <input class="block mt-1 w-full" id="def" type="number" v-model="form.def" step="1" max="150">
                                <div v-if="form.errors.def">{{ form.errors.def }}</div>
                            </div>

                            <div>
                                <label for="attspe">attspe: </label>
                                <input class="block mt-1 w-full" id="attspe" type="number" v-model="form.attspe" step="1" max="150">
                                <div v-if="form.errors.attspe">{{ form.errors.attspe }}</div>
                            </div>

                            <div>
                                <label for="defspe">defspe: </label>
                                <input class="block mt-1 w-full" id="defspe" type="number" v-model="form.defspe" step="1" max="150">
                                <div v-if="form.errors.defspe">{{ form.errors.defspe }}</div>
                            </div>

                            <div>
                                <label for="vit">vit: </label>
                                <input class="block mt-1 w-full" id="vit" type="number" v-model="form.vit" step="1" max="150">
                                <div v-if="form.errors.vit">{{ form.errors.vit }}</div>
                            </div>

                            <div>
                                <label for="size">size(in grams): </label>
                                <input class="block mt-1 w-full" id="size" type="number" v-model="form.size" step="1">
                                <div v-if="form.errors.size">{{ form.errors.size }}</div>
                            </div>

                            <div>
                                <label for="weight">weight(in centimeters): </label>
                                <input class="block mt-1 w-full" id="weight" type="number" v-model="form.weight" step="1">
                                <div v-if="form.errors.weight">{{ form.errors.weight }}</div>
                            </div>

                            <div>
                                <label for="type1">Type1(not nullable): </label>
                                <select class="block mt-1 w-full" id="type1" v-model="form.type1">
                                    <option v-for="type in types" :value="type.id" :key="type.id">{{ type.name }}</option>
                                </select>
                                <div v-if="form.errors.type1">{{ form.errors.type1 }}</div>
                            </div>

                            <div>
                                <label for="type2">Type2(nullable): </label>
                                <select class="block mt-1 w-full" id="type2" v-model="form.type2">
                                    <option v-for="type in types" :value="type.id" :key="type.id">{{ type.name }}</option>
                                </select>
                                <div v-if="form.errors.type2">{{ form.errors.type2 }}</div>
                            </div>

                            <div>
                                <label for="imgurl"></label>
                                <input id="imgurl" type="file" @input="form.imgurl = $event.target.files[0]">
                                <div v-if="form.errors.imgurl">{{ form.errors.imgurl }}</div>
                            </div>

                            <div class="flex justify-between">

                                <div>
                                    <label>Resistances</label>
                                    <div v-for="type in types" :key="'resistance' + type.id" >
                                        <input type="checkbox" :id="'resistance' + type.id" :value="type.id" v-model="form.resistances">
                                        <label :for="'resistance' + type.id">{{ type.name }}</label>
                                    </div>
                                    <div v-if="form.errors.resistances">{{ form.errors.resistances }}</div>
                                </div>


                                <div>
                                    <label>Weaknesses</label>
                                    <div v-for="type in types" :key="'weakness' + type.id">
                                        <input type="checkbox" :id="'weakness' + type.id" :value="type.id" v-model="form.weaknesses">
                                        <label :for="'weakness' + type.id">{{ type.name }}</label>
                                    </div>
                                    <div v-if="form.errors.weaknesses">{{ form.errors.weaknesses }}</div>
                                </div>
                            </div>
                            
                            <div>
                                <label for="attacks">Attacks</label>
                                <ul>
                                    <li v-for="attack in attacks" :key="attack.id">
                                        <input type="checkbox" :id="'attack' + attack.id" :value="attack.id" v-model="form.attacks">
                                        {{ attack.name }}
                                        <input type="number" v-model="form.attacks[attack.id]" placeholder="level ...">
                                    </li>
                                </ul>
                            </div>


                            <div class="flex items-center gap-4">
                                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                                <Transition
                                    enter-active-class="transition ease-in-out"
                                    enter-from-class="opacity-0"
                                    leave-active-class="transition ease-in-out"
                                    leave-to-class="opacity-0"
                                >

                                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600 dark:text-gray-400">Saved.</p>
                                </Transition>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
