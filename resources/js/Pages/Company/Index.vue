<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue'
import CompanyCard from '@/Components/ComCard.vue';


defineProps({
    data: String,
})
</script>

<template>
    <Head title="Companies" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Companies
            </h2>
        </template>

        <div class="py-4">
            <Link :href="route('company.create')" class="fixed bottom-4 right-4 px-7 py-3 mb-2 md:mb-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" role="button">Add</Link>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                      <div v-if='data.length>0' class="flex gap-4 flex-wrap justify-center">
                        <template v-for="item in data" :key='item.id'>
                          <CompanyCard :id='item.id' :name='item.name' :logo='item.logo' />
                        </template>
                      </div>
                      <p v-else>No companies found</p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>