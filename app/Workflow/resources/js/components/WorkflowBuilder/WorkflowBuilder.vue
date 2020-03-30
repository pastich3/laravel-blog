<template>
    <div class="d-flex flex-column">
        <div class="d-flex">
            <input v-if="workflow" v-model="workflow.name">
        </div>
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
                    children: [],
                    name: "New Workflow", // default
                    status_id: 1 // new, default
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
                WorkflowApiRequests.setWorkflowComponents(this.workflow, this.workflow.id).then((res) => {
                    this.workflow = this.processWorkflowStructure(res.data);
                });
            },
            processWorkflowStructure: function(data) {
                console.log(data);
                return this.workflow;
            }
        }
    }
</script>
<style scoped lang="scss">

</style>
