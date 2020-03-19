<template>
    <div class="d-flex justify-content-between">
        <div class="d-flex justify-content-center">
            <workflow-component-list  :selectedElement="selectedElement"></workflow-component-list>
        </div>
        <div class="d-flex justify-content-center">
            <workflow-builder-canvas :dragging="dragging" :componentData="workflow"></workflow-builder-canvas>
        </div>
    </div>
</template>
<script>
    import WorkflowBuilderCanvas from "./WorkflowBuilderCanvas";
    import WorkflowComponentList from "./WorkflowComponentList";
    import WorkflowApiRequests from "../WorkflowApiRequests";
    import {WorkflowBus} from '../WorkflowBus';

    export default {
        components: {
            "workflow-builder-canvas": WorkflowBuilderCanvas,
            "workflow-component-list": WorkflowComponentList
        },
        data: function() {
            return {
                workflow: {
                    children: []
                },
                selectedElement: {},
                dragging: {},
            }
        },
        beforeDestroy: function() {
            WorkflowBus.$off('drag-started');
            WorkflowBus.$off('drag-ended');
            WorkflowBus.$off('element-selected');
            WorkflowBus.$off('delete-component');
            WorkflowBus.$off('component-deleted');
        },
        mounted: function() {
            var self = this;
            WorkflowBus.$on('drag-started', function(dragging) {
                self.dragging = dragging;
            });
            WorkflowBus.$on('drag-ended', function() {
                self.dragging = {};
            });
        },
        methods: {
            deselectElements: function() {
                WorkflowBus.$emit('element-selected', ''); // deselects all
            },
        }
    }
</script>
<style scoped lang="scss">

</style>
