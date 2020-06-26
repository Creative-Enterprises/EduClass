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
                    <div class="col l3 m6 s12">
                        <div class="card danger-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">250</h2>
                                        <h6 class="white-text op-5 light-blue-text">Invoices</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card info-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">520</h2>
                                        <h6 class="white-text op-5">News Feed</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">receipt</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card success-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">100</h2>
                                        <h6 class="white-text op-5 text-darken-2">Sales</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">equalizer</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card warning-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">450</h2>
                                        <h6 class="white-text op-5">Revenue</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">attach_money</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter student name">
                                            <small id="emailHelp" class="form-text text-muted">This should be your student name.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Standard</label>
                                            <input type="text" class="form-control" name="std" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter student standard">
                                            <small id="emailHelp" class="form-text text-muted">This should be name of standard which he study.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User ID</label>
                                            <input type="text" class="form-control" name="user_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                                            <small id="emailHelp" class="form-text text-muted">This should be your student name,roll no. or any thing.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="card-title">Teachers</h5>
                                    </div>
                                </div>
                                <div class="table-responsive m-b-20">
                                    <table class="">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Subject</th>
                                                <th>Price</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Progress</th>
                                                <th>Sales</th>
                                                <th>Earned</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img src="../../assets/images/users/d1.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Hanna Gover</h5><span>hgover@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="">Elite Admin</p>
                                                </td>
                                                <td class="blue-grey-text text-darken-4 font-medium">$96K</td>
                                                <td>May 23, 2018</td>
                                                <td><span class="label label-info">Sale</span></td>
                                                <td class="green-text"><i class="fa fa-arrow-up"></i> 23%</td>
                                                <td>2356</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$96K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img src="../../assets/images/users/d2.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Daniel Kristeen</h5><span>Kristeen@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="">Real Homes WP Theme</p>
                                                </td>
                                                <td class="blue-grey-text text-darken-4 font-medium">$85K</td>
                                                <td>May 23, 2018</td>
                                                <td><span class="label cyan">Extended</span></td>
                                                <td class="green-text"><i class="fa fa-arrow-up"></i> 12%</td>
                                                <td>2198</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$85K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img src="../../assets/images/users/d3.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Julian Josephs</h5><span>Josephs@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="">MedicalPro WP Theme</p>
                                                </td>
                                                <td class="blue-grey-text text-darken-4 font-medium">$81K</td>
                                                <td>May 23, 2018</td>
                                                <td><span class="label label-primary">Multiple</span></td>
                                                <td class="orange-text"><i class="fa fa-arrow-down"></i> 07%</td>
                                                <td>1237</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$76K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img src="../../assets/images/users/2.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Jan Petrovic</h5><span>hgover@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="">HostinPress Html</p>
                                                </td>
                                                <td class="blue-grey-text text-darken-4 font-medium">-$30K</td>
                                                <td>May 23, 2018</td>
                                                <td><span class="label label-warning">Tax</span></td>
                                                <td class="green-text"><i class="fa fa-arrow-up"></i> 25%</td>
                                                <td>1956</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$90K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="javascript: void(0)"><i class="fas fa-angle-right"></i> View Complete Report</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <footer class="center-align m-b-30">All Rights Reserved by Materialart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.</footer>
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
