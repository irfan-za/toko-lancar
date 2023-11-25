@extends('layouts.app')
  
@section('title', 'Dashboard - Toko Lancar')
  
<?php
$items = [
    [
        'title' => 'Stok Produk',
        'value' => $totalStock,
        'icon' => 'fa-box',
      ],
      [
        'title' => 'Item Produk',
        'value' => $totalProduct,
        'icon' => 'fa-box-open',
      ],
      [
        'title' => 'Kategori Produk',
        'value' => $totalCategory,
        'icon' => 'fa-layer-group',
    ],
];
?>
@section('contents')
<hr />
<div class="col-lg-12">
<div class="row">
    @if(count($items) > 0)
        @foreach($items as $item)
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col-8"> 
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        {{ $item['title'] }}
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{ $item['value'] }}
                    </div>
                </div>
                <div class="col-4"> 
                    <i class="fas {{ $item['icon'] }} fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    @endif
</div>

    <div class="row">
      <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div
                  class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Produk Terbaru</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                  <div class="chart-area">
                      <canvas id="areaChart"></canvas>
                  </div>
              </div>
          </div>
      </div>

      <!-- Pie Chart -->
      <div class="col-xl-4 col-lg-5">
          <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div
                  class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Kategori Produk Terbanyak</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                      <canvas id="pieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small" id="pieChartItems">
                  </div>
              </div>
          </div>
      </div>
    </div>

</div>
  <!-- Page level plugins -->
  <script src="/admin_assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/admin_assets/js/chart/chart-area.js"></script>
<script src="/admin_assets/js/chart/chart-pie.js"></script>
@endsection