<script>
    import iconPlus from '../icons/iconPlus.vue'
    export default {
        name: "primaryButton",
        components:{
            iconPlus
        }
    }

</script>

<template>

<button class="flex flex-row items-center font-medium hover:shadow-lg hover:shadow-orange-200 bg-orange-500 text-white hover:bg-orange-600 transition duration-300 ease-in-out px-3 py-2 rounded text-sm"> 
    <slot name="icon_button">
        <iconPlus/>
    </slot>

    <slot>
        Text button
    </slot>
</button>
</template>

<style>
    button svg{
        margin-right: 8px;
        width: 20px;
        height: 20px;
    }


</style>