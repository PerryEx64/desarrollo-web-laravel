<script setup>

defineProps({
    regionesDistritos: Array
})


</script>

<template>
    <table class="table w-3/4">
        <thead class="" >
        <tr class="border-b [&>th]:p-3">
            <th>Regiones</th>
            <th>Distritos</th>
        </tr>
        </thead>
        <tbody class="[&>tr>td]:text-center">
        <tr class="hover:bg-blue-50 rounded-lg [&>td]:p-1 " v-for="regionDistrito in regionesDistritos" :key="regionDistrito.id">
            <td >{{regionDistrito.regiones}}</td>
            <td>{{regionDistrito.distritos}}</td>
        </tr>

        </tbody>
    </table>
</template>
