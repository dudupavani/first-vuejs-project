<script>
    import listPosts from "@/components/listPosts.vue"
    import mainHeading from "@/components/atoms/mainHeading.vue"

    export default{
        name: "BlogView",

        components:{
            listPosts,
            mainHeading
        }
    }
</script>

<template> 
    <div class="my_container">
        <mainHeading>
            <template #mainHeading>
                Blog
            </template>
        </mainHeading>
        
        <listPosts/>
    </div>
</template>
