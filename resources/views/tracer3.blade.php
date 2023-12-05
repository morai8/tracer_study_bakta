<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    <script>
        function validateForm() {
            var namaPerusahaan = document.getElementById('namaPerusahaan').value;
            var bidangUsaha = document.getElementById('bidangUsaha').value;
            var pekerjaan = document.getElementById('pekerjaan').value;
            var penghasilanPerbulan = document.getElementById('penghasilanPerbulan').value;
            var ikatan = document.getElementById('ikatan').value;
            var kompetensi = document.getElementById('kompetensi').value;
            if (namaPerusahaan.trim() === "") {
                alert("Lengkapi Nama Perusahaan");
                return false;
            }

            if (bidangUsaha .trim() === "") {
                alert("Lengkapi Bidang Usaha");
                return false;
            }

            if (pekerjaan.trim() === "") {
                alert("Lengkapi Pekerjaan");
                return false;
            }
            if (penghasilanPerbulan === "Pilih Rentang Gaji") {
                alert("Silahkan Pilih Rentang Gaji Kamu");
                return false;
            }
            if (ikatan === "Pilih Ikatan") {
                alert("Silahkan Pilih Ikatan Kamu");
                return false;
            }
            if (kompetensi === "Pilih Kompetensi") {
                alert("Silahkan Pilih Kompetensi Kamu");
                return false;
            }      

            // play suara ketika terpenuhi
            var audio = document.getElementById('successSound');
            audio.play();

            // menampilkan modal ketika sudah terpenuhi
            $('#exampleModal').modal('show');
    }
    </script>
</head>

<body style="background-color:#94C5FF">
    <div class="d-flex"> <img src="{{asset('logo.png')}}" alt="" width="100px" height="100px" class="mx-3 mt-3">
        <p class="mt-4 text-black fs-4">SMA Negeri 1 Kediri <br><i>Tabanan- Bali</i></p>
    </div>
    <div class="container col-lg-10 d-flex justify-content-center" style="height:100%;width:70%">

        <form method="GET" action="/tracer6">
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

                            <div class="progress position-relative" role="progressbar" aria-label="Example with label" aria-valuenow="25"aria-valuemin="50" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%"></div>
                                <small style="color:grey"class="justify-content-center d-flex position-absolute w-100">50/100</small>  
                            </div>
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="namaPerusahaan" class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="namaPerusahaan" placeholder="Ketik disini" style="width:380px">
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="bidangUsaha" class="form-label">Bidang Usaha</label>
                            <input type="text" class="form-control" id="bidangUsaha" placeholder="Ketik disini" style="width:250px">
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" placeholder="Ketik disini"style="width:250px">
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="penghasilanPerbulan" class="form-label">Penghasilan Perbulan</label>
                            <div>
                                <div>
                                    <select class="form-select"name="penghasilanPerbulan" id="penghasilanPerbulan"aria-label="Default select example" style="width:250px">
                                    <option selected>Pilih Rentang Gaji</option>
                                    <option value="1">Kurang dari 1 Juta</option>
                                    <option value="2">1 juta - 3 juta</option>
                                    <option value="3">Lebih dari 3 juta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="ikatanKerja" class="form-label">Ikatan Kerja</label>
                            <div>
                                <div>
                                    <select class="form-select"name="ikatan" id="ikatan"aria-label="Default select example" style="width:150px">
                                    <option selected>Pilih Ikatan</option>
                                    <option value="1">Tetap</option>
                                    <option value="2">Kontrak</option>
                                    <option value="3">Freelance</option>
                                    <option value="4">Profesional</option>
                                    <option value="5">Pejabat Publik</option>
                                    <option value="6">Usaha Sendiri</option>
                                    <option value="7">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="apakahSudah" class="form-label">Apakah Pekerjaan Sudah Sesuai Kompetensi</label>
                            <div>
                                <div>
                                    <select class="form-select"name="kompetensi" id="kompetensi"aria-label="Default select example" style="width:170px">
                                    <option selected>Pilih Kompetensi</option>
                                      <option value="1">Ya</option>
                                      <option value="2">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mx-5 my-5 d-flex">
                            <div class="ms-auto">
                                <a type="submit" class="btn btn-outline-dark mx-4"
                                style="width:100px" href="/tracerStatus">Kembali</a>
                                <button type="button" class=" btn btn-success btnColor btn-outline-success" onclick="validateForm()">Selanjutnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="ms-auto pt-5 pr-3 ">
            <div class="card ml-3 mb-3 border-black " style="width:300px;">
                <div class="card-header fw-bold" style="">
                    <span class="">Badge Kamu </span>
                </div>
                <div class="card-body ">
                    <img src="{{asset('badge_identitas.png')}}" alt="" width="50px"height="50px" >
                </div>
                <div class="card-header fw-bold border-1 border-top">Point Kamu</div>
                <div class="card-body">
                    <p class="card-text">50/100</p>
                  </div>
              </div>
        </div>
    </div>
    <div class="modal fade" style="max-height: 100vh;"  id="exampleModal" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header d-flex justify-content-center ">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">Selamat!!</h1>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <img src="{{asset('badge_work.png')}}" alt="" width="150px"height="150px" >
            </div>
            <div class="d-flex justify-content-center">
                <p>Kamu mendapatkan ”Badge Bekerja”</p>
            </div>
            <div class="modal-footer justify-content-center">
                <a type="submit" class="btn btn-outline-success btn-lg btnColor "style="padding:5px 100px" href="/tracer6">OK</a>
            </div>
          </div>
        </div>
      </div>
      <audio id="successSound">
        <source src="success.mp3" type="audio/mpeg">
      </audio>
</body>
</html>
