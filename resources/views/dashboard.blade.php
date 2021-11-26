@extends('layouts.main')

@section('container')

<div class="main-content">
  <div class="container-fluid">

  
    <div class="header row">
        <div class="col-md-12">
          <div class="header-title2">
            <span>
                Dashboard
            </span>
          </div>
            <p class="sub-header-title">
              Realtime data pengguna yang mendaftar
            </p>
        </div>
    </div>
   
    <div class="row">
      <div class="col-lg-4">
        <div class="frame-box">
          <div class="d-flex ">
              <i class="fas fa-user frame-icon-gree"></i>
            <h2>Total Pengguna</h2>
          </div>
            <span class="counter">200</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="frame-box">
          <div class="d-flex ">
              <i class="fas fa-running frame-icon-blue"></i>
            <h2>Total Atlet</h2>
          </div>
            <span class="counter">50</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="frame-box">
          <div class="d-flex ">
              <i class="fas fa-running frame-icon-blue"></i>
            <h2>Total Pelatih</h2>
          </div>
            <span class="counter">9</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="frame-box">
          <div class="d-flex ">
              <i class="fas fa-running frame-icon-blue"></i>
            <h2>Total Wasit</h2>
          </div>
            <span class="counter">13</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="frame-box">
          <div class="d-flex ">
              <i class="fas fa-running frame-icon-blue"></i>
            <h2>Total Pengawas</h2>
          </div>
            <span class="counter">23</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="frame-box">
          <div class="d-flex ">
              <i class="fas fa-medal frame-icon-orange"></i>
            <h2>Total Pramuka</h2>
          </div>
            <span class="counter">43</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="frame-box">
          <div class="d-flex ">
              <i class="fas fa-users frame-icon-orange"></i>
            <h2>Total Pemuda</h2>
          </div>
            <span class="counter">97</span>
        </div>
      </div>
     
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="grafik section-padding">
            <div class="chart">
                <canvas id="myChart2"></canvas>
            </div>
        </div>
      </div>
    </div>

    </div>
  </div>

  


@endsection
