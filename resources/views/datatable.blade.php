<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
<body>
    <h1>Halo data table</h1>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>Andi</td>
                <td>25</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Budi</td>
                <td>30</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Citra</td>
                <td>28</td>
                <td>Perempuan</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Dewi</td>
                <td>22</td>
                <td>Perempuan</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Eka</td>
                <td>35</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Fani</td>
                <td>27</td>
                <td>Perempuan</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Gilang</td>
                <td>33</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Hana</td>
                <td>26</td>
                <td>Perempuan</td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Indra</td>
                <td>29</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>10.</td>
                <td>Joko</td>
                <td>24</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>11.</td>
                <td>Jono</td>
                <td>25</td>
                <td>Laki-laki</td>
            </tr>
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true
            });
        });
    </script>
</body>
</html>
