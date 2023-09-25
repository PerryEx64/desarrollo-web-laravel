<script setup>
import {useForm} from "@inertiajs/vue3";
import InputLabel from "@/components/InputLabel.vue";
import InputError from "@/components/InputError.vue";
import PrimaryButton from "@/components/PrimaryButton.vue";

defineProps({
    regiones: Array,
    distritos: Array
})

const form = useForm({
    id_region: Number,
    id_distrito: Number
})
const submit = () => {
    form.post(route('regionDistrito.store'), {
        onSuccess: () => {handleOk('Territorio creado')}
    });
}
const handleOk = (msj) => {
    console.log(msj)
}
</script>

<template>
    <form @submit.prevent="submit" class="flex flex-col justify-center items-center">

        <section class="flex w-9/12 items-center justify-around">
        <div>
            <InputLabel for="nombre" value="Region" />
            <select v-model="form.id_region">
                <option disabled>Selecciona una opcion</option>
                <option v-for="region in regiones" :value="region.id" >{{region.nombre}}</option>
            </select>
            <InputError class="mt-2" :message="form.errors.id_region" />
        </div>

        <div>
            <InputLabel for="nombre" value="Distrito" />
            <select v-model="form.id_distrito">
                <option disabled value="">Selecciona una</option>
                <option v-for="distrito in distritos" :value="distrito.id" >{{distrito.nombre}}</option>
            </select>
            <InputError class="mt-2" :message="form.errors.id_distrito" />
        </div>
        </section>
        <div class="flex items-center justify-center mt-4">
            <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Register
            </PrimaryButton>
        </div>
    </form>
</template>
