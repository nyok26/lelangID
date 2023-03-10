@extends('layouts.main')
@section('konten')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Element Page</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Element</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Align Area -->
<div class="whole-wrap pb-100">
    <div class="container">
        <div class="section-top-border">
            <h3 class="mb-30 mt-5">Data Aktivasi Lelang Online</h3>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Tanggal Lelang</th>
                    <th scope="col">Pemenang Lelang</th>
                    <th scope="col">Harga Tertinggi</th>
                    <th scope="col">Status Lelang</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
<div class="whole-wrap pb-100">
    <div class="container">
        <div class="section-top-border">
            <h3 class="mb-30 mt-5">Data Realtime Lelang Online</h3>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Peserta Lelang Tertinggi</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection