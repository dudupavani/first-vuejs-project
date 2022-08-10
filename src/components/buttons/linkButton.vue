<script>
import IconPlus from "../icons/iconPlus.vue";
    export default{
    name: "linkButton",
    components: { 
        IconPlus 
    }
}

</script>

<template>
    <button class="flex items-center">

        <slot name="icon_button">
            <IconPlus class="mr-2 text-orange-500"/>
        </slot>

        <slot>
            Button
        </slot>

    </button>

</template>
