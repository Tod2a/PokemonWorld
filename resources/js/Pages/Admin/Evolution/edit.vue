<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    evolution: Object,
})

const form = useForm({
    level: null,
});
console.log(props.evolution);

form.level = props.evolution.level;

</script>

<template>
    <Head title="admin"/>
    <authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Administration {{ props.evolution.prevolution_pokemon.name }} -> {{ props.evolution.evolution_pokemon.name }} </h2>
        </template>
        <div class="flex justify-center">
            <div class="my-3">
                <Link :href="route('pokemon.index')" class="bg-gray-300 px-2 py-2 rounded-lg">Home</Link>
            </div>
        </div>
        
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form  @submit.prevent="form.put(route('evolution.update', props.evolution.id))" class="flex flex-col">

                            <label for="level">Level: </label>
                            <input class="block mt-1 w-full" id="level" type="number" v-model="form.level">
                            <div v-if="form.errors.level">{{ form.errors.level }}</div>

                            <div class="flex items-center gap-4">
                                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

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
    </authenticated-layout>
</template>