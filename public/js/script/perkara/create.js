const btnAddTerdakwa = document.getElementById("add-terdakwa");
const btnDeleteTerdakwa = document.getElementById("delete-terdakwa");

btnAddTerdakwa.addEventListener("click", () => {
    const rowTerdakwa = document.getElementById("row-terdakwa").cloneNode(true);
    const tbodyTerdakwa = document.getElementById("tbody-terdakwa");
    tbodyTerdakwa.appendChild(rowTerdakwa);
});

btnDeleteTerdakwa.addEventListener("click", () => {
    btnDeleteTerdakwa.parentElement.parentElement.remove();
});
