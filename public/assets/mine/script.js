function initSearchCol(table, headerId, inputClass) {
    $(headerId).on("input", "." + inputClass, function () {
        const colIndex = $(this).parent().index();
        const searchVal = this.value;

        // Jalankan search hanya kalau value-nya berubah
        if (table.column(colIndex).search() !== searchVal) {
            table.column(colIndex).search(searchVal).draw(false);
        }
    });
}

window.addEventListener('closeModal', param => {
    $('#' + param.detail.id).modal('hide');
});

window.addEventListener('alert', event => {
    toastr[event.detail.data.type](event.detail.data.message, event.detail.data.title ?? '', {
        closeButton: true,
        debug: false,
        newestOnTop: false,
        progressBar: false,
        positionClass: "toast-top-right",
        preventDuplicates: false,
        onclick: null,
        showDuration: "2000",
        hideDuration: "500",
        timeOut: "3000",
        extendedTimeOut: "500",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
    })
});

window.addEventListener('reloadDT', param => {
    window[param.detail.data].ajax.reload();
});
