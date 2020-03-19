<template>
    <div
        v-if="initialized"
        @click="selectElement($event)"
        class="workflow-task"
        style="position:relative;"
        :class="{
            selected : elementSelected,
            'workflow-bordered': dragging.component != undefined
        }"
    >
      <!-- <edit-button
        v-if="elementSelected"
        :componentData="componentData"
        :attributesList="attributesList"
        :componentKey="componentData.key"
      ></edit-button> -->
      <div class="d-flex flex-column">
        <div class="d-flex justify-content-center"> {{componentData.name}} </div>
        <div class="d-flex justify-content-between">
            <div
                @dragover="handleDragover(-1)"
                @dragleave="handleDragLeave(-1)"
                style="width: 20px; height: 20px; border: 1px solid red;"
            >
                <workflow-drop-wrapper
                    v-if="self && dragging && dropZonesExpanded[-1]"
                    :expanded="dropZonesExpanded[-1]"
                    :validComponents="self.$options.components"
                    :componentData="componentData"
                    :typeAccepted="'content'"
                    :mode="'prepend'"
                    :dragging="dragging"
                    style="height: 20px; width: 20px;z-index:50;"
                >
                </workflow-drop-wrapper>
            </div>
            <div v-for="child in componentData.children">
               <component
                    :dragging="dragging"
                    :key="componentData.key + '-' + child.key"
                    :is="child.component"
                    :componentData="child"
                >
                </component>
                <div
                    @dragover="handleDragover(getChildIndex(child))"
                    @dragleave="handleDragLeave(getChildIndex(child))"
                    style="width: 20px; height: 20px; border: 1px solid red;"
                >
                    <workflow-drop-wrapper
                        v-if="self && dragging && dropZonesExpanded[getChildIndex(child)]"
                        :expanded="dropZonesExpanded[getChildIndex(child)]"
                        :validComponents="self.$options.components"
                        :componentData="componentData"
                        :typeAccepted="'content'"
                        :index="getChildIndex(child)"
                        :mode="'insertAfter'"
                        :dragging="dragging"
                        style="height: 20px; width: 20px; z-index:50;"
                    >
                    </workflow-drop-wrapper>
                </div>
            </div>
        </div>
      </div>
    </div>
</template>
<script>
    import WorkflowDropWrapper from './WorkflowDropWrapper';
    import WorkflowDropZoneMixin from './WorkflowDropZoneMixin';
    import WorkflowSelectableZoneMixin from "./WorkflowSelectableZoneMixin";
    import WorkflowTaskComponent from "./WorkflowTaskComponent";
    // import EditButton from "../EditButton";

    export default {
        props: ['dragging', 'componentData'],
        mixins: [WorkflowDropZoneMixin, WorkflowSelectableZoneMixin],
        components: {
            'workflow-drop-wrapper': WorkflowDropWrapper,
            'workflow-task-component': WorkflowTaskComponent
            // 'edit-button': EditButton
        },
        name: 'workflow-task-component',
        data: function() {
            return {
                tagName: 'workflow-task',
                attributesList: {
                }
            }
        },
    }
</script>
<style scoped lang="scss">
    .workflow-task {
        min-height: 50px;
    }
    .workflow-task:hover, .workflow-task.selected {
        cursor: move;
        outline: 1px double gray;
        outline-offset: -3px;
    }
    .workflow-bordered {
        outline: 1px solid gray;
        outline-offset: -3px;
    }
</style>
