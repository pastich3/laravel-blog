<template>
    <div v-if="initialized" class="w-100 h-100 workflow-canvas">
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
                style="height: 20px; width: 20px;"
            >
            </workflow-drop-wrapper>
        </div>
        <div class="d-flex">
            <div v-for="child in componentData.children">
                <component :dragging="dragging" :key="child.key" :is="child.component" :componentData="child"></component>
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
                        style="height: 20px; width: 20px;"
                    >
                    </workflow-drop-wrapper>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import WorkflowDropWrapper from './WorkflowDropWrapper';
    import WorkflowDropZoneMixin from './WorkflowDropZoneMixin';
    import WorkflowSelectableZoneMixin from './WorkflowSelectableZoneMixin';
    import WorkflowTaskComponent from './WorkflowTaskComponent';

    export default {
        props: ['dragging', 'componentData'],
        mixins: [WorkflowDropZoneMixin, WorkflowSelectableZoneMixin],
        components: {
            'workflow-drop-wrapper': WorkflowDropWrapper,
            'workflow-task-component': WorkflowTaskComponent
        },
        data: function() {
            return {
                tagName: 'canvas'
            }
        }
    }
</script>
<style scoped lang="scss">
    .workflow-canvas {
        border: 1px solid black;
    }
</style>
