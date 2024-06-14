<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { ref } from 'vue';
import Modal from '@/Components/Modal.vue';

const props = defineProps({
    pokemon: Object,
    attacks: Array
})

</script>

<template>
    <Head title="Admin"/>
    <authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Add new attack to {{ props.pokemon.name }}</h2>
        </template>
        <div class="flex justify-center">
            <div class="my-3">
                <Link :href="route('pokemon.edit', props.pokemon.id)" class="bg-gray-300 px-2 py-2 rounded-lg">Back</Link>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        comming soon ? 
                    </div>
                </div>
            </div>
        </div>
    </authenticated-layout>
</template>