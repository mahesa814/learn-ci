<?= $this->extend('layouts/default') ?>

<?= $this->section('content')?>
<div class="section-header">
    <h1>User</h1>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-action">
                        <a href="<?= base_url('/user/create')?>" class="btn btn-primary">Create User</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped" id="sortable-table">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <i class="fas fa-th"></i>
                                    </th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="ui-sortable">
                                <!-- <?php foreach($programs as $index => $program) :?>
                                <tr>
                                    <td>
                                        <div class="sort-handler ui-sortable-handle">
                                            <?= ++$index ?>
                                        </div>
                                    </td>
                                    <td><?= $program->name ?></td>
                                    <td>
                                        <?= $program->email?>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-secondary btn-sm">Detail</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                                <?php endforeach?> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>