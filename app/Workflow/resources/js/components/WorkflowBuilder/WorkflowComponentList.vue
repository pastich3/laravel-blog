<template>
    <div>
        <div class="d-flex flex-column component-list">
            <div class="font-weight-bold"> Progression Policies </div>
            <drag v-for="component in progressionPolicies" class="drag"
                :key="component.name"
                :transfer-data="{ component }"
                @dragstart="dragStart(component)"
                @dragend="dragEnd()">
                    {{ component.name }}
            </drag>
            <div class="font-weight-bold"> Tasks </div>
            <drag v-for="component in tasks" class="drag"
                :key="component.name"
                :transfer-data="{ component }"
                @dragstart="dragStart(component)"
                @dragend="dragEnd()">
                    {{ component.name }}
            </drag>
            <div class="font-weight-bold"> Your Workflows </div>
            <drag v-for="component in workflows" class="drag"
                :key="component.name"
                :transfer-data="{ component }"
                @dragstart="dragStart(component)"
                @dragend="dragEnd()">
                    {{ component.name }}
            </drag>
        </div>
    </div>
</template>
<script>
    import {Drag, Drop} from 'vue-drag-drop';
    import {WorkflowBus} from '../WorkflowBus';
    import WorkflowApiRequests from "../WorkflowApiRequests";

    export default {
        props: ['selectedElement'],
        components: {
            Drag
        },
        data: function() {
            return {
                dragging: undefined,
                progressionPolicies: [],
                tasks: [],
                workflows: [],
            }
        },
        mounted: function() {
            this.loadTasks();
            this.loadProgressionPolicies();
            this.loadWorkflows();
        },
        methods: {
            dragStart: function(component) {
                WorkflowBus.$emit('workflow-drag-started', component);
            },
            dragEnd: function() {
                WorkflowBus.$emit('workflow-drag-ended');
            },
            loadTasks: function() {
                WorkflowApiRequests.getTasks().then((res) => {
                    this.tasks = res.data;
                    for (var i = 0; i < this.tasks.length; i++) {
                        this.tasks[i].component = "workflow-placeable-component";
                        this.tasks[i].type = "task";
                    }
                });
            },
            loadProgressionPolicies: function() {
                WorkflowApiRequests.getProgressionPolicies().then((res) => {
                    this.progressionPolicies = res.data;
                    for (var i = 0; i < this.progressionPolicies.length; i++) {
                        this.progressionPolicies[i].component = "workflow-placeable-component";
                        this.progressionPolicies[i].type = "progression-policy";
                    }
                });
            },
            loadWorkflows: function() {
                // TODO
                return [];
            }
        }
    }
</script>
<style scoped lang="scss">
    .component-list {
        max-width: 300px;
        position: fixed;
    }
</style>
