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
    export default {
        props: ['selectedElement'],
        components: {
            Drag
        },
        data: function() {
            return {
                dragging: undefined,
                progressionPolicies: [{
                    name: 'Or',
                    component: 'workflow-placeable-component',
                    type: 'progression-policy'
                },
                {
                    name: 'And',
                    component: 'workflow-placeable-component',
                    type: 'progression-policy'
                }],
                tasks: [{
                    name: 'Test Task',
                    component: 'workflow-placeable-component',
                    type: 'task'
                }],
                workflows: [],
            }
        },
        methods: {
            dragStart: function(component) {
                WorkflowBus.$emit('workflow-drag-started', component);
            },
            dragEnd: function() {
                WorkflowBus.$emit('workflow-drag-ended');
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
