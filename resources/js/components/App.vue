<template>
    <BaseComponent />
    <router-view />
    <FooterComponent />
  </template>
  <script>
    import BaseComponent from "../components/layout/Base.vue"
    import FooterComponent from "../components/layout/Footer.vue"
    export default {
     components: {
      BaseComponent,
      FooterComponent
     }
    }
  </script>