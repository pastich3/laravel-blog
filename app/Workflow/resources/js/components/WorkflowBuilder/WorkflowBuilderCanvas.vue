<template>
    <div id="workflowBuilderCanvas" v-if="initialized" style="position:relative;" class="w-100 h-100 justify-content-center d-flex workflow-canvas">
        <div
            @dragover="handleDragover(-1)"
            @dragleave="handleDragLeave(-1)"
            style="width: 20px; height: 20px;"
            :style="
                'border:' + ((dragging.type == 'task') ? '1px solid orange;' : '')
            "
        >
            <workflow-drop-wrapper
                v-if="self && dragging.type == 'task' && dropZonesExpanded[-1]"
                :expanded="dropZonesExpanded[-1]"
                :validComponents="self.$options.components"
                :componentData="componentData"
                :type="componentData.type"
                :mode="'prepend'"
                :dragging="dragging"
                style="height: 20px; width: 20px;"
            >
            </workflow-drop-wrapper>
        </div>
        <div class="d-flex">
            <template v-for="(child, idx) in componentData.children">
                <component :dragging="dragging" :key="child.key" :is="child.component" :componentData="child"></component>
                <div>
                    <div
                        @dragover="handleDragover(getChildIndex(child))"
                        @dragleave="handleDragLeave(getChildIndex(child))"
                        style="width: 20px; height: 20px;"
                        :style="
                            'border:' + ((dragging.type == 'task') ? '1px solid orange;' : '')
                        "
                    >
                        <workflow-drop-wrapper
                            v-if="self && dragging.type == 'task' && dropZonesExpanded[getChildIndex(child)]"
                            :expanded="dropZonesExpanded[getChildIndex(child)]"
                            :validComponents="self.$options.components"
                            :componentData="componentData"
                            :type="componentData.type"
                            :index="getChildIndex(child)"
                            :mode="'insertAfter'"
                            :dragging="dragging"
                            style="height: 20px; width: 20px;"
                        >
                        </workflow-drop-wrapper>
                    </div>
                </div>
                <div
                    @dragover="handleDragover(getChildIndex(child))"
                    @dragleave="handleDragLeave(getChildIndex(child))"
                    v-if="componentData.children.length > 1 && (idx + 1) != componentData.children.length"
                    :style="
                     'left:' + calculateJoinerLeft(child.key) + 'px;' +
                     'border:' + ((dragging.type == 'progression-policy') ? '1px solid blue;' : '')"
                    class="workflow-joiner"
                >
                    <workflow-drop-wrapper
                        v-if="self && dragging.type == 'progression-policy' && dropZonesExpanded[getChildIndex(child)]"
                        :expanded="dropZonesExpanded[getChildIndex(child)]"
                        :validComponents="self.$options.components"
                        :componentData="componentData"
                        :type="child.type"
                        :index="getChildIndex(child) + 0.5"
                        :mode="'insertAfter'"
                        :dragging="dragging"
                        style="height: 20px; width: 20px; z-index:50;"
                    >
                    </workflow-drop-wrapper>
                </div>
            </template>
        </div>
    </div>
</template>
<script>
    import WorkflowDropWrapper from './WorkflowDropWrapper';
    import WorkflowDropZoneMixin from './WorkflowDropZoneMixin';
    import WorkflowSelectableZoneMixin from './WorkflowSelectableZoneMixin';
    import WorkflowPlaceableComponent from './WorkflowPlaceableComponent';

    export default {
        props: ['dragging', 'componentData'],
        mixins: [WorkflowDropZoneMixin, WorkflowSelectableZoneMixin],
        components: {
            'workflow-drop-wrapper': WorkflowDropWrapper,
            'workflow-placeable-component': WorkflowPlaceableComponent
        },
        data: function() {
            return {
                tagName: 'canvas'
            }
        },
        methods: {
            calculateJoinerLeft: function(id) {
                var childElement = $("#" + id);
                var childLeft = 0;
                var childWidth = 0;
                if (childElement.offset() != undefined && $("#workflowBuilderCanvas").offset() != undefined) {
                    childLeft = childElement.offset().left - $("#workflowBuilderCanvas").offset().left;
                    childWidth = childElement.width();
                }

                return childLeft + childWidth;
            }
        }
    }
</script>
<style scoped lang="scss">
    .workflow-canvas {
        border: 1px solid black;
        position: relative;
        min-width: 150px;
        width: 100%;
        min-height: 20px;
    }
    .workflow-joiner {
        width: 20px;
        height: 20px;
        position: absolute;
        bottom: 0;
    }
</style>
