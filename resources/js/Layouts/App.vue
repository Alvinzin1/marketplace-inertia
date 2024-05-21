<script setup>
import Navbar from '@/Components/Navbar.vue'
</script>

<template>
    <div class="min-h-screen">
    <Navbar></Navbar>
      <slot></slot>
    </div>
</template>