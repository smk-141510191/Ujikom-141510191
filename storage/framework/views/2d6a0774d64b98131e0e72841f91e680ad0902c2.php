<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Tunjangan</div>
        <div class="panel-body">
        <a class="btn btn-success" href="<?php echo e(url('tunjanganpegawai/create')); ?>">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <div class="panel-body">
                    <table class="table"d border="2">
                        <thead>
                            <tr>
                                <th><center>No</th></center>
                                <th><center>Nip Pegawai</th></center>
                                <th><center>uang Tunjangan</th></center>
                                <th colspan="2"><center>Opsi</th></center>
                            </tr>
                        </thead>
                        <?php 
                        $a=1;
                         ?>
                        <?php $__currentLoopData = $tunjanganpegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tbody>
                            <td><center><?php echo e($a++); ?></td></center>
                            <td><center><?php echo e($data->pegawai->nip); ?></td></center>
                            <td><center><?php echo e($data->tunjangan->besaran_uang); ?></td></center>
                             <td><center>
                                <a href="<?php echo e(route('tunjanganpegawai.edit',$data->id)); ?>" class="btn btn-primary">Ubah</a>
                            </center></td>
                            <td >
                                  <center><a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  <?php echo $__env->make('modals.delete', [
                                    'url' => route('tunjanganpegawai.destroy', $data->id),
                                    'model' => $data
                                  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </td>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>