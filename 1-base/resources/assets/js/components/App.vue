
<script>
    export default {

        name: 'App',

        created() {
            // Go to first screen
            if(this.$router.mode == 'abstract') this.$router.replace('/');
        },

        mounted() {
            console.log('Component ready.')
        }

    }
</script>

<template>
    <div>
        <h1>Example Component</h1>
        <router-view></router-view>
    </div>
</template>
