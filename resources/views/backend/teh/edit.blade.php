@extends('layouts.backend')

@section('css')
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/vendor/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/metismenu/dist/metisMenu.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/switchery-npm/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
<!-- ======================= LINE AWESOME ICONS ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/icons/line-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/icons/simple-line-icons.css')}}">
<!-- ======================= DRIP ICONS ===================================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/icons/dripicons.min.css')}}">
<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/icons/material-design-iconic-font.min.css')}}">
<!-- ======================= PAGE VENDOR STYLES ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
<!-- ======================= GLOBAL COMMON STYLES ============================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/common/main.bundle.css')}}">
<!-- ======================= LAYOUT TYPE ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/layouts/vertical/core/main.css')}}">
<!-- ======================= MENU TYPE ===========================-->
    <link rel="stylesheet" href="{{asset('assets/backend/assets/css/layouts/vertical/menu-type/default.css')}}">
<!-- ======================= THEME COLOR STYLES ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/layouts/vertical/themes/theme-a.css')}}">
@endsection

@section('js')
<script src="{{asset('assets/backend/assets/vendor/modernizr/modernizr.custom.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/js-storage/js.storage.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/js-cookie/src/js.cookie.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/pace/pace.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/metismenu/dist/metisMenu.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/switchery-npm/index.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
<script src="{{asset('assets/backend/assets/vendor/countup.js/dist/countUp.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/flot.curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- ================== GLOBAL APP SCRIPTS ==================-->
<script src="{{asset('assets/backend/assets/js/global/app.js')}}"></script>
<!-- ================== PAGE LEVEL SCRIPTS ==================-->
<script src="{{asset('assets/backend/assets/js/components/countUp-init.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/counter-group.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/recent-transactions.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/monthly-budget.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/users-chart.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/bounce-rate-chart.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/session-duration-chart.js')}}"></script>
@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">Edit Data Teh</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('teh.update', $teh->id)}}" method="POST">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Nama Teh</label>
                                <input class="form-control" value="{{$teh->nama_teh}}"type="text" name="nama_teh">
                            </div>
                            <div class="form-group">
                                <label for="">Nutrisi Teh</label>
                                <input class="form-control" value="{{$teh->nutrisi_teh}}"type="text" name="nutrisi_teh">
                            </div>
                             <div class="form-group">
                                <label for="">Harga Teh</label>
                                <input class="form-control" value="{{$teh->harga_teh}}"type="text" name="harga_teh">
                            </div>
                             <div class="form-group">
                                <label for="">Kategori</label>
                                <select class="form-control{{$errors->has('kategori') ? ' has-error' : '' }}" type="text"
                                    name="id_kategori" id="s2_demo3" required>
                                    @foreach ($kategori as $data)
                                        <option value="{{$data->id}}"
                                            @if($data->id == $teh->id_kategori) selected="selected" @endif>{{$data->nama_kategori}}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('kategori'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kategori')}}</strong>
                                </span>
                                @endif
                            </div>
                             {{-- <div class="form-group">
                                <label for="">Kategori</label>
                                <input class="form-control" value="{{$teh->kategori}}"type="text" name="kategori">
                            </div> --}}
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <img src="{{asset('assets/img/teh/'.$teh->gambar)}}" alt="" height="250px" width="250px">
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


