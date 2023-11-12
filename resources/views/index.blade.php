@extends('layouts.template')
@section('layout_content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <style>
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>
</head>
<body>
    <div class="bg-black">
        <div class="d-flex flex-column align-items-center justify-content-center vh-75 position-relative m-0 p-0 bg-light">
            <div class="position-relative display-1 text-white mb-0 p-4" style="z-index: 2; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); width: 100%; text-align: center;">Loading</div>
            <img class="position-absolute w-75 h-75 rounded" style="object-fit: cover; z-index: 1; opacity: 0.5; max-width: 100%; max-height: 100%;" src="images\shutterstock_2183363749-scaled.jpg" alt="Image">
        </div>
    </div>

<div class="pt-24">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
        <p class="uppercase tracking-loose w-full"> Lets Start your journey</p>
        <h1 class="my-4 text-5xl font-bold leading-tight bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
          Marketplace Guru
        </h1>
        <p class="leading-normal text-2xl mb-8">
            Platform Online yang Menghubungkan Guru dan Sekolah di Indonesia
        </p>
        <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Subscribe
        </button>
      </div>
      <!--Right Col-->
      <div class="w-full md:w-3/5 py-6 text-center">
        <img class="w-full md:w-4/5 z-50" src="/images/Opening.png" />
      </div>
    </div>
  </div>
  <div class="relative -mt-12 lg:-mt-24">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
          <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
          ></path>
          <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path
            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
          ></path>
        </g>
      </g>
    </svg>
  </div>
  <section class="bg-white border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
      <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Gambaran Umum
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <div class="flex flex-wrap">
        <div class="w-5/6 sm:w-1/2 p-6">
            <br />
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
            Pengertian
          </h3>
          <p class="text-gray-600 mb-8">
            Marketplace Guru adalah sebuah pangkalan data yang berisi profil guru yang boleh mengajar di Indonesia. Guru-guru ini adalah peserta seleksi pegawai pemerintah dengan perjanjian kerja (PPPK) yang lolos passing grade tetapi belum dapat formasi atau lulusan pendidikan profesi guru (PPG) yang punya sertifikat pendidik.
            <br />
          </p>
        </div>
        <div class="w-full sm:w-1/2 p-6">
          <img src="/images/EA.png" alt="GUmum">
        </div>
      </div>
      <div class="flex flex-wrap flex-col-reverse sm:flex-row">
        <div class="w-full sm:w-1/2 p-6 mt-6">
            <img src="/images/map.png" alt="map">
        </div>
        <div class="w-full sm:w-1/2 p-6 mt-6">
          <div class="align-middle">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              Fungsi
            </h3>
            <p class="text-gray-600 mb-8">
                Marketplace Guru memfasilitasi sekolah-sekolah untuk mencari dan merekrut guru yang sesuai dengan kriteria mereka melalui sistem online yang mudah, cepat, dan aman. Marketplace Guru juga memberikan insentif dan penghargaan bagi guru yang berprestasi dan berdedikasi tinggi. Marketplace Guru adalah solusi inovatif yang ditawarkan oleh Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi (Kemendikbud Ristek) yang bertujuan untuk memenuhi kebutuhan guru dan meningkatkan mutu pendidikan di Indonesia
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
@endsection
