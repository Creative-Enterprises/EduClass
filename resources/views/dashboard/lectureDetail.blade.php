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

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
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
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Attachment</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lectureDetails as $detail)
                                    <tr>
                                        <td>
                                            <div class="d-flex no-block align-items-center">
                                                <div class="">
                                                    <h5 class="m-b-0 font-16 font-medium">{{$detail->title1}}</h5><span>{{$detail->title2}}</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="">{{$detail->description}}</p>
                                        </td>
                                        <td class="blue-grey-text text-darken-4 font-medium">{{$detail->attachment1}}</td>
                                        <td>{{$detail->created_at}}</td>
                                        <td><span class="label label-info">Available</span></td>
                                        <td><span class="label label-warning"><a href="/dashboard/viewLecture/{{$detail->id}}">View</a></span></td>
                                        <td ><span class="label cyan"><a href="/dashboard/editLecture/{{$detail->id}}">Edit</a></span></td>
                                        <td><span class="label label-warning"><a href="/dashboard/deleteLecture/{{$detail->id}}">Delete</a></span></td>
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
