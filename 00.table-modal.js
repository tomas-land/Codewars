let forma = document.getElementById('forma');
let tbody = document.getElementById('tbody');
let modalas = document.querySelector('.modalas');
let modalas_edit = document.getElementById('modalas-edit');

let edit_input_name = document.getElementById('edit_vardas');
let edit_input_surname = document.getElementById('edit_pavarde');



//buttons
let modal_cancel = document.querySelector('.modalas-close');
let modal_delete = document.querySelector('.modalas-trinti');
let modal_save = document.querySelector('.edit-modalas-save');
let submitButton = document.querySelector('.test');


//global

let trintiIndex;
let editIndex;
let array = [];
let tr;
submitButton.addEventListener('click', (e) => {

    e.preventDefault();
    let vardas = document.getElementById('vardas').value;
    let pavarde = document.getElementById('pavarde').value;
    const data = [vardas, pavarde];

    

    for (var i = 0; i < array.length; i++) {
        var tr = document.createElement('tr');

        for (var j = 0; j < array[i].length; j++) {
            var td = document.createElement('td');
            td.innerHTML = array[i][j];
            tr.appendChild(td);

        }
        var btn_delete = document.createElement('button');
        btn_delete.classList.add('btn', 'btn-danger', 'trinti');
        btn_delete.innerHTML = 'trinti';
        tr.appendChild(btn_delete);
        var btn_edit = document.createElement('button');
        btn_edit.classList.add('btn', 'btn-success', 'redaguoti');
        btn_edit.innerHTML = 'redaguoti';
        tr.appendChild(btn_edit);
    }

    tbody.appendChild(tr);
array.push(data);


})

tbody.addEventListener('click', (e) => {
    if (e.target.classList.contains('trinti')) {
        tr = e.target.parentElement;
        // trintiIndex = e.target.parentElement.rowIndex - 1;
        let modalas = document.getElementById('modalas-trinti');
        modalas.classList.add('modalas_aktyvus');
    }
})

modal_cancel.addEventListener('click', () => {
    modalas.classList.remove('modalas_aktyvus');
})

modal_delete.addEventListener('click', () => {
    tr.remove();
    modalas.classList.remove('modalas_aktyvus');
})

// console.log(array);

tbody.addEventListener('click', (e) => {
    if (e.target.classList.contains('redaguoti')) {

       
        modalas_edit.classList.add('modalas_aktyvus');
        editIndex = e.target.parentElement.rowIndex - 1;

        edit_input_name.value = array[editIndex][0];
        edit_input_surname.value = array[editIndex][1];

    }
})

modal_save.addEventListener('click', () => {
    const redagDuomenys = [edit_input_name.value, edit_input_surname.value];
    array.splice(editIndex,1,redagDuomenys);
    modalas_edit.classList.remove('modalas_aktyvus');
})

