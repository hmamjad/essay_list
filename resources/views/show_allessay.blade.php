<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form to Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>


    <div class="contaner">
        <div class="row">
            <div class="col-md-4 offset-4">
                <a href="{{ route('essay_index')}}">ADD Essay</a>
                <a href="{{ route('show_allessay')}}">show Essay</a>
                <h1>Search Essay</h1>
                <!-- for Searching -->
                <div class="mb-3">
                    <label for="searchInput" class="form-label">Search:</label>
                    <input type="text" id="searchInput" class="form-control">
                </div>
            </div>
        </div>
        <div class="row p-2">




            <div class="col-md-12">

                <!-- Main Table -->
                <table class="table table-striped shadow p-2">
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Description 1</th>
                        <th>Description 2</th>
                        <th>Description 3</th>
                        <th>Action</th>
                    </tr>


                    @foreach ($Alldatas as $key => $data)
                        <tr class="data-row">
                            <td>{{ $data['id'] }}</td>
                            <td>{{ $data['title'] }}</td>
                            <td>{{ $data['description_1'] }}</td>
                            <td>{{ $data['description_2'] }}</td>
                            <td>{{ $data['description_3'] }}</td>

                            <td>

                                <a href="{{ route('essay_edit_form', $data->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('essay_delete', $data->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                <a href="{{ route('essay_print', $data->id) }}" class="btn btn-sm btn-info">Print Essay</a>

                            </td>
                        </tr>
                    @endforeach


                </table>
            </div>



        </div>
    </div>




    <!-- for Searching  script-->
    {{-- <script>
        $(document).ready(function() {
            $('#searchInput').on('input', function() {
                var searchText = $(this).val().toLowerCase();

                // Loop through each table row
                $('table tbody tr').each(function() {
                    var rowData = $(this).text().toLowerCase();

                    // Show/hide the row based on the search input
                    if (rowData.includes(searchText)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>  --}}


    <!-- for Searching script-->
    <!-- for Searching script-->
    <script>
        $(document).ready(function() {
            // Hide the entire table initially
            $('table').hide();

            $('#searchInput').on('input', function() {
                var searchText = $(this).val().toLowerCase();

                // Show/hide the entire table based on the search input
                if (searchText === '') {
                    $('table').hide();
                } else {
                    $('table').show();
                }

                // Loop through each table row
                $('table tbody tr').each(function() {
                    var rowData = $(this).text().toLowerCase();

                    // Show/hide the row based on the search input
                    if (rowData.includes(searchText)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>








</body>

</html>
