<script>
    import mainHeading from "@/components/atoms/mainHeading.vue";
    import HomeView from "./HomeView.vue";
    import PreLoader from "@/components/atoms/PreLoader.vue";

    export default{
        name: "ProjetosView",
        components:{
        mainHeading,
        HomeView,
        PreLoader
    }
    }
</script>

<template>

    <div class="my_container">
        <mainHeading>
        <template #mainHeading>
            Projetos
        </template>  
        </mainHeading>

        <div>
            <p>
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna.
            </p>



        </div>

    </div>

</template>