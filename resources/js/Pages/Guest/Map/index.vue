<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';

const props = defineProps({
  maps: Array,
  zones: Array
})

const mapQuery = ref(props.maps.length > 0 ? props.maps[0].name : '');
const zones = ref([]);
const showTooltip = ref(false);
const tooltipText = ref('');
const i = 1;
const j = 1;

const fetchZones = async () => {
    try {
        const response = await axios.get(route('front.map.search'), {
            params: {
                map: mapQuery.value
            },
        });
        zones.value = response.data;
    } catch (error) {
        console.error('Error fetching zones:', error);
    }
};

onMounted(() => {
    //fetchZones();
});

const getImgUrl = (row, col) => {
    const zone = props.zones.find(zone => zone.row === row && zone.col === col)

    if(zone) {
        return zone.imgurl;
    }    

    return '/storage/image/pokemon/floroue.png';
}

const getNameImg = (row, col) => {
    const zone = props.zones.find(zone => zone.row === row && zone.col === col)

    if(zone) {
        return zone.name;
    }    

    return 'error';
}

const getZoneId = (row, col) => {
    const zone = props.zones.find(zone => zone.row === row && zone.col === col)

    if(zone) {
        return zone.id;
    }    

    return 'error';
}

</script>

<template>
    <Head title="Pokedex" />

    <GuestLayout>
        <template #header>
            <h2 class="font-semibold leading-tight">Maps</h2>
        </template>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 px-12 py-12 bg-white shadow-md sm:rounded-lg overflow-x-auto">
            <div class="flex justify-center">

                <select id="mapsearch" v-model="mapQuery" @change="fetchZones">
                    <option v-for="map in props.maps" :value="map.name" :key="map.id">{{ map.name }}</option>
                </select>
            </div>
            <div>
                <div v-for="i in 4" :key="i" class="flex">
                    <div v-for="j in 4" :key="j">
                        <Link :href="route('front.map.show', getZoneId(i, j))">
                            <img :src="getImgUrl(i,j)" alt="error" 
                                @mouseover="showTooltip = true; tooltipText = getNameImg(i,j)"
                                @mouseout="showTooltip = false"/>
                            <div v-if="showTooltip" class="absolute bottom-0 right-1/4 bg-red-600 text-white p-2 shadow-md border border-gray-300">
                                {{ tooltipText }}
                            </div>
                        </Link>
                    </div>
                </div>
            </div>
            
        </div>
    </GuestLayout>
</template>