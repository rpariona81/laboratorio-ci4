<?= $this->extend('admin/layout/main') ?>

<?= $this->section('content') ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <br />
        <h1 class="display-4">Panel de administración</h1>
        <p class="lead">Bienvenido Administrador.</p>
    </div>
</div>
<?= $this->section('javascript') ?>
let a = 'a';
<?= $this->endSection() ?>
<?= $this->endSection() ?>