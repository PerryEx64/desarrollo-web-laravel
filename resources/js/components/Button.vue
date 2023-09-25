<script setup>
defineProps({
    title: String
})
</script>

<template>
    <button class="p-2 bg-red-200 border border-red-100 rounded-lg">
        {{title}}
        <slot />
    </button>
</template>
