<script setup>
import { Head } from '@inertiajs/vue3'

// Пример данных шаблонов
const templates = [
  { id: 1, name: 'Классический', preview: '/images/templates/classic.png' },
  { id: 2, name: 'Современный', preview: '/images/templates/modern.png' },
  { id: 3, name: 'Минимализм', preview: '/images/templates/minimal.png' },
]
</script>

<template>
  <Head title="Выбор шаблона" />

  <div class="min-h-screen bg-gray-100 py-10 px-6">
    <div class="max-w-6xl mx-auto">
      <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Выберите шаблон для вашего резюме</h1>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div
            v-for="template in templates"
            :key="template.id"
            class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition"
        >
          <img :src="template.preview" alt="" class="w-full h-48 object-cover">
          <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-700">{{ template.name }}</h2>
            <button
                class="mt-4 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition"
            >
              Выбрать
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
