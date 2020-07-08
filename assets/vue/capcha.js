var app = new Vue({
    el: '#contenido',
    data: {
        path: 'http://localhost/monkeycafe/',
        home: {},   
        titulo1: '',
        subtitulo1: '',
        subtitulo2: '',
        titulo2: '',
        cuerpo2: '',
        nombrePagina: '',
        telefono: '',
        nombre: '',
        correo: '',
        sesion: []
    },
    methods: {
        getSession: function () {
            url = this.path + 'getSession';
            axios.post(url).then(res => {
                this.sesion = res.data;    
                console.log(res.data);
            }).catch(e => {
                console.log(e);
            });
        },
        
        captcha: function (){
            url = 'https://www.google.com/recaptcha/api/siteverify';
            
            
        },
        
        getHome: function () {
            url = this.path + 'getHome';
            axios.post(url).then(res => {
                this.home = res.data[0];
                this.titulo1 = res.data[0].titulo1;
                this.subtitulo1 = res.data[0].subtitulo1;
                this.subtitulo2 = res.data[0].subtitulo2;
                this.titulo2 = res.data[0].titulo2;
                this.cuerpo2 = res.data[0].cuerpo2;
                this.nombrePagina = res.data[0].nombrePagina;
                this.telefono = res.data[0].telefono;
                this.nombre = res.data[0].nombre;
                this.correo = res.data[0].correo;
            }).catch(e => {
                console.log(e);
            });
        },
    
        updateHome: function ()
        {
            url = this.path + 'updateHome';
            
            var param = new FormData();
            param.append('titulo1', this.titulo1);
            param.append('subtitulo1', this.subtitulo1);
            param.append('subtitulo2', this.subtitulo2);
            param.append('titulo2', this.titulo2);
            param.append('cuerpo2', this.cuerpo2);
            param.append('nombrePagina', this.nombrePagina);
            param.append('telefono', this.telefono);
            param.append('nombre', this.nombre);
            param.append('correo', this.correo);
            
            axios.post(url, param).then(res => {
                console.log(res.data);
                this.getHome();
            }).catch(e => {
                console.log(e);
            });
            
        },
        
        logout: function () {
            url = this.path + 'logout';
            axios.post(url).then(res => {
                this.sesion = res.data;
            }).catch(e => {
                console.log(e);
            });
        } 
    },
    created: function () {
        this.getSession();
        this.getHome();
   
    },
    mounted: function () {
       
    }
});