const btnAddTerdakwa = document.getElementById("add-terdakwa");
btnDeleteTerdakwa = document.querySelectorAll(".delete-btn");
var i = 1;

btnAddTerdakwa.addEventListener("click", () => {
    i++;
    console.log(i);
    const rowTerdakwa = `<tr id="row-terdakwa-${i}">
                            <td class="text-center" style="width: 10%">1</td>
                            <td style="width: 50%"></td>
                            <td style="width: 40%" class="text-center">
                                <button type="button" class="badge bg-success border-0" data-bs-toggle="modal" data-bs-target="#modalTerdakwa">Edit</button>
                                <button type="button" class="badge bg-danger border-0 delete-btn" id="${i}">Hapus</button>
                            </td>

                            <div>
                                <div class="modal fade" id="modalTerdakwa" tabindex="-1" role="dialog" aria-labelledby="modalTerdakwaTitle"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-xl"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTerdakwaTitle">Terdakwa</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>`;

    const tbodyTerdakwa = document.getElementById("tbody-terdakwa");
    tbodyTerdakwa.innerHTML += rowTerdakwa;
});

document.addEventListener("click", (e) => {
    if (e.target.classList.contains("delete-btn")) {
        const id = e.target.getAttribute("id");
        console.log(id);
        const row = document.getElementById("row-terdakwa-" + id);
        row.remove();
    }
});
btnDeleteTerdakwa.forEach((btn) => {
    btn.addEventListener("click", function () {
        this.parentElement.parentElement.remove();
    });
});
