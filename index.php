<?php include "autoload.php"; ?>
<!DOCTYPE html>
<html>
  <title>Portal Penjamin Mutu</title>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <link href="./styles/main.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script> -->
</head>
<body>
  <div id="app">
  <v-app light>
    <v-content>
      <v-btn text to="/aa">
        Home
      </v-btn>
      <?php echo env('APP_KEY')?>
      <router-view></router-view>
    </v-content>
  </v-app>
  </div>
  <!-- Production Mode -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.min.js"></script> -->

  <!-- Development Mode -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script src="https://npmcdn.com/vue-router/dist/vue-router.js"></script>
  <script src="https://unpkg.com/http-vue-loader"></script>
  <script src="./main.js"></script>
</body>
</html>