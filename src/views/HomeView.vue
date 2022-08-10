<script>
  import WelcomeComp from '@/components/WelcomeComp.vue'
  import IconSofa from '../components/icons/iconSofa.vue'
import LinkButton from '../components/buttons/linkButton.vue'

  export default {
    components: {
    WelcomeComp,
    IconSofa,
    LinkButton
}
  }
</script>

<template>
  <main>

    <div class="my_container">

      <div class="grid sm:grid-cols-1 md:grid-cols-2">

        <WelcomeComp class="mb-16 md:mb-0 mt-0 md:mt-8 pr-0 md:pr-16 ">
          <template #welcome_header>
            <h1>O melhor escritório de arquitetura</h1>
          </template>
          <template #welcome_body>
            <p class="leading-8">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </template>
          <template #welcome_button>
            Conheça nosso trabalho
          </template>
        </WelcomeComp>

        <div>
          <img class="drop-shadow-2xl hover:drop-shadow-xl transition ease-in-out duration-500 hover:scale-95" src="@/assets/imghome.png" alt="">
        </div>
      </div>  

      <div class="linha_dois flex flex-col md:flex-row gap-8">

        <div class="projetos_home_link border border-slate-200 rounded-2xl flex flex-col gap-3 items-center justify-center bg-white/20 backdrop-blur-sm">
          <div>
            <IconSofa/>
          </div>
          <div>
            <span class="text-xl font-normal text-slate-500">Projetos</span>
          </div>
        </div> <!-- projetos_home_link -->

        <div class="blog_home border border-slate-200 pt-2 pb-8 md:pb-4 px-4 md:px-8 bg-white/30 backdrop-blur-lg">

          <div>
            <span class="uppercase font-bold text-orange-500 tracking-widest text-sm">Blog</span>
          </div>

          <div class="flex flex-col md:flex-row mt-4 md:mt-2">

            <div class="image rounded-tl-2xl rounded-tr rounded-b-2xl border border-slate-50 drop-shadow-md">
                <img src="@/assets/imagebloghome.jpg" alt="">
            </div>

            <div class="ml-0 md:ml-6 mt-5 md:mt-0">
                <div><h3 class="blog_home_titulo text-lg font-bold">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</h3></div>
                <div><p class="blog_home_excerpt text-sm text-slate-500 mt-1 mb-4">Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p></div>
                <LinkButton>
                  <template #button_icon></template>
                  <span class="text-sm text-slate-600">Leia mais</span>
                </LinkButton>
            </div>
            
          </div>


        </div>

      </div>

   </div> <!-- main_container -->

  </main>
</template>

<style scoped>

  .projetos_home_link {
    width: 200px;
    aspect-ratio: 1/1;
  }
  .projetos_home_link svg{
    width: 60px;
    height: 60px;
    fill: rgb(241 245 249);
    stroke: rgb(249 115 22);
    stroke-width: 1px;
  }
  .projetos_home_link span{
    margin-top: 40px;
  }

  .blog_home{
    max-width: 580px;
    border-radius: 1rem 0.5rem 4rem 1rem;
  }

  .blog_home .image{
    overflow: hidden;
    min-width: 130px;
    height: 130px;
  }
   .blog_home .image img{
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
   }

  .blog_home .blog_home_titulo{
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;  
    overflow: hidden;
}
  .blog_home .blog_home_excerpt{
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;  
    overflow: hidden;
    line-height: 1.6;
}


@media (min-width: 1024px){
  .linha_dois{
    position: relative;
    margin-top: -180px;
    z-index: 2;
  }
}
@media (max-width: 1024px){
  .linha_dois{
    position: relative;
    margin-top: -50px;
    z-index: 2;
  }
}

@media (max-width: 768px){
  .linha_dois{
    position: relative;
    margin-top: -150px;
    z-index: 2;
  }
}

@media (max-width: 640px){
  .linha_dois{
    position: relative;
    margin-top: -70px;
    z-index: 2;
  }
  .projetos_home_link {
    width: 140px;
    aspect-ratio: 1/1;
  }
  .blog_home .image{
    overflow: hidden;
    min-width: 130px;
    height: 200px;
  }
}


</style>
