<template>
  <div id="app">
      <router-view />
  </div>
</template>

<style>
  .slide-side-enter-active, .slide-side-leave-active  {
    transition: all .5s ease;
  }

  .slide-side-enter, .slide-side-leave-to {
    transform: translateX(100%);
    opacity: 0;
  }

  /* Fading animation */
  .fade-enter-active, .fade-leave-active {
    transition: all 0.2s;
  }

  .fade-enter, .fade-leave-to {
    opacity: 0;
  }
</style>
