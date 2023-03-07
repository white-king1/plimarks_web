@extends('layouts.admin_dashboard_layouts')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">{{ Auth::user()->name }}, you are Welcome Onboard </h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Please kindly Visit our Mobile App</h4>
                            <p class="card-description mb-0"> WE ARE AVAILABLE ON GOOGLE PLAY STORE AND APPLE STORE </p>
                            <p class="card-description"> CLICK ON ANY OF THE STORES BELOW TO DOWN OUR APP</p>
                            <div class="template-demo d-flex justify-content-between flex-wrap">

                                <a href=""><span class="icon"><img src="/assets/img/apple-icon.png"
                                    alt="apple-icon"></span>
                            <span class="text">  Available  on <strong>APP STORE</strong></span></a>
                        <a href="" class="g-btn"><span class="icon"><img
                                    src="/assets/img/g-play-icon.png" alt="apple-icon"></span>
                            <span class="text"> Available Soon on <strong>GOOGLE PLAY</strong></span></a>
                                {{-- <button type="button" class="btn btn-success btn-fw"
                                    onclick="showSuccessToast()">Success</button>
                                <button type="button" class="btn btn-info btn-fw" onclick="showInfoToast()">Info</button>
                                <button type="button" class="btn btn-warning btn-fw"
                                    onclick="showWarningToast()">Warning</button>
                                <button type="button" class="btn btn-danger btn-fw"
                                    onclick="showDangerToast()">Danger</button> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endsection
