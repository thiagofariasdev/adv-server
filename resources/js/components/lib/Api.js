export class Api {
    static async get(endpoint, opt = {})
    {
        this.token = User.hasUser().api_token;
        opt['Accept'] = 'application/json',
        opt['Content-Type'] = 'application/json'
        opt['Authorization'] = 'Bearer ' + this.token;

        return new Promise( resolve =>
            axios.get(endpoint, {headers:opt})
            .then(res => {
                resolve(res);
            }).catch(err => {
                resolve({success:false, err});
            })
        )
    }
    static async post(endpoint, data = {}, opt = {})
    {
        this.token = User.hasUser().api_token;
        opt['Accept'] = 'application/json',
        opt['Content-Type'] = 'application/json';
        opt['Authorization'] = 'Bearer ' + this.token;

        return new Promise( resolve =>
            axios.post(endpoint, data, {headers:opt})
            .then(res => {
                resolve(res);
            }).catch(err => {
                resolve({success:false, err});
            })
        )
    }
}