<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue'
import Checkbox from '@/Components/Checkbox.vue';
import Input from '@/Components/Input.vue';
import Label from '@/Components/Label.vue';
import ValidationErrors from '@/Components/ValidationErrors.vue';


defineProps({
    companyId: String,
})

const form = useForm({
  name: '',
  lastname: '',
  company_id: '',
  email: '',
  phone: ''
});

const submit = (id) => {
  form.company_id = id
  form.post(route('employee.store'), {
    preserveState: true,
    onFinish: () => form.reset(),
  });
};
</script>

<template>
    <Head :title="'Create Employee'" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Employee
            </h2>
        </template>

        <div class="py-4 relative">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                <ValidationErrors class="mb-4" />

                <form @submit.prevent="submit(companyId)">
                  <div>
                    <Label for="name" value="Name" />
                    <Input id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus />
                  </div>

                  <div>
                    <Label for="lastname" value="Lastname" />
                    <Input id="lastname" type="text" class="mt-1 block w-full" v-model="form.lastname" required />
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
                      Create
                    </Button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </AuthenticatedLayout>
</template>