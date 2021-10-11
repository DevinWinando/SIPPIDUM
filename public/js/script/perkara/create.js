const btnAddTerdakwa = document.getElementById("add-terdakwa");

let indexRow = 1;

function getNextSiblings(el, filter) {
    let siblings = [];
    while ((el = el.nextSibling)) {
        if (!filter || filter(el)) siblings.push(el);
    }
    return siblings;
}

btnAddTerdakwa.addEventListener("click", () => {
    if (indexRow <= 8) {
        indexRow++;
        const modalTerdakwa = `<div class="modal fade" id="modal-terdakwa-${indexRow}" tabindex="-1" role="dialog"      aria-labelledby="modal-terdakwa-title"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-xl"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-terdakwa-title">Terdakwa</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form form-horizontal">
                                                    <div class="form-body mt-3">
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-3">
                                                                <label>Nama</label>
                                                            </div>
                                                            <div class="col-md-7 form-group">
                                                                <input type="text" id="nama" class="form-control" name="terdakwa[${
                                                                    indexRow - 1
                                                                }][nama]"
                                                                    placeholder="Nama">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label>Email</label>
                                                            </div>
                                                            <div class="col-md-7 form-group">
                                                                <input type="text" id="alamat" class="form-control" name="terdakwa[${
                                                                    indexRow - 1
                                                                }][alamat]"
                                                                    placeholder="Alamat">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label>Tempat/Tanggal Lahir</label>
                                                            </div>
                                                            <div class="col-md-7 form-group">
                                                                <input type="text" id="ttl" class="form-control" name="terdakwa[${
                                                                    indexRow - 1
                                                                }][ttl]"
                                                                    placeholder="Tempat/Tanggal Lahir">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label>Usia</label>
                                                            </div>
                                                            <div class="col-md-7 form-group">
                                                                <input type="number" id="usia" class="form-control" name="terdakwa[${
                                                                    indexRow - 1
                                                                }][usia]"
                                                                    placeholder="Usia">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-light-secondary me-1 mb-1" data-bs-dismiss="modal" aria-label="Close">batal</button>
                                                    <button type="button"
                                                        class="btn btn-primary me-1 mb-1" data-bs-dismiss="modal" aria-label="Close"> Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;

        const rowTerdakwa = `<tr id="row-terdakwa-${indexRow}">
                                <td class="text-center" style="width: 10%">${indexRow}</td>
                                <td style="width: 50%"></td>
                                <td style="width: 40%" class="text-center">
                                    <button type="button" class="badge bg-success border-0" data-bs-toggle="modal" data-bs-target="#modal-terdakwa-${indexRow}">Edit</button>
                                    <button type="button" class="badge bg-danger border-0 delete-btn" id="${indexRow}">Hapus</button>
                                </td>
                             </tr>`;

        const tbodyTerdakwa = document.getElementById("tbody-terdakwa");
        const modals = document.getElementById("modals");
        tbodyTerdakwa.insertAdjacentHTML("beforeend", rowTerdakwa);
        modals.insertAdjacentHTML("beforeend", modalTerdakwa);
    } else {
        alert("Jumlah terdakwa sudah maksimal");
    }
});

document.addEventListener("click", (e) => {
    if (e.target.classList.contains("delete-btn")) {
        const row = e.target.parentElement.parentElement;
        const id = e.target.id;
        const modal = document.getElementById("modal-terdakwa-" + id);

        const elementRow = getNextSiblings(row);
        const elementModal = getNextSiblings(modal);

        elementRow.forEach((e) => {
            const indexRows = parseInt(e.id.substring(e.id.length - 1)) - 1;

            const tableNumber = e.children[0];
            const buttonDelete = e.children[2].children[1];
            const buttonEdit = e.children[2].children[0];

            buttonDelete.setAttribute("id", indexRows);
            buttonEdit.dataset.bsTarget = "#modal-terdakwa-" + indexRows;
            e.setAttribute("id", `row-terdakwa-${indexRows}`);
            tableNumber.innerHTML = indexRows;
        });

        elementModal.forEach((e) => {
            const indexModal = parseInt(e.id.substring(e.id.length - 1));
            const indexName = indexModal - 1;
            const inputNama = document.querySelector(
                "#modal-terdakwa-" + indexModal + " #nama"
            );
            const inputAlamat = document.querySelector(
                "#modal-terdakwa-" + indexModal + " #alamat"
            );
            const inputTTL = document.querySelector(
                "#modal-terdakwa-" + indexModal + " #ttl"
            );
            const inputUsia = document.querySelector(
                "#modal-terdakwa-" + indexModal + " #usia"
            );

            inputNama.setAttribute("name", `terdakwa[${indexName - 1}][nama]`);
            inputAlamat.setAttribute(
                "name",
                `terdakwa[${indexName - 1}][alamat]`
            );
            inputTTL.setAttribute("name", `terdakwa[${indexName - 1}][ttl]`);
            inputUsia.setAttribute("name", `terdakwa[${indexName - 1}][usia]`);
            e.setAttribute("id", `modal-terdakwa-${indexModal - 1}`);
        });

        modal.remove();
        row.remove();
        indexRow--;
    }
});
