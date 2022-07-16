<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue'
import CompanyCard from '@/Components/CompanyCard.vue';
</script>

<template>
    <Head title="Companies" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Companies
            </h2>
        </template>

        <div class="py-12 relative">
            <Button class="absolute top-3 right-3">Add</Button>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex gap-4 flex-wrap justify-center">
                        <CompanyCard />
                        <CompanyCard />
                        <CompanyCard />
                        <CompanyCard />
                        <CompanyCard />
                        <CompanyCard />
                        <CompanyCard />
                        <CompanyCard />
                        <CompanyCard />
                        <CompanyCard />
                        <CompanyCard />
                    </div>
                    
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>