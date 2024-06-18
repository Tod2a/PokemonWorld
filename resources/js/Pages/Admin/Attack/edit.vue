<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    attack: Object,
    categories: Array,
    types: Array
})

const form = useForm({
    name: null,
    power: null,
    accuracy: null,
    maxpp: null,
    description: null,
    category: null,
    type: null,
})

form.name = props.attack.name;
form.power = props.attack.power;
form.accuracy = props.attack.accuracy;
form.maxpp = props.attack.maxpp;
form.description = props.attack.description;
form.category = props.attack.category.id;
form.type = props.attack.type.id;

</script>

<template>
    <Head title="Admin"/>
    <Authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Administration Attacks</h2>
        </template>
        <div class="flex justify-center">
            <div class="my-3">
                <Link id="editback" :href="route('attack.index')" class="bg-gray-300 px-2 py-2 rounded-lg hover:bg-gray-400">Back</Link>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form @submit.prevent="form.put(route('attack.update', props.attack))" class="flex flex-col">
                            <div>
                                <label for="name">Name: </label>
                                <input class="block mt-1 w-full" id="name" type="text" v-model="form.name">
                                <div v-if="form.errors.name">{{ form.errors.name }}</div>
                            </div>
                            <div>
                                <label for="power">Power: </label>
                                <input class="block mt-1 w-full" id="power" type="number" v-model="form.power">
                                <div v-if="form.errors.power">{{ form.errors.power }}</div>
                            </div>
                            <div>
                                <label for="accuracy">Accuracy: </label>
                                <input class="block mt-1 w-full" id="accuracy" type="number" v-model="form.accuracy">
                                <div v-if="form.errors.accuracy">{{ form.errors.accuracy }}</div>
                            </div>
                            <div>
                                <label for="maxpp">MaxPP: </label>
                                <input class="block mt-1 w-full" id="maxpp" type="number" v-model="form.maxpp">
                                <div v-if="form.errors.maxpp">{{ form.errors.maxpp }}</div>
                            </div>
                            <div>
                                <label for="description">Description: </label>
                                <textarea class="block mt-1 w-full" id="description" v-model="form.description"/>
                                <div v-if="form.errors.description">{{ form.errors.description }}</div>
                            </div>
                            <div>
                                <label for="category">Category: </label>
                                <select class="block mt-1 w-full" id="category" v-model="form.category">
                                    <option v-for="category in categories" :value="category.id" :key="category.id">{{ category.name }}</option>
                                </select>
                                <div v-if="form.errors.category">{{ form.errors.category }}</div>
                            </div>
                            <div>
                                <label for="type">Type: </label>
                                <select class="block mt-1 w-full" id="type" v-model="form.type">
                                    <option v-for="type in types" :value="type.id" :key="type.id">{{ type.name }}</option>
                                </select>
                                <div v-if="form.errors.type">{{ form.errors.type }}</div>
                            </div>

                            <div class="flex items-center gap-4">
                                <PrimaryButton id="editsave" :disabled="form.processing">Save</PrimaryButton>

                                <Transition
                                    enter-active-class="transition ease-in-out"
                                    enter-from-class="opacity-0"
                                    leave-active-class="transition ease-in-out"
                                    leave-to-class="opacity-0"
                                >

                                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                                </Transition>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </Authenticated-layout>
</template>
