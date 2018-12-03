        
        <?php $__env->startSection('header'); ?>
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('content'); ?>
            <div class="container">
              <h2>Entra tus datos: </h2>
              
                <form method="post" action="biorritmo/resultado">
                  <div class="text-center">
                    <?php echo e(csrf_field()); ?>

                  <label for="text">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Escribir nombre" name="nombre">
                </div>
                <div class="form-group">
                  <label for="date">Fecha de Nacimiento</label>
                  <input type="date" class="form-control" id="fechaNacimiento" placeholder="Escribir fecha de nacmientoi" name="fechaNacimiento">
                </div>
                
                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
            </div>
        <?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>