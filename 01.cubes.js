// let aukstis = document.getElementById('aukstis').value;
// let plotis = document.getElementById('plotis').value;
// let spalva = document.getElementById('spalvos').value;
// let forma = document.querySelector('.forma');
// let blok_zona = document.querySelector('.blok_zona');

let add_btn = document.getElementById('prideti');
// forma.addEventListener('submit',(e)= 

//     let blokelis = document.createElement('div');

// // blokelis.style.backgroundColor = spalva;
// // blokelis.style.width = '100 px';
// // blokelis.style.height = '100 px';
//  blok_zona.appendChild(blokelis);   

// })
// let testbtn = document.querySelector('.test');
// testbtn.addEventListener('click', () => {
//   let blok_zona = document.querySelector('.blok_zona');
   
//     let blokelis = document.createElement('div');
//     blok_zona.appendChild(blokelis);
// })
add_btn.addEventListener('click', (e) => {
    e.preventDefault();
    let aukstis = document.getElementById('aukstis').value;
let plotis = document.getElementById('plotis').value;
let spalva = document.getElementById('spalvos').value;
    let blok_zona = document.querySelector('.blok_zona');
    let blokelis = document.createElement('div');
    blokelis.classList.add('blok');
    blokelis.style.backgroundColor = 'green';
    blokelis.style.height = '100px';
    blokelis.style.width = '100px';
    blok_zona.appendChild(blokelis);

});

document.addEventListener('click',(e)=>{
if(e.target.classList.contains('blok')){
    e.target.classList.toggle('blok_animation');
}

})