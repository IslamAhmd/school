<!DOCTYPE html>
<html>

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>
        تسجيل طلب التحاضير
    </title>
    <link rel="icon" type="image/png" href="{{asset('images/fav-icon.png')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 pull-left text-align-left">
                    <a href="{{route('pages.index')}}" class="navbar-brand"><img src="{{asset('images/logo.png')}}" alt="LOGO" style="width: 256px; height: 100px; border: 0;"></a>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-xs-12 col-sm-3 pull-left text-align-left">
                    <div class="social">
                        <div class="social">
                            <a href="" target="_blank" class="fb"><i class="fa fa-facebook"></i></a>
                            <a href="" target="_blank" class="tw"><i class="fa fa-twitter"></i></a>
                            <a href="" target="_blank" class="gp"><i class="fa fa-google-plus"></i></a>
                            <a href="" target="_blank" class="inst"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-xs-12 col-sm-3 text-align-right">
<p class="whats"><a href="tel:0551092444"><i class="fa fa-whatsapp right-fa"></i> 0551092444</a> </p>
</div> -->
                <!-- <div class="col-xs-12 col-sm-6">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
<span class="fa fa-bars"></span>
</button>
</div> -->
                <div class="text-align-right pull-right" id="navbar-collapse-1">
                    <ul class="nav navbar-nav text-center">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif @else

                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="btn btn-default dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(auth()->user()->hasRole('super_admin'))

                                <li><a href="{{ route('dashboard') }}">DashBoard</a></li>

                                @endif
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                        @endguest
                        <li class="  active  "><a href="{{route('pages.index')}}">الرئيسية</a></li>
                        <li class="  "><a href="{{route('pages.contact')}}">اتصل بنا</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="div-padding select-type">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 animate-box">
                    <label for="select-delivery">برجاء اختيار نوع الطلب</label>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 animate-box">
                    <select id="select-delivery">
                        <option style="color:black" value="">اختيار نوع الطلب</option>
                        <!-- <option style="color:red" value="1">توزيع المنهج المجاني مع عينة من التحاضير عن طريق الايميل</option>
                        <option style="color:green" value="2">الشراء لكامل المادة عن طريق الايميل</option>
                        <option style="color:red" value="3">الشراء عن طريق التوصيل للرياض والخرج طباعة وسي دي</option>
                        <option style="color:blue" value="4">الشراء عن طريق فيدكس لباقي مدن المملكة طباعة وسي دي ( يضاف 50 ريال للطلب )</option>
                        <option style="color:#b54071" value="5">تحاضير المستقبل</option> -->
                    </select>
                </div>
            </div>
        </div>
    </div>

    <h1></h1>
    <!-- <div style="width: 100%; background-color: #f2f2f2; padding: 30px">
<a data-toggle="modal" data-target="#myModal">
<img src="{{asset('images/1577120048_57284.jpg')}}" alt="banar" class="img-responsive check-mobile" style="width: 80%; height: auto; margin: 0 auto">
</a>
</div> -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h2 style="text-align: center">تحميل التطبيق</h2>
                </div>
                <!-- <div class="modal-body">
