<template>
    <div>
        <h3>Dashboard</h3>

        <span>
            Name: {{ user.name }} <br>
            Email: {{ user.email }} <br>
            Verified: {{ user.email_verified_at ? 'YES' : 'NO' }}
        </span>
    </div>
</template>

<script>
export default {
  props: {
    user: Object,
  }
}
</script>