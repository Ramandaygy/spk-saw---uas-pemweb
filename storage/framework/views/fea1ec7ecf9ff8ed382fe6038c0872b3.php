

<?php $__env->startSection('content'); ?>
<style>
    .th{
        background-color: ##DA9C9C;
    }
</style>
    <div class="card mb-3">
        <div class="table-responsive m-0">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th><?php echo e($kriteria->nama_kriteria); ?> (<?php echo e($kriteria->atribut); ?> :<?php echo e($kriteria->bobot); ?> )</th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        
                    </tr>
                </thead>
                <?php $__currentLoopData = $nilais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key); ?></td>
                        <td><?php echo e($alternatifs[$key]->nama_alternatif); ?></td>
                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td><?php echo e($v); ?></td>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tfoot>
                    <tr>
                        <td colspan="2">Min</td>
                        <?php $__currentLoopData = $minmax; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td><?php echo e($value['min']); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    <tr>
                        <td colspan="2">Max</td>
                        <?php $__currentLoopData = $minmax; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td><?php echo e($value['max']); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">Ternormalisasi</div>
        <div class="table-responsive m-0">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th><?php echo e($kriteria->id_kriteria); ?></th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        
                    </tr>
                </thead>
                <?php $__currentLoopData = $normalisasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key); ?></td>
                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td><?php echo e(round($v,4)); ?></td>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </table>
        </div>
    </div>

    <div class="card mb-3">
    <div class="card-header">Terbobot</div>
        <div class="table-responsive m-0">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th><?php echo e($kriteria->id_kriteria); ?></th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        
                    </tr>
                </thead>
                <?php $__currentLoopData = $terbobot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key); ?></td>
                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td><?php echo e(round($v,4)); ?></td>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </table>
        </div>
    </div>

    <div class="card mb-3">
    <div class="card-header">Perangkingan</div>
        <div class="table-responsive m-0">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Total</th>
                        
                    </tr>
                </thead>
                <?php $__currentLoopData = $rank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($value); ?></td>
                        <td><?php echo e($key); ?></td>
                        <td><?php echo e($alternatifs[$key]->nama_alternatif); ?></td>
                        
                            <td><?php echo e(round($total[$key],4)); ?></td>
                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </table>
        </div>
        <div class="card-body">
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                    Tampilan grafik diatas mengikuti nilai dari table Perangkingan.
            
                </p>
            </figure>

            <script>
                Highcharts.chart('container', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Grafik Perangkingan SPK Metode SAW',
                        
                    },
                
                    xAxis: {
                        categories: <?=json_encode($categories)?>,
                        
                    },
                    
                    series: [
                        {
                            name: 'Total',
                            data: <?=json_encode($data)?>,
                        },
                        
                    ]
                });

            </script>
        </div>
    </div>




<?php $__env->stopSection(); ?>



<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spk-saw\resources\views/hitung/index.blade.php ENDPATH**/ ?>