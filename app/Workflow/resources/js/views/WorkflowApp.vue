<template>
    <div class="d-flex flex-column">
        <router-view :key="$route.fullPath"></router-view>
    </div>
</template>
<script>
    export default {

    };
</script>
<style type="scss" scoped>

</style>
