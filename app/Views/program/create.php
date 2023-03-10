<?= $this->extend('layouts/default') ?>

<?= $this->section('content')?>
<div class="section-header">
            <div class="section-header-back">
              <a href="<?= base_url('/user') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create New Program</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Posts</a></div>
              <div class="breadcrumb-item">Create New Post</div>
            </div>
          </div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('program/store')?>" method="post">
                        <div class="form-group">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Tanggal Acara</label>
                            <input type="date" name="date_program" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Info</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
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