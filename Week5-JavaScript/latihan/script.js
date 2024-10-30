document.getElementById('formPegawai').addEventListener('submit', function(event) {
    event.preventDefault();

    // Get input elements
    let nama = document.getElementById('nama');
    let email = document.getElementById('email');
    let department = document.getElementById('department');

    // Get elements for error messages
    let errorNama = document.getElementById('errorNama');
    let errorEmail = document.getElementById('errorEmail');
    let errordepartment = document.getElementById('errorDepartment');

    // Reset all error messages
    errorNama.innerHTML = "";
    errorEmail.innerHTML = "";
    errordepartment.innerHTML = "";

    let isValid = true; 

    // Nama
    if (nama.value === "") {
        errorNama.innerHTML = "Nama kamu siapa?";
        isValid = false;
    }

    // Email
    if (email.value === "") {
        errorEmail.innerHTML = "Email kamu apa?";
        isValid = false;
    }

    // Department
    if (department.value === "") {
        errordepartment.innerHTML = "Kamu dari department mana?";
        isValid = false;
    }

    // If all valid, submit form
    if (isValid) {
        alert("Formulir berhasil dikirim!");
    }
});
