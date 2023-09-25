<script setup >
import {Head, Link, useForm} from "@inertiajs/vue3";
import InputError from "@/components/InputError.vue";
import TextInput from "@/components/TextInput.vue";
import InputLabel from "@/components/InputLabel.vue";
import PrimaryButton from "@/components/PrimaryButton.vue";

const form = useForm({
    nombre: '',
    lider: '',
    cantidad_iglesias: 0
});
const submit = () => {
    form.post(route('distrito.store'), {
        onSuccess: () => {handleOk('Distrito creado')}
    });
};

const handleOk = (msj) => {
    console.log(msj)
}

</script>

<template>
    <form @submit.prevent="submit">
        <div>
            <InputLabel for="nombre" value="Nombre del Distrito" />

            <TextInput
                id="name"
                type="text"
                class="mt-1 block w-full"
                v-model="form.nombre"
                required
                autofocus
                autocomplete="nombre"
            />

            <InputError class="mt-2" :message="form.errors.nombre" />
        </div>

        <div class="mt-4">
            <InputLabel for="text" value="Lider" />

            <TextInput
                id="lider"
                type="text"
                class="mt-1 block w-full"
                v-model="form.lider"
                required
                autocomplete="lider"
            />

            <InputError class="mt-2" :message="form.errors.lider" />
        </div>

        <div class="mt-4">
            <InputLabel for="text" value="Cantidad Iglesias" />

            <TextInput
                id="cantidad_iglesias"
                type="number"
                class="mt-1 block w-full"
                v-model="form.cantidad_iglesias"
                required
                autocomplete="cantidad iglesias"
            />

            <InputError class="mt-2" :message="form.errors.cantidad_iglesias" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Registrar Distrito
            </PrimaryButton>
        </div>
    </form>
</template>
