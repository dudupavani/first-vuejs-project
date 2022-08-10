<script>
  import mainHeading from "../components/atoms/mainHeading.vue"
  import IconUserContact from "../components/icons/IconUserContact.vue";
  export default{
    components:{
      mainHeading,
      IconUserContact
    }
  }
</script>

<template>
  <div class="my_container">
    <mainHeading>
      <template #mainHeading>
          Fale conosco
      </template>  
    </mainHeading>

      <div class="grid grid-col-1 md:grid-flow-col gap-16 md:gap-12 lg:gap-20">
            <div class="col-span-1 md:col-span-4 lg:col-span-4 xl:col-span-3">
                <form action="" class="flex flex-col gap-6">
                    <input
                        type="text"
                        placeholder="Nome"
                        class="h-12 text-sm border border-slate-300 rounded p-4 focus:outline-none focus:ring focus:ring-slate-200"
                        >
                    <input
                        type="email"
                        placeholder="E-mail"
                        class="h-12 text-sm border border-slate-300 rounded p-4 focus:outline-none focus:ring focus:ring-slate-200"
                    >
                    <textarea
                        type="textarea"
                        placeholder="Mensagem"
                        class="text-sm h-36 border border-slate-300 rounded p-4 focus:outline-none focus:ring focus:ring-slate-200"
                    >
                    </textarea>
                    <input 
                        @click.prevent
                        type="submit"
                        value="Enviar"
                        class="px-4 py-2 text-white bg-orange-500 hover:bg-orange-400 transition duration-300 rounded"
                    >
                </form>
            </div>

            <div class="dados_contato flex items-center justify-start md:justify-center rounded-xl p-14 md:p-4 bg-gradient-to-bl from-slate-50 to-slate-200">
              <div>
                  <h3 class="flex flex-col font-bold text-xl mb-6">
                      <IconUserContact class="stroke-orange-500 mb-3"/>
                      Dados de contato
                  </h3>
                  <ul class="flex flex-col gap-3 text-base text-slate-700">
                      <li>
                          <span class="mr-2 font-medium">Comercial:</span>
                          <span>48 99954 7625</span>
                      </li>
                      <li>
                          <span class="mr-2 font-medium">Projetos:</span>
                          <span>48 98934 5765</span>
                      </li>
                      <li>
                          <span class="mr-2 font-medium">Suporte:</span>
                          <span>48 99938 4365</span>
                      </li>
                  </ul>
                </div>  
            </div>

       </div>
  </div>
</template>

<style scoped>
  .my_container{
    padding: 0 calc(10px + (80 - 10) * ((100vw - 360px) / (1366 - 360)));
  }

  .dados_contato h3 svg{
    width: 44px;
    height: 44px;
  }

</style>
