<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class="flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-5">Create Delivery for <?php echo e($product->Naam); ?></h1>

        <form action="<?php echo e(route('leverancier.store', [$product->id, $leverancier->id, 'id' => $id])); ?>" method="POST" class="text-center text-xl">
            <?php echo csrf_field(); ?>

            <div class="form-group m-2">
                <label for="Aantal">Aantal</label>
                <input type="number" class="form-control" id="Aantal" name="Aantal" required>
            </div>

            <div class="form-group m-2">
                <label for="DatumEerstVolgendeLevering">Delivery Date</label>
                <input type="date" class="form-control" id="DatumEerstVolgendeLevering" name="DatumEerstVolgendeLevering" required>
            </div>

            <button type="submit" class="btn btn-primary m-2">Save</button>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\wamp64\www\BEJ2o2\resources\views/leverancier/create.blade.php ENDPATH**/ ?>