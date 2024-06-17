<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { ref, onMounted } from 'vue';

const props = defineProps({
    pokemon: Object,
    zones: Array,
})

const form = useForm({
    pokemon: null,
})

form.pokemon = props.pokemon.id;

</script>

<template>
    <Head title="Admin"/>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add zone to {{ props.pokemon.name }}</h2>
        </template>
        <div class="flex justify-center">
            <div class="my-3">
                <Link :href="route('pokemon.edit', props.pokemon.id)" class="bg-gray-300 px-2 py-2 rounded-lg hover:bg-gray-400">Back</Link>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="overflow-x-auto">
                            <Transition
                                enter-active-class="transition ease-in-out"
                                enter-from-class="opacity-0"
                                leave-active-class="transition ease-in-out"
                                leave-to-class="opacity-0"
                            >

                                <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                            </Transition>
                            <table class="table-auto w-full">
                                <thead>
                                    <tr class="uppercase text-left">
                                        <th class="px-4 py-2 border">Name</th>
                                        <th class="px-4 py-2 border">Region</th>
                                        <th class="px-4 py-2 border">x coordinates</th>
                                        <th class="px-4 py-2 border">y coordinates</th>
                                        <th class="px-4 py-2 border">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="zone in props.zones.data" :key="zone.id" class="hover:bg-gray-50 odd:bg-gray-100 hover:odd:bg-gray-200 transition">
                                        <td class="border px-4 py-2">{{ zone.name }}</td>
                                        <td class="border px-4 py-2">{{ zone.map.name }}</td>
                                        <td class="border px-4 py-2">{{ zone.row }}</td>
                                        <td class="border px-4 py-2">{{ zone.col }}</td>
                                        <td class="border px-4 py-2 space-x-4">
                                            <form @submit.prevent="form.post(route('zone.store', zone.id))">
                                                <primary-button :disabled="form.processing">Add</primary-button>

                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7" class="px-6">
                                            <Link :href="zones.prev_page_url" v-if="zones.prev_page_url">&lt; Previous</Link>
                                            Page {{ zones.current_page }} of {{ zones.last_page }}
                                            <Link :href="zones.next_page_url" v-if="zones.next_page_url">Next &gt;</Link>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
