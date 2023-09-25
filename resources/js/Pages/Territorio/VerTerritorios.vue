<script setup>
import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import RegistroTerritorio from "@/Pages/Territorio/Components/RegistroTerritorio.vue";
import TablaTerritorios from "@/Pages/Territorio/Components/TablaTerritorios.vue";

defineProps({ territorios: Array })
</script>

<template>
    <Head title="Territorios" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Territorios</h2>
        </template>

        <div class="mt-5" >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <h2 class="font-semibold text-xl text-center mb-5 text-gray-800 leading-tight">Registro Territorios</h2>
                    <RegistroTerritorio />
                </div>
            </div>
        </div>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="flex justify-center p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <TablaTerritorios :territorios=territorios />
                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
