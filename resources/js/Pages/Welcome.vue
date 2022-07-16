<script setup>
import GuestLayout from '@/Layouts/Guest.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome" />
    <GuestLayout>
      <div>Welcome</div>
    </GuestLayout>
</template>

<style scoped>
    
</style>
