<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';
import { ref, onMounted } from 'vue';

const props = defineProps({
    types: Array,
})

const searchQuery = ref('');
const typeQuery = ref('');
const attacks = ref([]);

const fetchAttacks = async (url) => {
    const response = await axios.get(url, {
        params: {
            query: searchQuery.value,
            type: typeQuery.value
        },
        headers: {
            'X-Inertia': true
        }
    });
    attacks.value = response.data;
};

const debouncedSearch = (() => {
    let timerId;
    return () => {
        clearTimeout(timerId);

        timerId = setTimeout(() => {
            fetchAttacks(route('attackpokemon.search'));
        }, 300);
    };
})();

onMounted(() => {
    debouncedSearch();
})

</script>

<template>
    <Head title="Admin"/>
    <Authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Administration Attacks</h2>
        </template>
        <div class="flex justify-center">
            <div class="my-3">
                <Link :href="route('attack.create')" class="bg-gray-300 px-2 py-2 rounded-lg">Create</Link>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex justify-center">
                            <input type="text" v-model="searchQuery" @input="debouncedSearch" placeholder="Search by name" />

                            <select v-model="typeQuery" @change="debouncedSearch">
                                <option value="">All Types</option>
                                <option v-for="type in props.types" :value="type.name" :key="type.id">{{ type.name }}</option>
                            </select>
                        </div>
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="uppercase text-left">
                                    <th class="px-4 py-2 border">Category</th>
                                    <th class="px-4 py-2 border">Name</th>
                                    <th class="px-4 py-2 border">power</th>
                                    <th class="px-4 py-2 border">accuracy</th>
                                    <th class="px-4 py-2 border">MaxPP</th>
                                    <th class="px-4 py-2 border">type</th>
                                    <th class="px-4 py-2 border">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="attack in attacks.data" :key="attack.id" class="hover:bg-gray-50 odd:bg-gray-100 hover:odd:bg-gray-200 transition">
                                    <td class="border px-4 py-2">{{ attack.category.name }}</td>
                                    <td class="border px-4 py-2">{{ attack.name }}</td>
                                    <td class="border px-4 py-2">{{ attack.power }}</td>
                                    <td class="border px-4 py-2">{{ attack.accuracy }}</td>
                                    <td class="border px-4 py-2">{{ attack.maxpp }}</td>
                                    <td class="border px-4 py-2">{{ attack.type.name }}</td>
                                    <td class="border px-4 py-2 space-x-4">
                                        
                                    </td>
                                </tr>
                            </tbody> 
                            <tfoot>
                                <tr>
                                    <td colspan="7" class="px-6">
                                        <button @click="fetchAttacks(attacks.prev_page_url)" v-if="attacks.prev_page_url">&lt; Previous</button>
                                        Page {{ attacks.current_page }} of {{ attacks.last_page }}
                                        <button @click="fetchAttacks(attacks.next_page_url)" v-if="attacks.next_page_url">Next &gt;</button>
                                    </td>
                                </tr>
                            </tfoot>   
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </Authenticated-Layout>
</template>