<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Kategori</div>

                <div class="panel-body">
                    <?php echo Form::model($kategori,['method' => 'PATCH','route'=>['kategori.update',$kategori->id]]); ?>

                <div class="form-group">
                    <?php echo Form::label('Kode Lembur', 'Kode Lembur'); ?>

                    <?php echo Form::text('kode_lembur',null,['class'=>'form-control']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('Id jabatan', 'Id jabatan'); ?>

                    <?php echo Form::text('id_jabatan',null,['class'=>'form-control']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('Id golongan', 'Id golongan'); ?>

                    <?php echo Form::text('id_golongan',null,['class'=>'form-control']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('Besaran Uang', 'Besaran Uang'); ?>

                    <?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::submit('Simpan', ['class' => 'btn btn-primary']); ?>

                </div>
                <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>