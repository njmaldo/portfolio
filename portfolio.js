
let menu = document.querySelector('#menu');
let menu_bar = document.querySelector('#menu_bar');
let btnSwitch = document.querySelector('#switch');

menu_bar.addEventListener('click', () => {
    menu.classList.toggle('menu_toggle');
    setTimeout(toggle, 5000);
});
const toggle = () => {
    location.reload();
}
btnSwitch.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');
});

var form = document.getElementById("contacto__formulario");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          status.innerHTML = "Gracias, pronto me pondré en contacto";
          form.reset()
        } else {
          response.json().then(data => {
            if (Object.hasOwn(data, 'errors')) {
              status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
              status.innerHTML = "Oops! Hubo un problema al enviar el formulario..."
            }
          })
        }
      }).catch(error => {
        status.innerHTML = "Oops! Hubo un problema al enviar el formulario..."
      });
    }
    form.addEventListener("submit", handleSubmit)