let show = document.querySelector('.show');

let increment = 0;

document.addEventListener('click', e => {
    //Aumentar y disminuir valores
    if (e.target.matches('.increase')) {
        increment++;
        show.innerHTML = increment;
    } else if (e.target.matches('.decrease')) {
        increment--;
        show.innerHTML = increment;
    } else if (e.target.matches('.reset')) {
        increment = 0;
        show.innerHTML = increment;
    }


    //Cambiar el color
    if (increment < 0) {
        show.style.color = 'red';
    } else if (increment == 15) {
        show.style.color = 'blue';
    }else {
        show.style.color = 'green';
    }
})

