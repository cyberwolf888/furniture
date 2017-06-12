@extends('layouts.frontend')

@section('content')
    <!-- Page Banner Area
    ============================================ -->
    <div id="page-banner" class="page-banner-area top-header-space-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-banner text-center"><h2>Payment</h2></div>
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li><span>Payment</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Page
    ============================================ -->
    <div class="page-area pb-90 pt-90">
        <div class="container">
            <div class="row">
                <div class="contact-form col-lg-7  col-md-7 col-xs-12">
                    <h3>LEAVE A MESSAGE</h3>
                    <form id="payment-form" action="" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="input-box-2 fix">
                            <div class="input-box float-left">
                                {!! Form::select('transaction_id', \App\Models\Transaction::where('member_id',Auth::user()->id)->where('status',1)->pluck('id','id'), $id) !!}
                            </div>
                        </div>
                        <div class="input-box-2 fix">
                            <div class="input-box float-left">
                                <input name="image" placeholder="image" type="file">
                            </div>
                        </div>
                        <div class="input-box submit-box fix">
                            <input value="Send Message" type="submit">
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
                <div class="contact-info col-lg-4  col-md-5 col-xs-12">
                    <h3>GET INFORMED</h3>
                    <p>Silahkan lakukan pembayaran melalui transfer bank ke rekening berikut ini:</p>
                    <div class="sin-con-info fix">
                        <div class="content fix">
                            <p class="name">Bank Central Asia (BCA)</p>
                            <p class="title">MANAGER of STUFF</p>
                            <p class="info"><i class="zmdi zmdi-phone-in-talk"></i><span>Phone : +061012345678</span></p>
                            <p class="info"><i class="zmdi zmdi-email"></i><span>anikamollik@outlook.com</span></p>
                        </div>
                    </div>
                    <div class="sin-con-info fix">
                        <div class="content fix">
                            <p class="name">Bank Mandiri</p>
                            <p class="title">CEO of STUFF</p>
                            <p class="info"><i class="zmdi zmdi-phone-in-talk"></i><span>Phone : +061012345678</span></p>
                            <p class="info"><i class="zmdi zmdi-email"></i><span>anikamollik@outlook.com</span></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin_scripts')
<!-- Particles Active JS
============================================ -->
<script src="{{ url('assets/frontend') }}/js/app.js"></script>
@endpush
