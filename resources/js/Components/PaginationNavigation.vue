<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    links: String,
});
</script>

<template>
  <div v-if='links.length>0' class="container flex justify-center mx-auto mt-6">
    <ul class="flex">
      <li v-for="link in links" :key="link.url"><Link :href="link.url" :class="link.active ? 'text-white bg-blue-600 border-blue-600' : link.url===null ? 'text-gray-400 border-gray-400 bg-white pointer-events-none' : 'text-blue-600  hover:bg-blue-100 border-blue-600'" class="h-10 px-5 border" v-html="link.label"></Link></li>
    </ul>
  </div>
</template>
