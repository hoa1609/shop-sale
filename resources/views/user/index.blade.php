@extends('admin-layout')
@section('content')
 <div class="container-custum">
                {{-- css custum  --}}
                <div class="row wrapper1 border-bottom white-bg page-heading">  
                    <div class="col-lg-10">
                        <h3>Quản lí người dùng</h3>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html">Dashhboard</a>
                            </li>
                            <li class="active">
                                <strong>Quản lí người dùng</strong>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Danh sách người dùng</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                           @include('user.filter')
                           @include('user.table')
    
                        </div>
                    </div>
                </div>
               
 </div>   
@endsection

