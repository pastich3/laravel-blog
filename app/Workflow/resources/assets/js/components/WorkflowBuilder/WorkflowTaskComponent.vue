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
        <div> Task Name Here </div>
        <div class="d-flex justify-content-between">
            <div
                @dragover="handleDragover(-1)"
                @dragleave="handleDragLeave(-1)"
                style="direction:ltr;font-size:13px;padding:20px 0;text-align:center;"
                v-if="dragging && !dropZonesExpanded[-1] && componentData.children.length == 0"
            >
                <workflow-drop-wrapper
                    v-if="self"
                    :expanded="dropZonesExpanded[-1]"
                    :validComponents="self.$options.components"
                    :componentData="componentData"
                    :typeAccepted="'content'"
                    :mode="'prepend'"
                    :dragging="dragging"
                    style="height: 20px; max-height: 100%; min-height: 20px;"
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
                    style="width: 20px; direction:ltr;font-size:0px;padding:20px 0;text-align:center;"
                    v-if="self && dragging && dropZonesExpanded[getChildIndex(child)]"
                >
                    <workflow-drop-wrapper
                        :expanded="dropZonesExpanded[getChildIndex(child)]"
                        :validComponents="self.$options.components"
                        :componentData="componentData"
                        :typeAccepted="'content'"
                        :index="getChildIndex(child)"
                        :mode="'insertAfter'"
                        :dragging="dragging"
                        style="height: 20px; max-height: 100%; min-height: 20px;"
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
    // import EditButton from "../EditButton";

    export default {
        props: ['dragging', 'componentData'],
        mixins: [WorkflowDropZoneMixin, WorkflowSelectableZoneMixin],
        components: {
            'workflow-drop-wrapper': WorkflowDropWrapper,
            // 'edit-button': EditButton
        },
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
