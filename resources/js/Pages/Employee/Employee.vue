<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
defineProps({
    data: String,
})
</script>

<template>
    <Head :title="data.name + ' ' + data.lastname" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{data.name + ' ' + data.lastname}}
            </h2>
        </template>

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{data}}
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>