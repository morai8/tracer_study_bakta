<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Papan Peringkat</title>
    <style>
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    table td:first-child, table th:first-child {
        border-left: none;
    }

    table td:last-child, table th:last-child {
        border-right: none;
    }
    
    </style>
</head>
<body style="background-color:#94C5FF;">
    <div class="d-flex">
        <img src="{{asset('logo.png')}}" alt="" width="100px" height="100px" class="mx-3 mt-3">
        <p class="mt-4 text-black fs-4">SMA Negeri 1 Kediri <br><i>Tabanan- Bali</i></p>
    </div>
    <div class="container col-lg-10 d-flex justify-content-center" style="height:100%;width:70%">
        <form method="POST">
            @csrf
            <div class="">
                <div class="border border-2 border-black bg-white rounded mt-5" style="height: 65%;width:50rem; padding: 20px;">
                    <p class="d-flex justify-content-center mt-2 fw-bold fs-3">Papan Peringkat</p>
                    <table class="table">
                        <thead class="table-info">
                            <tr>
                                <th>Ranking</th>
                                <th>Angkatan</th>
                                <th>Kelas</th>
                                <th>Partisipan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color:#FFD700">1</td>
                                <td style="color:#FFD700">2020</td>
                                <td style="color:#FFD700">XII MIPA 3</td>
                                <td style="color:#FFD700">30</td>
                            </tr>
                            <tr>
                                <td style="color:#C0C0C0">2</td>
                                <td style="color:#C0C0C0">2021</td>
                                <td style="color:#C0C0C0">XII MIPA 1</td>
                                <td style="color:#C0C0C0">29</td>
                            </tr>
                            <tr>
                                <td style="color:#CD7F32">3</td>
                                <td style="color:#CD7F32">2021</td>
                                <td style="color:#CD7F32">XII MIPA 2</td>
                                <td style="color:#CD7F32">27</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>2021</td>
                                <td>XII MIPA 4</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>2021</td>
                                <td>XII MIPA 6</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>2021</td>
                                <td>XII IPS 1</td>
                                <td>24</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>2021</td>
                                <td>XII IPS 2</td>
                                <td>2</td>
                            </tr>         
                        </tbody>
                    </table>
                    <!--papan peringkat sampe sini -->
                    <div class="mx-1 my-5 d-flex">
                        <div class="ms-auto">
                            <a type="submit" class="btn btn-outline-dark mx-4" style="width:100px" href="/landing">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
