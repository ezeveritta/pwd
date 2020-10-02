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
                },
                between: {
                    min: 0,
                    max: 23,
                    message: 'Debe ser de 0 a 23.'
                }
            }
        },

        martes: {

            validators: {
                integer: {
                    message: "El valor debe ser numérico."
                },
                between: {
                    min: 0,
                    max: 23,
                    message: 'Debe ser de 0 a 23.'
                }
            }
        },

        miercoles: {

            validators: {
                integer: {
                    message: "El valor debe ser numérico."
                },
                between: {
                    min: 0,
                    max: 23,
                    message: 'Debe ser de 0 a 23.'
                }
            }
        },

        jueves: {

            validators: {
                integer: {
                    message: "El valor debe ser numérico."
                },
                between: {
                    min: 0,
                    max: 23,
                    message: 'Debe ser de 0 a 23.'
                }
            }
        },

        viernes: {

            validators: {
                integer: {
                    message: "El valor debe ser numérico."
                },
                between: {
                    min: 0,
                    max: 23,
                    message: 'Debe ser de 0 a 23.'
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

        nombre: {

            validators: {
                notEmpty: {
                    message: "Se requiere un nombre."
                }
            }
        },

        apellido: {

            validators: {
                notEmpty: {
                    message: "Se requiere un apellido."
                }
            }
        },

        edad: {

            validators: {
                notEmpty: {
                    message: "Se requiere una edad."
                },
                integer: {
                    message: "La edad debe ser numérica."
                }
            }
        },

        direccion: {

            validators: {
                notEmpty: {
                    message: "Se requiere una edad."
                }
            }
        }

    }

});


////////////////////////////////////////////////////////////////////////////////////////////
//// Ejercicio 4

$("#form_ej4").bootstrapValidator({

    message: "Ingrese un valor.",

    feedbackIcons: {
        valid: "fal fa-inverse",
        validating: "fa fa-wifi-1",
        invalid: "fa fa-times"
    },

    fields: {

        nombre: {

            validators: {
                notEmpty: {
                    message: "Se requiere un nombre."
                }
            }
        },

        apellido: {

            validators: {
                notEmpty: {
                    message: "Se requiere un apellido."
                }
            }
        },

        edad: {

            validators: {
                notEmpty: {
                    message: "Se requiere una edad."
                },
                integer: {
                    message: "La edad debe ser numérica."
                }
            }
        },

        direccion: {

            validators: {
                notEmpty: {
                    message: "Se requiere una edad."
                }
            }
        }

    }

});



////////////////////////////////////////////////////////////////////////////////////////////
//// Ejercicio 5

$("#form_ej5").bootstrapValidator({

    message: "Ingrese un valor.",

    feedbackIcons: {
        valid: "fal fa-inverse",
        validating: "fa fa-wifi-1",
        invalid: "fa fa-times"
    },

    fields: {

        nombre: {

            validators: {
                notEmpty: {
                    message: "Se requiere un nombre."
                }
            }
        },

        apellido: {

            validators: {
                notEmpty: {
                    message: "Se requiere un apellido."
                }
            }
        },

        edad: {

            validators: {
                notEmpty: {
                    message: "Se requiere una edad."
                },
                integer: {
                    message: "La edad debe ser numérica."
                }
            }
        },

        direccion: {

            validators: {
                notEmpty: {
                    message: "Se requiere una edad."
                }
            }
        },

        genero: {

            validators: {
                notEmpty: {
                    message: "Se requiere una edad."
                }
            }
        }

    }

});



////////////////////////////////////////////////////////////////////////////////////////////
//// Ejercicio 6

$("#form_ej6").bootstrapValidator({

    message: "Ingrese un valor.",

    feedbackIcons: {
        valid: "fal fa-inverse",
        validating: "fa fa-wifi-1",
        invalid: "fa fa-times"
    },

    fields: {

        nombre: {

            validators: {
                notEmpty: {
                    message: "Se requiere un nombre."
                }
            }
        },

        apellido: {

            validators: {
                notEmpty: {
                    message: "Se requiere un apellido."
                }
            }
        },

        edad: {

            validators: {
                notEmpty: {
                    message: "Se requiere una edad."
                },
                integer: {
                    message: "La edad debe ser numérica."
                }
            }
        },

        direccion: {

            validators: {
                notEmpty: {
                    message: "Se requiere una edad."
                }
            }
        },

        genero: {

            validators: {
                notEmpty: {
                    message: "Se requiere una edad."
                }
            }
        }

    }

});



////////////////////////////////////////////////////////////////////////////////////////////
//// Ejercicio 7

$("#form_ej7").bootstrapValidator({

    message: "Ingrese un valor.",

    feedbackIcons: {
        valid: "fal fa-inverse",
        validating: "fa fa-wifi-1",
        invalid: "fa fa-times"
    },

    fields: {
        valorA: {

            validators: {
                notEmpty: {
                    message: "Se requiere una valor."
                },
                integer: {
                    message: "El valor debe ser numérico."
                }
            }
        },
        valorB: {

            validators: {
                notEmpty: {
                    message: "Se requiere una valor."
                },
                integer: {
                    message: "El valor debe ser numérico."
                }
            }
        }
    }

});


////////////////////////////////////////////////////////////////////////////////////////////
//// Ejercicio 8

$("#form_ej8").bootstrapValidator({

    message: "Ingrese un valor.",

    feedbackIcons: {
        valid: "fal fa-inverse",
        validating: "fa fa-wifi-1",
        invalid: "fa fa-times"
    },

    fields: {
        edad: {

            validators: {
                notEmpty: {
                    message: "Se requiere una valor."
                },
                integer: {
                    message: "El valor debe ser numérico."
                }
            }
        }
    }

});