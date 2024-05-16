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
        <h1 class="text-center text-4xl m-5">Geleverde Producten</h1>
        <p class="text-center text-xl mb-1">Leverancier: <?php echo e($leverancier->Naam); ?></p>
        <p class="text-center text-xl mb-1">ContactPersoon: <?php echo e($leverancier->ContactPersoon); ?></p>
        <p class="text-center text-xl mb-1">LeverancierNummer: <?php echo e($leverancier->LeverancierNummer); ?></p>
        <p class="text-center text-xl mb-10">Mobiel: <?php echo e($leverancier->Mobiel); ?></p>
        <table class="text-center flex justify-center">
            <tr class="text-xl">
                <th class="border-solid border-2 border-sky-400">Naam</th>
                <th class="border-solid border-2 border-sky-400">DatumLevering</th>
                <th class="border-solid border-2 border-sky-400">AantalInMagazijn</th>
                <!-- <th class="border-solid border-2 border-sky-400">VerpakkingsEenheid</th> -->
                <th class="border-solid border-2 border-sky-400">DatumEerstVolgendeLevering</th>
                <th class="border-solid border-2 border-sky-400">Nieuwe Levering</th>
            </tr>
            <?php $__currentLoopData = $x; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productPerLeverancier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="border-solid border-2 border-sky-400"><?php echo e($productPerLeverancier->product->Naam); ?></td>
                <td class="border-solid border-2 border-sky-400"><?php echo e($productPerLeverancier->DatumLevering); ?></td>
                <td class="border-solid border-2 border-sky-400"><?php echo e($productPerLeverancier->Aantal); ?></td>
                <!-- <td class="border-solid border-2 border-sky-400"><?php echo e($productPerLeverancier->VerpakkingsEenheid); ?></td> -->
                <td class="border-solid border-2 border-sky-400"><?php echo e($productPerLeverancier->DatumEerstVolgendeLevering); ?></td>
                <td class="border-solid border-2 border-sky-400 text-xl">
                    <a href="<?php echo e(route('leverancier.create', ['product' => $productPerLeverancier->product->id, 'leverancier' => $productPerLeverancier->leverancier->id, 
                                'id' => $productPerLeverancier->id])); ?>">+</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
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
<?php endif; ?><?php /**PATH C:\wamp64\www\BEJ2o2\resources\views/leverancier/show.blade.php ENDPATH**/ ?>