@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Buttons Builder
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link href="{{ asset('assets/css/pages/buttonbuilder2.css') }}" rel="stylesheet"/>
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Button Builder</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Builders</a>
                    </li>
                    <li class="active">Button Builder</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissable d-block-xs d-block-md">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            May not work properly in touch enabled devices as it as requires drag and drop.
                        </div>
                        <div class="card panel-primary">
                            <div class="card-heading">
                                <h3 class="card-title">
                                    <i class="livicon" data-name="vector-square" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Button Builder
                                </h3>
                                <span class="float-right clickable">
                                    <i class="fa fa-chevron-up"></i>
                                </span>
                            </div>
                            <div class="card-body">
                                <!-- button Builder. -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="lead">Generated code</p>
                                        <div class="well">
                                            <div id="result">
                                                <div id="button">
                                                    <a href="#" class="btn btn-sm btn-primary">
                                                        <span class="fa fa-check"></span>
                                                        Default text here
                                                    </a>
                                                </div>
                                                <br>
                                                <p>
                                                    Generated Code
                                                    <input id="output" type="text" class="form-control input-block-level" placeholder="Output"></p>
                                            </div>
                                        </div>
                                        <p></p>
                                        <div id="carbonads-container"></div>
                                        <p></p>
                                        <hr></div>
                                    <div class="col-md-6">
                                        <p class="lead">Button text :</p>
                                        <p id="input">
                                            <input id="name" autocomplete="off" class="form-control" type="text" placeholder="Please enter your button name"></p>
                                        <p class="lead">Color :</p>
                                        <div id="types" class="btn-group">
                                            <button name="color" type="button" class="btn btn-default" value="btn-default">Default</button>
                                            <button name="color" type="button" class="btn btn-primary" value="btn-primary">Primary</button>
                                            <button name="color" type="button" class="btn btn-info" value="btn-info">Info</button>
                                            <button name="color" type="button" class="btn btn-success" value="btn-success">Success</button>
                                            <button name="color" type="button" class="btn btn-warning" value="btn-warning">Warning</button>
                                            <button name="color" type="button" class="btn btn-danger" value="btn-danger">Danger</button>
                                        </div>
                                        <p class="lead">Size :</p>
                                        <div id="sizes">
                                            <p>
                                                <button class="btn btn-xs btn-primary" value="btn-xs" type="button">Mini</button>
                                                <button class="btn btn-sm btn-primary" value="btn-sm" type="button">Small</button>
                                                <button class="btn btn-md btn-primary" value="btn-md" type="button">Default</button>
                                                <button class="btn btn-primary btn-lg" value="btn-lg" type="button">Large</button>
                                            </p>
                                            <p>
                                                <a href="#" class="btn btn-primary btn-block" data-toggle="button">Full width button</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="icons">
                                            <p class="lead">Icon :</p>
                                            <div class="row">
                                                <div class="col-md-2 m-b-5">Search icons :</div>
                                                <div class="col-md-4 m-b-5">
                                                    <input id="search" type="text" autocomplete="off" placeholder="Search icon" class="typeahead form-control"></div>
                                                <div class="col-md-6 m-b-5">
                                                    Icon position :
                                                    <div id="icon-position" class="btn-group">
                                                        <button class="btn btn-default" value="left" type="button">
                                                            <span class="glyphicon glyphicon-arrow-left"></span>
                                                            &nbsp; &nbsp;Left
                                                        </button>
                                                        <button class="btn btn-default" value="right" type="button">
                                                            Right &nbsp; &nbsp;
                                                            <span class="glyphicon glyphicon-arrow-right"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="bs-glyphicons">
                                                        <li>
                                                            <a href="d#" class="btn btn-default">
                                                                <span class="fa fa-adjust"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-align-center"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-align-justify"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-align-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-align-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrow-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrow-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrow-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrow-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-asterisk"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-backward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-circle"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-barcode"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-bell"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-bold"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-book"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-bookmark"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-briefcase"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-bullhorn"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-calendar"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-camera"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-certificate"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-check"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-chevron-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-chevron-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-chevron-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-chevron-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrow-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrow-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrow-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrow-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-cloud"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-cloud-download"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-cloud-upload"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-cog"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-comment"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-compress"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-copyright"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-credit-card"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-cutlery"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-dashboard"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-download"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-download"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-phone"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-edit"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-eject"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-envelope"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-euro"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-exclamation"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-expand"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-facebook"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-fast-backward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-fast-forward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-file"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-film"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-filter"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-fire"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-flag"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-flash"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-floppy-o"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-folder"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-folder-open"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-font"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-forward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrows-alt"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-gbp"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-gift"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-glass"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-globe"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-hand-o-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-hand-o-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-hand-o-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-hand-o-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-hdd-o"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-header"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-headphones"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-heart-o"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-heart"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-home"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-upload"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-inbox"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-indent"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-info"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-italic"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-leaf"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-link"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-list"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-list-alt"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-lock"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-sign-in"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-sign-out"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-magnet"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-map-marker"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-minus"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrows"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-music"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-toggle-off"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-paperclip"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-pause"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-pencil"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-phone"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-picture-o"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-plane"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-play"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-play-circle"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-plus"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-print"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-map-pin"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-qrcode"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-question"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-random"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-refresh"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-remove"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-repeat"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrows-v"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-expand"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-arrows-h"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-retweet"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-road"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-save"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-desktop"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-search"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-send"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-share"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-share-alt"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-signal"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-sort"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-sort-alpha-desc"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-sort-alpha-asc"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-sort"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-volume-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-volume-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-volume-off"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-microphone-slash"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-star"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-step-backward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-step-forward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-stop"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-tag"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-tags"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-tasks"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-text-height"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-text-width"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-th"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-th-large"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-th-list"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-thumbs-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-thumbs-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-times-circle-o"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-tint"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-power-off"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-exchange"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-trash"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-tree"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-unlock"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-upload"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-usd"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-user"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-volume-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-volume-off"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-volume-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="fa fa-warning"></span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--button builder ends--> </div>
                        </div>
                    </div>
                </div>
                <!--main content ends--> </section>
            <!-- content --> 
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script src="{{ asset('assets/js/pages/scripts.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/underscore/js/underscore-min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/backbone/js/backbone-min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/buttonbuilder.js') }}"  type="text/javascript"></script>
    
@stop
