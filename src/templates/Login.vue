<template>
  <v-container>
    <v-row justify="center">
      <v-col cols="12" sm="12" md="8" lg="6" xl="4">
        <v-card flat outlined>
          <v-card-title class="blue white--text">
            <v-spacer></v-spacer>
            Login
            <v-spacer></v-spacer>
          </v-card-title>
          <v-card-text>
            <v-form class="pt-3">
              <v-text-field solo outlined flat clearable />
            </v-form>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>
<style scoped>
.title-color {
  background: #aeaeae;
}
</style>