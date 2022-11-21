export const validar = (input) => {
    const tipoDeInput = input.dataset.tipo;
    if (validador[tipoDeInput]) {
        validador[tipoDeInput](input);
    }
    if(input.validity.valid) {
        input.parentElement.classList.remove('input-container--invalid');
        input.parentElement.classList.remove('textarea-container--invalid');
        input.parentElement.querySelector('.input-message-error').innerHTML = '';
    }else {
        input.parentElement.classList.add('input-container--invalid');
        input.parentElement.classList.add('textarea-container--invalid');
        input.parentElement.querySelector('.input-message-error').innerHTML = mostrarMensajeDeError(tipoDeInput,input);
        // input.parentElement.querySelector('.textarea-message-error').innerHTML = mostrarMensajeDeError(tipoDeInput,input);
    }
}
const validador = {
    // nacimiento: input => validarNacimiento(input),
};

const msgsError = {
    nombre: {
        valueMissing: 'El campo Nombre no puede estar vacio'
    },
    email: {
        valueMissing: 'El campo Email no puede estar vacio',
        typeMismatch: 'El correo no es válido.'
    },
    password: {
        valueMissing: 'El campo Contraseña no puede estar vacio',
        patternMismatch: 'La contraseña debe tener entre 4 y 8 dígitos e incluir al menos un dígito numérico.'
    }
}
const tipoDeErrores = [
    'valueMissing',
    'typeMismatch',
    'patternMismatch',
    'customError'
]

const mostrarMensajeDeError = (tipoDeInput, input) => {
    let mensaje = '';
    tipoDeErrores.forEach(error => {
        if (input.validity[error]) {
            mensaje = msgsError[tipoDeInput][error];
        }
    });
    return mensaje;
}