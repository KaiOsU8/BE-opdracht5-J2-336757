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
    <div class=" flex justify-center flex-col items-center">
    <form action="<?php echo e(route('levering.create', $product->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <h1 class="text-center text-4xl m-5">Levering product</h1>
        <p class="text-center text-xl mb-1">Leverancier: </p>
        <p class="text-center text-xl mb-1">ContactPersoon: </p>
        <p class="text-center text-xl mb-10">Mobiel: </p>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">AantalProductEenheden</th>
                    <th class="border-solid border-2 border-sky-400">DatumEerstVolgendeLevering</th>
                </tr> 
                <tr>
                    <td class="border-solid border-2 border-sky-400">
                        <input type="number" name="AantalProductEenheden" class="form-control" required>
                    </td>
                    <td class="border-solid border-2 border-sky-400">
                        <input type="date" name="DatumEerstVolgendeLevering" class="form-control" required>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary">Create Delivery</button>
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
<?php endif; ?><?php /**PATH C:\wamp64\www\BEJ2o2\resources\views/levering/create.blade.php ENDPATH**/ ?>