<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<!-- JS DataTable -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    $('#shortcutPerizinan').DataTable({
        "language": {
            "emptyTable": "Tidak ada peminjaman baru."
        }
    });

    $('#daftarBarangTabel').DataTable({
        "language": {
            "emptyTable": "Tidak ada barang yang terdaftar."
        }
    });

    $('#daftarUserTabel').DataTable({
        "language": {
            "emptyTable": "Tidak ada user yang terdaftar."
        }
    });

    $('#historyBarangTabel').DataTable({
        "language": {
            "emptyTable": "Tidak ada history peminjaman barang."
        }
    });
</script>

<script>
    new DataTable('#shortcutPerizinan');
    new DataTable('#daftarBarangTabel');
    new DataTable('#daftarUserTabel');
    new DataTable('#historyBarangTabel');
    new DataTable('#detailHistoryTabel')
</script>

</body>

</html>