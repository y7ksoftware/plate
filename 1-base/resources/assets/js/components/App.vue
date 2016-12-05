
<script>
    export default {

        name: 'App',

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
