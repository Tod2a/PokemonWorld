<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    pokemon: Object,
})

const form = useForm({
    url: null,
});

</script>

<template>
    <Head title="Admin" />
    <authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Change image {{ props.pokemon.name }}</h2>
        </template>
        <div class="flex justify-center">
            <div class="my-3">
                <Link :href="route('pokemon.edit', props.pokemon.id)" class="bg-gray-300 px-2 py-2 rounded-lg">Back</Link>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-2">
            <form @submit.prevent="form.post(route('update.pokemon.image', props.pokemon), { forceFormData: true })">
                <label for="imgurl">Modifier l'image: </label>
                <input id="imgurl" type="file" @input="form.url = $event.target.files[0]">
                <div v-if="form.errors.url">{{ form.errors.url }}</div>
                            
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




    </authenticated-layout>
                        
</template>