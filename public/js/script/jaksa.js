document.addEventListener("click", (e) => {
    if (e.target.classList.contains("edit-btn")) {
        fetch("http://127.0.0.1:8000/jaksa/" + e.target.dataset.id)
            .then((response) => response.json())
            .then((jaksa) => {
                const inputNama = document.getElementById("nama");
                const inputNip = document.getElementById("nip");
                const inputJabatan = document.getElementById("jabatan");
                const inputMethod = document.getElementById("modal-method");
                const actionForm = document.getElementById("modal-form");

                inputNama.value = jaksa.nama;
                inputNip.value = jaksa.nip;
                inputJabatan.value = jaksa.jabatan;
                inputMethod.value = "PATCH";
                actionForm.action = "/jaksa/" + e.target.dataset.id;
                console.log(actionForm);
                // inputNama.value("tes");
            });
    }
});

// $(function () {
//     $(".edit-btn").on("click", function () {
//         $("#tambahData").html("Ubah Data");
//         $(".modal-footer button[type=submit]").html("Ubah Data");
//         $("form[method=post]").attr(
//             "action",
//             "http://localhost/mvc/public/siswa/ubah"
//         );

//         const id = $(this).data("id");

//         $.ajax({
//             url: "http://127.0.0.1:8000/jaksa/" + id,
//             method: "get",
//             // dataType: "json",
//             success: function (data) {
//                 console.log(data);
//             },
//         });
//     });

// $(".btnTambah").on("click", function () {
//     $("#tambahData").html("Tambah Data");
//     $(".modal-footer button[type=submit]").html("Tambah Data");
//     $("#nama").val("");
//     $("#kelas").val("");
//     $("#jurusan").val("");
//     $("#ttl").val("");
//     $("#gender").val("");
//     $("#hp").val("");
//     $("#alamat").val("");
//     $("#quotes").val("");
// });
// });
