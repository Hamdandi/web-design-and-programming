// array
let hobi = [
    "ngoding","game"
];

// object
let profil = {
    "nama" : "dandi",
    "umur" : 20
};

document.getElementById("hobi1").innerHTML = hobi[0];
document.getElementById("hobi2").innerHTML = hobi[1];
document.getElementById("nama").innerHTML = profil.nama;
document.getElementById("umur").innerHTML = profil.umur;

let mahasiswa = [
    {
        "npm"   : 20202020,
        "nama"  : "kaka",
        "skill" : ["DIgital","heckel"]
    },
    {
        "npm"   : 20202021,
        "nama"  : "kiki",
        "skill" : ["berenang", "UI/UX"]
    },
    {
        "npm"   : 20202022,
        "nama"  : "kuku",
        "skill" : ["backend","cyber security"]
    }
];

mahasiswa.forEach(show_mahasiswa);
function show_mahasiswa(value, index) {
    console.log(value);
    document.getElementById("tb_mahasiswa").innerHTML += "<tr><td>" + value.nama + "</td><td>" + value.npm + "</td><td>" + value.skill[0] + "</td><td>" + value.skill[1] + "</td></tr>";
}