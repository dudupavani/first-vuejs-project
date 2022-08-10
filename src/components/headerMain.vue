<script>
import { RouterLink } from 'vue-router'
import IconInstagram from './icons/IconInstagram.vue'
import IconLinkedin from './icons/IconLinkedin.vue'
export default {
  name: 'HeaderMain',
  components: {
    RouterLink,
    IconInstagram,
    IconLinkedin
  }
}
</script>

<template>
  <header class="my_container flex flex-col md:flex-row items-start md:items-center md:justify-between flex-wrap pt-10 md:pt-12">

    <div class="mb-5 md:mb-0">
      <img alt="EDEV Architecture" class="logo" src="@/assets/logo.svg" />
    </div>

    <div class="w-full md:w-auto flex flex-col-reverse reverse md:flex-row items-end md:items-center gap-3 md:gap-12 -mt-10 md:mt-0">

      <nav class="flex flex-row justify-between mt-3 md:mt-0">
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/about">About</RouterLink>
        <RouterLink to="/projetos">Projetos</RouterLink>
        <RouterLink to="/blog">Blog</RouterLink>
        <RouterLink to="/faleconosco">Fale conosco</RouterLink>
        <!-- <RouterLink to="/contato">Contato</RouterLink> -->
      </nav>

      <div class="flex flex-row items-center justify-between gap-4">
        <div>
          <IconInstagram class="text-orange-400 hover:text-orange-600 transition"/>
        </div>
        <div>
          <IconLinkedin  class="text-orange-400 hover:text-orange-600 transition"/>
        </div>
      </div>
    </div>  

  </header>

  
</template>

<style scoped>
header{
  margin-bottom: 60px;
}
.logo {
  max-width: 206px;
}

nav a {
  margin: 0 20px;
  padding: 4px 4px 8px 4px;
  color: rgb(100 116 139);
  border-bottom: 1px solid transparent;
  transition: 350ms ease-in-out ;
  transition-property: color, border-color;
}

@media (max-width: 640px){
  nav{
    width: 100%;
  }
  nav a {
     margin: 0 0 0 0;
     font-size: 14px;
  }
}

nav a:hover{
    color:black;
    border-bottom: 1px solid rgb(249 115 22);
}
</style>
