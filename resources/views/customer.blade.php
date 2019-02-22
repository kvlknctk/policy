@extends('layout.master')

@section('content')


    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Müşteriler</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Yeni Müşteri</a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>İsim</th>
                                    <th>Telefon</th>
                                    <th>Gsm</th>
                                    <th>Şehir</th>
                                    <th>Kayıt Tarih</th>

                                    <th>İşlem</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->name}}</td>

                                        <td>
                                            <button class="btn btn-success btn-sm">Detay</button>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </div>

    @endsection