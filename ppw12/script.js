let nama = document.getElementById("nama");
let npm = document.getElementById("npm");
let btn = document.getElementById("btn");
let tbmahasiswa = document.getElementById("tb_mahasiswa");

let data = [];

btn.addEventListener("click", function () {
    save_data();
});

function save_data() {
    console.log("Button ditekan");

    // cek apakah localStorage ada isi atau ga ?
    if (localStorage.getItem("mahasiswa") === null) {
        // belum ada localStorage mahasiswa
        localStorage.setItem("mahasiswa", JSON.stringify([{
            "nama": nama.value,
            "npm": npm.value
        }]));
    } else {
        let data_before = JSON.parse(localStorage.getItem("mahasiswa"));
        data_before.push({
            "nama": nama.value,
            "npm": npm.value
        });
        localStorage.setItem("mahasiswa", JSON.stringify(data_before));
    }
    tbmahasiswa.innerHTML = "";
    getData();
};

getData(); // panggil fungsi getData()

function getData() {
    // console.log(localStorage.getItem("mahasiswa"));
    // console.log(JSON.parse(localStorage.getItem("mahasiswa")));

    let dataLS = JSON.parse(localStorage.getItem("mahasiswa"));
    dataLS.forEach(show_data); // panggil fungsi show_data()
};

function show_data(value, index) {
    console.log(value.npm.substring(4, 6));
    tbmahasiswa.innerHTML += "<tr><td>" + value.nama + "</td><td>" + value.npm + "</td><td>" + getProgramStudi(value.npm.substring(4, 6)) + "</td></tr>";
};

function getProgramStudi(kode_prodi) {
    let data_prodi = {
        "24" : "sistem informasi",
        "25" : " informatika"
    }

    return data_prodi[kode_prodi];
    
};