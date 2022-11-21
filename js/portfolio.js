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

