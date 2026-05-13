<?php
$this->renderView('/portals/partials/layouts/admin/header', $data);
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>College Student Registry</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button type="button" id="btnAddStudent" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i> New Enrollment Entry
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-navy">
                <div class="card-body">
                    <!-- Master Table -->
                    <table id="studentsTable" class="table table-hover table-bordered">
                        <thead class="bg-light">
                            <tr>
                                <th>Student Number</th>
                                <th>Name</th>
                                <th>Course & Year</th>
                                <th>Account Status</th>
                                <th>Guidance Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2021-10042</td>
                                <td>Dela Cruz, Maria Aurora</td>
                                <td>BSIT - 4th</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td><span class="badge badge-info">Cleared (Graduation)</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-default" title="View 201 File"><i class="fas fa-folder-open"></i></button>
                                    <button class="btn btn-sm btn-default" title="Log Session"><i class="fas fa-comment-dots"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2023-20159</td>
                                <td>Santos, Ricardo Jose</td>
                                <td>BSPsy - 2nd</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td><span class="badge badge-warning">Under Counseling</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-default" title="View 201 File"><i class="fas fa-folder-open"></i></button>
                                    <button class="btn btn-sm btn-default" title="Log Session"><i class="fas fa-comment-dots"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2022-10883</td>
                                <td>Villanueva, Clara M.</td>
                                <td>BEED - 3rd</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td><span class="badge badge-secondary">Pending Interview</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-default" title="View 201 File"><i class="fas fa-folder-open"></i></button>
                                    <button class="btn btn-sm btn-default" title="Log Session"><i class="fas fa-comment-dots"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2020-10001</td>
                                <td>Reyes, Mark Anthony</td>
                                <td>BS Crim - 4th</td>
                                <td><span class="badge badge-danger">Transferred</span></td>
                                <td><span class="badge badge-dark">Archived</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-default" title="View 201 File"><i class="fas fa-folder-open"></i></button>
                                    <button class="btn btn-sm btn-default disabled" title="Inactive Account"><i class="fas fa-comment-dots"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2024-50212</td>
                                <td>Gomez, Elena Sophia</td>
                                <td>BSHM - 1st</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td><span class="badge badge-primary">Follow-up Required</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-default" title="View 201 File"><i class="fas fa-folder-open"></i></button>
                                    <button class="btn btn-sm btn-default" title="Log Session"><i class="fas fa-comment-dots"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function() {
        $('#studentsTable').DataTable({
            "responsive": true,
            "autoWidth": false,
            "order": [
                [1, 'asc']
            ], // Sort by name alphabetically
            "columnDefs": [{
                    "orderable": false,
                    "targets": 5
                } // Disable sorting on 'Actions' column
            ]
        });
    });
</script>

<?php
$this->renderView('/portals/partials/layouts/admin/footer');
?>