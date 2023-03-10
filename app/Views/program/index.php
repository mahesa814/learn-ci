<?= $this->extend('layouts/default') ?>

<?= $this->section('content')?>
<div class="section-header">
    <h1>Acara / Program</h1>
</div>

<?php if(session()->getFlashdata('success')) : ?>
<div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>Success</b>
        <?= session()->getFlashdata('success')?>
    </div>
</div>
<?php endif; ?>

<?php if(session()->getFlashdata('failed')) : ?>
    <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">x</button>
            <b>Failed</b>
            <?= session()->getFlashdata('failed')?>
        </div>
    </div>
<?php endif; ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-action">
                        <a href="<?= base_url('/program/create')?>" class="btn btn-primary">Create New Program</a>
                    </div>
                </div>
                <div class="card-body p-1">
                    <div class="table-responsive">
                        <table class="table table-striped" id="sortable-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Acara</th>
                                    <th>Tanggal Acara</th>
                                    <th>Info</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="ui-sortable">
                                <?php foreach($programs as $index => $program) :?>
                                <tr>
                                    <td>
                                        <?= ++$index ?>
                                    </td>
                                    <td><?= $program->name ?></td>
                                    <td>
                                        <?= $program->date_program?>
                                    </td>
                                    <td></td>
                                    <td>
                                        <a href="/program/edit/<?= $program->id?>" class="btn btn-secondary btn-sm">Detail</a>
                                        <form action="<?= base_url('/program/delete/'. $program->id)?>" method="get">
                                            <button class="btn btn-danger" type="submit">
                                            Delete
                                            </button>
                                        </form>
                                        
                                        <a href="<?= base_url('/program/edit/'.$program->id);?>" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                                <?php endforeach?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>