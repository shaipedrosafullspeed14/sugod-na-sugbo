<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/assets/css/app.css', 'resources/js/app.js'])
    <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-analytics.js";
    </script>
</head>
<body>
  <div id="app">
    <app-component/>
  </div>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>