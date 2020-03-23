let baseApiRoute = '/api/v1';
class ApiRequests {
    static getCurrentUser() {
        return axios({
            method: 'get',
            url: baseApiRoute + '/users/currentUser',
        });
    }
}
