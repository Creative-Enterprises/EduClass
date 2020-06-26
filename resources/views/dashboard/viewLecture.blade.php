@include('dashboard.includes.header')

<div class="main-wrapper" id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Material Admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
@include('dashboard.includes.toolbar')
<!-- ============================================================== -->
    <!-- Sidebar scss in sidebar.scss -->
    <!-- ============================================================== -->
@include('dashboard.includes.sidebar')
<!-- ============================================================== -->
    <!-- Sidebar scss in sidebar.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="app-container">
            <!-- ============================================================== -->
            <!-- Email App Part -->
            <!-- ============================================================== -->
            <div class="email-app">
                <!-- ============================================================== -->
                <!-- Left Part -->
                <!-- ============================================================== -->
            @include('dashboard.includes.composer')
            <!-- ============================================================== -->
                <!-- Right Part -->
                <!-- ============================================================== -->
                <div class="right-part">
                    <!-- Mail list-->
                    <div class="email-body">
                        <div class="divider"></div>
                        <ul class="collapsible expandable b-0 m-t-0">
                            <li class="active">
                                <div class="collapsible-header">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="">
                                            <h5 class="m-b-0 font-16 font-medium">{{$viewDetails->title1}}<small>{{$viewDetails->created_at}}</small></h5><span>{{$viewDetails->title2}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapsible-body">

                                    <h6>{{$viewDetails->title2}}</h6>
                                    <br>
                                    {{$viewDetails->description}}
                                    <h6 class="m-t-30 font-medium">Attachment (3)</h6>
                                    <div class="row row-minus m-t-20">
                                        <div class="col s12 l3">
                                            <img src="{{url('video/'.$viewDetails->videoName)}}" class="responsive-img">
                                            <a href="#" class="m-r-10">Video</a><a href="#">Download</a>
                                        </div>
                                        <div class="col s12 l3">
                                            <img src="{{url('attachment/'.$viewDetails->attachment2)}}" class="responsive-img">
                                            <a href="#" class="m-r-10">Attachment</a><a href="#">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    @include('dashboard.includes.setting')
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../../dist/js/materialize.min.js"></script>
<script src="../../assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!-- ============================================================== -->
<!-- Apps -->
<!-- ============================================================== -->
<script src="../../dist/js/app.js"></script>
<script src="../../dist/js/app.init.js"></script>
<script src="../../dist/js/app-style-switcher.js"></script>
<!-- ============================================================== -->
<!-- Custom js -->
<!-- ============================================================== -->
<script src="../../dist/js/custom.min.js"></script>
<script src="../../dist/js/pages/inbox/email.js"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
</body>

</html>
