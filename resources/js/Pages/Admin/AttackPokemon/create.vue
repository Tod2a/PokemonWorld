<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { ref } from 'vue';
import Modal from '@/Components/Modal.vue';
import InputError from '@/Components/InputError.vue';

const props = defineProps({
    pokemon: Object,
    types: Array,
})

const form = useForm({
    pokemon: null,
    attack: null,
    name: null,
    level: null,
})

form.pokemon = props.pokemon.id;

const confirmingAttackAdd = ref(false);
let errorlevel = null;

const confirmAttackAdd = (id, name) => {
    form.attack = id;
    form.name = name
    confirmingAttackAdd.value = true;
};

const addAttack = () => {
    form.post(route('attackpokemon.store'), {
        onSuccess : () => closeModal(),
    });  
};

const closeModal = () => {
    confirmingAttackAdd.value = false;
    form.reset();
    form.pokemon = props.pokemon.id;
};

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
    <authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add new attack to {{ props.pokemon.name }}</h2>
        </template>
        <div class="flex justify-center">
            <div class="my-3">
                <Link :href="route('pokemon.edit', props.pokemon.id)" class="bg-gray-300 px-2 py-2 rounded-lg">Back</Link>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex justify-center">
                            <input type="text" v-model="searchQuery" @input="debouncedSearch" placeholder="Search by name" />

                            <select v-model="typeQuery" @change="debouncedSearch">
                                <option value="">All Types</option>
                                <option v-for="type in props.types" :value="type.name" :key="type.id">{{ type.name }}</option>
                            </select>
                        </div>
                        <Transition
                            enter-active-class="transition ease-in-out"
                            enter-from-class="opacity-0"
                            leave-active-class="transition ease-in-out"
                            leave-to-class="opacity-0"
                        >

                            <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                        </Transition>
                        <div class="overflow-x-auto">
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
                                            <PrimaryButton @click="confirmAttackAdd(attack.id, attack.name)">Add</PrimaryButton>
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
                        
                        <Modal :show="confirmingAttackAdd" @close="closeModal">
                            <div class="p-6">
                                <h2 class="text-lg font-medium text-gray-900">
                                    Are you sure you want to add this attack ({{ form.name }})?
                                </h2>
                                <label for="level">Insert the level when the pokemon learn the attack</label>
                                <input id="level" type="number" class="mt-1 block w-3/4" placeholder="Level" v-model="form.level" min="1" required/>
                                <div v-if="form.errors.level">{{ form.errors.level }}</div>
                                <div class="mt-6 flex justify-end">
                                    <SecondaryButton @click="closeModal"> Cancel </SecondaryButton>

                                    <PrimaryButton @click="addAttack">Add</PrimaryButton>
                                </div>
                            </div>
                        </Modal>
                    </div>
                </div>
            </div>
        </div>
    </authenticated-layout>
</template>
