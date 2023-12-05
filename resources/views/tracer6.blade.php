<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracer Study Bakta</title>
    <style>
        .btnColor {
            background-color: #B4FD8A;
        }
        .modal {
            position: absolute;
            float: left;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .progress{
                background-color: white ;
                -webkit-box-shadow: inset 0 0 0 2px #000000 !important;
	            -moz-box-shadow: inset 0 0 0 2px #000000!important;
	            box-shadow: inset 0 0 0 1px #000000!important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#exampleModal').modal({ backdrop: 'static', keyboard: false, show: false });
    
            $('form').submit(function (event) {
                var selamat = document.querySelector('input[name="selamat"]:checked');
    
                if (!selamat) {
                    alert("Pilih opsi untuk melanjutkan.");
                    event.preventDefault();
                } else {
                    event.preventDefault(); // Prevent the form submission
                    $('#exampleModal').modal('show'); // menampilkan modal
                    document.getElementById('successSound').play(); // Memainkan suara 
                }
            });
        });
    </script>
    
</head>

<body style="background-color:#94C5FF">
    <div class="d-flex"> <img src="{{asset('logo.png')}}" alt="" width="100px" height="100px" class="mx-3 mt-3">
        <p class="mt-4 text-black fs-4">SMA Negeri 1 Kediri <br><i>Tabanan- Bali</i></p>
    </div>
    <div class="container col-lg-10 d-flex justify-content-center" style="height:100%;width:70%">

        <form method="GET" id="tracerForm" style="margin-right: 20px;">
            @csrf
            <div class="">
                <div class="border border-2 border-black bg-white rounded mt-5" style="height: 65%;width:50rem ">
                    <p class="d-flex justify-content-center mt-2 fw-bold fs-3">Formulir Pendataan Alumni</p>
                    <div>
                        <div class="mb-3 mx-5">
                            <div class="d-flex">
                                <div class="pt-4 fw-bold"><label for="progress" class="form-label">Progress Kamu</label>
                                </div>
                                <div class="ms-auto"><img src="{{asset('treasure.png')}}" alt="" width="50px"
                                        height="50px"></div>
                            </div>

                            <div class="progress position-relative" role="progressbar" aria-label="Example with label" aria-valuenow="25"aria-valuemin="90" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%"></div>
                                <small style="color:grey"class="justify-content-center d-flex position-absolute w-100">90/100</small>  
                            </div>
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="selamatt" class="form-label">Selamat, poin kamu sudah mencapai 90!</label><br>
                            <label for="selamat2" class="form-label">Apakah kamu siap dengan hadiah yang akan menanti mu?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="selamat" id="option1">
                                <label class="form-check-label" for="option1">
                                    Siap dong
                                </label>
                            </div>
                        </div>
                        <div class="mx-5 my-5 d-flex">
                            <div class="ms-auto">
                                <a type="submit" class="btn btn-outline-dark mx-4"
                                style="width:100px" href="tracerStatus">Kembali</a>
                                <button type="submit" class="btn btn-success btnColor btn-outline-success" style="width:100px; font-size: 15px; text-align: center;">Selanjutnya</button>
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
            </div>
            <div class="card-header fw-bold border-1 border-top">Point Kamu</div>
            <div class="card-body">
                <p class="card-text">90/100</p>
              </div>
          </div>
    </div>

    <div class="modal fade" style="max-height: 100vh;"  id="exampleModal" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header d-flex justify-content-center ">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">Terimakasih Telah Berpartisipasi!</h1>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <img src="{{asset('badge_partisipasi.png')}}" alt="" width="150px"height="150px" >
            </div>
            <div class="d-flex justify-content-center">
                <p>Kamu mendapatkan ”Badge Partisipasi”</p>
            </div>
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-outline-success btn-lg btnColor"style="padding:5px 100px" href="/tracer7">OK</a>
            </div>
          </div>
        </div>
      </div>
      <audio id="successSound">
        <source src="success.mp3" type="audio/mpeg">
      </audio>
</body>
</html>
