<script>
import iconWhatsApp from "./icons/iconWhatsApp.vue";
import iconMail from "./icons/iconMail.vue";
import iconPhone from "./icons/iconPhone.vue";
    export default{
    name: "footerMain",
    components: { 
        iconWhatsApp,
        iconMail,
        iconPhone
        }
}
</script>

<template>

    <footer>
        <div class="my_container flex flex-col gap-6">
            <div class="flex flex-col lg:flex-row justify-end">
                <div class="flex items-center">
                    <iconMail class="text-orange-400 hover:text-orange-600 transition mr-3"/>
                    <span>contato@email.com</span>
                </div>
                <div class="flex items-center mx-0 lg:mx-10 my-5 lg:my-0">
                    <iconPhone class="text-orange-400 hover:text-orange-600 transition mr-3"/>
                    <span>48 991587232</span>
                </div>
                <div class="flex items-center">
                    <iconWhatsApp class="text-orange-400 hover:text-orange-600 transition mr-3"/>
                    <span>48 991587232</span>
                </div>
            </div>
            <div class="flex justify-start lg:justify-end mt-6 md:mt-4">
                <span>Rua Bonita da Silva 534, Centro - Florianópolis - Santa Catarina</span>
            </div>
        </div>
    </footer>

</template>

<style scoped>

footer{
    margin-top: 100px;
    padding-bottom: 80px;
}

span{
    color: rgb(51 65 85);
    font-size: 14px;
}

</style>
