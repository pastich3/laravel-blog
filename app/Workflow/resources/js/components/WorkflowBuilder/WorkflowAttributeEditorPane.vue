<template>
    <div class="edit-menu">
        <div v-if="attributesList.metaKey" class="menu-row collapsible d-flex flex-column justify-content-center mt-3">
            <div class="d-flex justify-content-center align-items-center toggle-btn" @click="section=(section!='metaKey' ? 'metaKey' : '')">
                Meta Key
                <i :class="{'fa-caret-up': section=='metaKey', 'fa-caret-down': section != 'metaKey' }" class="ml-1 fa"></i>
            </div>
            <div v-if="section=='metaKey'" class="metaKey-pane px-3 d-flex flex-column">
                <input v-model="componentData.attributes.metaKey">
            </div>
        </div>
        <!-- delete -->
        <div class="menu-row delete-row d-flex justify-content-center mt-3">
            <i v-if="!confirmDeleteComponent" @click="confirmDeleteComponent=true" class="delete-button fa fa-trash text-danger"></i>
            <div class="d-flex justify-content-center" v-if="confirmDeleteComponent">
                <div class="cancel mr-3" @click="confirmDeleteComponent=false">Cancel</div>
                <div class="delete text-danger ml-3" @click="deleteComponent()">Delete</div>
            </div>
        </div>
    </div>
</template>
<script>
    import {WorkflowBus} from '../WorkflowBus';
    export default {
        props: ['attributesList', 'componentData', 'componentKey'],
        data: function() {
            return {
                section: '',
                confirmDeleteComponent: false
            }
        },
        methods: {
            deleteComponent: function() {
                WorkflowBus.$emit('workflow-delete-component', this.componentKey);
            },
        }
    }
</script>
<style scoped lang="scss">
    .edit-menu {
        background-color: white;
        width: 250px;
        border: 1px solid darkgray;
        padding-bottom: 10px;
    }
    .toggle-btn:hover {
        cursor: pointer;
    }
    .edit-menu:hover {
        cursor: initial;
    }
    .delete-button {
        font-size: 20px;
    }
    .delete-button:hover, .delete:hover, .cancel:hover {
        filter: brightness(120%);
        cursor: pointer;
    }
    .padding-input {
        width: 80px;
    }
    .margin-input {
        width: 80px;
    }
    .menu-row {
        padding-top: 10px;
        margin-left: 15px;
        margin-right: 15px;
        margin-top: 10px;
    }
    // below means "all but the first"
    .menu-row ~ .menu-row {
        border-top: 1px solid gray;
    }
</style>
