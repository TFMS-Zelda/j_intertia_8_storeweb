
<template>
  <AppLayout title="Autor.show">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detalle de un Autor
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-greey overflow-hidden shadow-xl sm:rounded-lg">
          <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-2 mt-5 md:mt-0">
              <h3 class="text-lg text-gray-900">Detalles del Autor</h3>
              <h3 class="text-sm text-gray-600">
                <strong>Nombre:</strong> {{ autor.name }}
              </h3>
            </div>
            <Link
              :href="route('autors.index')"
              as="button"
              type="button"

              >Volver</Link
            >
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    AppLayout,
    Link,
  },
  props: {
    autor: Object,
  },
};
</script>
