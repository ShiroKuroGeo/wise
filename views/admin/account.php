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
    <link href="../../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../../assets/css/color.min.css" rel="stylesheet" />

    <link href="../../assets/plugin/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="../../assets/plugin/responsive.bootstrap5.min.css" rel="stylesheet" />

</head>

<body>

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>

    <div id="app" class="app app-header-fixed app-sidebar-fixed">

        <div id="application">
            <div>
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
                            <div class="menu-item py-1 active">
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
                                            <div :class="parseInt(totalPendingAdmin) || parseInt(totalDoneAdmin)  !== 0 ? 'text-end text-danger' : 'text-end'">
                                                {{ parseInt(totalPendingAdmin) || parseInt(totalDoneAdmin) !== 0 ? '!' : '' }}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="concern.php?department000=Documents" class="menu-link">
                                            <div class="menu-icon">
                                                <i class="fas fa-building"></i>
                                            </div>
                                            <div class="menu-text">Documents</div>
                                            <div :class="parseInt(totalPendingDocumentation) || parseInt(totalDoneDocumentation) !== 0 ? 'text-end text-danger' : 'text-end'">
                                                {{ parseInt(totalPendingDocumentation) || parseInt(totalDoneDocumentation) !== 0 ? '!' : '' }}
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
                                                {{ parseInt(totalPendingAccounting) || parseInt(totalDoneAccounting) !== 0 ? '!' : '' }}
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
                                                {{ parseInt(totalPendingHuman) || parseInt(totalDoneHuman) !== 0 ? '!' : '' }}
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

                            <div class="menu-item d-flex">
                                <a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="app-sidebar-bg" data-bs-theme="dark"></div>
                <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>

            </div>

            <div id="content" class="app-content">

                <div class="d-flex justify-content-between">
                    <h1 class="page-header">Managed Accounts <small>Users Accounts</small></h1>
                    <button class="btn btn-sm mb-4 btn-primary" href="#addUserAccount" class="btn col-12" data-bs-toggle="modal">Add User Account</button>
                    <div class="modal fade" id="addUserAccount">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add User Account</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#s" method="post">
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="fullname">Full Name * :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" v-model="fullname" id="name" name="name" placeholder="Enter Name" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-4 col-form-label form-label" for="fullname">Email * :</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="email" v-model="email" id="email" name="email" placeholder="Enter Name" data-parsley-required="true" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                                    <a href="javascript:;" class="btn btn-success" @click="saveUser">Add User</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-inverse">

                    <div class="panel-heading">
                        <h4 class="panel-title">Employee Concern - Table</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>


                    <div class="panel-body">
                        <table id="data-table-default" class="table table-striped table-bordered align-middle w-100 text-nowrap">
                            <thead>
                                <tr>
                                    <th width="1%">IDs</th>
                                    <th width="15%" data-orderable="false">Fullname</th>
                                    <th class="text-nowrap">Email</th>
                                    <th class="text-nowrap">Role</th>
                                    <th class="text-nowrap">Status</th>
                                    <th class="text-nowrap">Created At</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX" v-for="u of users">
                                    <td>{{ u.user_id }}</td>
                                    <td>{{ u.fullname }}</td>
                                    <td>{{ u.email }}</td>
                                    <td>{{ u.role == 1 ? 'Admin' : 'Task User' }}</td>
                                    <td>{{ u.status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>{{ getDateToString(u.created_at) }}</td>
                                    <td><button @click="checkId(u.user_id)" data-bs-toggle="modal" data-bs-target="#updateUser" class="btn btn-sm btn-primary col-12">Update</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="updateUser" tabindex="-1" aria-labelledby="updateUserLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateUserLabel">Update User Account</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-body">
                                        <form action="#s" method="post">
                                            <div class="form-group row mb-3">
                                                <label class="col-lg-4 col-form-label form-label" for="fullname">Full Name :</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="text" v-model="upFullname" placeholder="Enter Full Name" data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-lg-4 col-form-label form-label" for="fullname">Email :</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="email" v-model="upEmail" placeholder="Enter Email" data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-lg-4 col-form-label form-label" for="fullname">Password :</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="password" v-if="showhide" v-model="uppassword" placeholder="Enter Password" data-parsley-required="true" />
                                                    <input class="form-control" type="text" v-else="showhide" v-model="uppassword" placeholder="Enter Password" data-parsley-required="true" />
                                                    <button type="button" class="btn btn-sm float-end" @click="toggleShowHidePassword">{{ showhide ? 'Show' : 'Hide' }}</button>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-lg-4 col-form-label form-label" for="fullname">Role :</label>
                                                <div class="col-lg-8">
                                                    <select v-model="upRole" class="form-control">
                                                        <option value="1">Admin</option>
                                                        <option value="2">Tasking User</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-lg-4 col-form-label form-label" for="fullname">Status :</label>
                                                <div class="col-lg-8">
                                                    <select v-model="upStatus" class="form-control">
                                                        <option value="1">Active</option>
                                                        <option value="2">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" @click="changeInformationAboutUser">Save changes</button>
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
    <script src="../../vue/admin/wiseconcern/account.js"></script>
    <script>
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
    <script src="../../assets/js/rocketloader.min.js" data-cf-settings="9dd2961859eb1e28de60110d-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"849cd0090baf0445","r":1,"version":"2024.1.0","token":"4db8c6ef997743fda032d4f73cfeff63"}' crossorigin="anonymous"></script>
</body>

</html>