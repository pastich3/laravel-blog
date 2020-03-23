    import {WorkflowBus} from '../WorkflowBus';

    export default {
        data: function() {
            return {
                dropZonesExpanded: {},
                dragLeaveTimeouts: {},
                self: {}
            }
        },
        mounted: function() {
            this.self = this; // a hack to get the second drop wrapper to work
            var self = this;
            WorkflowBus.$on('workflow-drag-ended', function() {
                for (var index in self.dropZonesExpanded) {
                self.dropZonesExpanded[index] = false;
                    if (self.dragLeaveTimeouts[index] != undefined) {
                        clearTimeout(self.dragLeaveTimeouts[index]);
                    }
                }
            });
        },
        methods: {
            handleDragover: function(index) {
                if (this.isDraggingValidComponent()) {
                    if (this.dropZonesExpanded[index] != true) {
                        this.$set(this.dropZonesExpanded, index, true);
                    }
                    if (this.dragLeaveTimeouts[index] != undefined) {
                        clearTimeout(this.dragLeaveTimeouts[index]);
                    }
                }
            },
            getChildIndex: function(child) {
                return this.componentData.children.indexOf(child);
            },
            isDraggingValidComponent: function() {
                return Object.keys(this.$options.components).find(x => x == this.dragging.component);
            },
            handleDragLeave: function(index) {
                if (this.dropZonesExpanded[index] == true) {
                    if (this.dragLeaveTimeouts[index] != undefined) {
                        clearTimeout(this.dragLeaveTimeouts[index]);
                    }
                    var self = this;
                    this.dragLeaveTimeouts[index] = setTimeout(function() {
                        self.dropZonesExpanded[index] = false;
                    }, 300);
                }
            }
        }
    }
