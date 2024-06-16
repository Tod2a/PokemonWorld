<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { ref, onMounted } from 'vue';

const props = defineProps({
    pokemon: Object,
})

const form = useForm({
    pokemon: null,
    type: null,
    level: null,
    evo: null,
})

form.pokemon = props.pokemon.id;

const searchQuery = ref('');
const pokemons = ref([]);

const fetchPokemons = async (url) => {
    const response = await axios.get(url, {
        params: {
            query: searchQuery.value
        },
    });
    pokemons.value = response.data;
};

const debouncedSearch = (() => {
    let timerId;
    return () => {
        clearTimeout(timerId);

        timerId = setTimeout(() => {
            fetchPokemons(route('evolution.search'));
        }, 300);
    };
})();

const selectResult = (poke) => {
    form.evo = poke.id;
    searchQuery.value = poke.name;
    pokemons.value = [];
};

</script>

<template>
    <Head title="Admin"/>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add evolution to {{ props.pokemon.name }}</h2>
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
                        <form @submit.prevent="form.post(route('evolution.store'))" class="flex flex-col">
                            <div class="relative">
                                <input
                                    type="text"
                                    v-model="searchQuery"
                                    @input="debouncedSearch"
                                    placeholder="Search by name"
                                    class="w-full px-4 py-2 border rounded-lg"
                                />
                                <div v-if="searchQuery && pokemons.data && pokemons.data.length > 0" class="absolute z-10 w-full bg-white rounded-lg shadow-lg mt-1">
                                    <ul>
                                        <li
                                            v-for="poke in pokemons.data.slice(0, 5)"
                                            :key="poke.id"
                                            @click="selectResult(poke)"
                                            class="px-4 py-2 hover:bg-gray-100 border-b last:border-b-0 cursor-pointer"
                                        >
                                            {{ poke.name }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <label for="level">Level: </label>
                                <input class="block mt-1 w-full" id="level" type="number" v-model="form.level">
                                <div v-if="form.errors.level">{{ form.errors.level }}</div>
                            </div>
                            <div>
                                <label for="type">Type: </label>
                                <select class="block mt-1 w-full" id="type" v-model="form.type">
                                    <option :value="1">Prevolution: The selected pokemon will evolve into {{ props.pokemon.name }}</option>
                                    <option :value="2">Evolution: {{ props.pokemon.name }} will evolve into the selected pokemon</option>
                                </select>
                                <div v-if="form.errors.type">{{ form.errors.type }}</div>
                            </div>
                            <div class="flex items-center gap-4 mt-4">
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
    </AuthenticatedLayout>
</template>