<template>
    <div
        v-if="initialized"
        @click="selectElement($event)"
        class="workflow-component w-100"
        style="position:relative;"
        :class="[{
            selected : elementSelected,
            'workflow-bordered': dragging.component != undefined,

        }, 'workflow-' + componentData.type]"
    >
      <workflow-edit-button
        v-if="elementSelected"
        :componentData="componentData"
        :attributesList="attributesList"
        :componentKey="componentData.key"
      ></workflow-edit-button>
      <div class="d-flex flex-column" :id="componentData.key">
        <div class="d-flex justify-content-center text-center mb-3"> {{componentData.name}} </div>
        <div
            class="d-flex"
            :class="{
                'justify-content-center': componentData.children.length == 0,
                'justify-content-between': componentData.children.length > 0,
            }"
        >
            <div
                @dragover="handleDragover(-1)"
                @dragleave="handleDragLeave(-1)"
                style="min-width: 20px; width: 20px; height: 20px; border: 1px solid red;"
            >
                <workflow-drop-wrapper
                    v-if="self && dragging && dropZonesExpanded[-1]"
                    :expanded="dropZonesExpanded[-1]"
                    :validComponents="self.$options.components"
                    :componentData="componentData"
                    :type="componentData.type"
                    :mode="'prepend'"
                    :dragging="dragging"
                    style="height: 20px; width: 20px; z-index:50;"
                >
                </workflow-drop-wrapper>
            </div>
            <template v-for="child in componentData.children">
                <svg style="position:absolute; width: 100%; height: 100%; top:0;left:0;z-index:-1;">
                    <line
                        :x1="getX(componentData.key)"
                        :y1="getY(componentData.key) + 20"
                        :x2="getX(child.key)"
                        :y2="getY(child.key)"
                        stroke="black"
                    />
                </svg>
                <component
                    :dragging="dragging"
                    :is="child.component"
                    :componentData="child"
                    :key="componentData.key + '-' + child.key"
                >
                </component>
                <div>
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
                            :type="componentData.type"
                            :index="getChildIndex(child)"
                            :mode="'insertAfter'"
                            :dragging="dragging"
                            style="height: 20px; width: 20px; z-index:50;"
                        >
                        </workflow-drop-wrapper>
                    </div>
                </div>
            </template>
        </div>
      </div>
    </div>
</template>
<script>
    import WorkflowDropWrapper from './WorkflowDropWrapper';
    import WorkflowDropZoneMixin from './WorkflowDropZoneMixin';
    import WorkflowSelectableZoneMixin from "./WorkflowSelectableZoneMixin";
    import WorkflowPlaceableComponent from "./WorkflowPlaceableComponent";
    import WorkflowEditButton from "./WorkflowEditButton";

    export default {
        props: ['dragging', 'componentData'],
        mixins: [WorkflowDropZoneMixin, WorkflowSelectableZoneMixin],
        components: {
            'workflow-drop-wrapper': WorkflowDropWrapper,
            'workflow-placeable-component': WorkflowPlaceableComponent,
            'workflow-edit-button': WorkflowEditButton
        },
        name: 'workflow-placeable-component',
        data: function() {
            return {
                tagName: 'workflow-task',
                attributesList: {
                }
            }
        },
        methods: {
            getX: function(id) {
                if ($("#" + id).offset() && $("#" + this.componentData.key).offset()) {
                    return $("#" + id).offset().left - $("#" + this.componentData.key).offset().left + $("#" + id).width()/2;
                } else {return 0;}
            },
            getY: function(id) {
                if ($("#" + id).offset() && $("#" + this.componentData.key).offset()) {
                    return $("#" + id).offset().top - $("#" + this.componentData.key).offset().top;
                } else {return 0;}
            }
        }
    }
</script>
<style scoped lang="scss">
    .workflow-task {
        outline-color: orange;
    }
    .workflow-progression-policy {
        outline-color: blue;
    }
    .workflow-component {
        min-height: 50px;
    }
    .workflow-component:hover, .workflow-component.selected {
        cursor: move;
        outline-style: double;
        outline-width: 1px;
    }
    .workflow-bordered {
        outline-style: solid;
        outline-width: 1px;
    }
</style>
