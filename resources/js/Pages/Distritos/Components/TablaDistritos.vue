<script setup>
defineProps({
    distritos: Array
})
</script>

<template>
    <table class="table w-3/4">
        <thead class="" >
        <tr class="border-b [&>th]:p-3">
            <th>Nombre Distrito</th>
            <th>Lider</th>
            <th>Cantidad Iglesias</th>
        </tr>
        </thead>
        <tbody class="[&>tr>td]:text-center">
        <tr class="hover:bg-blue-50 rounded-lg [&>td]:p-1 " v-for="distrito in distritos" :key="distritos.id">
            <td>{{distrito.nombre.toUpperCase()}}</td>
            <td>{{distrito.lider}}</td>
            <td>{{distrito.cantidad_iglesias}}</td>
        </tr>

        </tbody>
    </table>
</template>
