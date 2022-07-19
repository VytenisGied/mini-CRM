<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue'
import Checkbox from '@/Components/Checkbox.vue';
import Input from '@/Components/Input.vue';
import Label from '@/Components/Label.vue';
import ValidationErrors from '@/Components/ValidationErrors.vue';


defineProps({
    data: String,
})

const form = useForm({
  name: '',
  lastname: '',
  email: '',
  phone: ''
});

const submit = (employeeId) => {
  form.post(route('employee.update', employeeId), {
    preserveState: true,
    onFinish: () => form.reset(),
  });
};
</script>

<template>
    <Head :title="'Edit ' + data.name + ' ' + data.lastname" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit {{data.name}} {{data.lastname}}
            </h2>
        </template>

        <div class="py-4 relative">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                <ValidationErrors class="mb-4" />

                <form @submit.prevent="submit(data.id)">
                  <div>
                    <Label for="name" value="Name" />
                    <Input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus />
                  </div>

                  <div>
                    <Label for="lastname" value="Lastame" />
                    <Input id="lastname" type="text" class="mt-1 block w-full" v-model="form.lastname" />
                  </div>

                  <div class="mt-4">
                    <Label for="email" value="Email" />
                    <Input id="email" type="email" class="mt-1 block w-full" v-model="form.email" />
                  </div>

                  <div class="mt-4">
                    <Label for="phone" value="Phone" />
                    <Input id="phone" type="text" class="mt-1 block w-full" v-model="form.phone" />
                  </div>

                  <div class="flex items-center justify-end mt-4">
                    <Button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                      Edit
                    </Button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </AuthenticatedLayout>
</template>