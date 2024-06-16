<script setup>

const props = defineProps({
    stat: Number,
})

const getStatColor = (stat) => {
    if (stat >= 100) {
        return 'bg-green-500';
    } else if (stat >= 50) {
        return 'bg-yellow-500';
    } else {
        return 'bg-red-500';
    }
}

</script>

<template>
    <div class="flex flex-col items-center">
        <p class="font-bold">Vit</p>
        <div class="h-20 w-6 bg-gray-300 relative">
            <div :class="['absolute bottom-0 left-0 w-full', getStatColor(props.stat)]" :style="{ height: (props.stat / 150 * 100) + '%' }"></div>
        </div>
        <p>{{ props.stat }}</p>
    </div>   
</template>