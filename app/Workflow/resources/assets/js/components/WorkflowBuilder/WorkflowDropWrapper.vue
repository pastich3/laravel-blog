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
            'typeAccepted',
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
                this.validChildren = Object.keys(this.validComponents).filter(x => x != 'drop-wrapper' && x != 'edit-button');

                var self = this;
                WorkflowBus.$on('drag-ended', function() {
                    clearTimeout(self.dragLeaveTimeout);
                    self.dragOver = false;
                });
            });
        },
        methods: {
            handleDrop: function (data) {
                if (this.componentData.children == undefined) {
                    this.$set(this.componentData, 'children', []);
                }
                var dataChildren = (data.component.children||[]);
                var obj = {
                    name: data.component.name,
                    component: data.component.component,
                    children: dataChildren
                };
                if (this.mode == 'insertAfter') {
                    // inserts new element after previous element
                    this.componentData.children.splice(this.index+1, 0, obj);
                } else { // this.mode == prepend
                    this.componentData.children.splice(0, 0, obj); // unshift == prepend
                }
                WorkflowBus.$emit('drag-ended');
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
