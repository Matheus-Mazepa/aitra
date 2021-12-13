<template>
  <auth-layout title="Esqueceu sua senha?">
    <form method="POST" action="" autocomplete="">
      <div class="relative w-full mb-3">
        <v-input
          label="E-mail"
          type="email"
          name="email"
          placeholder="Seu e-mail"
          required="true"/>
      </div>

      <div class="text-center mt-10">
        <v-button type="submit" name="signin" id="signin" color="green">Confirmar</v-button>
      </div>
    </form>
  </auth-layout>
</template>

<script>
import Input from '@/components/Input'
import Button from '@/components/Button'
import AuthLayout from "@/layouts/AuthLayout";

export default {
  name: 'Reset',

  components: {
    AuthLayout,
    'v-input': Input,
    'v-button': Button
  },
}
</script>
