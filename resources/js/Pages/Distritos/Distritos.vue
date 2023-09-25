<script setup>
import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import RegistroDistrito from "@/Pages/Distritos/Components/RegistroDistrito.vue";
import TablaDistritos from "@/Pages/Distritos/Components/TablaDistritos.vue";

defineProps({ distritos: Array })
</script>

<template>
    <Head title="Distritos" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Distritos</h2>
        </template>

        <div class="mt-5" >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <h2 class="font-semibold text-xl text-center mb-5 text-gray-800 leading-tight">Registro Distritos</h2>
                    <RegistroDistrito />
                </div>
            </div>
        </div>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="flex justify-center p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <TablaDistritos :distritos=distritos />
                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
