
<template>
  <AppLayout title="Autor.show">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Crear Pelicula
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-greey overflow-hidden shadow-xl sm:rounded-lg">
          <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-2 mt-5 md:mt-0">
              <h3 class="text-lg text-gray-900">
                Complete el siguiente formulario
              </h3>

              <div class="w-full max-w-xs">
                <form
                  @submit.prevent="create()"
                  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                >
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                      Nombre de pelicula:
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
                      placeholder="Nombre de la categoria"
                      v-model="form.name"
                    />

<label class="block text-gray-700 text-sm font-bold mb-2">
                      Fecha de estreno:
                    </label>
                    <input type="date" v-model="form.release_date" />

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
                      v-model="form.producer"
                    />

                    <label class="block text-gray-700 text-sm font-bold mb-2">
                      Autor de la Pelicula:
                    </label>
                    <select v-model="autor_id">
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
                    v-on:click="create()"
                  >
                    Crear
                  </button>
                </form>
              </div>
            </div>
            <Link :href="route('categories.index')" as="button" type="button"
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

    autors: Object,
    categories: Object,
  },
  data() {
    return {
      form: {
        name: "",
        name: "",
        release_date: "",
        autor_id: "",
        category: "",
      },
    };
  },
  methods: {
    create() {
      this.$inertia.post(this.route("categories.store"), this.form);
    },
  },
};
</script>
