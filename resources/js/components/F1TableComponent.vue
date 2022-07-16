<template>
    <div class="container">
       foobar
    </div>
</template>

<script>
    export default {
        created() {
            console.log('Component mounted.')

            // axios.get('/gender-data').then(response => console.log(response.data));
            fetch('http://localhost:8000/api/01')
                .then(response => response.json())
                .then(data => {
                    console.log(data)
            });
        }
    }
</script>