<div class="row">
<div class="col-md-6 col-xs-6 text-center">
<a target="_blank" href="https://play.google.com/store/apps/details?id=com.awameraait.mta">
<i class="fa fa-android" style="font-size: 60px; color: forestgreen"></i>
<p style="font-size: 20px;margin-top: 10px;font-weight: bold;">اندرويد</p>
</a>
</div> -->
                <div class="col-md-6 col-xs-6 text-center">
                    <a href="https://itunes.apple.com/sa/app/التحاضير-الحديثة/id1136744452" target="_blank">
                        <i class="fa fa-apple" style="font-size: 60px; color: black "></i>
                        <p style="font-size: 20px;margin-top: 10px;font-weight: bold;">ايفون</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="gray-bg div-padding">
        <div class="container">
            <h1>اختر المرحلة</h1>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 animate-box">
                    <div class="class-section text-center orange-bg" id="class_two">
                        <div class="table-cell">
                            <h1> مرحله ابتدائية </h1>
                        </div>
                        <div class="table-cell icon-cell">
                            <div class="img-on-hover">
                                <img src="{{asset('images/icon-2.png')}}" alt="...">
                                <div class="hover-img">
                                    <img src="{{asset('images/icon-2-hover.png')}}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 animate-box">
                    <div class="class-section text-center cyan-bg" id="class_three">
                        <div class="table-cell">
                            <h1> مرحله متوسطه </h1>
                        </div>
                        <div class="table-cell icon-cell">
                            <div class="img-on-hover">
                                <img src="{{asset('images/icon-3.png')}}" alt="...">
                                <div class="hover-img">
                                    <img src="{{asset('images/icon-3-hover.png')}}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 display-none">
                    <div class="class-section text-center olive-bg" id="class_four">
                        <div class="table-cell">
                            <h1> =========== </h1>
                        </div>
                        <div class="table-cell icon-cell">
                            <div class="img-on-hover">
                                <img src="{{asset('images/icon-4.png')}}" alt="...">
                                <div class="hover-img">
                                    <img src="{{asset('images/icon-4-hover.png')}}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 animate-box kberat">
                    <div class="class-section text-center pink-bg" id="class_eight">
                        <div class="table-cell">
                            <h1> تعليم الكبيرات </h1>
                        </div>
                        <div class="table-cell icon-cell">
                            <div class="img-on-hover">
                                <img src="{{asset('images/icon-8.png')}}" alt="...">
                                <div class="hover-img">
                                    <img src="{{asset('images/icon-8-hover.png')}}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 animate-box classy">
                    <div class="class-section text-center green-bg" id="class_seven">
                        <div class="table-cell">
                            <h1>النظام الفصلي</h1>
                        </div>
                        <div class="table-cell icon-cell">
                            <div class="img-on-hover">
                                <img src="{{asset('images/icon-7.png')}}" alt="...">
                                <div class="hover-img">
                                    <img src="{{asset('images/icon-7-hover.png')}}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 animate-box">
                    <div class="class-section text-center maroon-bg" id="class_six">
                        <div class="table-cell">
                            <h1> المقررات </h1>
                        </div>
                        <div class="table-cell icon-cell">
                            <div class="img-on-hover">
                                <img src="{{asset('images/icon-6.png')}}" alt="...">
                                <div class="hover-img">
                                    <img src="{{asset('images/icon-6-hover.png')}}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 animate-box atfal">
                    <div class="class-section text-center blue-bg" id="class_one">
                        <div class="table-cell">
                            <h1>رياض اطفال</h1>
                        </div>
                        <div class="table-cell icon-cell">
                            <div class="img-on-hover">
                                <img src="{{asset('images/icon-1.png')}}" alt="...">
                                <div class="hover-img">
                                    <img src="{{asset('images/icon-1-hover.png')}}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 display-none">
                    <div class="class-section text-center purple-bg" id="class_five">
                        <div class="table-cell">
                            <h1>==============</h1>
                        </div>
                        <div class="table-cell icon-cell">
                            <div class="img-on-hover">
                                <img src="{{asset('images/icon-5.png')}}" alt="...">
                                <div class="hover-img">
                                    <img src="{{asset('images/icon-5-hover.png')}}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 fekriya">
                    <div class="class-section text-center purple-bg" id="class_nine">
                        <div class="table-cell">
                            <h1>التربية الفكرية</h1>
                        </div>
                        <div class="table-cell icon-cell">
                            <div class="img-on-hover">
                                <img src="{{asset('images/icon-5.png')}}" alt="...">
                                <div class="hover-img">
                                    <img src="{{asset('images/icon-5-hover.png')}}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 cd_shamla disapper">
                    <div class="class-section text-center orange-bg" id="class_ten">
                        <div class="table-cell">
                            <h1>اسطوانات شاملة</h1>
                        </div>
                        <div class="table-cell icon-cell">
                            <div class="img-on-hover">
                                <img src="{{asset('images/icon-10-hover.png')}}" alt="...">
                                <div class="hover-img">
                                    <img src="{{asset('images/icon-10.png')}}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mirror"></div>
    </div>
    <div class="white-bg div-padding home">
        <div class="container" style="margin-bottom: 80px;">

            <div class="class-block class_two" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#primary_1" aria-controls="primary_1" role="tab" data-toggle="tab"> اول ابتدائى </a></li>
                        <li role="presentation"><a href="#primary_2" aria-controls="primary_2" role="tab" data-toggle="tab"> ثانى ابتدائى </a></li>
                        <li role="presentation"><a href="#primary_3" aria-controls="primary_3" role="tab" data-toggle="tab"> ثالث ابتدائى </a></li>
                        <li role="presentation"><a href="#primary_4" aria-controls="primary_4" role="tab" data-toggle="tab"> رابع ابتدائى </a></li>
                        <li role="presentation"><a href="#primary_5" aria-controls="primary_5" role="tab" data-toggle="tab"> خامس ابتدائى </a></li>
                        <li role="presentation"><a href="#primary_6" aria-controls="primary_6" role="tab" data-toggle="tab"> سادس ابتدائى </a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in  active " id="primary_1">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="228" class="subject_select pop_up" data-id="228">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="240" class="subject_select pop_up" data-id="240">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="267" class="subject_select pop_up" data-id="267">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> قرآن </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="288" class="subject_select pop_up" data-id="288">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 150</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> قرأن - تحفيظ </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="316" class="subject_select pop_up" data-id="316">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> فقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="317" class="subject_select pop_up" data-id="317">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> توحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="346" class="subject_select pop_up" data-id="346">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 40</div><div class='price_list_show'>طباعة ملونة وسي دي  = 140</div><div class='price_list_show'>طباعة عادية وسي دي = 70</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="355" class="subject_select pop_up" data-id="355">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="367" class="subject_select pop_up" data-id="367">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية أسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="370" class="subject_select pop_up" data-id="370">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية فنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="712" class="subject_select pop_up" data-id="712">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> حاسب آلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_2">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="229" class="subject_select pop_up" data-id="229">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="241" class="subject_select pop_up" data-id="241">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="268" class="subject_select pop_up" data-id="268">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> قرآن </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="290" class="subject_select pop_up" data-id="290">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 150</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> قرأن - تحفيظ </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="318" class="subject_select pop_up" data-id="318">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="319" class="subject_select pop_up" data-id="319">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> توحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="347" class="subject_select pop_up" data-id="347">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 40</div><div class='price_list_show'>طباعة ملونة وسي دي  = 140</div><div class='price_list_show'>طباعة عادية وسي دي = 70</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="356" class="subject_select pop_up" data-id="356">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="368" class="subject_select pop_up" data-id="368">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية أسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="372" class="subject_select pop_up" data-id="372">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية فنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="765" class="subject_select pop_up" data-id="765">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> حاسب آلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_3">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="230" class="subject_select pop_up" data-id="230">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="242" class="subject_select pop_up" data-id="242">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="269" class="subject_select pop_up" data-id="269">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> قرآن </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="292" class="subject_select pop_up" data-id="292">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 150</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> قرأن - تحفيظ </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="320" class="subject_select pop_up" data-id="320">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> فقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="321" class="subject_select pop_up" data-id="321">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> توحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="348" class="subject_select pop_up" data-id="348">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 40</div><div class='price_list_show'>طباعة ملونة وسي دي  = 140</div><div class='price_list_show'>طباعة عادية وسي دي = 70</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="357" class="subject_select pop_up" data-id="357">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="369" class="subject_select pop_up" data-id="369">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية أسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="374" class="subject_select pop_up" data-id="374">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> تربية فنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="767" class="subject_select pop_up" data-id="767">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> حاسب آلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="769" class="subject_select pop_up" data-id="769">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الإملاء </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_4">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="231" class="subject_select pop_up" data-id="231">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="243" class="subject_select pop_up" data-id="243">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="259" class="subject_select pop_up" data-id="259">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> اجتماعيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="295" class="subject_select pop_up" data-id="295">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 150</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> قرأن - تحفيظ </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="322" class="subject_select pop_up" data-id="322">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="323" class="subject_select pop_up" data-id="323">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> توحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="325" class="subject_select pop_up" data-id="325">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> حديث </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="349" class="subject_select pop_up" data-id="349">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 40</div><div class='price_list_show'>طباعة ملونة وسي دي  = 140</div><div class='price_list_show'>طباعة عادية وسي دي = 70</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="358" class="subject_select pop_up" data-id="358">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="371" class="subject_select pop_up" data-id="371">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية أسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="376" class="subject_select pop_up" data-id="376">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> تربية فنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="454" class="subject_select pop_up" data-id="454">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> We Can </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="457" class="subject_select pop_up" data-id="457">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> smart class </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="460" class="subject_select pop_up" data-id="460">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> Get Ready </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="604" class="subject_select pop_up" data-id="604">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="715" class="subject_select pop_up" data-id="715">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> حاسب آلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_5">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="232" class="subject_select pop_up" data-id="232">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="244" class="subject_select pop_up" data-id="244">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="260" class="subject_select pop_up" data-id="260">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> اجتماعيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="271" class="subject_select pop_up" data-id="271">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> القرآن الكريم وتجويده </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="296" class="subject_select pop_up" data-id="296">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 150</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> القرآن الكريم (تحفيظ) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="326" class="subject_select pop_up" data-id="326">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="327" class="subject_select pop_up" data-id="327">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> توحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="329" class="subject_select pop_up" data-id="329">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> حديث </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="350" class="subject_select pop_up" data-id="350">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 40</div><div class='price_list_show'>طباعة ملونة وسي دي  = 140</div><div class='price_list_show'>طباعة عادية وسي دي = 70</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="359" class="subject_select pop_up" data-id="359">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="373" class="subject_select pop_up" data-id="373">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية أسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="377" class="subject_select pop_up" data-id="377">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> تربية فنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="455" class="subject_select pop_up" data-id="455">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> We Can </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="458" class="subject_select pop_up" data-id="458">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> smart class </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="461" class="subject_select pop_up" data-id="461">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> Get Ready </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="716" class="subject_select pop_up" data-id="716">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> حاسب آلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="778" class="subject_select pop_up" data-id="778">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> القرآن الكريم (تلاوة) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_6">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="233" class="subject_select pop_up" data-id="233">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="245" class="subject_select pop_up" data-id="245">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="261" class="subject_select pop_up" data-id="261">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> اجتماعيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="298" class="subject_select pop_up" data-id="298">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 150</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> قرأن - تحفيظ </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="330" class="subject_select pop_up" data-id="330">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> توحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="331" class="subject_select pop_up" data-id="331">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="332" class="subject_select pop_up" data-id="332">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> حديث </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="333" class="subject_select pop_up" data-id="333">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> القرآن الكريم وتجويده </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="351" class="subject_select pop_up" data-id="351">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 40</div><div class='price_list_show'>طباعة ملونة وسي دي  = 140</div><div class='price_list_show'>طباعة عادية وسي دي = 70</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="360" class="subject_select pop_up" data-id="360">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="375" class="subject_select pop_up" data-id="375">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> تربية أسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="378" class="subject_select pop_up" data-id="378">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> تربية فنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="456" class="subject_select pop_up" data-id="456">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> We Can </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="459" class="subject_select pop_up" data-id="459">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> smart class </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="462" class="subject_select pop_up" data-id="462">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> Get Ready </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" id="768" class="subject_select pop_up" data-id="768">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> حاسب آلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class-block class_three" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#primary_7" aria-controls="primary_7" role="tab" data-toggle="tab"> اول متوسط </a></li>
                        <li role="presentation"><a href="#primary_8" aria-controls="primary_8" role="tab" data-toggle="tab"> ثاني متوسط </a></li>
                        <li role="presentation"><a href="#primary_9" aria-controls="primary_9" role="tab" data-toggle="tab"> ثالث متوسط </a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in  active " id="primary_7">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="234">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="246">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="262">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> اجتماعيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="273">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> قرآن </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="299">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 150</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تحفيظ القران والتجويد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="310">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> حاسب آلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="334">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تفسير </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="335">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="336">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> توحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="337">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> حديث </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="352">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 40</div><div class='price_list_show'>طباعة ملونة وسي دي  = 140</div><div class='price_list_show'>طباعة عادية وسي دي = 70</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="361">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="379">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية فنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="380">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية أسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="463">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> full blast </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="466">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> Super Goal </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="469">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> lift off </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_8">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="235">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="247">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="263">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> اجتماعيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="274">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> قرآن </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="301">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 150</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تحفيظ القران والتجويد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="311">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> حاسب آلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="338">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تفسير </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="339">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="340">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> توحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="341">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> حديث </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="353">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 40</div><div class='price_list_show'>طباعة ملونة وسي دي  = 140</div><div class='price_list_show'>طباعة عادية وسي دي = 70</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="362">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="381">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية فنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="382">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية أسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="464">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> full blast </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="467">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> Super Goal </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="470">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> lift off </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_9">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="236">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="248">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="264">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> اجتماعيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="275">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> قرآن </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="302">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 150</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تحفيظ القران والتجويد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="312">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> حاسب آلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="342">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تفسير </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="343">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="344">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> توحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="345">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> حديث </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="354">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 40</div><div class='price_list_show'>طباعة ملونة وسي دي  = 140</div><div class='price_list_show'>طباعة عادية وسي دي = 70</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="363">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="383">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية فنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="384">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تربية أسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="465">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> full blast </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="468">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> Super Goal </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="471">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> lift off </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class-block class_four" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>
                </div>
                <div class="tab-content">
                </div>
            </div>

            <div class="class-block class_seven" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#primary_22" aria-controls="primary_22" role="tab" data-toggle="tab"> المستوى السادس فصلي </a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in  active " id="primary_22">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="484">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الادب العربي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="523">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> التربية الاسرية والصحية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="530">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 140</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> اللغة العربية ( المسار العلمي والاداري ) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="531">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> النحو والصرف </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="532">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القراءة والتواصل اللغوي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="537">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الحاسب وتقنية المعلومات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="538">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الفقه ( المسار الادبي والتحفيظ ) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="539">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القران الكريم علمي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="540">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القران الكريم ادبي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="545">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>التعلم النشط الجديد ( عادي ) = 50</div><div class='price_list_show'>التعلم النشط الجديد ( ملون ) = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="546">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> احياء </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="547">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فيزياء </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="548">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> كيمياء </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="549">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علم الارض </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="551">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية والصحية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="568">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> البلاغة والنقد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="572">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> مهارات ادارية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="589">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> قرآن تحفيظ </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="591">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> قراءات تحفيظ </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="595">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>التعلم النشط الجديد ( عادي ) = 50</div><div class='price_list_show'>التعلم النشط الجديد ( ملون ) = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 140</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> العلوم الادارية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="780">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الفقه ( المسار العلمي ) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="781">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تفسير (أدبي) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="782">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 60</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 100</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 200</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تفسير (علمي) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="783">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التاريخ والتربية الوطنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="784">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 100</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div><div class='price_list_show'>فلاش مومري = 20</div>"> المهارات النفسية والاجتماعية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class-block class_eight" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="#primary_10" aria-controls="primary_10" role="tab" data-toggle="tab"> ثالث كبيرات </a></li>
                        <li role="presentation"><a href="#primary_11" aria-controls="primary_11" role="tab" data-toggle="tab"> ثانى كبيرات </a></li>
                        <li role="presentation" class="active"><a href="#primary_12" aria-controls="primary_12" role="tab" data-toggle="tab"> اولى كبيرات </a></li>
                        <li role="presentation"><a href="#primary_23" aria-controls="primary_23" role="tab" data-toggle="tab"> مجتمع بلا أمية </a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in " id="primary_10">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="300">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 150</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="303">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> علوم دينية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="304">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> قرآن </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="305">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> اجتماعيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="306">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="307">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> علوم وإقتصاد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="309">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> مهارات حياتية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="556">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> حاسب الي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="585">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> انجليزي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_11">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="284">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> علوم دينية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="286">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="287">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> قرآن </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="289">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> اجتماعيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="291">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> علوم وإقتصاد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="293">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 150</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="297">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> مهارات حياتية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="574">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> انجليزي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in  active " id="primary_12">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="276">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> علوم دينية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="277">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> قرآن </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="278">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="279">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="281">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> مهارات حياتية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_23">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="581">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> القراءة والكتابة </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="582">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="583">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="584">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 80</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 60</div><div class='price_list_show'>طباعة عادية وسي دي = 30</div>"> علوم دينية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class-block class_nine" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#primary_26" aria-controls="primary_26" role="tab" data-toggle="tab"> أول ابتدائي </a></li>
                        <li role="presentation"><a href="#primary_27" aria-controls="primary_27" role="tab" data-toggle="tab"> ثاني ابتدائي </a></li>
                        <li role="presentation"><a href="#primary_28" aria-controls="primary_28" role="tab" data-toggle="tab"> ثالث ابتدائي </a></li>
                        <li role="presentation"><a href="#primary_29" aria-controls="primary_29" role="tab" data-toggle="tab"> رابع ابتدائي </a></li>
                        <li role="presentation"><a href="#primary_30" aria-controls="primary_30" role="tab" data-toggle="tab"> خامس ابتدائي </a></li>
                        <li role="presentation"><a href="#primary_31" aria-controls="primary_31" role="tab" data-toggle="tab"> سادس ابتدائي </a></li>
                        <li role="presentation"><a href="#primary_32" aria-controls="primary_32" role="tab" data-toggle="tab"> أول متوسط </a></li>
                        <li role="presentation"><a href="#primary_33" aria-controls="primary_33" role="tab" data-toggle="tab"> ثاني متوسط </a></li>
                        <li role="presentation"><a href="#primary_34" aria-controls="primary_34" role="tab" data-toggle="tab"> ثالث متوسط </a></li>
                        <li role="presentation"><a href="#primary_35" aria-controls="primary_35" role="tab" data-toggle="tab"> الأول ثانوي </a></li>
                        <li role="presentation"><a href="#primary_36" aria-controls="primary_36" role="tab" data-toggle="tab"> الثاني ثانوي </a></li>
                        <li role="presentation"><a href="#primary_37" aria-controls="primary_37" role="tab" data-toggle="tab"> الثالث ثانوي </a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in  active " id="primary_26">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="605">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأجتماعية ( بنين ) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="606">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="607">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="608">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="609">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="610">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="611">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 53</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="612">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="613">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> قرآن كريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_27">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="614">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاجتماعية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="615">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="616">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="617">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="618">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="619">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="620">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتى </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="621">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="622">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="623">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_28">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="629">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاجتماعية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="630">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="631">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="632">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="633">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="634">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="635">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتى </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="636">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="637">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="638">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> قرآن كريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_29">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="639">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأجتماعية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="640">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="641">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="642">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="644">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="645">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="647">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتى </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="648">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="649">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="650">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_30">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="651">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأجتماعية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="652">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="653">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="654">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="655">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="656">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="657">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتى </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="658">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="659">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="660">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_31">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="661">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاجتماعية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="663">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاسرية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="664">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="665">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="666">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="667">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="668">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتى </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="669">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="670">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="671">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_32">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="672">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاجتماعية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="673">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاسرية بنات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="674">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="675">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="676">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية بنات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="677">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية بنين </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="678">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الحاسب الآلى </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="679">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="680">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="681">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتى </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="682">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="683">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="684">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_33">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="685">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاجتماعية (بنين) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="686">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأسرية بنات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="687">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="688">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="689">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية بنات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="690">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية بنين </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="691">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الحاسب الآلى </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="692">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="693">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="694">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتى </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="695">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="696">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="697">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_34">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="698">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاجتماعية (بنين) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="699">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأسرية بنات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="700">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="701">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="702">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية ( بنات ) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="703">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية ( بنين ) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="704">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الحاسب الآلى </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="705">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="706">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> علوم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="707">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتى </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="708">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="709">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="710">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_35">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="722">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="723">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="729">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية (بنين) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="730">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية (بنات) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="733">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاجتماعية (بنين) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="734">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="735">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="739">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأسرية (بنات) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="740">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="741">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="742">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الحاسب الآلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="744">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_36">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="724">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاجتماعية (بنين) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="725">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الحاسب الآلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="726">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="745">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأسرية (بنات) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="746">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="747">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="748">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية (بنات) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="751">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="752">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="753">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="754">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="772">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية (بنين) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="primary_37">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="736">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الأسرية (بنات) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="738">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الحاسب الآلي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="755">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الاجتماعية (بنين) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="756">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="757">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية الفنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="758">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية (بنات) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="759">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> رياضيات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="761">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> لغتي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="762">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التوحيد </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="763">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> الفقه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="764">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> القرآن الكريم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="774">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 20</div><div class='price_list_show'>طباعة ملونة وسي دي  = 100</div><div class='price_list_show'>طباعة عادية وسي دي = 50</div>"> التربية المهنية (بنين ) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="class-block class_ten" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#primary_25" aria-controls="primary_25" role="tab" data-toggle="tab"> جميع وحدات </a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in  active " id="primary_25">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="598">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 50</div><div class='price_list_show'>سى دى = 50</div>"> دورات تدريبية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="599">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 50</div>"> رائد النشاط </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="600">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 50</div>"> المرشد الطلابي </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="601">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 50</div>"> المدير والوكيل </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="602">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 50</div>"> الإذاعة </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="603">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 50</div>"> رؤية 2030 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="711">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 50</div>"> اليوم الوطنى 2019 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="718">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 50</div>"> يوم المعلم </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="719">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 50</div>"> الأمن والسلامة </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="class-block class_eleven" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>
                </div>
                <div class="tab-content">
                </div>
            </div>
            <div class="class-block class_thirteen" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>
                </div>
                <div class="tab-content">
                </div>
            </div>
            <div class="class-block class_fourteen" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>
                </div>
                <div class="tab-content">
                </div>
            </div>
            <div class="class-block class_fifteen" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>
                </div>
                <div class="tab-content">
                </div>
            </div>
            <div class="class-block class_sixteen" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>
                </div>
                <div class="tab-content">
                </div>
            </div>

            <div class="class-block class_one" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#primary_17" aria-controls="primary_17" role="tab" data-toggle="tab"> جميع الوحدات </a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in  active " id="primary_17">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select_kindergartens" data-id="472">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 130</div><div class='price_list_show'>فلاش مومري = 160</div>"> جميع وحدات رياض الأطفال ( 46 وحدة ) </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class-block class_six" style="margin-bottom: 90px">
                <div class="tabs-header clearfix">
                    <h1>اختر الصف </h1>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#primary_18" aria-controls="primary_18" role="tab" data-toggle="tab"> جميع المواد </a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in  active " id="primary_18">
                        <h3 class="text-center">اختر المواد</h3>
                        <div class="clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="386">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> flying high 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="387">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> flying high 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="388">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> flying high 3 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="389">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> flying high 4 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="390">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> flying high 5 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="391">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> flying high 6 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="392">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> MEGA GOAL 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="393">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> 2 MEGA GOAL </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="394">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> 3 MEGA GOAL </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="395">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> 4 MEGA GOAL </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="396">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> MEGA GOAL 5 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="397">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> 6 MEGA GOAL </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="399">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> TRAVELLER 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="400">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> TRAVELLER 3 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="401">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> TRAVELLER 4 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="402">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> TRAVELLER 5 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="403">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> TRAVELLER 6 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="404">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> احياء 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="405">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> احياء 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="406">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> احياء 3 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="407">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> الاجتماعيات مقررات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="408">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> مهارات البحث ومصادر المعلومات </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="409">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> التربيه الصحية والنسوية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="410">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> التربية المهنيه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="411">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات 4 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="412">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الدراسات النفسية والاجتماعية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="413">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="414">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات 3 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="415">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات 6 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="416">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="417">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> العلوم الاداريه 1 - مبادئ الاداره </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="418">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الكفايات اللغوية 4 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="419">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الكفايات اللغويه 3 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="420">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الكفايات اللغويه 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="421">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الكفايات اللغويه 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="422">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> اللغه العربيه 5 الدراسات الادبيه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="423">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> اللغه العربيه 6 دراسات بلاغيه ونقديه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="424">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> اللغة العربية 7 الدرسات اللغويه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="425">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> المهارات الحياتيه والتربيه الاسريه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="426">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>التعلم النشط الجديد ( عادي ) = 80</div><div class='price_list_show'>التعلم النشط الجديد ( ملون ) = 120</div>"> تاريخ </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="427">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تفسير 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="428">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> تفسير 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="429">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> توحيد 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="430">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> توحيد 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="431">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>التعلم النشط الجديد ( عادي ) = 80</div><div class='price_list_show'>التعلم النشط الجديد ( ملون ) = 120</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> جغرافيا </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="432">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> حديث 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="433">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>التعلم النشط الجديد ( عادي ) = 80</div><div class='price_list_show'>التعلم النشط الجديد ( ملون ) = 120</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> حديث 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="434">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علم الارض </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="435">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>التعلم النشط الجديد ( عادي ) = 80</div><div class='price_list_show'>التعلم النشط الجديد ( ملون ) = 120</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> علم البيئه والتربيه البيئيه </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="436">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فقه 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="437">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فقه 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="438">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فيزياء 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="439">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فيزياء 3 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="440">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فيزياء 4 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="441">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فيزياء 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="442">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> كيمياء 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="443">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> كيمياء 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="444">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> كيمياء 4 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="445">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> كيمياء 3 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="446">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> قرآن 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="447">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الرياضيات 5 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="448">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الحاسب الالى 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="449">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> العلوم الاداريه 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="450">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> قران 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="451">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> مهارات ادارية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="452">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> الحاسب الالي 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="453">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> تربية فنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="575">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> حاسب الي 3 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="580">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> التربية البدنية </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="593">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> TRAVELLER 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="766">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> القانون فى حياتنا </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="770">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>تحضير الوزارة (عين) عام عادي  = 150</div><div class='price_list_show'>تحضير الوزارة (عين) عام ملون = 300</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر عادي  = 70</div><div class='price_list_show'>تحضير الوزارة (عين) مختصر ملون = 140</div>"> فقه 3 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="771">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> قراءات 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="775">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div><div class='price_list_show'>التعلم النشط الجديد ( عادي ) = 80</div><div class='price_list_show'>التعلم النشط الجديد ( ملون ) = 120</div>"> علوم قرآن 1 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-5-col no-padding box-hover-holder">
                                <label class="checkbox-holder">
                                    <input type="checkbox" class="subject_select pop_up" data-id="776">
                                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                                    <span class="price_list" data-html="true" title="الاسعار" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content=" <div class='price_list_show'>الايميل = 20</div><div class='thader_price'>تحاضير المستقبل = 120</div><div class='price_list_show'>سى دى = 50</div><div class='price_list_show'>طباعة ملونة وسي دي  = 120</div><div class='price_list_show'>طباعة عادية وسي دي = 80</div>"> قراءات 2 </span>
                                </label>
                                <span class="color-blue pull-left">(تعديل)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(auth()->check())

            	<div class="text-center send-btn" style="margin-top: 0px;">
                	<button class="btn btn-green" id="first_step_btn">ارسال الطلب</button>
            	</div>
            	<div class="text-center">
                	<button class="add-more-material">
	                    <i class="fa fa-angle-up fa-3x color-blue bounce"></i>
	                    <span>قم باضافة مادة اخرى</span>
                	</button>
                	<button class="btn btn-blue end-request">انهاء الطلب</button>
                </div>

            @endif
        </div>
    </div>
    <!-- <div class="modal fade" id="materialModal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document" style="margin-top: 150px;">
