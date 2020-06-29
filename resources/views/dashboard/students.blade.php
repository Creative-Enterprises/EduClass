@include('dashboard.includes.header')

<body>
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
                    <div class="right-part mail-list">
                        <div class="p-15 b-b">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4>Studentbox <i class="ti-menu ti-close right show-left-panel hide-on-med-and-up"></i></h4>
                                    <span>Here is the list of all students</span>
                                </div>
                            </div>
                        </div>
                        <!-- Action part -->

                        <!-- Mail list-->
                        <div style="padding: 20px">
                            <table class="table-responsive table-hover table-bordered" >
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>User ID</th>
                                    <th>Password</th>
                                    <th>Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <th >{{$student->name}}</th>
                                    <td >{{$student->user_id}}</td>
                                    <td>{{$student->password}}</td>
                                    <th>{{$student->created_at}}</th>
                                    <td><span class="label cyan"><a href="/dashboard/editStudent/{{$student->id}}">Edit</a></span></td>
                                    <td ><span class="label label-warning"><a href="/dashboard/deleteStudent/{{$student->id}}">Delete</a></span></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
        </div>
        @include('dashboard.includes.setting')
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
    <script src="../../assets/libs/tinymce/tinymce.min.js"></script>
    <script>
    $(function() {
        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 250,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
        }
    });
    </script>
</body>

</html>
