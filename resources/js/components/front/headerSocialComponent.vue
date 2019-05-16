<template>


            <li><a v-bind:href=socialLink ><img v-bind:src=myData  height="28" width="28"/></a></li>


</template>

<script>
    export default {
        mounted() {

        },
        props: [
            'myData',
            'socialLink'
        ],
        data () {
            return {

            };
        },
        created() {

        }
    }
</script>
