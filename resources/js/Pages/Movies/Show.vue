
<template>
  <AppLayout title="Autor.show">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detalle de la Película
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-greey overflow-hidden shadow-xl sm:rounded-lg">
          <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-2 mt-5 md:mt-0">
              <h3 class="text-lg text-gray-900">Detalles de la Película</h3>
              <h3 class="text-sm text-gray-600">
                <strong>Nombre de la Película:</strong> {{ movie.name }}
              </h3>
              <hr />
              <code class="text-sm text-red-600"
                >Relaciones de la Pelicula</code
              >
              <h3 class="text-sm text-gray-700">
                <strong>Autor de la Película:</strong> {{ autor }}
              </h3>
              <h3 class="text-sm text-gray-700 text-bold">
                <strong>Categoria de la Película:</strong> {{ category }}
              </h3>
            </div>
            <Link :href="route('movies.index')" as="button" type="button"
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
    movie: Object,
    autor: String,
    category: String,
  },
};
</script>
