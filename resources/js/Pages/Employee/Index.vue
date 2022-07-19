<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue'
import PaginationNavigation from '@/Components/PaginationNavigation.vue'
import { Inertia } from '@inertiajs/inertia'

defineProps({
    data: String,
})

const submit = (empid) => {
  Inertia.delete(route('employee.destroy', {employeeId: empid}));
};
</script>

<template>
    <Head title="Employees" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Employees
            </h2>
        </template>

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                      <div v-if='data.data.length>0'>
                        <div class="flex flex-col">
                          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                              <div class="overflow-hidden">
                                <table class="min-w-full">
                                  <thead class="bg-white border-b">
                                    <tr>
                                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        #
                                      </th>
                                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Name
                                      </th>
                                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Lastname
                                      </th>
                                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Email
                                      </th>
                                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Phone
                                      </th>
                                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Actions
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr v-for="item in data.data" :key='item.id' class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{item.id}}
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{item.name}}
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{item.lastname}}
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{item.email}}
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{item.phone}}
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex">
                                        <Link :href="route('employee', { employeeId: item.id })" class="inline-block px-7 py-3 mb-2 md:mb-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" role="button">View</Link>
                                        <Button class="bg-red-500 hover:bg-red-600 focus:bg-red-600 active:bg-red-700" @click="submit(item.id)">Delete</Button>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <PaginationNavigation :links="data.links" />
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>