<template>
    <h1>
        这是首页
    </h1>
</template>

<script>
    export default {
        data() {
            return {
                activeIndex: '1',
                activeIndex2: '1'
            };
        },
        mounted() {
            console.log(this.$router.path);
        },
        methods:{

        }
    }
</script>

<style>

</style>