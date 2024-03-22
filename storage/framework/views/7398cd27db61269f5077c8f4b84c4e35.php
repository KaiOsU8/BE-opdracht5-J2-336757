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
        <h1 class="text-center text-4xl m-20">Overzicht leveranciers</h1>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Naam</th>
                    <th class="border-solid border-2 border-sky-400">ContactPersoon</th>
                    <th class="border-solid border-2 border-sky-400">LeverancierNummer</th>
                    <th class="border-solid border-2 border-sky-400">Mobiel</th>
                    <th class="border-solid border-2 border-sky-400">AantalVerschillendeProducten</th>
                    <th class="border-solid border-2 border-sky-400">ToonProducten</th>
                </tr> 
                <?php $__currentLoopData = $leveranciers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leverancier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border-solid border-2 border-sky-400"><?php echo e($leverancier->Naam); ?></td>
                        <td class="border-solid border-2 border-sky-400"><?php echo e($leverancier->ContactPersoon); ?></td>
                        <td class="border-solid border-2 border-sky-400"><?php echo e($leverancier->LeverancierNummer); ?></td>
                        <td class="border-solid border-2 border-sky-400"><?php echo e($leverancier->Mobiel); ?></td>
                        <td class="border-solid border-2 border-sky-400"><?php echo e($leverancier->productPerLeverancier->count()); ?></td>
                        <td class="border-solid border-2 border-sky-400">
                            <a href="<?php echo e(route('leverancier.show', $leverancier->id)); ?>"><i class="fas fa-eye"></i></a>
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
<?php endif; ?><?php /**PATH C:\wamp64\www\BEJ2o2\resources\views/leverancier/index.blade.php ENDPATH**/ ?>