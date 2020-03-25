let baseApiRoute = '/api/workflow/v1';
class WorkflowApiRequests {
    static setWorkflowComponents(workflow_id, data) {
        return axios({
            method: 'post',
            url: baseApiRoute + '/workflows/' + workflow_id + '/setComponents',
        });
    }
}

export default WorkflowApiRequests;
