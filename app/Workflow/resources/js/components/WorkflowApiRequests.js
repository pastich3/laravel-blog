let baseApiRoute = '/api/workflow/v1';
class WorkflowApiRequests {
    static setWorkflowComponents(data, workflow_id) {
        return axios({
            method: 'post',
            url: baseApiRoute + '/workflows/setComponents/' + workflow_id,
            data: data
        });
    }
    static getTasks() {
        return axios({
            method: 'get',
            url: baseApiRoute + '/tasks/getAll'
        });
    }
    static getProgressionPolicies() {
        return axios({
            method: 'get',
            url: baseApiRoute + '/progressionPolicies/getAll'
        });
    }
}
export default WorkflowApiRequests;
