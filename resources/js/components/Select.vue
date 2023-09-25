<script setup >
import InputLabel from "@/components/InputLabel.vue";
import InputError from "@/components/InputError.vue";

defineProps({
    datas: [],
    modelValue: {
        type: String,
        required: true,
    },
    title: String
})

const TransformData = () => {
    
}
</script>

<template>
    <select v-model="modelValue">
        <option disabled>Selecciona una opcion</option>
        <option v-for="data in datas" :value="data.id_region" >{{data.nombre}}</option>
    </select>
</template>
