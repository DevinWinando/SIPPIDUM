const inputInstansi = document.getElementById("instansi");
const inputAlamat = document.getElementById("alamat");
const inputMethod = document.getElementById("modal-method");
const actionForm = document.getElementById("modal-form");

document.addEventListener("click", (e) => {
    if (e.target.classList.contains("btn-edit")) {
        fetch("http://127.0.0.1:8000/penyidik/" + e.target.dataset.id)
            .then((response) => response.json())
            .then((jaksa) => {
                console.log(jaksa);
                inputInstansi.value = jaksa.instansi;
                inputAlamat.value = jaksa.alamat;
                inputMethod.value = "PATCH";
                actionForm.action = "/penyidik/" + e.target.dataset.id;
            });
    }
});

document.addEventListener("click", (e) => {
    if (e.target.classList.contains("btn-add")) {
        inputInstansi.value = "";
        inputAlamat.value = "";
        inputMethod.value = "POST";
        actionForm.action = "/penyidik";
    }
});
