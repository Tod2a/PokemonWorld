<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';

const props = defineProps({
  types: Array
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
    });
    attacks.value = response.data;
};

const debouncedSearch = (() => {
    let timerId;
    return () => {
        clearTimeout(timerId);

        timerId = setTimeout(() => {
            fetchAttacks(route('front.attack.search'));
        }, 300);
    };
})();
onMounted(() => {
    debouncedSearch();
})

</script>

<template>
    <Head title="Attacks" />

    <GuestLayout>
        <template #header>
            <h2 class="font-semibold leading-tight">Attacks</h2>
        </template>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 px-12 py-12 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <input type="text" v-model="searchQuery" @input="debouncedSearch" placeholder="Search by name" />

            <select v-model="typeQuery" @change="debouncedSearch">
                <option value="">All Types</option>
                <option v-for="type in props.types" :value="type.name" :key="type.id">{{ type.name }}</option>
            </select>
            <table class="table-auto w-full">
                <thead>
                    <tr class="uppercase text-left">
                        <th class="px-4 py-2 border">Category</th>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">power</th>
                        <th class="px-4 py-2 border">accuracy</th>
                        <th class="px-4 py-2 border">MaxPP</th>
                        <th class="px-4 py-2 border">type</th>
                        <th class="px-4 py-2 border">Description</th>
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
                                    <td class="border px-4 py-2 space-x-4">{{ attack.description }}</td>
                                </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="px-6">
                            <button @click="fetchAttacks(attacks.prev_page_url)" v-if="attacks.prev_page_url">&lt; Previous</button>
                            Page {{ attacks.current_page }} of {{ attacks.last_page }}
                            <button @click="fetchAttacks(attacks.next_page_url)" v-if="attacks.next_page_url">Next &gt;</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </GuestLayout>
</template>