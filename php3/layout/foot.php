    <script src="DataTables/jQuery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="DataTables/datatables.min.js"></script>

    <script>
        $(document).ready( () => {
            $('#example').DataTable({
                order: [],
                bFilter: true,
                bSortCellsTop: true,
                pageLength: 25
            });
        });
    </script>
</body>
</html>