<div class="modal-content">
<div class="modal-header">
<button style="z-index: 999999999;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<form id="options_form">
<div class="modal-body" id="subject_options_view" style="height: 400px;overflow: auto;">
</div>
<div class="modal-footer">
<button type="button" id="submit_options" class="btn btn-blue" data-dismiss="modal">حفظ</button>
</div>
</form>
</div>
</div>
</div> -->
    <div id="content_new"></div>

    <!-- <footer class="div-small-padding">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-7 text-align-right">
<p> جميع الحقوق محفوظة لمؤسسة التحاضير الحديثة 2019 </p>
</div>
<div class="col-xs-12 col-sm-5 text-align-left">
<p>تصميم <a href="#">مؤسسة أوامر الشبكة</a></p>
</div>
</div>
</div>
</footer> -->

    <div class="pill-holder">
        <div class="btn pill-btn">الـــفـاتـــورة</div>
        <div class="pill-table mCustomScrollbar text-center">
            <table class="table">
                <thead>
                    <tr class="green-bg">
                        <td colspan="2">المادة</td>
                        <td colspan="2">السعر</td>
                    </tr>
                    <tr class="blue-bg">
                        <td>اسم المادة</td>
                        <td>المرحلة</td>
                        <td>السعر</td>
                        <td><i class="fa fa-trash"></i></td>
                    </tr>
                </thead>
                <tbody id="bill-tbody">
                    <tr id="no_matrial_found">
                        <td colspan="4">
                            لاتوجد مواد مختاره حتى الان
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="green-bg">
                        <td colspan="2">الاجمالى</td>
                        <td colspan="2"> <span id="cart_total"> 0 </span> ريال</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content text-center">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>برجاء اختر نوع الطلب اولا</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pre-load" id="loader">
        <img src="{{asset('images/loading.gif')}}" alt="Loading...">
    </div>
    <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/dev.js')}}"></script>
    <script src="{{asset('js/www.google.com/recaptcha/api.js')}}" async defer></script>
    <script src="{{asset('js/bootstrapious.com/tutorial/recaptcha/validator.js')}}" async defer></script>
    <script src="{{asset('js/unpkg.com/jspdf%401.5.3/dist/jspdf.min.js')}}"></script>
    <script src="{{asset('js/www.google.com/recaptcha/api.js')}}"></script>

    <script>
        function verifyRecaptchaCallback() {
            $('#rePatcha').removeAttr('disabled');
        }

        $(document).ready(function() {
            var url = $('#url').data('url');
            $('.set_url').attr('href', url);
        });

        $('.price_list').hover(function() {
            if ($('#select-delivery').val() == 5 || $('#select-delivery').val() == 6) {
                // alert('ops');
                setTimeout(function() {
                    $('.price_list_show').css("display", "none")
                }, 10);
            } else {
                setTimeout(function() {
                    $('.thader_price').css("display", "none")
                }, 10);
            }
        });

        $('#select-delivery').change(function() {
            if ($(this).val() == 5 || $(this).val() == 6) {
                $('.atfal').fadeOut();
                $('.kberat').fadeOut();
                $('.fekriya').fadeOut();
                $('.disapper').fadeOut();
                //   $('.classy').fadeOut();
                // setTimeout(function () {$('.price_list_show').css("display", "none")}, 10);
            } else if ($(this).val() == 1) {
                $('.disapper').fadeOut();
            } else {
                $('.atfal').fadeIn();
                $('.kberat').fadeIn();
                $('.fekriya').fadeIn();
                $('.disapper').fadeIn();
                $('.classy').fadeIn();
            }
        });

        $(document).ready(function() {
            if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
                $('.check-mobile').css('display', 'none')
            } else {
                return false;
            }
        })

        $(document).ready(function(){

            $.get('{{ route("orders.index")}}', function(res){

                  res.forEach(function(order, i){

                      $('#select-delivery').append(`


                            <option value="${i+1}">${order.display_name}</option>


                      `);

                  });

            });

        })
    </script>
</body>

</html>