<!-- src/components/MercadoLibreButton.vue -->
<template>
  <div>
    <button @click="openInstagram">Abrir Instagram</button>
  </div>
</template>

<script>
export default {
  methods: {
    openInstagram() {
      const instagramDeepLink = "instagram://user?username=conectamayor"; // Reemplaza "conectamayor" por el nombre de usuario del perfil de Instagram que deseas abrir

      // Intentamos abrir la aplicación de Instagram
      window.location.href = instagramDeepLink;

      // Agregamos una espera de 300 ms antes de redirigir al perfil de Instagram en el navegador
      // Esto le dará tiempo suficiente al sistema para intentar abrir la aplicación
      setTimeout(() => {
        const instagramWebURL = "https://www.instagram.com/conectamayor/"; // Reemplaza "conectamayor" por el nombre de usuario del perfil de Instagram que deseas abrir
        window.location.href = instagramWebURL;
      }, 300);
    },
  },
};
</script>
