new Vue({
    el: 'main',
    data: {
        titulo: 'Iniciar Sesion',
        path: 'http://localhost/monkeycafe/',
        usuario: '',
        password: ''     
    },
    methods: {
         
        iniciar: function () {
            var url = this.path + 'login-user';
            param = new FormData();
            param.append('usuario', this.usuario);
            param.append('password', this.password);
            axios.post(url, param).then(res => {
                
                if (res.data.user[0].tipo == "ADMIN") {
                    window.location.href = this.path + "menu-admin";
                }else{
                    window.location.href = this.path + "login";
                }     
                
            }).catch(e => {
                window.location.href = this.path+"login";
//                window.location.href = this.path;
            });
        },
        
        iniciarEnter: function (event) {
            // who caused it? "event.target.id"
            // console.log('keyup from id: ' + event.target.id)
            // what was pressed?
            let keyMessage = 'keyup: ';
            if (event.key == "Enter") {
                //  console.log("enter"); AL PRESIONAR TECLA EN EL PASSWORD ACTIVA EL METODO 
                this.iniciar();
            }
        },
        iniciarEnter2: function (event) {
            // who caused it? "event.target.id"
            // console.log('keyup from id: ' + event.target.id)
            // what was pressed?
            let keyMessage = 'keyup: ';
            if (event.key == "Enter") {
                //  console.log("enter"); AL PRESIONAR TECLA EN EL PASSWORD ACTIVA EL METODO 
                this.activo();
            }
        }

    },
    created: function () {

    },
    mounted: function () {
       
    }
});


