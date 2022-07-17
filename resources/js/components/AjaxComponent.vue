<template>
    <div class="container">
       foobar
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')

            axios.get('/gender-data').then(response => console.log(response.data));
        }
    }
</script>
