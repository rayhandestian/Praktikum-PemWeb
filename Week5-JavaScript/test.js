var x = 10
console.log(x)

x = 20
console.log(x)

let y = 10
console.log(y)

y = 30
console.log(y)

// let y = 50
// console.log(y)

const z = 10
console.log(z)

// z = 20
// console.log(z)

console.log(x == x)
console.log(x == y)

console.log(5 == "5")
console.log(5 === "5")
console.log(5 != "5")
console.log(5 !== "5")

console.log("------------------------------")

// Fungsi untuk menghitung luas persegi
function hitungLuasPersegi(sisi) {
    return sisi * sisi;
}

// Memanggil fungsi dengan nilai 4
console.log("Luas persegi: " + hitungLuasPersegi(4));

console.log("------------------------------")

// Membuat array berisi nama-nama buah
let buah = ["Apel", "Mangga", "Jeruk", "Pisang"];

// Mengakses elemen di dalam array
console.log("Buah pertama: " + buah[0]); // Apel
console.log("Buah ketiga: " + buah[2]);  // Jeruk

console.log("------------------------------")

// Array berisi angka
let angka = [1, 2, 3, 4, 5];

// Fungsi untuk menjumlahkan angka di dalam array
let total = 0;
for (let i = 0; i < angka.length; i++) {
    total += angka[i];
}

console.log("Total jumlah: " + total);

console.log("------------------------------")

// Fungsi untuk mengecek angka ganjil atau genap
function cekGanjilGenap(angka) {
    if (angka % 2 === 0) {
        console.log(angka + " adalah bilangan genap");
    } else {
        console.log(angka + " adalah bilangan ganjil");
    }
}

cekGanjilGenap(7);
cekGanjilGenap(4);
