<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Wise Immersion and Study Services</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />
    <link rel="icon" type="image/x-icon" href="/wise/assets/img/logo/wiselogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous">
    <link href="../../../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../../../assets/css/color.min.css" rel="stylesheet" />

    <link href="../../../assets/css/fileupload/blueimp-gallery.min.css" rel="stylesheet" />
    <link href="../../../assets/css/fileupload/jquery.fileupload.css" rel="stylesheet" />
    <link href="../../../assets/css/fileupload/jquery.fileupload-ui.css" rel="stylesheet" />
    <style>
        .invalid-checkbox {
            border: 2px solid red;
        }

        .custom-select-wrapper {
            position: relative;
            display: inline-block;
        }

        .custom-select {
            display: block;
            width: 100%;
            padding: 0.375rem 1.75rem 0.375rem 0.75rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .custom-select-icon {
            position: absolute;
            top: 50%;
            right: 0.75rem;
            transform: translateY(-50%);
        }
    </style>
</head>

<body>

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>
    <div id="app" class="app app-header-fixed app-sidebar-fixed">

        <div id="header" class="app-header">

            <div class="navbar-header">
                <a href="../../index.php" class="navbar-brand"><b class="me-3px">W I S E</b></a>
                <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

        </div>
        <div class="content" id="request">
            <div class="row justify-content-center align-items-center mt-5">

                <div class="col-xl-6">

                    <div class="panel panel-inverse">

                        <div class="panel-heading">
                            <div class="panel-heading-btn me-3">
                                <a href="../../index.php" class="btn btn-xs btn-icon btn-default"><i class="fas fa-arrow-left"></i></a>
                            </div>
                            <h4 class="panel-title">Application for Request Slip</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form action="#" class="form-horizontal" method="POST" enctype="multipart/form-data" novalidate>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="fullname">Department <span class="text-danger">*</span> :</label>
                                    <div class="col-lg-8">
                                        <input class="form-control border-0" readonly type="text" id="department" v-model="department" name="department" />
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="fullname">Requester Name <span class="text-danger">*</span>:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" id="name" name="name" v-model="name" placeholder="Enter Name" />
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="email">Requester Email <span class="text-danger">*</span>:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" id="email" name="email" v-model="email" data-parsley-type="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="message">Concern <span class="text-danger">*</span>:</label>
                                    <div class="col-lg-8 custom-select-wrapper">
                                        <select name="concern" id="concern" v-model="concern" class="form-select custom-select">
                                            <option selected hidden value="0">Select Type of Concern</option>
                                            <option value="Outlook">Outlook</option>
                                            <option value="Drive/Files">Drive/Files</option>
                                            <option value="Zoom, Skype & FB">Zoom, Skype & FB</option>
                                            <option value="Replacement Item">Replacement Item</option>
                                            <option value="Others">Others</option>
                                            <i class="fas fa-caret-down custom-select-icon"></i>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="message">Issue :</label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="message" name="message" v-model="message" rows="2" placeholder="Enter Issue"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="message">Assigned To :</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="assignedto" name="assignedto" v-model="assignedto"></input>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="message">Priority <span class="text-danger">*</span></label>
                                    <div class="col-lg-8 d-flex">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" v-model="priority" name="priority" id="easyPriority" value="Easy" onchange="handleCheckboxChange('easyPriority')">
                                            <label class="form-check-label" for="easyPriority">Easy</label>
                                        </div>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" v-model="priority" name="priority" id="moderatePriority" value="Moderate" onchange="handleCheckboxChange('moderatePriority')">
                                            <label class="form-check-label" for="moderatePriority">Moderate</label>
                                        </div>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" v-model="priority" name="priority" id="hardPriority" value="Hard" onchange="handleCheckboxChange('hardPriority')">
                                            <label class="form-check-label" for="hardPriority">Hard</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="attachment">Attachment :</label>
                                    <div class="col-lg-8">
                                        <div class="drop-zone border p-4 bg-light" id="drop-zone" ondragover="handleDragOver(event)" ondrop="handleDrop(event)">
                                            <p>Drag & Drop files here or click to select</p>
                                            <input type="file" class="form-control-file" id="pictures" name="pictures[]" accept="image/*" v-model="pictures" multiple required onchange="previewImages(this)">
                                            <small class="form-text text-muted">Attach one or more files.</small>
                                        </div>
                                        <div id="image-preview-container" class="mt-2"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-label">&nbsp;</label>
                                    <div class="col-lg-8">
                                        <button type="button" @click="sendRequest" class="btn btn-primary col-5 float-end">Send Concern</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="hljs-wrapper">
                            <pre><code class="html" data-url="../assets/data/form-validation/code-1.json"></code></pre>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="theme-panel">
            <a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fas fa-cog"></i></a>
            <div class="theme-panel-content" data-scrollbar="true" data-height="100%">
                <h5>App Settings </h5>

                <div class="theme-panel-divider"></div>

                <div class="row mt-10px">
                    <div class="col-8 control-label text-body fw-bold">
                        <div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span></div>
                        <div class="lh-14">
                            <small class="text-body opacity-50">
                                Adjust the appearance to reduce glare and give your eyes a break.
                            </small>
                        </div>
                    </div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
                            <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
                        </div>
                    </div>
                </div>

            </div>


        </div>


        <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

    </div>


    <script src="../../../assets/js/vendor.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../../assets/js/color.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../../assets/js/jquery.gritter.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../../assets/js/parsley.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../../assets/js/highlight.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../../assets/js/render.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script async src="../../../assets/js/googlet.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script type="text/javascript" src="../../../vue/vues/axios.js"></script>
    <script type="text/javascript" src="../../../vue/vues/vue.js"></script>
    <script type="text/javascript" src="../../../vue/vues/vue.3.js"></script>
    <script type="text/javascript" src="../../../vue/users/wiseconcern/request.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script>
        function previewImages(input) {
            var previewContainer = document.getElementById('image-preview-container');
            previewContainer.innerHTML = '';

            var files = input.files;

            for (var i = 0; i < files.length; i++) {
                var reader = new FileReader();
                var preview = document.createElement('img');
                preview.className = 'mt-2';
                preview.style.maxWidth = '100%';
                preview.style.width = '160px';
                preview.style.height = '160px';

                reader.onloadend = (function(image) {
                    return function(e) {
                        image.src = e.target.result;
                    };
                })(preview);

                if (files[i]) {
                    reader.readAsDataURL(files[i]);
                    previewContainer.appendChild(preview);
                }
            }
        }

        function handleDragOver(event) {
            event.preventDefault();
            var dropZone = document.getElementById('drop-zone');
            dropZone.classList.add('drag-over');
        }

        function handleDrop(event) {
            event.preventDefault();
            var dropZone = document.getElementById('drop-zone');
            dropZone.classList.remove('drag-over');

            var files = event.dataTransfer.files;
            var input = document.querySelector('input[name="pictures[]"]');
            input.files = files;

            previewImages(input);
        }

        function handleCheckboxChange(checkboxId) {
            var checkboxes = document.getElementsByName('priority');

            checkboxes.forEach(function(checkbox) {
                if (checkbox.id !== checkboxId) {
                    checkbox.checked = false;
                }
            });
        }

        function validateForm() {
            var checkboxes = document.getElementsByName('priority');
            var isChecked = false;

            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });

            if (!isChecked) {
                checkboxes.forEach(function(checkbox) {
                    checkbox.classList.add('invalid-checkbox');
                });
                return false;
            }

            return true;
        }
    </script>

    <script type="9dd2961859eb1e28de60110d-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Y3Q0VGQKY3');
    </script>
    <script src="../../../assets/js/rocketloader.min.js" data-cf-settings="9dd2961859eb1e28de60110d-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"849cd0090baf0445","r":1,"version":"2024.1.0","token":"4db8c6ef997743fda032d4f73cfeff63"}' crossorigin="anonymous"></script>
</body>

</html>