////////////////////////////////////////////////////////////////////////////////////////////
//// Ejercicio 1

$("#form_ej1").bootstrapValidator({

    message: "Ingrese un número.",

    feedbackIcons: {
        valid: "fal fa-inverse",
        validating: "fa fa-wifi-1",
        invalid: "fa fa-times"
    },

    fields: {

        numero: {
            validators: {
                notEmpty: {
                    message: "Ingrese un valor."
                },
                integer: {
                    message: "El valor debe ser un número."
                }
            }
        }
    }

});

////////////////////////////////////////////////////////////////////////////////////////////
//// Ejercicio 2

$("#form_ej2").bootstrapValidator({

    message: "Valor invalido.",

    feedbackIcons: {
        valid: "fal fa-inverse",
        validating: "fa fa-wifi-1",
        invalid: "fa fa-times"
    },

    fields: {

        lunes: {

            validators: {
                integer: {
                    message: "El valor debe ser numérico."
                }
            }
        },

        martes: {

            validators: {
                integer: {
                    message: "El valor debe ser numérico."
                }
            }
        },

        miercoles: {

            validators: {
                integer: {
                    message: "El valor debe ser numérico."
                }
            }
        },

        jueves: {

            validators: {
                integer: {
                    message: "El valor debe ser numérico."
                }
            }
        },

        viernes: {

            validators: {
                integer: {
                    message: "El valor debe ser numérico."
                }
            }
        }
    }

});

////////////////////////////////////////////////////////////////////////////////////////////
//// Ejercicio 3

$("#form_ej3").bootstrapValidator({

    message: "Ingrese un valor.",

    feedbackIcons: {
        valid: "fal fa-inverse",
        validating: "fa fa-wifi-1",
        invalid: "fa fa-times"
    },

    fields: {

        username: {

            validators: {
                notEmpty: {
                    message: "Se requiere un nombre de usuario."
                }
            }
        },

        password: {

            validators: {
                notEmpty: {
                    message: "Se requiere una contraseña."
                },
                stringLength: {
                    min: 8,
                    message: "La contraseña debe tener 8 o más carácteres."
                }
            }
        }

    }

});


////////////////////////////////////////////////////////////////////////////////////////////
//// Ejercicio 4
$("#form_ej4").bootstrapValidator({

    message: "Valor invalido",

    feedbackIcons: {
        valid: "fal fa-inverse",
        validating: "fa fa-wifi-1",
        invalid: "fa fa-times"
    },

    fields: {

        titulo: {

            validators: {
                notEmpty: {
                    message: "Se requiere el titulo de la obra."
                }
            }
        },

        actores: {

            validators: {
                notEmpty: {
                    message: "Se requiere al menos un actor."
                }
            }
        },

        director: {

            validators: {
                notEmpty: {
                    message: "Se requiere al menos un director."
                }
            }
        },

        guion: {

            validators: {
                notEmpty: {
                    message: "Se requiere el guión."
                }
            }
        },

        produccion: {

            validators: {
                notEmpty: {
                    message: "Se requiere este dato."
                }
            }
        },

        anio: {

            validators: {
                notEmpty: {
                    message: "Se requiere una fecha."
                },
                integer: {
                    message: "Debe ser numérico."
                },
                stringLength: {
                    max: 4,
                    message: "Maximo 4 números."
                }
            }
        },

        nacionalidad: {

            validators: {
                notEmpty: {
                    message: "Se requiere la Nacionalidad."
                }
            }
        },

        genero: {

            validators: {
                notEmpty: {
                    message: "Se requiere un genero."
                }
            }
        },

        duracion: {

            validators: {
                notEmpty: {
                    message: "Se requiere la duración de la obra."
                },
                integer: {
                    message: "Debe ser numérico."
                },
                stringLength: {
                    max: 3,
                    message: "Maximo 3 números."
                }
            }
        },

        restriccion: {

            validators: {
                notEmpty: {
                    message: "Se requiere una restriccion de edad."
                }
            }
        },

        sinopsis: {

            validators: {
                notEmpty: {
                    message: "Se requiere la sinopsis."
                }
            }
        }

    }

});