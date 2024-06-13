<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    pokemon:Array
})

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
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="px-6">
                                    <inertia-link :href="pokemon.prev_page_url" v-if="pokemon.prev_page_url">&lt; Previous</inertia-link>
                                    Page {{ pokemon.current_page }} of {{ pokemon.last_page }}
                                    <inertia-link :href="pokemon.next_page_url" v-if="pokemon.next_page_url">Next &gt;</inertia-link>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
