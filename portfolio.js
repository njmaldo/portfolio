
let menu = document.querySelector('#menu');
let menu_bar = document.querySelector('#menu_bar');
let btnSwitch = document.querySelector('#switch');

menu_bar.addEventListener('click', () => {
    menu.classList.toggle('menu_toggle');
    // setTimeout(toggle, 5000);
});
const toggle = () => {
    location.reload();
}
btnSwitch.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');
});

// Modal
let modal = document.getElementById('myModal');
let modalImg = document.getElementById('img01');
let captionText = document.getElementById('caption');
let mds = document.querySelectorAll('[data-modal]');

  mds.forEach(function(md) {
    md.addEventListener('click', function() {
      modal.style.display = 'block';
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    });
    
  });

let span = document.getElementsByClassName('close')[0];
span.onclick = function() {
  modal.style.display = 'none';
}

// Formulario
let form = document.getElementById("contacto__formulario");
    
    async function handleSubmit(event) {
      event.preventDefault();
      let status = document.getElementById("my-form-status");
      let data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          status.innerHTML = "Gracias! Pronto me pondré en contacto...";
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