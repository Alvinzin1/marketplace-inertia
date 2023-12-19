<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({ user: String })
</script>

<template>
    <Head title="Teste" />
    <p>Hello {{ user }}, welcome to your first Inertia app!</p>
</template>