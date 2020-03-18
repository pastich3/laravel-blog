<template>
    <div class="d-flex justify-content-between">
        <div class="d-flex justify-content-center">
            <workflow-component-list></workflow-component-list>
        </div>
        <div class="d-flex justify-content-center">
            <workflow-builder-canvas></workflow-builder-canvas>
        </div>
    </div>
</template>
<script>
    import WorkflowBuilderCanvas from "./WorkflowBuilderCanvas";
    import WorkflowComponentList from "./WorkflowComponentList";
    import WorkflowApiRequests from "../WorkflowApiRequests";
    export default {
        components: {
            "workflow-builder-canvas": WorkflowBuilderCanvas,
            "workflow-component-list": WorkflowComponentList
        }
    }
</script>
<style scoped lang="scss">

</style>
