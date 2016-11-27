<template>
    <form class="form-inline">
        <div class="form-group">
            <input type="search" class="form-control" id="search" placeholder="Szukaj">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="location" placeholder="Miasto">
        </div>
        <button type="submit" class="btn btn-success">Szukaj</button>
    </form>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
