<template>
  <v-app-bar color="blue accent-4" dark flat>
    <v-app-bar-nav-icon @click="toHome()"></v-app-bar-nav-icon>
    <v-toolbar-title>Vue PHP CDN</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-btn icon to="/login">
      <v-icon>mdi-home</v-icon>
    </v-btn>
    <span>Login</span>
  </v-app-bar>
</template>
<script>
module.exports = {
  methods: {
    toHome(){
      if(this.$route.path !== '/'){
        this.$router.push('/')
      }
    }
  }
}
</script>