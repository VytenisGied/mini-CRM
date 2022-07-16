<script setup>
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

  <section class="h-screen lg:flex lg:justify-center lg:items-center">
    
    <div class="px-6 py-2 md:px-12 text-gray-800 text-center lg:text-left">
      <div class="container mx-auto xl:px-32">
        <div class="grid lg:grid-cols-2 items-center">
          <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0">
            <div class="block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14" style="background: hsl(207deg 94% 75% / 30%); backdrop-filter: blur(30px);">
              <h1 class="text-4xl md:text-5xl xl:text-6xl font-bold tracking-tight mb-12">mini-CRM<br /><span class="text-blue-600">manage companies and their employees</span></h1>
              <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="inline-block px-7 py-3 mb-2 md:mb-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" role="button">Dashboard</Link>
              <template v-else>
                <Link :href="route('login')" class="inline-block px-7 py-3 mb-2 md:mb-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" role="button">Sign In</Link>
                <Link :href="route('register')" class="inline-block px-7 py-3 bg-transparent text-blue-600 font-medium text-sm leading-snug uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" role="button">Register</Link>
              </template>
            </div>
          </div>
          <div class="md:mb-12 lg:mb-0">
            <img
              :src="'../storage/static/image.svg'"
              class="w-full h-4/5 rounded-lg shadow-lg"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
    
</style>