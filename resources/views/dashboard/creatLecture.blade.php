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
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Compose New Message</h5>
                                <form action="/dashboard/creatLecture" method="POST" enctype="multipart/form-data" class="dropzone">
                                    @csrf
                                    <div class="Input-field">
                                        <input name="title1" placeholder="Vide title">
                                    </div>
                                    <div class="Input-field">
                                        <input name="title2" placeholder="Subject name or chapter name">
                                    </div>
                                    <h5 class="card-title"><i class="ti-link"></i>Video</h5>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>Video</span>
                                            <input name="video" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input name="videoName" class="file-path validate" type="text" placeholder="attach video">
                                        </div>
                                    </div>
                                    <div class="Input-field m-t-20 m-b-20">
                                        <textarea name="description" id="mymce"></textarea>
                                    </div>
                                    <h5 class="card-title"><i class="ti-link"></i> Attachment</h5>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input name="file" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input name="nameOfFile" class="file-path validate" type="text" placeholder="attach one or more files">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn green m-t-20">Compose</button>
                                    <button class="btn grey darken-4 m-t-20">Discard</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
