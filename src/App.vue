<script>

import { RouterView } from 'vue-router'
import HeaderMain from './components/headerMain.vue'
import footerMain from './components/footerMain.vue'

export default {
  name: 'App',
  components: {
    RouterView,
    HeaderMain,
    footerMain
}
}
</script>

<template>
    <div class="main_container">
      <HeaderMain/>   

      <!-- Possivel erro do router é a transition -->
      <RouterView v-slot="{Component}">
        <Transition name="my_transitions" mode="out-in">
          <component :is="Component"/>
        </Transition>
      </RouterView> 

      <footerMain/>
    </div>
</template>

<style>

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500&display=swap');

.my_transitions-enter-active{
  transition: all 500ms ease-out;
}

.my_transitions-leave-active {
  transition: all 200ms ease-in-out;
}

.my_transitions-enter-from,
.my_transitions-leave-to {
  transform: translateY(20px);
  opacity: 0;
}

body{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  width: 100vw;
  height: auto;
  font-family: 'Inter', sans-serif;
  background-color: rgb(248 250 252);
  text-rendering: optimizeLegibility;
  text-rendering: optimizeSpeed;
}

.main_container{
/* 
  padding-top:60px;
  padding-bottom: clamp(4rem, 2.5vw, 5rem);
  padding-left: clamp(24px, 2.5vw, 40px);
  padding-right: clamp(24px, 2.5vw, 40px); 
 */
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin: 0;
  padding: 0;
}

.my_container{
  width: 100%;
  max-width: 1348px;
  padding: 0 24px 0 24px;
  margin: 0 auto;
}

p{
  font-size: 1rem;
  color: rgb(71 85 105);
  line-height: 1.6;
}

img{
  display: block;
  width: 100%;
  height: auto;
}

</style>
