<script setup>
defineProps({
    regiones: Array
})
</script>

<template>
    <table class="table w-3/4">
        <thead class="" >
        <tr class="border-b [&>th]:p-3">
            <th>Nombre Region</th>
            <th>Lider</th>
        </tr>
        </thead>
        <tbody class="[&>tr>td]:text-center">
        <tr class="hover:bg-blue-50 rounded-lg [&>td]:p-1 " v-for="region in regiones" :key="regiones.id">
            <td>{{region.nombre.toUpperCase()}}</td>
            <td>{{region.lider}}</td>
        </tr>

        </tbody>
    </table>
</template>
