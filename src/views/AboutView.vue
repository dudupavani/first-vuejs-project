<script>
  import mainHeading from "../components/atoms/mainHeading.vue"

  export default{
    components:{
      mainHeading
    }
  }
</script>

<template>
  <div class="my_container">
    <mainHeading>
      <template #mainHeading>
          About
      </template>  
    </mainHeading>
    <p>
      Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </p>
  </div>
</template>

<style scoped>

  .about {
    background-color: aqua;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }
 

</style>
