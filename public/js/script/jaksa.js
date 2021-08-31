const inputNama = document.getElementById("nama");
const inputNip = document.getElementById("nip");
const inputJabatan = document.getElementById("jabatan");
const inputMethod = document.getElementById("modal-method");
const actionForm = document.getElementById("modal-form");

document.addEventListener("click", (e) => {
    if (e.target.classList.contains("btn-edit")) {
        fetch("http://127.0.0.1:8000/jaksa/" + e.target.dataset.id)
            .then((response) => response.json())
            .then((jaksa) => {
                inputNama.value = jaksa.nama;
                inputNip.value = jaksa.nip;
                inputJabatan.value = jaksa.jabatan;
                inputMethod.value = "PATCH";
                actionForm.action = "/jaksa/" + e.target.dataset.id;
            });
    }
});

document.addEventListener("click", (e) => {
    if (e.target.classList.contains("btn-add")) {
        inputNama.value = "";
        inputNip.value = "";
        inputJabatan.value = "";
        inputMethod.value = "POST";
        actionForm.action = "/jaksa";
    }
});
