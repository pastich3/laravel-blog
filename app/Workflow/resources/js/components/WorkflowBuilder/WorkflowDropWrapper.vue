<template>
    <div>
        <drop
            class="drop"
            :class="{
                allowed: dropAllowed(dragging),
                over: dragOver,
                active: dragging.component != undefined || componentData.children.length == 0,
                expanded: expanded
            }"
            @dragover="handleDragover(dragging, ...arguments)"
            @dragleave="handleDragLeave()"
            @drop="handleDrop"
        >
        </drop>
    </div>
</template>
<script>
    import {Drag, Drop} from 'vue-drag-drop';
    import {WorkflowBus} from '../WorkflowBus';

    export default {
        props: [
            'dragging',
            'index',
            'componentData',
            'validComponents',
            'mode',
            // 'typeAccepted',
            'type',
            'expanded'
        ],
        components: {
            Drop
        },
        data: function() {
            return {
                validChildren: [],
                dragOver: false,
                dragLeaveTimeout: undefined
            }
        },
        mounted: function() {
            // dynamically fetch the valid children based on the registered components
            this.$nextTick(() => {
                this.validChildren = Object.keys(this.validComponents).filter(x => x != 'workflow-drop-wrapper' && x != 'workflow-edit-button');

                var self = this;
                WorkflowBus.$on('workflow-drag-ended', function() {
                    clearTimeout(self.dragLeaveTimeout);
                    self.dragOver = false;
                });
            });
        },
        methods: {
            handleDrop: function (data) {
                // assume we're working with a single component
                var componentData = this.componentData;
                var otherSibling = undefined;
                var index = this.index;
                // if index % 1 == 0.5, then its a "joiner" and we'll link siblings together
                if (index % 1 == 0.5) {
                    // take the first sibling
                    componentData = this.componentData.children[index - 0.5];
                    otherSibling = this.componentData.children[index + 0.5];
                    index -= 0.5;
                }
                if (componentData.children == undefined) {
                    this.$set(componentData, 'children', []);
                }
                if (otherSibling && otherSibling.children == undefined) {
                    this.$set(otherSibling, 'children', []);
                }
                var obj = {
                    name: data.component.name,
                    component: data.component.component,
                    type: data.component.type,
                }
                obj.children = [];
                if (this.mode == 'insertAfter') {
                    // inserts new element after previous element
                    componentData.children.splice(index+1, 0, obj);
                    if (otherSibling != undefined) {
                        var dupObj = {
                            name: obj.name,
                            component: obj.component,
                            type: obj.type
                        };
                        dupObj.render = false;
                        otherSibling.children.splice(index+1, 0, dupObj);
                    }
                } else { // this.mode == prepend
                    componentData.children.splice(0, 0, obj); // unshift == prepend
                    if (otherSibling != undefined) {
                        var dupObj = {
                            name: obj.name,
                            component: obj.component,
                            type: obj.type
                        };
                        dupObj.render = false;
                        otherSibling.children.splice(0, 0, dupObj); // unshift == prepend
                    }
                }
                WorkflowBus.$emit('workflow-drag-ended');
            },
            handleDragover: function (dragging, data, event) {
                if (!this.dropAllowed(dragging)) {
                    event.dataTransfer.dropEffect = 'none';
                } else {
                    this.dragOver = true;
                    if (this.dragLeaveTimeout != undefined) {
                        clearTimeout(this.dragLeaveTimeout);
                    }
                }
            },
            handleDragLeave: function() {
                if (this.dragOver) {
                    if (this.dragLeaveTimeout != undefined) {
                        clearTimeout(this.dragLeaveTimeout);
                    }
                    var self = this;
                    this.dragLeaveTimeout = setTimeout(function() {
                        self.dragOver = false;
                    }, 100);
                }
            },
            dropAllowed: function(dragging) {
                return this.validChildren.find(x => x == dragging.component);
            }
        },
    }
</script>

<style scoped lang="scss">
    .drop.active {
        background-color: white;
    }
    .drop {
        z-index: 1;
        width: 100%;
    }
    .drop.allowed {
    }
    .drop.allowed.over {
        filter: brightness(60%);
    }
    .drop.expanded {
        filter: brightness(80%);
        height: 100%;
        border: 1px solid blue;
    }
</style>
