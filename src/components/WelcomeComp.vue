<script>
    export default {
        name: 'WelcomeComp',
    }
</script>

<template>
    <div class="flex flex-col">
        <div class="my-0 text-3xl md:text-3xl font-semibold text-slate-600">
            <slot name="welcome_header"></slot>
        </div>
        <div class="my-3 text-base md:text-lg font-light text-slate-500">
            <slot name="welcome_body"></slot>
        </div>
        <div class="mt-5 md:mt-5">
            <button class="flex flex-row items-center px-5 py-3 rounded text-base font-medium hover:shadow-xl hover:shadow-orange-300 bg-orange-500 text-white hover:bg-orange-600 hover:-translate-y-0.5 transition duration-300 ease-in-out">
                <slot name="welcome_button">Call to action</slot>
            </button>
        </div>
    </div>
</template>
