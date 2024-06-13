<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';
import { ref } from 'vue';

defineProps({
    pokemon:Array
})

const form = useForm({
    id: null
})

const confirmingPokemonDeletion = ref(false);

const confirmPokemonDeletion = ($id) => {
    form.id = $id;
    confirmingPokemonDeletion.value = true;
};

const deletePokemon = () => {
    form.delete(route('pokemon.destroy', form.id), {
        onSuccess : () => closeModal(),
    });
};

const closeModal = () => {
    confirmingPokemonDeletion.value = false;
    form.reset();
};

</script>

<template>
    <Head title="Admin" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Administation Pokemon</h2>
        </template>
        <div class="flex justify-center">
            <div class="my-3">
                <Link :href="route('pokemon.create')" class="bg-gray-300 px-2 py-2 rounded-lg">Create</Link>
            </div>
        </div>



        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <table class="table-auto w-full"> 
                        <thead>
                            <tr class="uppercase text-left">
                                <th class="px-4 py-2 border">Name</th>
                                <th class="px-4 py-2 border">Hp</th>
                                <th class="px-4 py-2 border">Att</th>
                                <th class="px-4 py-2 border">Def</th>
                                <th class="px-4 py-2 border">Attspe</th>
                                <th class="px-4 py-2 border">Defspe</th>
                                <th class="px-4 py-2 border">Vit</th>
                                <th class="px-4 py-2 border">Size</th>
                                <th class="px-4 py-2 border">Weight</th>
                                <th class="px-4 py-2 border">Types</th>
                                <th class="px-4 py-2 border">Actions</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr v-for="poke in pokemon.data" :key="poke.id" class="hover:bg-gray-50 odd:bg-gray-100 hover:odd:bg-gray-200 transition">
                                <td class="border px-4 py-2"> {{ poke.name }}</td>
                                <td class="border px-4 py-2"> {{ poke.hp }}</td>
                                <td class="border px-4 py-2"> {{ poke.att }}</td>
                                <td class="border px-4 py-2"> {{ poke.def }}</td>
                                <td class="border px-4 py-2"> {{ poke.attspe }}</td>
                                <td class="border px-4 py-2"> {{ poke.defspe }}</td>
                                <td class="border px-4 py-2"> {{ poke.vit }}</td>
                                <td class="border px-4 py-2"> {{ poke.size }}</td>
                                <td class="border px-4 py-2"> {{ poke.weight }}</td>
                                <td class="flex border px-4 py-2">{{ poke.type1.name }} <div v-if="poke.type2 !== null">/{{ poke.type2.name }}</div></td>
                                <td class="border px-4 py-2 space-x-4">
                                    <a :href="route('pokemon.edit', poke.id)" class="px-1 py-1 bg-blue-300 rounded-lg">Edit</a>
                                    <DangerButton @click="confirmPokemonDeletion(poke.id)">Delete</DangerButton>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="px-6">
                                    <Link :href="pokemon.prev_page_url" v-if="pokemon.prev_page_url">&lt; Previous</Link>
                                    Page {{ pokemon.current_page }} of {{ pokemon.last_page }}
                                    <Link :href="pokemon.next_page_url" v-if="pokemon.next_page_url">Next &gt;</Link>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                    <Modal :show="confirmingPokemonDeletion" @close="closeModal">
                        <div class="p-6">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                Are you sure you want to delete this pokemon?
                            </h2> 
                                                    
                            <div class="mt-6 flex justify-end">
                                <SecondaryButton @click="closeModal"> Cancel </SecondaryButton>
                            
                                <DangerButton @click="deletePokemon">Delete</DangerButton>
                            </div>
                        </div>
                    </Modal>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
