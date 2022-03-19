@extends('layouts.app')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">بحث...</label>
              <input type="text" data-table="customers-list" class="form-control search-input">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" id="myBtn" class="nav-link text-body font-weight-bold px-0">
                <span class="d-sm-inline d-none">إضافة مدعو</span>
                <i class="fa fa-plus me-sm-1"></i>
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
                <h6 class="text-white text-capitalize ps-3">جدول المدعوون</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table sortable align-items-center mb-0 customers-list" onclick="sortTable()">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">الإيميل</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">توقيت التسجيل</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($invited as $invite)
                    <tr>
                      <td>                 
                        <p class="text-xs font-weight-bold mb-0">{{$invite->email}}</p>  
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ date('d Y M', strtotime($invite->created_at)) }}</p>
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
    <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <form action="home" method="post">
              @csrf 
              <input type="email" name="email" placeholder="إيميل المدعو" dir="rtl" class="form-control" required/><br>
              <button class="btn btn-block btn-success" style="width:100%">حفظ</button>
          </form>
        </div>
    </div>
</main>
@endsection


