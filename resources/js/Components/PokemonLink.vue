<script setup>
    import {Link} from '@inertiajs/vue3';

    const props = defineProps({
        evopokemon: Object,
        level: Number,
    });
</script>

<template>
    <Link :href="route('pokemon.show', props.evopokemon.id)">
        <div class="flex flex-col text-center bg-red-600 p-1 rounded-lg my-1 hover:bg-red-700 text-white">
            <div>{{ props.evopokemon.name }}</div>
            <div>level: {{ props.level }}</div>
        </div>
    </Link>
</template>