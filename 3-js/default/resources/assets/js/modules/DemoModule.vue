<script>
    export default {

        name: 'DemoModule',

        el: '.demoModule',

        mounted() {
            console.log('Module mounted to ' + this.$el);
        }

    }
</script>

<template>
    <div>
        <h1>Demo Module</h1>
    </div>
</template>
