<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracer Study Bakta</title>
    <style>
        .btnColor {
            background-color: #B4FD8A;
        }
        .progress{
                background-color: white ;
                -webkit-box-shadow: inset 0 0 0 2px #000000 !important;
	            -moz-box-shadow: inset 0 0 0 2px #000000!important;
	            box-shadow: inset 0 0 0 1px #000000!important;
        }
    </style>
</head>


<body style="background-color:#94C5FF">
    <div class="d-flex"> <img src="{{asset('logo.png')}}" alt="" width="100px" height="100px" class="mx-3 mt-3">
        <p class="mt-4 text-black fs-4">SMA Negeri 1 Kediri <br><i>Tabanan- Bali</i></p>
    </div>
    <div class="container col-lg-10 d-flex justify-content-center" style="height:100%;width:70%">

        <form method="GET"action="/tracerStatus" style="margin-right:20px">
            @csrf
            <div class="">
                <div class="border border-2 border-black bg-white rounded mt-5" style="height: 65%;width:50rem ">
                    <p class="d-flex justify-content-center mt-2 fw-bold fs-3">Terimakasih Telah Berpartisipasi!</p>
                    <div>
                        <div class="mb-3 mx-5">
                            <div class="d-flex">
                                <div class="pt-4 fw-bold"><label for="progress" class="form-label">Progress Kamu</label>
                                </div>
                                <div class="ms-auto"><img src="{{asset('treasure.png')}}" alt="" width="50px"
                                        height="50px"></div>
                            </div>

                            <div class="progress position-relative" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
                            <small style="color:grey"class="justify-content-center d-flex position-absolute w-100">100/100</small>  
                            </div>
                        </div>
                        <div class="mb-3 mx-5">
                            <p>Silahkan gabung ke grup jaringan alumni sebagai tanda apresiasi kamu telah mengisi tracer study ini hingga akhir! Terdapat info lowongan kerja, event reuni, dll~ </p>
                        </div>
                       <div class="mb-3 mx-5">
                            <a href="https://www.youtube.com/watch?v=XsX3ATc3FbA" style="color:#94C5FF"class="">Link Grup</a>
                       </div>
                       <div class="mb-3 mx-5">
                        <p>Kamu juga bisa melihat papan peringkat teman kamu yang sudah mengisi pada tombol papan peringkat~</p>
                       </div>
                        <div class="mx-5 my-5 d-flex">
                            <div>
                                <a type="button" class="btn btn-outline-info " style="color:black; border-color:black"href="/leaderboard">
                                    <img src="podium.png" alt="Custom Icon" width="24" height="24">
                                    Papan Peringkat
                                </a>
                            </div>
                            <div class="ms-auto">
                                <a type="submit" class="btn btn-outline-dark mx-4"
                                style="width:100px" href="tracer6">Kembali</a>
                                <a href="/landing"type="button" class=" btn btn-success btnColor btn-outline-success"style="width:105px">OK</a>
                            </div>
                            <div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="ms-auto pt-5 pr-3 ">
        <div class="card ml-3 mb-3 border-black " style="width:300px;">
            <div class="card-header fw-bold" style="">
                <span class="">Badge Kamu </span>
            </div>
            <div class="card-body">
                <img src="{{asset('badge_identitas.png')}}" alt="" width="50px"height="50px">
                <img src="{{asset('badge_work.png')}}" alt="" width="50px"height="50px"class="mx-2">
                <img src="{{asset('badge_partisipasi.png')}}" alt="" width="50px"height="50px">
            </div>
            <div class="card-header fw-bold border-1 border-top">Point Kamu</div>
            <div class="card-body">
                <p class="card-text">100/100</p>
              </div>
          </div>
    </div>
</body>

</html>