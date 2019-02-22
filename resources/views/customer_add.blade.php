@extends('layout.master')

@section('content')


    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Müşteri Ekleme</h1>
            <a href="{{url('customers')}}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                <i class="fas fa-backward fa-sm text-white-50"></i> Geri
            </a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <form action="{{url('customers')}}" method="post" class="musteri_form">
                            @csrf
                            <div class="col-md-6 col-sm-12">


                                <input type="text" autocomplete="off" class="form-control form-control-user"
                                       name="name"
                                       placeholder="Müşteri Adı / Ünvan">

                                <input type="text" autocomplete="off" class="form-control form-control-user"
                                       name="phone"
                                       placeholder="Telefon No">

                                <input type="text" autocomplete="off" class="form-control form-control-user"
                                       name="gsm"
                                       placeholder="GSM No">

                                <input type="text" autocomplete="off" class="form-control form-control-user"
                                       name="address"
                                       placeholder="Adres">

                                <input type="text" autocomplete="off" class="form-control form-control-user"
                                       name="city"
                                       placeholder="Şehir">


                                <button class="btn btn-success" type="submit">Ekle</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>

@endsection