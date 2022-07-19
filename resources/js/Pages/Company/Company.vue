<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue'


defineProps({
    data: String,
})
</script>

<template>
    <Head :title="data.name" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{data.name}}
            </h2>
        </template>

        <div class="py-4 relative">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                <Link :href="route('company.edit', { companyId: data.id })" class="inline-block px-7 py-3 mb-2 md:mb-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" role="button">Edit</Link>
                {{data}}
              </div>
            </div>
          </div>
        </div>
    </AuthenticatedLayout>
</template>