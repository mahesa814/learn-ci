<?= $this->extend('layouts/default') ?>
<?= $this->section('content')?>
<div class="section-header">
    <h1>Edit Acara <?= $programs['name']?></h1>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('/program/update/'.$programs['id'])?>" method="post">
                    <div class="form-group">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" name="name" value="<?= $programs['name']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Tanggal Acara</label>
                            <input type="date" name="date_program" value="<?= $programs['date_program']?>"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Info</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"><?= $programs['description']?></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url('/user')?>" class="btn btn-secondary col-2 mr-2">Cancel</a>
                            <button class="btn btn-primary col-2" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>