@extends('templates.' . $theme . '.layouts.main')

@section('pre-styles')
    {{ Html::style('/templates/dashy/assets/css/hm-style.css') }}
    {{ Html::style('/templates/dashy/assets/css/jquery-jvectormap-2.0.3.css') }}
    {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css') }}
@endsection

@section('styles')
    
@endsection

@section('pre-scripts')
    {{ Html::script('/templates/dashy/assets/js/jquery-countTo.js') }}
    {{ Html::script('/templates/dashy/assets/js/jquery-jvectormap-2.0.3.min.js') }}
    {{ Html::script('/templates/dashy/assets/js/jquery-jvectormap-world-mill.js') }}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js') }}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js') }}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js') }}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js') }}
@endsection
    
@section('scripts')
    {{ Html::script('/templates/dashy/assets/js/index2.js') }}
@endsection

@section('body-class')
    index2
@endsection

@section('page-class')
    
@endsection

@section('page-title')
    Horizontal
@endsection

@section('page-description')
    Page with a horizontal menu
@endsection

@section('page-breadcrumbs')
    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
    <li class="breadcrumb-item active">Horizontal</li>
@endsection

@section('sidebar')
    {{--  menu horizontal  --}}
    @include('templates.dashy.layouts.partials.menu-horizontal')
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="card product-report">
                <div class="header">
                    <h2><strong>Product</strong> Report</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 text-center m-b-10">                               
                            <h3 class="counter m-b-0">$4,516</h3>
                            <small class="text-muted">Sales Report</small>
                            <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="21px" data-bar-width="2" data-bar-spacing="6" data-bar-color="rgb(134, 139, 239)"><canvas width="170" height="21" style="display: inline-block; width: 170px; height: 21px; vertical-align: top;"></canvas></div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 text-center m-b-10">
                            <h3 class="counter m-b-0">$6,481</h3>
                            <small class="text-muted">Annual Revenue </small>
                            <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="21px" data-bar-width="2" data-bar-spacing="6" data-bar-color="rgb(25, 161, 183)"><canvas width="170" height="21" style="display: inline-block; width: 170px; height: 21px; vertical-align: top;"></canvas></div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 text-center m-b-10">
                            <h3 class="counter m-b-0">$3,915</h3>
                            <small class="text-muted">Monthly Revenue</small>
                            <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="21px" data-bar-width="2" data-bar-spacing="6" data-bar-color="rgb(254, 191, 15)"><canvas width="170" height="21" style="display: inline-block; width: 170px; height: 21px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                    <div id="m_area_chart2" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="342" version="1.1" width="762" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.84375" y="309" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">0</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.34375,309H737" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="238" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">50</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.34375,238H737" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="167" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">100</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.34375,167H737" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="96" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">150</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.34375,96H737" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">200</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.34375,25H737" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="737" y="321.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2017</tspan></text><text x="598.441605090312" y="321.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2016</tspan></text><text x="460.261785030104" y="321.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2015</tspan></text><text x="322.08196496989603" y="321.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2014</tspan></text><text x="183.90214490968802" y="321.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2013</tspan></text><text x="45.34375" y="321.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2012</tspan></text><path fill="#dcddde" stroke="none" d="M45.34375,294.8L183.90214490968802,159.9L322.08196496989603,198.24L460.261785030104,182.62L598.441605090312,60.5L737,130.08L737,309L45.34375,309Z" fill-opacity="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.4;"></path><path fill="none" stroke="#b6b8bb" d="M45.34375,294.8L183.90214490968802,159.9L322.08196496989603,198.24L460.261785030104,182.62L598.441605090312,60.5L737,130.08" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.34375" cy="294.8" r="0" fill="#b6b8bb" stroke="#b6b8bb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="183.90214490968802" cy="159.9" r="0" fill="#b6b8bb" stroke="#b6b8bb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="322.08196496989603" cy="198.24" r="0" fill="#b6b8bb" stroke="#b6b8bb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="460.261785030104" cy="182.62" r="0" fill="#b6b8bb" stroke="#b6b8bb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="598.441605090312" cy="60.5" r="0" fill="#b6b8bb" stroke="#b6b8bb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="737" cy="130.08" r="0" fill="#b6b8bb" stroke="#b6b8bb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#d0c5e5" stroke="none" d="M45.34375,309L183.90214490968802,152.8L322.08196496989603,178.36L460.261785030104,46.30000000000001L598.441605090312,97.42000000000002L737,169.84L737,309L45.34375,309Z" fill-opacity="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.4;"></path><path fill="none" stroke="#a890d3" d="M45.34375,309L183.90214490968802,152.8L322.08196496989603,178.36L460.261785030104,46.30000000000001L598.441605090312,97.42000000000002L737,169.84" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.34375" cy="309" r="0" fill="#a890d3" stroke="#a890d3" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="183.90214490968802" cy="152.8" r="0" fill="#a890d3" stroke="#a890d3" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="322.08196496989603" cy="178.36" r="0" fill="#a890d3" stroke="#a890d3" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="460.261785030104" cy="46.30000000000001" r="0" fill="#a890d3" stroke="#a890d3" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="598.441605090312" cy="97.42000000000002" r="0" fill="#a890d3" stroke="#a890d3" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="737" cy="169.84" r="0" fill="#a890d3" stroke="#a890d3" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Inbox</strong></h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <ul class="inbox-widget list-unstyled clearfix">
                        <li class="inbox-inner"> <a href="javascript:void(0)">
                            <div class="inbox-item">
                                <div class="inbox-img"> <img src="/templates/dashy/assets/img/avatar1.jpg" alt=""> </div>
                                <div class="inbox-item-info">
                                    <p class="author">Aaron	Enlightened</p>
                                    <p class="inbox-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    <p class="inbox-date">13:34 PM</p>
                                </div>
                            </div>
                            </a> </li>
                        <li class="inbox-inner"> <a href="javascript:void(0)">
                            <div class="inbox-item">
                                <div class="inbox-img"> <img src="/templates/dashy/assets/img/avatar2.jpg" alt=""> </div>
                                <div class="inbox-item-info">
                                    <p class="author">Alvin Doe</p>
                                    <p class="inbox-message">Lorem Ipsum is simply dummy text oftting industry. Lorem Ipsum has been the industry's</p>
                                    <p class="inbox-date">13:34 PM</p>
                                </div>
                            </div>
                            </a> </li>
                        <li class="inbox-inner"> <a href="javascript:void(0)">
                            <div class="inbox-item">
                                <div class="inbox-img"> <img src="/templates/dashy/assets/img/avatar3.jpg" alt=""> </div>
                                <div class="inbox-item-info">
                                    <p class="author">Austin</p>
                                    <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    <p class="inbox-date">13:34 PM</p>
                                </div>
                            </div>
                            </a> </li>
                        <li class="inbox-inner"> <a href="javascript:void(0)">
                            <div class="inbox-item">
                                <div class="inbox-img"> <img src="/templates/dashy/assets/img/avatar4.jpg" alt=""> </div>
                                <div class="inbox-item-info">
                                    <p class="author">John Benjamin</p>
                                    <p class="inbox-message">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    <p class="inbox-date">13:34 PM</p>
                                </div>
                            </div>
                            </a> </li>
                        <li class="inbox-inner"> <a href="javascript:void(0)">
                            <div class="inbox-item">
                                <div class="inbox-img"> <img src="/templates/dashy/assets/img/avatar5.jpg" alt=""> </div>
                                <div class="inbox-item-info">
                                    <p class="author">Broderick</p>
                                    <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    <p class="inbox-date">13:34 PM</p>
                                </div>
                            </div>
                            </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
            <div class="card tasks_report">
                <div class="body">
                    <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob dial1" value="66" data-width="90" data-height="90" data-thickness="0.1" data-fgcolor="#26dad2" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(38, 218, 210); padding: 0px; -webkit-appearance: none;"></div>                        
                    <h6 class="m-t-20">Satisfaction Rate</h6>
                    <p class="displayblock m-b-0">47% Average <i class="zmdi zmdi-trending-up"></i></p>                        
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
            <div class="card tasks_report">
                <div class="body">
                    <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob dial2" value="26" data-width="90" data-height="90" data-thickness="0.1" data-fgcolor="#7b69ec" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(123, 105, 236); padding: 0px; -webkit-appearance: none;"></div>
                    <h6 class="m-t-20">Project Panding</h6>
                    <p class="displayblock m-b-0">13% Average <i class="zmdi zmdi-trending-down"></i></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
            <div class="card tasks_report">
                <div class="body">
                    <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob dial3" value="76" data-width="90" data-height="90" data-thickness="0.1" data-fgcolor="#f9bd53" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(249, 189, 83); padding: 0px; -webkit-appearance: none;"></div>
                    <h6 class="m-t-20">Productivity Goal</h6>
                    <p class="displayblock m-b-0">75% Average <i class="zmdi zmdi-trending-up"></i></p>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
            <div class="card tasks_report">
                <div class="body">
                    <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob dial4" value="88" data-width="90" data-height="90" data-thickness="0.1" data-fgcolor="#00adef" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(0, 173, 239); padding: 0px; -webkit-appearance: none;"></div>
                    <h6 class="m-t-20">Total Revenue</h6>
                    <p class="displayblock m-b-0">54% Average <i class="zmdi zmdi-trending-up"></i></p>
                </div>
            </div>
        </div>            
    </div>

    <div class="row clearfix">
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="card member-card">
                <div class="header l-blue">
                    <h4 class="m-t-10">Eliana Smith</h4>
                </div>
                <div class="member-img">
                    <a href="profile.html" class="">
                    <img src="/templates/dashy/assets/img/avatar2.jpg" class="rounded-circle" alt="profile-image">
                    </a>
                </div>
                <div class="body">
                    <div class="col-12">
                        <ul class="social-links list-unstyled">
                            <li>
                            <a title="facebook" href="#">
                                <i class="zmdi zmdi-facebook"></i>
                            </a>
                            </li>
                            <li>
                            <a title="twitter" href="#">
                                <i class="zmdi zmdi-twitter"></i>
                            </a>
                            </li>
                            <li>
                            <a title="instagram" href="3">
                                <i class="zmdi zmdi-instagram"></i>
                            </a>
                            </li>
                        </ul>
                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                    </div>                        
                    <hr>                        
                    <div class="row">
                        <div class="col-4">
                            <h5>18</h5>
                            <small>Files</small>
                        </div>
                        <div class="col-4">
                            <h5>2GB</h5>
                            <small>Used</small>
                        </div>
                        <div class="col-4">
                            <h5>65,6$</h5>
                            <small>Spent</small>
                        </div>
                    </div>
                </div>
                <div class="sparkline" data-type="line" data-spot-radius="1" data-highlight-spot-color="rgb(233, 30, 99)" data-highlight-line-color="#222" data-min-spot-color="rgb(233, 30, 99)" data-max-spot-color="rgb(0, 150, 136)" data-spot-color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="40px" data-line-width="2" data-line-color="rgba(255, 255, 255, 0.2)" data-fill-color="rgba(0, 0, 0, 0.1)"><canvas style="display: inline-block; width: 386px; height: 40px; vertical-align: top;" width="386" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="card">
                <div class="header">
                    <h2><strong>Social</strong> Media</h2>                        
                </div>
                <div class="body">
                    <div class="table-responsive social_media_table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Media</th>
                                    <th>Name</th>
                                    <th>Like</th>                                                                                
                                    <th>Comments</th>
                                    <th>Share</th>
                                    <th>Members</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="social_icon linkedin"><i class="zmdi zmdi-linkedin"></i></span>
                                    </td>
                                    <td><span class="list-name">Linked In</span>
                                        <span class="text-muted">Florida, United States</span>
                                    </td>
                                    <td>19K</td>
                                    <td>14K</td>
                                    <td>10K</td>
                                    <td>
                                        <span class="badge badge-success">2341</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="social_icon twitter-table"><i class="zmdi zmdi-twitter"></i></span>
                                    </td>
                                    <td><span class="list-name">Twitter</span>
                                        <span class="text-muted">Arkansas, United States</span>
                                    </td>
                                    <td>7K</td>
                                    <td>11K</td>
                                    <td>21K</td>
                                    <td>
                                        <span class="badge badge-success">952</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="social_icon facebook"><i class="zmdi zmdi-facebook"></i></span>
                                    </td>
                                    <td><span class="list-name">Facebook</span>
                                        <span class="text-muted">Illunois, United States</span>
                                    </td>
                                    <td>15K</td>
                                    <td>18K</td>
                                    <td>8K</td>
                                    <td>
                                        <span class="badge badge-success">6127</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="social_icon google"><i class="zmdi zmdi-google-plus"></i></span>
                                    </td>
                                    <td><span class="list-name">Google Plus</span>
                                        <span class="text-muted">Arizona, United States</span>
                                    </td>
                                    <td>15K</td>
                                    <td>18K</td>
                                    <td>154</td>
                                    <td>
                                        <span class="badge badge-success">325</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="social_icon youtube"><i class="zmdi zmdi-youtube-play"></i></span>
                                    </td>
                                    <td><span class="list-name">YouTube</span>
                                        <span class="text-muted">Alaska, United States</span>
                                    </td>
                                    <td>15K</td>
                                    <td>18K</td>
                                    <td>200</td>
                                    <td>
                                        <span class="badge badge-success">160</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card agent">
                <div class="agent-avatar"> <a href="agent-profile.html"> 
                    <img src="/templates/dashy/assets/img/avatar1-lg.jpg" class="img-fluid " alt=""> </a> </div>
                <div class="agent-content">
                    <div class="agent-name">
                        <h4><a href="agent-profile.html">Tim Hank</a></h4>
                        <span>Fairview, Texas</span>
                        <ul class="list-unstyled team-info m-b-0">
                            <li class="m-r-15"><small>Team</small></li>                                
                            <li><img src="/templates/dashy/assets/img/avatar8.jpg" alt="Avatar"></li>
                            <li><img src="/templates/dashy/assets/img/avatar9.jpg" alt="Avatar"></li>                            
                        </ul>
                    </div>
                    <ul class="agent-contact-details">
                        <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                        <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                    </ul>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card agent">
                <div class="agent-avatar"> <a href="agent-profile.html"> 
                    <img src="/templates/dashy/assets/img/avatar1-lg.jpg" class="img-fluid " alt=""> </a> </div>
                <div class="agent-content">
                    <div class="agent-name">
                        <h4><a href="agent-profile.html">Gary Camara</a></h4>
                        <span>Bristol, Pennsylvania</span>
                        <ul class="list-unstyled team-info m-b-0">
                            <li class="m-r-15"><small>Team</small></li>
                            <li><img src="/templates/dashy/assets/img/avatar2.jpg" alt="Avatar"></li>
                            <li><img src="/templates/dashy/assets/img/avatar3.jpg" alt="Avatar"></li>
                            <li><img src="/templates/dashy/assets/img/avatar4.jpg" alt="Avatar"></li>                            
                        </ul>
                    </div>
                    <ul class="agent-contact-details">
                        <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                        <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                    </ul>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card agent">
                <div class="agent-avatar"> <a href="agent-profile.html"> 
                    <img src="/templates/dashy/assets/img/avatar1-lg.jpg" class="img-fluid " alt=""> </a> </div>
                <div class="agent-content">
                    <div class="agent-name">
                        <h4><a href="agent-profile.html">Hossein Shams</a></h4>
                        <span>Springfield, Florida</span>
                        <ul class="list-unstyled team-info m-b-0">
                            <li class="m-r-15"><small>Team</small></li>
                            <li><img src="/templates/dashy/assets/img/avatar5.jpg" alt="Avatar"></li>
                            <li><img src="/templates/dashy/assets/img/avatar6.jpg" alt="Avatar"></li>
                            <li><img src="/templates/dashy/assets/img/avatar7.jpg" alt="Avatar"></li>
                            <li><img src="/templates/dashy/assets/img/avatar2.jpg" alt="Avatar"></li>
                        </ul>
                    </div>
                    <ul class="agent-contact-details">
                        <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                        <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                    </ul>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card agent">
                <div class="agent-avatar"> <a href="agent-profile.html"> 
                    <img src="/templates/dashy/assets/img/avatar1-lg.jpg" class="img-fluid " alt=""> </a> </div>
                <div class="agent-content">
                    <div class="agent-name">
                        <h4><a href="agent-profile.html">Tom Wilson</a></h4>
                        <span>Washington, Illinois</span>
                        <ul class="list-unstyled team-info m-b-0">
                            <li class="m-r-15"><small>Team</small></li>                               
                            <li><img src="/templates/dashy/assets/img/avatar7.jpg" alt="Avatar"></li>
                            <li><img src="/templates/dashy/assets/img/avatar2.jpg" alt="Avatar"></li>
                        </ul>
                    </div>
                    <ul class="agent-contact-details">
                        <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                        <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                    </ul>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card ">
                <div class="header">
                    <h2><strong>Sales</strong> Overview</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body table-responsive">
                    <table class="table table-hover table-borderless m-b-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width:40%;">Product</th>
                                <th class="number">Price</th>
                                <th style="width:20%;">Date</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:5%;" class="actions"></th>
                            </tr>
                        </thead>
                        <tbody class="no-border-x">
                            <tr>
                                <td>1</td>
                                <td>Sony Xperia M4</td>
                                <td class="number">$149</td>
                                <td>Aug 23, 2017</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Apple iPhone 6</td>
                                <td class="number">$535</td>
                                <td>Aug 20, 2017</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Samsung Galaxy S7</td>
                                <td class="number">$583</td>
                                <td>Aug 18, 2017</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>HTC One M9</td>
                                <td class="number">$350</td>
                                <td>Aug 15, 2017</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sony Xperia Z5</td>
                                <td class="number">$495</td>
                                <td>Aug 13, 2017</td>
                                <td><span class="badge badge-danger">Cancelled</span></td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Samsung Galaxy S9</td>
                                <td class="number">$583</td>
                                <td>Aug 18, 2017</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>HTC One M13</td>
                                <td class="number">$350</td>
                                <td>Aug 15, 2017</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Sony Xperia M4</td>
                                <td class="number">$149</td>
                                <td>Aug 23, 2017</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>                               
                        </tbody>
                    </table>
                </div>
            </div>
        </div>           
    </div>

@endsection
