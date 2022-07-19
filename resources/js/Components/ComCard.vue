<script setup>
import { Link, useForm } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue'
import { Inertia } from '@inertiajs/inertia'

defineProps({
  id: String,
  name: String,
  logo: String,
})

const submit = (comid) => {
  Inertia.delete(route('company.destroy', {companyId: comid}));
};
</script>

<template>
  <div class="bg-gray-100 p-3 w-4/5 md:w-56 rounded-lg flex flex-col gap-4 justify-between items-center shadow-md">
    <img :src="logo===null ? '../storage/static/no-image-icon.png' : '../storage/' + logo" :alt="name + ' logo'">
    <h3 class="font-weight-bold text-xl text-center">{{name}}</h3>
    <div class="flex flex-col gap-2">
      <Link :href="route('company', { companyId: id })" class="inline-block px-7 py-3 mb-2 md:mb-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" role="button">View Company</Link>
      <Button class="bg-red-500 hover:bg-red-600 focus:bg-red-600 active:bg-red-700" @click="submit(id)">Delete Company</Button>
    </div>
  </div>
</template>