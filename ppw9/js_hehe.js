console.log("ini pesan dari external JS");

// variable
let nama = "dandi";
let npm = "2024240030";
let hobi = ["TURUUUU","maget"];
let status = true;
let umur = 21;

document.getElementById("nama").innerHTML = nama;
document.getElementById("npm").innerHTML = npm;
document.getElementById("hobi").innerHTML = hobi;

// function
function tampil() {
    console.log("pesan dari function tampil")
}

function tampilpesan(pesan){
    console.log("isi pesan :" + pesan)
}

// Array dataPesan
let data_pesan = [];

let input_pesan = document.getElementById("input_pesan");

function simpan_pesan(){
    // simpan inputPesan ke dalam arrat dataPesan
    console.log(input_pesan.value);

    data_pesan.push(input_pesan.value);
    console.log("data pesan berhasil disimpan ke dalam array");
    // clear data list_pesan
    list_pesan.innerHTML = "";
    // tampil isi array data_pesan
    data_pesan.forEach(show_pesan);
}

let list_pesan = document.getElementById("list_pesan");

function show_pesan(value, index) {
    console.log(value + "-" + index);
    list_pesan.innerHTML += "<li>" + value + "</li>";
}