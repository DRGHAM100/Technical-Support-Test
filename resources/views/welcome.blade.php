<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <title>Technical Support</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    .register{background: -webkit-linear-gradient(left, #3931af, #00c6ff);margin-top: 3%;padding: 3%;}
    .register-left{text-align: center;color: #fff;margin-top: 4%;}
    .register-left input{border: none;border-radius: 1.5rem;padding: 2%;width: 60%;background: #f8f9fa;font-weight: bold;color: #383d41;margin-top: 30%;margin-bottom: 3%;cursor: pointer;}
    .register-right{background: #f8f9fa;border-top-left-radius: 10% 50%;border-bottom-left-radius: 10% 50%;}
    .register-left img{margin-top: 15%;margin-bottom: 5%;width: 25%;-webkit-animation: mover 2s infinite  alternate;animation: mover 1s infinite  alternate;}
    @-webkit-keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    .register-left p{font-weight: lighter;padding: 12%;margin-top: -9%;}
    .register .register-form{padding: 10%; margin-top: 10%;}
    .btnRegister{float: right;margin-top: 10%;border: none;border-radius: 1.5rem;padding: 2%;background: #0062cc;color: #fff;font-weight: 600;width: 50%;cursor: pointer;}
    .register .nav-tabs{margin-top: 3%;border: none;background: #0062cc;border-radius: 1.5rem;width: 28%;float: right;}
    .register .nav-tabs .nav-link{padding: 2%;height: 34px;font-weight: 600;color: #fff;border-top-right-radius: 1.5rem;border-bottom-right-radius: 1.5rem;}
    .register .nav-tabs .nav-link:hover{border: none;}
    .register .nav-tabs .nav-link.active{width: 100px;color: #0062cc;border: 2px solid #0062cc;border-top-left-radius: 1.5rem;border-bottom-left-radius: 1.5rem;}
    .register-heading{text-align: center;margin-top: 8%;margin-bottom: -15%;color: #495057;}
</style>
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Technical </h3><br>
                <h3> Support</h3>
            </div>
            <div class="col-md-9 register-right">
                <form action="{{ route('store') }}" method="post" dir="rtl">
                    @csrf
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">تأكيد الحضور</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="الاسم *" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="position" class="form-control" placeholder="المنصب *" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="destination" class="form-control" placeholder="الجهة *" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني *" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="mobile" class="form-control" placeholder="رقم الجوال *" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="questions" class="form-control" placeholder="أسئلة تود توجيهها" />
                                </div>
                                <input type="submit" class="btnRegister"  value="تأكيد"/>
                            </div>
                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div style="color:red">{{ $error }}</div>
                                @endforeach
                            @endif
                            @if(Session::has('success'))
                                <div style="color:green">{{ Session::get('success') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
