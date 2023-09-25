<script setup>
defineProps({
    territorios: Array
})
</script>

<template>
    <table class="table w-3/4">
        <thead class="" >
        <tr class="border-b [&>th]:p-3">
            <th>Nombre Territorio</th>
            <th>Lider</th>
        </tr>
        </thead>
        <tbody class="[&>tr>td]:text-center">
        <tr class="hover:bg-blue-50 rounded-lg [&>td]:p-1 " v-for="territorio in territorios" :key="territorio.id_territorio">
            <td>{{territorio.nombre.toUpperCase()}}</td>
            <td>{{territorio.lider}}</td>
        </tr>

        </tbody>
    </table>
</template>
