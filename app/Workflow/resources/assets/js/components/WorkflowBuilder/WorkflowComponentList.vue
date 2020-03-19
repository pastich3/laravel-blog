<template>
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
</template>
<script>
    import {Drag, Drop} from 'vue-drag-drop';
    import {WorkflowBus} from '../WorkflowBus';
    export default {
        props: ['selectedElement'],
        components: {
            Drag
        },
        data: function() {
            return {
                dragging: undefined,
                progressionPolicies: [],
                tasks: [{
                    name: 'Test Task',
                    component: 'workflow-task-component',
                    type: 'content'
                }],
                workflows: [],
            }
        },
        methods: {
            dragStart: function(component) {
                WorkflowBus.$emit('drag-started', component);
            },
            dragEnd: function() {
                WorkflowBus.$emit('drag-ended');
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
