@extends('layout.masterchat')
@section('title', 'Chat')

@section('content')
    <div class="layout-wrapper layout-content-navbar  " style="margin-top:150px">
        <div class="layout-container">

            <div class="layout-page">


                <div class="content-wrapper">


                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">





                                <form id="formAccountDeactivation" onsubmit="return false">
                                    <div class="form-check mb-3 ms-3">
                                    </div>

                                </form>
                                <div><livewire:chat /></div>

                        </div>


                    </div>

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
    @endsection








    <!-- beautify ignore:end -->
