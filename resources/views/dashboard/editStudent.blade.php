@include('dashboard.includes.header')
<div class="main-wrapper" id="main-wrapper">

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
        <!-- Title and breadcrumb -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales Summery -->
            <!-- ============================================================== -->

            <div class="row">
                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Add Student</h5>
                            <div class="message-box">
                                <form  action="addStudent" method="POST" style="padding: 30px">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name of the student</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$editDetail->name}}" placeholder="Enter student name">
                                        <small id="emailHelp" class="form-text text-muted">This should be your student name.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Standard</label>
                                        <input type="text" class="form-control" name="std" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$editDetail->std}}" placeholder="Enter student standard">
                                        <small id="emailHelp" class="form-text text-muted">This should be name of standard which he study.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User ID</label>
                                        <input type="text" class="form-control" name="user_id" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$editDetail->user_id}}" placeholder="Enter username">
                                        <small id="emailHelp" class="form-text text-muted">This should be your student name,roll no. or any thing.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{$editDetail->password}}" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 l8">
                    <div class="card news-slide" style="background:url(../../assets/images/carousel/img6.jpg) center center / cover;">
                        <div class="carousel carousel-slider" >
                            <a class="carousel-item" href="#one!">
                                <div class="carousel-caption">
                                    <span class="label label-danger label-rounded">News</span>
                                    <h3 class="m-t-5 font-light white-text">Market Stock exchange status</h3>
                                    <p class="white-text">It has survived not only five centuries, but also the leap into electronic typesetting</p>
                                    <div class="row">
                                        <div class="col m4 m-t-10">
                                            <h4 class="m-b-0 green-text"><i class="ti-arrow-up"></i>350</h4><span class="white-text op-5">Reliance</span>
                                        </div>
                                        <div class="col m4 m-t-10">
                                            <h4 class="m-b-0 orange-text text-darken-2"><i class="ti-arrow-down"></i>-150</h4><span class="white-text op-5">Birla</span>
                                        </div>
                                        <div class="col m4 m-t-10">
                                            <h4 class="m-b-0 green-text"><i class="ti-arrow-up"></i>650</h4><span class="white-text op-5">Tata</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="carousel-item" href="#one!" style="background:url(../../assets/images/carousel/img6.jpg) center center / cover;">
                                <div class="carousel-caption">
                                    <span class="label label-danger label-rounded">Personal</span>
                                    <p class="white-text m-t-10">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                            </a>
                            <a class="carousel-item" href="#one!" style="background:url(../../assets/images/carousel/img6.jpg) center center / cover;">
                                <div class="carousel-caption">
                                    <span class="label label-info label-rounded">Design</span>
                                    <p class="white-text m-t-10">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- product sales anf active users -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
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
@include('dashboard.includes.footer')
