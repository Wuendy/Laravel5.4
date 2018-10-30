<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/css/stylestable.css')); ?>" media="all" />
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">LISTADO DE PROFESORES</li>
    </ol>
            
            

            <table style="text-align:Justify;width:100%;">
             <tr>
             
           		<th class="c6">Id</th>
               <th class="c1">Nombre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th class="c2">Apellido &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th class="c3">Cedula &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th class="c4">Tlf&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th class="c5">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th class="c5">Profesor de:</th>


               
             </tr>
             <tbody>
              <?php if($profesor->count()): ?>  
              <?php $__currentLoopData = $profesor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
              <tr>
             
              	<td class="c6"><?php echo e($profesor->id); ?></td>
                <td class="c1"><?php echo e($profesor->nombre); ?></td>
                <td class="c2"><?php echo e($profesor->apellido); ?></td>
                <td class="c3"><?php echo e($profesor->cedula); ?></td>
                <td class="c4"><?php echo e($profesor->tlf); ?></td>
                <td class="c5"><?php echo e($profesor->email); ?></td>
                <td class="c5"><?php echo e($profesor->materias->materia); ?></td>
               <td ><a href="<?php echo e(action('ProfesorController@edit', $profesor->id)); ?>" ><img src="<?php echo e(asset('css/images/writing.svg')); ?>" style="height:30px;width:30px;"></a></td>
                <td >
                  <form action="<?php echo e(action('ProfesorController@destroy', $profesor->id)); ?>" method="post">
                   <?php echo e(csrf_field()); ?>

                   <input name="_method" type="hidden" value="DELETE">
 
                   <button style="background-color:#fff;border:none;"type="submit"><img src="<?php echo e(asset('css/images/delete.svg')); ?>" style="height:28px;width:28px;"></button>
                 </form></td>

                 <td colspan="2" scope="colgroup"><a href="<?php echo e(route('profesor.create')); ?>" ><img src="<?php echo e(asset('css/images/plus.svg')); ?>" style="height:30px;width:30px;"></a> </td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
               <?php else: ?>
               <tr>
                <td colspan="8">No hay registro !!<a href="<?php echo e(route('profesor.create')); ?>" ><img src="<?php echo e(asset('css/images/plus.svg')); ?>" style="height:30px;width:30px;"></a> </td>
              </tr>
              <?php endif; ?>
            </tbody>
 
          </table>
        

 </body>
 </html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>