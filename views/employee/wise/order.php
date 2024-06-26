<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Wise Order</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />
    <link rel="icon" type="image/x-icon" href="/wise/assets/img/logo/wiselogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous">
    <link href="../../../assets/css/color.min.css" rel="stylesheet" />

</head>
<style>
    #backgroundimage {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
        opacity: 0.2;
    }

    #owly {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 15%;
        height: 30%;
        z-index: -1;
    }
</style>

<body>
    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>
    <div id="app" class="app app-header-fixed app-sidebar-fixed">
        <img src="/wise/assets/img/logo/mainBackground.png" id="backgroundimage" alt="">
        <img src="/wise/assets/img/logo/owy.png" id="owly" alt="">
        <div class="content" id="order">
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-xl-6">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn me-3">
                                <a href="../../index.php" class="btn btn-xs btn-icon btn-default"><i class="fas fa-arrow-left"></i></a>
                            </div>
                            <h4 class="panel-title">Application for Job Order</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="fullname">Department * :</label>
                                    <div class="col-lg-8">
                                        <input class="form-control border-0" readonly type="text" id="department" value="<?php echo $_GET['departmentId002'] ?>" name="department" placeholder="<?php echo $_GET['departmentId002'] ?>" />
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="fullname">Full Name * :</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" id="name" v-model="name" placeholder="Enter Name" data-parsley-required="true" />
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="email">Email * :</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" id="email" v-model="email" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="message">Description :</label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="message" v-model="message" rows="2" placeholder="Enter Issue"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="message">Deadline :</label>
                                    <div class="col-lg-8">
                                        <input type="date" v-model="deadline" id="deadline" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="message">Priority</label>
                                    <div class="col-lg-8 d-flex">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" v-model="priority" name="priority" id="urgentPriority" value="Urgent" onchange="handleCheckboxChange('urgentPriority')">
                                            <label class="form-check-label" for="urgentPriority">Urgent</label>
                                        </div>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" v-model="priority" name="priority" id="scheduledPriority" value="Schedule" onchange="handleCheckboxChange('scheduledPriority')">
                                            <label class="form-check-label" for="scheduledPriority">Scheduled</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="attachment">Attachment :</label>
                                    <div class="col-lg-8">
                                        <div class="drop-zone border p-4 bg-light" id="drop-zone" ondragover="handleDragOver(event)" ondrop="handleDrop(event)">
                                            <p>Drag & Drop files here or click to select</p>
                                            <input type="file" class="form-control-file" id="pictures" name="pictures[]" accept="image/*" multiple required onchange="previewImages(this)">
                                            <small class="form-text text-muted">Attach one or more files.</small>
                                        </div>
                                        <div id="image-preview-container" class="mt-2"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label form-label">&nbsp;</label>
                                    <div class="col-lg-8">
                                        <button type="submit" @click="sendOrder" class="btn btn-primary col-5 float-end">Send Order</button>
                                        <a href="../../index.php" class="btn btn-secondary col-3 me-2 float-end">Close</a>
                                    </div>
                                </div>
                            </div>
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
    <script src="../../../assets/js/parsley.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../../assets/js/highlight.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../../assets/js/render.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script async src="../../../assets/js/googlet.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../../vue/vues/axios.js"></script>
    <script src="../../../vue/vues/vue.js"></script>
    <script src="../../../vue/vues/vue.3.js"></script>
    <script src="../../../vue/users/wiseconcern/order.js"></script>
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