<template>
    <form class="form-inline">
        <div class="form-group">
            <input type="text" class="form-control" id="activity" placeholder="Aktywność">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="city" placeholder="Miasto lub dzielnica">
        </div>
        <div class="form-group">
            <select id="radius" class="form-control">
                <option value="0">+0 km</option>
                <option value="1">+5 km</option>
                <option value="2">+10 km</option>
                <option value="3">+15 km</option>
                <option value="4">+25 km</option>
                <option value="5">+30 km</option>
            </select>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default btn-yellow">Szukaj</button>
        </div>
    </form>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
