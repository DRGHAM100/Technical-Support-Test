@extends('layouts.app')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">بحث...</label>
              <input type="text" data-table="customers-list" class="form-control search-input">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="{{ url('/',$page = 'export') }}" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-file-excel-o me-sm-1"></i>
                <span class="d-sm-inline d-none">Export To Excel</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4" style="text-align:center">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">جدول المسجلين</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table sortable align-items-center mb-0 customers-list">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">رمز التعريف</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">رمز الاستجابة السريعة</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">الاسم</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">المنصب</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">الجهة</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">البريد الاكتروني</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">رقم الجوال</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">الأسئلة</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">رقم المقعد</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($invited as $invite)
                    <tr>
                      <td>                 
                        <p class="text-xs font-weight-bold mb-0">{{$invite->id}}</p>  
                      </td>
                      <td>                 
                        <p class="text-xs font-weight-bold mb-0">{!! DNS2D::getBarcodeSVG("$invite->id", 'QRCODE') !!}</p>  
                      </td> 
                      <td>                 
                        <p class="text-xs font-weight-bold mb-0">{{$invite->name}}</p>  
                      </td>
                      <td>                 
                        <p class="text-xs font-weight-bold mb-0">{{$invite->position}}</p>  
                      </td>
                      <td>                 
                        <p class="text-xs font-weight-bold mb-0">{{$invite->destination}}</p>  
                      </td>
                      <td>                 
                        <p class="text-xs font-weight-bold mb-0">{{$invite->email}}</p>  
                      </td>
                      <td>                 
                        <p class="text-xs font-weight-bold mb-0">{{$invite->mobile}}</p>  
                      </td>
                      <td>                 
                        <p class="text-xs font-weight-bold mb-0">{{$invite->questions}}</p>  
                      </td>
                      <td>                 
                        <form action="{{ url('/change',$id= $invite->id) }}" method="post">
                          @csrf
                          <input type="text" name="seat_number" value="{{$invite->seat_number}}" style="border: none;width: 10%;" required> 
                          <button type="submit" style="border:none;color:green;background:none;">✎</button>
                        </form>
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
</main>
@endsection


