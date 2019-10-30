// Register Component
Vue.component('Navbar', window.httpVueLoader('./src/components/Navbar.vue'))
Vue.component('layout', window.httpVueLoader('./src/templates/Layout.vue'))
// Vue.component('ckeditor', window.httpVueLoader('./src/components/CKEditor.vue'))

const router = new VueRouter({
  // base: 'http://localhost/test/',
  mode: 'history',
  routes: [
    { path: '/aa', component: window.httpVueLoader('./src/templates/Layout.vue') },
    { path: '/login', component: window.httpVueLoader('./src/templates/Login.vue') }
  ]
})

// Init document
new Vue({
  router,
  el: '#app',
  vuetify: new Vuetify({
    theme: {
      themes: {
        light: {
          primary: '#1976D2',
          secondary: '#424242',
          accent: '#82B1FF',
          error: '#FF5252',
          info: '#2196F3',
          success: '#4CAF50',
          warning: '#FFC107',
        }
      }
    },
  })
})

// ClassicEditor
//       .create( document.querySelector( '#editor' ) )
//       .then( editor => {
//               // console.log( editor );
//       })
//       .catch( error => {
//               console.error( error );
//       });