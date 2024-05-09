<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>IT Administration</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous">
    <link href="../../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../../assets/css/color.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/wise/assets/img/logo/wiselogo.png">

    <link href="../../assets/plugin/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="../../assets/plugin/responsive.bootstrap5.min.css" rel="stylesheet" />
    <style>
        dl {
            margin-bottom: 50px;
        }

        dl dt {
            background: #5f9be3;
            color: #fff;
            float: left;
            font-weight: bold;
            margin-right: 10px;
            padding: 5px;
            width: 100px;
        }

        dl dd {
            margin: 2px 0;
        }
    </style>
</head>

<body>

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>

    <div id="app" class="app app-header-fixed app-sidebar-fixed">
        <div id="application">

            <div id="header" class="app-header">

                <div class="navbar-header">
                    <a href="dashboard.php" class="navbar-brand">
                        <img src="../../assets/img/logo/wiselogo.png" alt="">
                        <b class="me-3px">W I S E </b>
                    </a>
                    <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

            </div>

            <div id="sidebar" class="app-sidebar" data-bs-theme="dark">

                <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

                    <div class="menu">
                        <div class="menu-profile">
                            <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                                <div class="menu-profile-cover with-shadow"></div>
                                <div class="menu-profile-image">
                                    <img src="../../assets/img/logo/wiselogo.png" alt />
                                </div>
                                <div class="menu-profile-info">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            IT Administration
                                        </div>
                                        <div class="menu-caret ms-auto"></div>
                                    </div>
                                    <small>IT Office</small>
                                </div>
                            </a>
                        </div>
                        <div id="appSidebarProfileMenu" class="collapse">
                            <div class="menu-item pt-5px">
                                <a href="#" class="menu-link">
                                    <div class="menu-icon"><i class="fas fa-sign-out-alt"></i></div>
                                    <div class="menu-text" onclick="logout()">Logout</div>
                                </a>
                            </div>
                            <div class="menu-divider m-0"></div>
                        </div>
                        <div class="menu-header">Navigation</div>
                        <div class="menu-item py-1">
                            <a href="dashboard.php" class="menu-link">
                                <div class="menu-icon">
                                    <i class="fa fa-sitemap" aria-hidden="true"></i>
                                </div>
                                <div class="menu-text">Dashboard</div>
                            </a>
                        </div>
                        <div class="menu-item py-1">
                            <a href="account.php" class="menu-link">
                                <div class="menu-icon">
                                    <i class="fas fa-users" aria-hidden="true"></i>
                                </div>
                                <div class="menu-text">Users Account</div>
                            </a>
                        </div>
                        <div class="menu-item has-sub">
                            <a href="javascript:;" class="menu-link">
                                <div class="menu-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="menu-text">Wise Department</div>
                                <div class="menu-caret"></div>
                            </a>


                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="concern.php?department000=Admin" class="menu-link">
                                        <div class="menu-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="menu-text">Admin</div>
                                        <div :class="parseInt(totalPendingAdmin) || parseInt(totalDoneAdmin) !== 0 ? 'text-end text-danger' : 'text-end'">
                                            {{ parseInt(totalPendingAdmin) || parseInt(totalDoneAdmin) !== 0 ? parseInt(totalPendingAdmin) + parseInt(totalDoneAdmin) : '' }}
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="concern.php?department000=Documentation" class="menu-link">
                                        <div class="menu-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="menu-text">Documentation</div>
                                        <div :class="parseInt(totalPendingDocumentation) || parseInt(totalDoneDocumentation) !== 0 ? 'text-end text-danger' : 'text-end'">
                                            {{ parseInt(totalPendingDocumentation) || parseInt(totalDoneDocumentation) !== 0 ? parseInt(totalPendingDocumentation) + parseInt(totalDoneDocumentation) : '' }}
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="concern.php?department000=Accounting" class="menu-link">
                                        <div class="menu-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="menu-text">Accounting</div>
                                        <div :class="parseInt(totalPendingAccounting) || parseInt(totalDoneAccounting) !== 0 ? 'text-end text-danger' : 'text-end'">
                                            {{ parseInt(totalPendingAccounting) || parseInt(totalDoneAccounting) !== 0 ? parseInt(totalPendingAccounting) + parseInt(totalDoneAccounting) : '' }}
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="concern.php?department000=Human Resource" class="menu-link">
                                        <div class="menu-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="menu-text">Human Resource</div>
                                        <div :class="parseInt(totalPendingHuman) || parseInt(totalDoneHuman) !== 0 ? 'text-end text-danger' : 'text-end'">
                                            {{ parseInt(totalPendingHuman) || parseInt(totalDoneHuman) !== 0 ? parseInt(totalPendingHuman) + parseInt(totalDoneHuman) : '' }}
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="concern.php?department000=Sales" class="menu-link">
                                        <div class="menu-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="menu-text">Sales</div>
                                        <div :class="parseInt(totalPendingSalesByDay) || parseInt(totalDoneSalesByDay) !== 0 ? 'text-end text-danger' : 'text-end'">
                                            {{ parseInt(totalPendingSalesByDay) || parseInt(totalDoneSalesByDay) !== 0 ? parseInt(totalPendingSalesByDay) + parseInt(totalDoneSalesByDay) : '' }}
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="concern.php?department000=Marketing" class="menu-link">
                                        <div class="menu-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="menu-text">Marketing</div>
                                        <div :class="parseInt(totalPendingMarketingByDay) || parseInt(totalDoneMarketingByDay) !== 0 ? 'text-end text-danger' : 'text-end'">
                                            {{ parseInt(totalPendingMarketingByDay) || parseInt(totalDoneMarketingByDay) !== 0 ? parseInt(totalPendingMarketingByDay) + parseInt(totalDoneMarketingByDay) : '' }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-item py-1">
                            <a href="search.php" class="menu-link">
                                <div class="menu-icon">
                                    <i class="fas fa-users" aria-hidden="true"></i>
                                </div>
                                <div class="menu-text">Search Data</div>
                            </a>
                        </div>

                        <div class="menu-item py-1">
                            <a href="allData.php" class="menu-link">
                                <div class="menu-icon">
                                    <i class="fas fa-database"></i>
                                </div>
                                <div class="menu-text">View All Data</div>
                            </a>
                        </div>
                        <div class="menu-item d-flex">
                            <a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                        </div>

                    </div>

                </div>

            </div>
            <div class="app-sidebar-bg" data-bs-theme="dark"></div>
            <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>


            <div id="content" class="app-content" v-for="userInfo of userRequestInformations">

                <div class="panel panel-inverse">

                    <div class="panel-heading">
                        <h4 class="panel-title" id="concernTitle">Information Concern</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="panel-body p-2 py-4 row justify-content-between">
                        <div class="col-7 p-3">
                            <div class="col-12 shadow p-3 border-top rounded">
                                <h5 class="fw-bolder">{{userInfo.name}}</h5>
                                <span class="text-primary">Email:</span> {{userInfo.email}}
                            </div>
                            <div class="col-12 shadow p-3 mt-4 border-top rounded">
                                <div class="text-center py-2 mb-2 bg-primary text-white rounded">
                                    Messages
                                </div>
                                <div class="border p-1 rounded border-2 border-black pb-3 " style="height: 100px;">
                                    {{userInfo.issue}}
                                </div>
                            </div>
                            <div class="col-12 shadow p-3 mt-4 border-top rounded">
                                <span>{{ getRequestAction.length == 0 ? 'No Comment Yet or No Comment At All' : '' }}</span>
                                <div class="row" v-for="ac of getRequestAction">
                                    <div class="col-3">
                                        <select class="form-select col-3" disabled>
                                            <option :value="ac.action_taken">{{ ac.action_taken == 1 ? 'Physical' : 'Remote'}}</option>
                                        </select>
                                    </div>
                                    <div class="col-9">
                                        <textarea class="form-control col-9" disabled placeholder="Comment Action Taken">{{ ac.comment_taken }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 shadow p-3 mt-4 border-top rounded">
                                <div class="text-center py-2 mb-2 bg-primary text-white rounded">
                                    Attachment
                                </div>
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div v-for="(pic, index) in userPictureRequest" :key="index" class="carousel-item" :class="{ 'active': index === 0 }">
                                            <img :src="'../../assets/img/employeefiles/' + pic" class="w-100" height="370" alt="Picture">

                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 p-3">
                            <div class="col-12 shadow p-3 border-top rounded">
                                <div class="row mb-3">
                                    <span class="col-6">Ticket Status:</span>
                                    <span :class="userInfo.status == 0 ? 'text-danger col-6' : 'text-primary col-6'">
                                        {{userInfo.status == 0 ? 'Pending' : 'Done'}}<br>
                                        <a :class="userInfo.status == 0 ? 'btn btn-sm btn-link' : 'visually-hidden'" @click="getIdMarkAsDone(userInfo.request_id)" data-bs-toggle="modal" data-bs-target="#markasdoneRequest">Mark as Done</a>
                                        <div class="modal fade" id="markasdoneRequest" tabindex="-1" aria-labelledby="markasdoneRequestLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="markasdoneRequestLabel">Request Update</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Enter comment to mark as done this request.
                                                        <div class="col-12 shadow p-3 mt-4 border-top rounded">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <select class="form-select col-3" v-model="actionTaken">
                                                                        <option value="1">Physical</option>
                                                                        <option value="2">Remote</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-9">
                                                                    <textarea class="form-control col-9" v-model="commentAction" placeholder="Comment Action Taken"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                                                                <button class="btn btn-primary" type="button" :disabled="allowedChangeStatus" @click="addThisActionRequest(userInfo.request_id)">Save this action</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <button type="button" class="btn btn-primary" :disabled="!allowedChangeStatus" @click="pendingDoneRequest(pendingDoneStatusId)">Yes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="row mb-3">
                                    <span class="col-6">Department:</span>
                                    <span class="col-6">{{ userInfo.department }}</span>
                                </div>
                                <div class="row mb-3">
                                    <span class="col-6">Priority:</span>
                                    <span class="col-6">{{userInfo.priority}}</span>
                                </div>
                                <div class="row mb-3">
                                    <span class="col-6">Concern</span>
                                    <span class="col-6">{{userInfo.concern}}</span>
                                </div>
                            </div>
                            <div class="col-12 shadow p-3 border-top mt-4 rounded">
                                <div class="row mb-3">
                                    <span class="col-6">Ticket ID's:</span>
                                    <span class="col-6"><u>{{ticketCodeRequest}}{{userInfo.request_id}}</u></span>
                                </div>
                                <div class="row mb-3">
                                    <span class="col-6">Ticket Number:</span>
                                    <span class="col-6">{{userInfo.request_id}}</span>
                                </div>
                                <div class="row mb-3">
                                    <span class="col-6">Created at :</span>
                                    <span class="col-6">{{getDateToString(userInfo.created_at)}}</span>
                                </div>
                                <div class="row mb-3">
                                    <span class="col-6">Assigned To:</span>
                                    <span class="col-6">{{userInfo.assigned}}</span>
                                </div>
                            </div>
                            <div class="mt-4 text-end">
                                <button class="btn btn-secondary col-5" onclick="history.back()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="theme-panel">
                    <a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fas fa-cog"></i></a>
                    <div class="theme-panel-content" data-scrollbar="true" data-height="100%">
                        <h5> App Settings </h5>

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

            </div>
        </div>

        <script src="../../assets/js/vendor.min.js"></script>
        <script src="../../assets/js/color.min.js"></script>

        <script src="../../assets/plugin/jquery.dataTables.min.js"></script>
        <script src="../../assets/plugin/dataTables.bootstrap5.min.js"></script>
        <script src="../../assets/plugin/dataTables.responsive.min.js"></script>
        <script src="../../assets/plugin/responsive.bootstrap5.min.js"></script>
        <script src="../../assets/plugin/table-manage-default.demo.js"></script>
        <script src="../../assets/plugin/highlight.min.js"></script>
        <script src="../../assets/plugin/render.highlight.js"></script>
        <script src="../../vue/vues/axios.js"></script>
        <script src="../../vue/vues/vue.js"></script>
        <script src="../../vue/vues/vue.3.js"></script>
        <script src="../../vue/admin/wiseconcern/concern.js"></script>
        <script>
            $(document).ready(function() {
                $('#selection').on('change', function() {
                    var selectedOption = $(this).val();

                    if (selectedOption == 1) {

                        $('#concernTableBody').addClass('visually-hidden');
                        $('#jobOrderTableBody').removeClass('visually-hidden');

                        $('#concernTitle').addClass('visually-hidden');
                        $('#jobOrderTitle').removeClass('visually-hidden');

                        $('#concernTableHead').addClass('visually-hidden');
                        $('#jobOrderTableHead').removeClass('visually-hidden');

                    } else if (selectedOption == 2) {

                        $('#concernTableBody').removeClass('visually-hidden');
                        $('#jobOrderTableBody').addClass('visually-hidden');

                        $('#concernTitle').removeClass('visually-hidden');
                        $('#jobOrderTitle').addClass('visually-hidden');

                        $('#concernTableHead').removeClass('visually-hidden');
                        $('#jobOrderTableHead').addClass('visually-hidden');

                    }
                });
            });

            function logout() {
                window.location.href = '../../app/session/logout.php';
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
        <script src="{{ asset('js/rocketloader.min.js') }}" data-cf-settings="9dd2961859eb1e28de60110d-|49" defer></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"849cd0090baf0445","r":1,"version":"2024.1.0","token":"4db8c6ef997743fda032d4f73cfeff63"}' crossorigin="anonymous"></script>
</body>

</html>