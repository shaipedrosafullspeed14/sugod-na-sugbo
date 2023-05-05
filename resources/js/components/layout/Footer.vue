<template>
<footer class="bg-white text-white py-4 static bottom-0">
  <div class="container mx-auto flex justify-center">
    <div class="flex items-center">
      <span class="mr-2 font-medium text-rose-500">Copyright 2023</span>
      <img class="h-14" :src="logoImg" alt="Logo">
    </div>
  </div>
</footer>
</template>
<script>
  import logoImg from '/resources/assets/images/logo.png'
  export default {
    data: function () {
      return {
        logoImg: logoImg
      }
    }
  }
</script>