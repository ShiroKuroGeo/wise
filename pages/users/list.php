<?php
include('../../components/pages/header.php');
?>
<div class="sidebar pe-4 pb-3 border-end">
    <nav class="navbar bg-light navbar-light">
        <a href="index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Task</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="../../assets/inventory/img/userProfile.png" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{fullname}}</h6>
                <span>Task User</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="list.php" class="nav-item nav-link active"><i class="fa fa-tasks me-2"></i>Tasks</a>
            <a href="todolist.php" class="nav-item nav-link"><i class="fa fa-tasks me-2"></i>Completed Task</a>
            <a href="monthlist.php" class="nav-item nav-link"><i class="fa fa-tasks me-2"></i>Month Task</a>
        </div>
    </nav>
</div>
<div class="content">
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="../../assets/inventory/img/userProfile.png" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">{{fullname}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="../../app/session/logout.php" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Widgets Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Recent Task</h6>
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addnewtask">Add New Task</button>
                <div class="modal fade" id="addnewtask" tabindex="-1" aria-labelledby="addnewtaskLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addnewtaskLabel">Add New Task</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start text-dark">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Custodian</label>
                                    <input type="text" v-model="custodianinsert" class="form-control text-dark" placeholder="Enter Name of Custodian">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Due Date</label>
                                    <input type="date" v-model="duedateinsert" class="form-control text-dark">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Department</label>
                                    <select class="form-control text-dark" v-model="departmentinsert">
                                        <option value="IT Deparment">IT Deparment</option>
                                        <option value="Admin Department">Admin Department</option>
                                        <option value="Human Resource">Human Resource</option>
                                        <option value="Accounting Department">Accounting Department</option>
                                        <option value="Documentation Department">Documentation Department</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <textarea class="form-control" v-model="descriptioninsert" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" @click="insertTask">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th rowspan="10%">Invoice</th>
                            <th>Department</th>
                            <th>Custodian</th>
                            <th>Due Date</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="t of tasks">
                            <td>WTL-WISE-00{{t.task_id}}</td>
                            <td class="truncate">{{t.department}}</td>
                            <td class="truncate">{{t.custodian}}</td>
                            <td class="truncate">{{getDateToString(t.duedate)}}</td>
                            <td class="truncate">{{t.description}}</td>
                            <td :class="t.status == 0 ? 'text-danger' : 'text-primary'">{{t.status == 0 ? 'Pending' : 'Done'}}</td>
                            <td class="text-center">
                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#getDetails" @click="getDetail(t.task_id)">Detail</button>
                                <div class="modal fade" id="getDetails" tabindex="-1" aria-labelledby="getDetailsLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="getDetailsLabel">Update Task</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body shadow" v-for="t of selectTask">
                                                        <div class="container-fluid mb-5 mt-3">
                                                            <div class="row d-flex align-items-baseline">
                                                                <div class="col-xl-9 text-start">
                                                                    <p style="color: #7e8d9f;font-size: 20px;">Tasks ID: <strong>WTL-WISE-00{{t.task_id}}</strong></p>
                                                                </div>
                                                            </div>
                                                            <div class="container-fluid">
                                                                <div class="row my-2 text-start">
                                                                    <dl class="row">
                                                                        <dt class="col-sm-3">Department</dt>
                                                                        <dd class="col-sm-9">{{ t.department }}</dd>

                                                                        <dt class="col-sm-3">Custodian</dt>
                                                                        <dd class="col-sm-9">{{ t.custodian }}</dd>

                                                                        <dt class="col-sm-3">Due Date</dt>
                                                                        <dd class="col-sm-9">{{ getDateToString(t.duedate) }}</dd>

                                                                        <dt class="col-sm-3">Status </dt>
                                                                        <dd class="col-sm-9">
                                                                            <p :class="t.status == 0 ? 'text-danger' : 'text-primary'">{{ t.status == 0 ? 'Ongoing/Pending' : 'Done' }}</p>
                                                                            <p :class="t.status == 1 ? 'visually-hidden' : '' "><a href="#" @click="updateStatus(t.task_id)">Mark As Done</a></p>
                                                                        </dd>

                                                                        <dt class="col-sm-3 mt-3">Task Description</dt>
                                                                        <dd class="col-sm-9 mt-3">{{t.description}}</dd>

                                                                        <dt class="col-sm-3 mt-3">Created At</dt>
                                                                        <dd class="col-sm-9 mt-3">{{getDateToString(t.created_at)}}</dd>
                                                                    </dl>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary col-3" data-bs-dismiss="modal">Okay</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; <a href="#">Task</a>, All Right Reserved.
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    Designed By <a href="https://www.facebook.com/kurotoshirogeo">Shiro George Alfeser</a>
                    </br>
                    Distributed By <a class="border-bottom" href="https://www.facebook.com/kurotoshirogeo" target="_blank">Shiro George Alfeser</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../../components/pages/footer.php');
?>