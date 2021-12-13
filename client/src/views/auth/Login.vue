<template>
  <auth-layout title="Aitra">
    <form method="POST" @submit.prevent="submitForm()">
      <div class="relative w-full mb-3">
        <v-input
          label="E-mail"
          v-model="credentials.email"
          type="email"
          name="email"
          placeholder="Seu e-mail"/>
      </div>

      <div class="relative w-full mb-3">
        <v-input
          label="Senha"
          v-model="credentials.password"
          type="password"
          name="password"
          placeholder="Sua senha"/>
      </div>

      <div class="text-center mt-10">
        <v-button class="mb-5" type="submit" name="signin" id="signin" color="green">Entrar</v-button>
        <router-link to="#" class="text-gray-400 text-sm">Recuperar Senha</router-link>
      </div>
    </form>
  </auth-layout>
</template>


<script>
import Input from '@/components/Input'
import Button from '@/components/Button'
import AuthLayout from "@/layouts/AuthLayout";
import {mapActions} from "vuex";

export default {
  name: 'Login',

  components: {
    AuthLayout,
    'v-input': Input,
    'v-button': Button
  },

  data() {
    return {
      credentials: {
        email: '',
        password: ''
      }
    }
  },

  methods: {
    ...mapActions({
      submitLogin: "auth/submitLogin",
    }),

    submitForm() {
      this.submitLogin(this.credentials);
    }
  }
};

</script>

<style scope></style>