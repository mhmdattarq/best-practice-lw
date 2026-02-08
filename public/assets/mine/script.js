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
