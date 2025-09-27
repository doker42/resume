<script setup>
import { Head, Link } from '@inertiajs/vue3'
</script>

<template>
  <Head title="Мои услуги" />

  <div class="min-h-screen bg-gray-100 py-10 px-6">
    <div class="max-w-4xl mx-auto bg-white shadow rounded-xl p-8">
      <h1 class="text-3xl font-bold text-gray-800 mb-4">Мои услуги</h1>
      <p class="text-gray-600">Здесь вы можете управлять вашими резюме и выбранными шаблонами.</p>

      <Link
          :href="route('templates.list')"
          class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition"
      >
        Выбрать шаблон
      </Link>

      <!-- Добавим список услуг позже -->
    </div>
  </div>
</template>
