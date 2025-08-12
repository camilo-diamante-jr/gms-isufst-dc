<?php
$this->renderView('/portals/partials/layouts/header', $data);
?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $contentHeaderTitle ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $breadcrumbActiveItem ?></li>
                    </ol>
                </div>
            </div>

            <section class="content mt-4">

                <div class="card">
                    <header class="card-header bg-light shadow-sm">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>List of Activities</h5>
                            <button type="button" class="btn btn-sm btn-primary" id="addSectionBtn">
                                <i class="fa fa-plus"></i>
                                <span>Add Sections</span>
                            </button>
                        </div>
                    </header>
                    <div class="card-body">

                        <table id="activityTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Activity name</th>
                                    <th>Date created</th>
                                    <th>Date updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</div>




<?php
$this->renderView('/portals/partials/layouts/footer');
include 'components/section-modal.php';
?>

<script>
    $('#activityTable').DataTable();
</script>