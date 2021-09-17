console.log('ddfa');

var autos = [

    ["2005-02-30", "GHF129", 699987],
    ["2007-06-30", "HHF229", 699599],
    ["2003-01-25", "KHK379", 699332],
    ["2004-04-22", "LHF369", 699654]

];
// document.querySelector('table').innerHTML += "<tr><th>Data</th><th>numeris</th><th>kodas</th></tr>";
// // document.querySelector('table').innerHTML += "<tr><td>"+autos[0][0] +" </td></tr>"
// for(i=0;i<autos.length;i++){
//     // document.querySelector('table').innerHTML += '<tr><td>' + autos[i][0] + '</td><td>'+autos[i][1]+'</td><td>'+autos[i][2]+'</td></tr>'
// }

// for(i=0;i<autos.length;i++){
//     var tr = document.createElement('tr');
// document.querySelector('table').appendChild(tr);
// for(j=0;j<autos[i].length;j++){
//     var td = document.createElement('td');
//     tr.appendChild(td);
//     td.innerHTML = autos[i][j];
// }
// }

let thdata=document.getElementById('thdata');
thdata.addEventListener('click',function(){
thdata.style.backgroundColor = 'red';
})

document.addEventListener('click', function (e) {
    if (e.target.parentElement.className == 'tr') {
        // e.target.parentElement.style.backgroundColor = 'red';
        e.target.classList.toggle('brown');
    }
});


let form = document.getElementById('forma');
// let data = document.getElementById('data').value;
let table = document.querySelector('.table');


var values = [];

function submit_form() {




    let data = document.getElementById('data').value;
    let nr = document.getElementById('nr').value;
    let kodas = document.getElementById('kodas').value;

    if (data == '' || nr == '' || kodas == '') {
        alert('iveskite');
    } else {
        values.push(data, nr, kodas);

        var tr = document.createElement('tr');
        tr.classList.add('tr');
        table.appendChild(tr);


        for (i = 0; i < values.length; i++) {

            var td = document.createElement('td');
            tr.appendChild(td);
            td.innerHTML = values[i];
        }

        // console.log(values);
        // data = document.getElementById('data').value;
        // nr = document.getElementById('numeris').value;
        // kodas = document.getElementById('kodas').value;

        // var tr = document.createElement('tr');
        // table.appendChild(tr);
        // var td = document.createElement('td');
        // tr.appendChild(td);
        // td.innerHTML = data;
        // var td = document.createElement('td');
        // tr.appendChild(td);
        // td.innerHTML = nr;
        // var td = document.createElement('td');
        // tr.appendChild(td);
        // td.innerHTML = kodas;
        document.getElementById('myform').reset();
    }
}
// console.log(values);


// function prideti(event){
//     event.preventDefault();

//     console.log(data);

// }

document.addEventListener('click', function (e) {
    if (e.target && e.target.className == 'eilute') {
        alert('ddd');
    }
});