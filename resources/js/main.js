let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

function dateHour() {
    const now = new Date();

    const day = now.getDate().toString().padStart(2, '0');
    const month = (now.getMonth() + 1).toString().padStart(2, '0');
    const year = now.getFullYear();

    const hour = now.getHours().toString().padStart(2, '0');
    const minute = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');

    const dateCurrent = `${day}/${month}/${year}`;
    const hourCurrent = `${hour}:${minute}:${seconds}`;

    const dateHourCurrent = `${dateCurrent} ${hourCurrent}`;

    document.getElementById("date_hour").textContent = dateHourCurrent;
}

dateHour();
setInterval(dateHour, 1000)
