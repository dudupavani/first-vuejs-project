<script>
    import iconPlus from '../icons/iconPlus.vue'
    export default {
        name: "primaryButtonOutline",
        components:{
            iconPlus
        }
    }

</script>

<template>

<button class="flex flex-row items-center font-medium border border-orange-400 text-orange-500 hover:bg-orange-200 hover:text-orange-600 transition duration-300 ease-in-out px-3 py-2 rounded text-sm"> 
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