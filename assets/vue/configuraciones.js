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
        tituloNosotros: '',
        cuerpoNosotros: '',
        mision: '',
        vision: '',
        valores: '',
        sesion: [],
        nombreContacto: '',
        telefonoContacto: '',
        emailContacto: '',
        mensajeContacto: '',
        mensajes: [],
       

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

        enviar: function () {

            if (this.nombreContacto.length == 0 || this.telefonoContacto.length == 0 || this.emailContacto.length == 0 || this.mensajeContacto.length == 0) {
                this.limpiar();
                $(document).ready(function () {
                    $('#mensajeContactoError').show('fade');
                    setTimeout(function () {
                        $('#mensajeContactoError').hide('fade');
                        location.reload();
                    }, 3000);
                });
            } else {

                url = this.path + 'enviarContacto';
                var param = new FormData();
                param.append('nombreContacto', this.nombreContacto);
                param.append('telefonoContacto', this.telefonoContacto);
                param.append('emailContacto', this.emailContacto);
                param.append('mensajeContacto', this.mensajeContacto);

                axios.post(url, param).then(res => {

                    console.log(res.data.value);

                    this.limpiar();
                    $(document).ready(function () {
                        $('#mensajeContacto').show('fade');
                        setTimeout(function () {
                            $('#mensajeContacto').hide('fade');
                        }, 3000);
                    });
                }).catch(e => {
                    console.log(e)
                });
            }
        },

        modalMensaje: function (c)
        {
            var mensaje = c;
            
            console.log('modal');
            $(document).ready(function () {
                        $('.modal').modal('show');    
                        $('#idContacto').text(mensaje.idcontacto);
                        $('#nombreContacto').text(mensaje.nombreContacto);
                        $('#fechaContacto').text(mensaje.fecha);
                        $('#telefonoContacto').text(mensaje.telefonoContacto);
                        $('#emailContacto').text(mensaje.emailContacto);
                        $('#mensajeContacto').text(mensaje.mensajeContacto);
                    });
        },

        limpiar: function () {

            this.nombreContacto = '';
            this.telefonoContacto = '';
            this.emailContacto = '';
            this.mensajeContacto = '';

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
                $(document).ready(function () {
                    $('#mensajeGuardar').show('fade');
                    setTimeout(function () {
                        $('#mensajeGuardar').hide('fade');
                    }, 3000);
                });

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
        },

        getMensajesTotal: function () {

            url = this.path + 'mensajesTotal';
            axios.post(url).then(res => {
                console.log(res.data.value);
                this.mensajes = res.data.value;
            }).catch(e => {
                console.log(e);
            });

        },

        getMensajesTop: function () {

            url = this.path + 'mensajesTop';
            axios.post(url).then(res => {
                //  console.log(res.data);
                this.mensajes = res.data;
            }).catch(e => {
                console.log(e);
            });

        },

    },

    created: function () {
        this.getSession();
        this.getHome();
        this.getMensajesTop();

    },
    mounted: function () {
        $(document).ready(function () {
            $('#cerrarMensajeContacto').click(function () {
                $('#mensajeContacto').hide('fade');
            });
        });
    }
});