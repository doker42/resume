<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3'

const logoutForm = useForm({})
const logout = () => logoutForm.post('/logout')
</script>

<template>
  <Head title="Главная" />

  <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="max-w-xl text-center bg-white rounded-xl shadow p-10">
      <h1 class="text-4xl font-bold text-gray-800">Resume Service</h1>
      <p class="mt-4 text-lg text-gray-600">
        Создайте онлайн-резюме за пару минут с уникальным дизайном
      </p>

      <div class="mt-8 flex justify-center gap-4">
        <!-- Гость -->
        <template v-if="!$page.props.auth.user">
          <Link
              :href="route('login')"
              class="px-6 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition"
          >
            Войти
          </Link>

          <Link
              href="/register"
              class="px-6 py-2 bg-gray-200 text-gray-800 font-semibold rounded hover:bg-gray-300 transition"
          >
            Регистрация
          </Link>
        </template>

        <!-- Авторизован -->
        <template v-else>
          <button
              @click="logout"
              class="px-6 py-2 bg-red-600 text-white font-semibold rounded hover:bg-red-700 transition"
          >
            Выход
          </button>
        </template>
      </div>
    </div>
  </div>
</template>
