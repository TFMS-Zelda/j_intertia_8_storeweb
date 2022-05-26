
<template>
  <AppLayout title="Autor.show">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editar Pelicula
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-greey overflow-hidden shadow-xl sm:rounded-lg">
          <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-2 mt-5 md:mt-0">
              <h3 class="text-lg text-gray-900">
                Editar Pelicula: <i>{{ movie.name }}</i>
              </h3>

              <div class="w-full max-w-xs">
                <form
                  @submit.prevent="submit()"
                  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                >
                  <div class="mb-4">
                    <label
                      class="block text-gray-700 text-sm font-bold mb-2"
                      for="username"
                    >
                      Nombre de la Pelicula:
                    </label>
                    <input
                      class="
                        shadow
                        appearance-none
                        border
                        rounded
                        w-full
                        py-2
                        px-3
                        text-gray-700
                        leading-tight
                        focus:outline-none focus:shadow-outline
                      "
                      type="text"
                      placeholder="Nombre"
                      v-model="movie.name"
                    />

                    <label class="block text-gray-700 text-sm font-bold mb-2">
                      Fecha de estreno:
                    </label>
                    <input type="date" v-model="movie.release_date" />

                    <label class="block text-gray-700 text-sm font-bold mb-2">
                      Producida por:
                    </label>
                    <input
                      class="
                        shadow
                        appearance-none
                        border
                        rounded
                        w-full
                        py-2
                        px-3
                        text-gray-700
                        leading-tight
                        focus:outline-none focus:shadow-outline
                      "
                      type="text"
                      placeholder="Nombre"
                      v-model="movie.producer"
                    />

                    <label class="block text-gray-700 text-sm font-bold mb-2">
                      Autor de la Pelicula:
                    </label>
                    <select v-model="form.autor_id">
                      <option v-for="autor in autors">{{ autor.name }}</option>
                    </select>

                    <label class="block text-gray-700 text-sm font-bold mb-2">
                      Categorías de Peliculas:
                    </label>
                    <select v-model="category_id">
                      <option v-for="category in categories">
                        {{ category.name }}
                      </option>
                    </select>
                  </div>
                  <button
                    type="button"
                    class="
                      text-white
                      bg-gradient-to-r
                      from-blue-500
                      via-blue-600
                      to-blue-700
                      hover:bg-gradient-to-br
                      focus:ring-4 focus:outline-none focus:ring-blue-300
                      dark:focus:ring-blue-800
                      font-medium
                      rounded-lg
                      text-sm
                      px-5
                      py-2.5
                      text-center
                      mr-2
                      mb-2
                    "
                    v-on:click="edit()"
                  >
                    Editar
                  </button>
                </form>
              </div>
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
    autors: Object,
    categories: Object,
  },
  data() {
    return {
      form: {
        name: this.movie.name,
        release_date: this.movie.release_date,
        autor_id: this.movie.autor_id,
        category: this.movie.category,
      },
    };
  },
  methods: {
    edit() {
      this.$inertia.put(this.route("movies.update", this.movie.id), this.form);
    },
  },
};
</script>
