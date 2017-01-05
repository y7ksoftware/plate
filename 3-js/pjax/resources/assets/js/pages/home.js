import Vue from 'vue';

export default function () {

    console.log('run this code on the homepage');

    new Vue({
        el: '#news',
        data: {
            message: 'Hello Vue 2!'
        }
    });

}
