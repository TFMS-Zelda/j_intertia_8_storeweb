
<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Modulo de Peliculas
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-greey overflow-hidden shadow-xl sm:rounded-lg">
          <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-2 mt-5 md:mt-0">
              <h3 class="text-lg text-gray-900">Listado de Peliculas</h3>

              <!-- crear un autor -->
              <Link
                class="
                  focus:outline-none
                  text-white
                  bg-purple-700
                  hover:bg-purple-800
                  focus:ring-4 focus:ring-purple-300
                  font-medium
                  rounded-lg
                  text-sm
                  px-5
                  py-2.5
                  mb-2
                  dark:bg-purple-600
                  dark:hover:bg-purple-700
                  dark:focus:ring-purple-900
                "
                :href="route('movies.create')"
                as="button"
                type="button"
                >Crear</Link
              >

              <div class="shadow bg-white md:rounded-md p-4">
                <table>
                  <tr v-for="movie in movies">
                    <td class="border px-4 py-2">
                      <strong> ID: {{ movie.id }} | </strong>
                      {{ movie.name }}
                      <br>
                      {{ movie.autor }}
                    </td>
                    <td class="px-4 py-2">
                      <Link
                        class="
                          text-white
                          bg-gradient-to-r
                          from-blue-500
                          via-blue-600
                          to-blue-700
                          hover:bg-gradient-to-br
                          focus:ring-4 focus:outline-none focus:ring-blue-300
                          dark:focus:ring-blue-800
                          shadow-lg shadow-blue-500/50
                          dark:shadow-lg dark:shadow-blue-800/80
                          font-medium
                          rounded-lg
                          text-sm
                          px-5
                          py-2.5
                          text-center
                          mr-2
                          mb-2
                        "
                        :href="route('movies.show', movie.id)"
                        as="button"
                        type="button"
                        >Ver</Link
                      >
                    </td>
                    <td class="px-4 py-2">
                      <Link
                        class="
                          text-white
                          bg-gradient-to-r
                          from-green-400
                          via-green-500
                          to-green-600
                          hover:bg-gradient-to-br
                          focus:ring-4 focus:outline-none focus:ring-green-300
                          dark:focus:ring-green-800
                          shadow-lg shadow-green-500/50
                          dark:shadow-lg dark:shadow-green-800/80
                          font-medium
                          rounded-lg
                          text-sm
                          px-5
                          py-2.5
                          text-center
                          mr-2
                          mb-2
                        "
                        :href="route('movies.edit', movie.id)"
                        as="button"
                        type="button"
                        >Editar</Link
                      >
                    </td>

                    <td class="px-4 py-2">
                      <button
                        as="button"
                        type="button"
                        class="
                          text-white
                          bg-gradient-to-r
                          from-red-400
                          via-red-500
                          to-red-600
                          hover:bg-gradient-to-br
                          focus:ring-4 focus:outline-none focus:ring-red-300
                          dark:focus:ring-red-800
                          shadow-lg shadow-red-500/50
                          dark:shadow-lg dark:shadow-red-800/80
                          font-medium
                          rounded-lg
                          text-sm
                          px-5
                          py-2.5
                          text-center
                          mr-2
                          mb-2
                        "
                        @click="destroy(movie.id)"
                      >
                        Eliminar
                      </button>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
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
    movies: Array,
  },

  methods: {
    destroy(id) {
      if (confirm("¿Desea Eliminar?")) {
        this.$inertia.delete(this.route("movies.destroy", id));
      }
    },
  },
};
</script>
