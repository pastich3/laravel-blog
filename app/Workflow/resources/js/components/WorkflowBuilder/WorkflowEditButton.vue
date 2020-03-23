<template>
    <div class="d-flex justify-content-start align-items-start">
        <div @click="toggleEditorPane($event)" class="d-flex justify-content-center align-items-center workflow-edit-button">
            <i class="fa fa-pencil text-success"></i>
        </div>
        <workflow-attribute-editor-pane
            class="workflow-editor-pane"
            v-if="showEditorPane"
            :componentKey="componentKey"
            :componentData="componentData"
            :attributesList="attributesList"
        ></workflow-attribute-editor-pane>
    </div>
</template>

<script>
    import WorkflowAttributeEditorPane from "./WorkflowAttributeEditorPane";
    export default {
        props: ['componentData', 'attributesList', 'componentKey'],
        components: {
            'workflow-attribute-editor-pane': WorkflowAttributeEditorPane,
        },
        data: function() {
            return {
                showEditorPane: false,
            }
        },
        methods: {
            toggleEditorPane: function(event) {
                event.stopImmediatePropagation(); // prevents element from firing the select function
                this.showEditorPane =! this.showEditorPane;
            }
        }
    }
</script>

<style scoped lang="scss">
    .workflow-edit-button {
        position: absolute;
        top: -15px;
        left: -15px;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        font-size: 15px;
        border: 1px solid gray;
        z-index: 5;
        background-color: white;
    }

    .workflow-editor-pane {
        position: absolute;
        top: -15px;
        left: -270px;
        z-index: 5;
        font-size: 13px;
    }

    .workflow-edit-button:hover {
        filter: brightness(120%);
        cursor: pointer;
    }
</style>
