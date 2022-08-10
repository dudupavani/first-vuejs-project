
<script>
import PrimaryButtonOutline from "./buttons/primaryButtonOutline.vue";
import PreLoader from "./atoms/PreLoader.vue";
    export default{
    name: "listPosts",
    data() {
        return {
            listPosts: [],
            loading: false,
            postsContent: false
        };
    },
    components: {
    PrimaryButtonOutline,
    PreLoader
},
    methods: {

        fetchPosts() {
             this.loading = true;
            let i = fetch("http://localhost:8888/wp-json/api_post/v1/post").then((resposta) => resposta.json()).then(respostaJSON => {
                this.loading = false
                this.listPosts = respostaJSON;
                this.postsContent = true
            });
        }
    },
    created() {
        this.fetchPosts();
    }

}
</script>

<template>

        <div v-if="loading" class="flex flex-flow justify-center items-center">
            <PreLoader/>
        </div>

        <div class="list_post_container" v-if="postsContent">
        
            <div class="list_post_content bg-white border border-slate-100 hover:border-slate-400 hover:shadow-xl hover:shadow-slate-300/100 transition duration-300 p-5 rounded-xl" v-for="post_item in listPosts" :key="post_item.id">
                <img class="rounded border border-slate-200 bg-slate-50" v-if="post_item.image_thumb" :src="post_item.image_thumb" :alt="post_item.titulo">
                <div class="tag_category_container flex justify-around gap-x-3">
                    <small class="bg-orange-100 text-orange-500 rounded py-0 px-2" v-for="allCategories in post_item.category" :key="allCategories.id">{{allCategories.name}}</small>
                </div>

                <h2 class="the_title text-xl lg:text-lg text-black font-semibold leading-normal mb-2 mt-5">{{post_item.titulo}}</h2>
                <p class="the_excerpt text-sm text-slate-600 leading-6 mb-5">{{post_item.excerpt}}</p>
                
                <PrimaryButtonOutline>
                    <template #icon_button></template>
                    Leia mais
                </PrimaryButtonOutline>
            </div>

        </div>
</template>

<style scoped>

@keyframes intro_posts{
    from{
        transform: translateY(-13px);
        opacity: 0;
    }
    to{
        transform: translateY(0px);
        opacity: 1;
    }
}

.list_post_container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(min(300px, 100%), 1fr));
    gap: 30px;
    animation: intro_posts 1s cubic-bezier(.18,.67,.56,.9);
}
.list_post_content{
    position: relative;
}

.list_post_content .tag_category_container{
    position: absolute;
    right: 34px;
    top: 34px;
}

.the_title{
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;  
    overflow: hidden;
}
.the_excerpt{
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;  
    overflow: hidden;
}


</style>