<template>
  <div>
    <h1>Login Page</h1>

    <div>
        <div>
            <label>Email:</label>
            <input
                id="email"
                v-model="form.email"
                type="email"
            >
            <div class="text-error" v-if="errors.email">
                {{ errors.email }}
            </div>
        </div>

        <div>
            <label>Password:</label>
            <input
                id="password"
                v-model="form.password"
                type="password"
            >
            <div class="text-error" v-if="errors.password">
                {{ errors.password }}
            </div>
        </div>

        <div>

            <label>remember me</label>
            <input
                id="remember"
                v-model="form.remember"
                type="checkbox"
            >

        </div>

        <div>
            <button v-on:click="login">
                {{loading ? 'Loading...' : 'Login'}}
            </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    errors: Object,
  },
  data() {
    return {
      loading: false,
      form: {
        email: 'johndoe@example.com',
        password: 'secret',
        remember: null,
      },
    }
  },
  methods: {
    login() {
      const data = {
        email: this.form.email,
        password: this.form.password,
        remember: this.form.remember,
      }

      this.$inertia.post('/login', data, {
        onStart: () => this.loading = true,
        onFinish: () => this.loading = false,
      })
    },
  },
}
</script>


<style scoped>
.test-error {
    color: red;
    font-size: 10pt;
}
</style>