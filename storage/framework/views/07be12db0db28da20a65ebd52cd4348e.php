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
    <div class="flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Leveringsinformatie</h1>
            <?php $__currentLoopData = $product->productPerLeverancier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productPerLeverancier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h1 class="text-center text-xl m-5">Leverancier: <?php echo e($productPerLeverancier->leverancier->Naam); ?></h1>
                <h1 class="text-center text-xl m-5">Contactpersoon: <?php echo e($productPerLeverancier->leverancier->ContactPersoon); ?></h1>
                <h1 class="text-center text-xl m-5">Leveranciernummer: <?php echo e($productPerLeverancier->leverancier->LeverancierNummer); ?></h1>
                <h1 class="text-center text-xl m-5">Mobiel: <?php echo e($productPerLeverancier->leverancier->Mobiel); ?></h1>
                <?php break; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <table class="text-center flex justify-center">
            <tr class="text-xl">
                <th class="border-solid border-2 border-sky-400">Naam product</th>
                <th class="border-solid border-2 border-sky-400">Datum Laatste levering</th>
                <th class="border-solid border-2 border-sky-400">Aantal</th>
                <th class="border-solid border-2 border-sky-400">Eerstvolgende levering</th>
            </tr>
            <?php if($product->leveringen): ?>
                <?php $__currentLoopData = $product->leveringen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $levering): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border-solid border-2 border-sky-400"><?php echo e($product->Naam); ?></td>
                        <td class="border-solid border-2 border-sky-400"><?php echo e($levering->DatumLevering); ?></td>
                        <td class="border-solid border-2 border-sky-400"><?php echo e($levering->Aantal); ?></td>
                        <td class="border-solid border-2 border-sky-400"><?php echo e($levering->DatumEerstVolgendeLevering); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </table>
        <a href="<?php echo e(route('product.index')); ?>" class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Terug naar Producten</a>
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
<?php endif; ?><?php /**PATH C:\wamp64\www\BEJ2o2\resources\views/product/levering.blade.php ENDPATH**/ ?>