<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>IT Administration</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />
    <link rel="icon" type="image/x-icon" href="/wise/assets/img/logo/wiselogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous">
    <link href="../../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../../assets/css/color.min.css" rel="stylesheet" />

    <link href="../../assets/plugin/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="../../assets/plugin/responsive.bootstrap5.min.css" rel="stylesheet" />
    <style>
        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 10ch;
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

                        <div class="menu-item py-1 active">
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

            <div id="content" class="app-content">
                <div class="modal fade text-" id="markasdoneRequest" tabindex="-1" aria-labelledby="markasdoneRequestLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="markasdoneRequestLabel">Request Update</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to mark as done this request?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <button type="button" class="btn btn-primary" @click="pendingDoneRequest(pendingDoneStatusId)">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="markasdoneOrder" tabindex="-1" aria-labelledby="markasdoneOrderLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="markasdoneOrderLabel">Order Update</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to mark as done this order?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <button type="button" class="btn btn-primary" @click="pendingDoneOrder(pendingDoneStatusId)">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <h1 class="page-header"><span class="fw-bolder text-capitalize"><small> Tables </small></h1>
                    <div class="col-2">
                        <select name="selection" id="selection" class="form-control ">
                            <option value="2">Concern</option>
                            <option value="1">Job Order</option>
                        </select>
                    </div>
                </div>

                <div class="panel panel-inverse">

                    <div class="panel-heading">
                        <h4 class="panel-title" id="concernTitle">Employee Concern - Table - Concern </h4>
                        <h4 class="panel-title visually-hidden" id="jobOrderTitle">Employee Concern - Table - Job</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table id="data-table-default" class="table table-striped table-bordered align-middle w-100 text-nowrap">

                            <thead class="first" id="concernTableHead">
                                <tr>
                                    <th width="15%" data-orderable="false">Fullname</th>
                                    <th class="text-nowrap">Email</th>
                                    <th class="text-nowrap">Department</th>
                                    <th class="text-nowrap">Concern</th>
                                    <th class="text-nowrap">Message</th>
                                    <th class="text-nowrap">Priority</th>
                                    <th class="text-nowrap">Status</th>
                                    <th class="text-nowrap">Created</th>
                                    <th width="15%">Pictures</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>

                            <thead class="visually-hidden" id="jobOrderTableHead">
                                <tr>
                                    <th width="15%" data-orderable="false">Fullname</th>
                                    <th class="text-nowrap">Department</th>
                                    <th class="text-nowrap">Email</th>
                                    <th class="text-nowrap">Deadline</th>
                                    <th class="text-nowrap">Priority</th>
                                    <th class="text-nowrap">Status</th>
                                    <th class="text-nowrap">Created</th>
                                    <th width="15%">Picture</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>

                            <tbody class="first" id="concernTableBody">
                                <tr class="odd gradeX" v-for="req of allTotalRequest">
                                    <td class="truncate">{{ req.name }}</td>
                                    <td class="truncate">{{ req.email }}</td>
                                    <td class="truncate">{{ req.department }}</td>
                                    <td class="truncate">{{ req.concern }}</td>
                                    <td class="truncate">{{ req.issue }}</td>
                                    <td class="truncate">{{ req.priority }}</td>
                                    <td>
                                        <span :class="req.status == 0 ? 'text-danger' : 'text-primary'">{{ req.status == 0 ? 'Pending' : 'Done'}}</span>
                                    </td>
                                    <td>{{ getDateToString(req.created_at) }}</td>
                                    <td>
                                        <a href="#ticketid" class="btn col-12" data-bs-toggle="modal" @click="viewPictureRequest(req.request_id)">View</a>
                                        <div class="modal fade" id="ticketid">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modal-dialogLabel">Pictures for Concern </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body row">
                                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                            <div class="carousel-inner">
                                                                <div v-for="(pic, index) in request_firstpic" :key="index" class="carousel-item" :class="{ 'active': index === 0 }">
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
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-danger col-6" @click="getRequestDelete(req.request_id)">Delete</button>
                                        <a :href="'requestView.php?id='+wordToCode(req.request_id)" class="btn btn-sm btn-info col-6">View</a>
                                    </td>
                                </tr>
                            </tbody>

                            <tbody class="visually-hidden" id="jobOrderTableBody">
                                <tr class="odd gradeX" v-for="ord of allTotalOrder">
                                    <td class="truncate">{{ ord.name }}</td>
                                    <td class="truncate">{{ ord.department }}</td>
                                    <td class="truncate">{{ ord.email }}</td>
                                    <td class="truncate">{{ getDateToString(ord.deadline) }}</td>
                                    <td class="truncate">{{ ord.priority }}</td>
                                    <td>
                                        <span :class="ord.status == 0 ? 'text-danger' : 'text-primary'">{{ ord.status == 0 ? 'Pending' : 'Done' }}</span>
                                    </td>
                                    <td>{{ getDateToString(ord.created_at) }}</td>
                                    <td>
                                        <a href="#concernid" class="btn col-12" data-bs-toggle="modal" @click="viewPictureOrder(ord.order_id)">View</a>
                                        <div class="modal fade" id="concernid">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modal-dialogLabel">Pictures for Concern </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body row">
                                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                            <div class="carousel-inner">
                                                                <div v-for="(pic, index) in request_firstpic" :key="index" class="carousel-item" :class="{ 'active': index === 0 }">
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
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-danger col-6" @click="getOrderDelete(ord.order_id)">Delete</button>
                                        <a :href="'orderView.php?id='+wordToCode(ord.order_id)" class="btn btn-sm btn-info col-6">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="modal-dialog1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">View Information</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="concern"></div>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                                    <a href="javascript:;" class="btn btn-success">Okay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-dialog2">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">View Information</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="concern"></div>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                                    <a href="javascript:;" class="btn btn-success">Okay</a>
                                </div>
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
            function logout() {
                window.location.href = '../../app/session/logout.php';
            }
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

            $('#modal-dialog1').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var accountId = button.data('concern');

                $('#concern').text(accountId);

            });

            $('#modal-dialog2').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var accountId = button.data('concern');

                $('#concern').text(accountId);

            });

            $('#data-table-default').DataTable({
                responsive: true
            });
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