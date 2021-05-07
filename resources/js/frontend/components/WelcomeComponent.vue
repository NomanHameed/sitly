<template>
    <div class="row">
        <div class="col-12">
            <button class="btn btn-primary" @click="moveNext">Next</button>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            moveNext(){

                console.log('Move Next')
            }
        }
    }
</script>
