import {WorkflowBus} from '../WorkflowBus';

export default {
    data: function() {
        return {
            elementSelected: false,
            initialized: false,
            attributesList: {},
            elementRecentlyDeleted: false,
        }
    },
    created: function() {
        if (this.componentData.attributes == undefined) {
            this.$set(this.componentData, 'attributesContainer', {});
        }
    },
    mounted: function() {
        var self = this;
        if (this.componentData.key == undefined) {
            this.$set(this.componentData, 'key', self.generateUuid());
        }
        this.fillAttributes();
        this.$set(this.componentData, 'tagName', this.tagName);
        WorkflowBus.$on('workflow-element-selected', function(key) {
            // select the element by its key; all other elements become de-selected
            self.elementSelected = (key == self.componentData.key);
        });

        WorkflowBus.$on('workflow-drag-ended', function() {
            // prevents edit-icons / menus / select-highlights from sticking around erroneously
            // self.componentData.key = self.generateUuid();
            self.elementSelected = false;
        });

        WorkflowBus.$on('workflow-delete-component', function(componentKey) {
            self.elementSelected = false;
            if (self.componentData.children != undefined) { // content-elements don't have children
                for (var i = 0; i < self.componentData.children.length; i++) {
                    if (self.componentData.children[i].key == componentKey) {
                        self.componentData.children = self.componentData.children.filter(x => x.key != componentKey);
                        WorkflowBus.$emit('workflow-component-deleted'); // forces all elements to update their keys
                        break;
                    }
                }
            }
        });
        this.initialized = true;
    },
    methods: {
        generateUuid: function () {
            return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
        },
        selectElement: function(event) {
            event.stopImmediatePropagation(); // prevents parents from overriding a childrens' select event
            WorkflowBus.$emit('workflow-element-selected', this.componentData.key);
        },
        fillAttributes : function() {
            for (var key in this.attributesList) {
                this.fillAttribute(key, this.attributesList[key], this.componentData.attributesContainer);
            }
        },
        fillAttribute: function(key, attribute, componentDataAttributes) {
            if (componentDataAttributes[key] == undefined) {
                if (attribute.has_subproperties == true) {
                    this.$set(componentDataAttributes, key, {});
                    for (var property in attribute) {
                        if (property == 'has_subproperties') continue;
                        this.fillAttribute(property, attribute[property], componentDataAttributes[key]); // recursive
                    }
                } else {
                    this.$set(componentDataAttributes, key, attribute.default);
                }
            }
        }
    }
}
