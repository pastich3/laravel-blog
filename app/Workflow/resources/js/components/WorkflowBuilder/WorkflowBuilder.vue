<template>
    <div class="d-flex justify-content-between">
        <div class="d-flex justify-content-start w-75">
            <workflow-component-list  :selectedElement="selectedElement"></workflow-component-list>
        </div>
        <div class="d-flex justify-content-center w-100">
            <workflow-builder-canvas :dragging="dragging" :componentData="workflow"></workflow-builder-canvas>
        </div>
        <div style="font-size: 3px; width: 25%" v-html="workflow"></div>
        <button class="btn btn-success" @click="saveWorkflow()">Save</button>
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
                    "children": [ { "name": "Upload Agenda", "component": "workflow-placeable-component", "type": "task", "children": [ { "name": "And", "component": "workflow-placeable-component", "type": "progression-policy", "children": [ { "name": "Have Meeting", "component": "workflow-placeable-component", "type": "task", "children": [ { "name": "Debrief", "component": "workflow-placeable-component", "type": "task", "children": [ { "name": "Or", "component": "workflow-placeable-component", "type": "progression-policy", "children": [], "dontRenderOn": [ "kqh1v3rpt4cz4rr3kwazu" ], "attributesContainer": {}, "key": "c1fcsugnjwgbrix5w0r99", "tagName": "workflow-task" } ], "attributesContainer": {}, "key": "udnfm7a3o9hudbj3tema5", "tagName": "workflow-task" }, { "name": "Schedule Meeting", "component": "workflow-placeable-component", "type": "task", "children": [ { "name": "Or", "component": "workflow-placeable-component", "type": "progression-policy", "children": [], "dontRenderOn": [ "kqh1v3rpt4cz4rr3kwazu" ], "attributesContainer": {}, "key": "c1fcsugnjwgbrix5w0r99", "tagName": "workflow-task" } ], "attributesContainer": {}, "key": "kqh1v3rpt4cz4rr3kwazu", "tagName": "workflow-task" } ], "attributesContainer": {}, "key": "zb68yxswf6mue3e2l191i", "tagName": "workflow-task" } ], "dontRenderOn": [ "d5h2wdvzlkjg4oojknpkv9" ], "attributesContainer": {}, "key": "kdw9qclo7q5i4xj2duz5w", "tagName": "workflow-task" } ], "attributesContainer": {}, "key": "fzawqmo977p8ux2b4uk6xb", "tagName": "workflow-task" }, { "name": "Reminder", "component": "workflow-placeable-component", "type": "task", "children": [ { "name": "And", "component": "workflow-placeable-component", "type": "progression-policy", "children": [ { "name": "Have Meeting", "component": "workflow-placeable-component", "type": "task", "children": [ { "name": "Debrief", "component": "workflow-placeable-component", "type": "task", "children": [ { "name": "Or", "component": "workflow-placeable-component", "type": "progression-policy", "children": [], "dontRenderOn": [ "kqh1v3rpt4cz4rr3kwazu" ], "attributesContainer": {}, "key": "c1fcsugnjwgbrix5w0r99", "tagName": "workflow-task" } ], "attributesContainer": {}, "key": "udnfm7a3o9hudbj3tema5", "tagName": "workflow-task" }, { "name": "Schedule Meeting", "component": "workflow-placeable-component", "type": "task", "children": [ { "name": "Or", "component": "workflow-placeable-component", "type": "progression-policy", "children": [], "dontRenderOn": [ "kqh1v3rpt4cz4rr3kwazu" ], "attributesContainer": {}, "key": "c1fcsugnjwgbrix5w0r99", "tagName": "workflow-task" } ], "attributesContainer": {}, "key": "kqh1v3rpt4cz4rr3kwazu", "tagName": "workflow-task" } ], "attributesContainer": {}, "key": "zb68yxswf6mue3e2l191i", "tagName": "workflow-task" } ], "dontRenderOn": [ "d5h2wdvzlkjg4oojknpkv9" ], "attributesContainer": {}, "key": "kdw9qclo7q5i4xj2duz5w", "tagName": "workflow-task" } ], "attributesContainer": {}, "key": "d5h2wdvzlkjg4oojknpkv9", "tagName": "workflow-task" } ], "attributesContainer": {}, "key": "7nt7bpatbqb8nvr8h8hoxb", "tagName": "canvas"
                },
                selectedElement: {},
                dragging: {}
            }
        },
        beforeDestroy: function() {
            WorkflowBus.$off('workflow-drag-started');
            WorkflowBus.$off('workflow-drag-ended');
            WorkflowBus.$off('workflow-element-selected');
            WorkflowBus.$off('workflow-delete-component');
            WorkflowBus.$off('workflow-component-deleted');
        },
        mounted: function() {
            var self = this;
            WorkflowBus.$on('workflow-drag-started', function(dragging) {
                self.dragging = dragging;
            });
            WorkflowBus.$on('workflow-drag-ended', function() {
                self.dragging = {};
            });
        },
        methods: {
            deselectElements: function() {
                WorkflowBus.$emit('workflow-element-selected', ''); // deselects all
            },
            saveWorkflow: function() {
                WorkflowApiRequests.setWorkflowComponents(1, this.workflow).then((res) => {

                });
            }
        }
    }
</script>
<style scoped lang="scss">

</style>
