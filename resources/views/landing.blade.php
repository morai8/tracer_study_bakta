<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracer Study SMAN 1 Kediri Tabanan</title>
    <style>
        body{
            background: url('{{asset('bg2.jpg')}}');
            background-size: cover;
            background-position: center;
            height:70vh;
        }
        .btnColor{
            background-color: #B4FD8A;
        }
        .modal {
            position: absolute;
            float: left;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .custom-button {
            display: flex;
            align-items: center;
        }

        .custom-button img {
            margin-right: 8px; 
        } 
        .top-right-button {
            position: absolute;
            top: 0;
            right: 0;
            margin: 10px;
        }
    
    </style>
</head>
<body >
    <div class="d-flex">  <img src="{{asset('logo.png')}}" alt="" width="100px" height="100px" class="mx-3 mt-3">
        <p class="mt-4 text-white fs-4">SMA Negeri 1 Kediri <br><i>Tabanan- Bali</i></p>
    </div>
{{-- 
    <div class="d-flex justify-content-center mt-5">
       <p class="fw-bold text-white fs-3">Welcome to Tracer Study BAKTA</p>
    </div> --}}
    {{-- <div class="d-flex justify-content-center"><img src="{{asset('logo.png')}}" alt="" width="250px" height="250px">
    </div> --}}
    
    <div class="d-flex justify-content-center mt-5 pt-5" style=" position: relative;top:350px;">
        <button type="submit" class="btn btn-outline-success btn-lg btnColor"style="padding:15px 200px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Mulai</button>
    </div>
    <div class="d-flex justify-content-start top-right-button mx-4 my-4">
        <a type="button" class="btn btn-light custom-button" href="/leaderboard">
            <img src="podium.png" alt="Custom Icon" width="24" height="24">
            Papan Peringkat
        </a>
    </div>
    
    <div class="modal fade" style="max-height: 100vh;"  id="exampleModal" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header d-flex justify-content-center ">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">Pemberitahuan</h1>
            </div>
            <div class="modal-body d-flex justify-content-center ">
                <p class="text-start">Dengan mengisi tracer study ini. Kamu menjadi bagian dari Jaringan Alumni Bakta, dan Anda akan mendapatkan beberapa manfaat sebagai Jaringan Alumni Bakta, informasi antara lain: <br><br>1. Event Festival Reuni Bakta<br>2. Lowongan Pekerjaan Sekitar Bali<br> 3. Kesempatan diundang Menjadi Pembicara di Bakta</p>    
            </div>

            <div class="modal-footer justify-content-center">
                <a type="submit" class="btn btn-outline-success btn-lg btnColor"style="padding:5px 100px" href="/tracer2">OK</a>
            </div>
          </div>
        </div>
      </div>
</body>
</html>