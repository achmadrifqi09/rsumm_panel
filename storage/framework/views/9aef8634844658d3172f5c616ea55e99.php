<!--[if BLOCK]><![endif]--><?php if($multiSort && count($sortArray) > 0): ?>
    <div class="w-full items-center flex pt-3 mb-3 gap-2">
        <span class="dark:text-pg-primary-300 text-sm"><?php echo app('translator')->get('livewire-powergrid::datatable.multi_sort.message'); ?></span>
        <span class="flex gap-2 select-none">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $sortArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field => $sort): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $label = $this->getLabelFromColumn($field);
                ?>
                <span
                    wire:key="<?php echo e($tableName); ?>-multi-sort-<?php echo e($field); ?>"
                    wire:click.prevent="sortBy('<?php echo e($field); ?>')"
                    title="<?php echo e(__(':label :sort', ['label' => $label, 'sort' => $sort])); ?>"
                    class="group cursor-pointer select-none rounded-md outline-none inline-flex items-center border px-2 py-0.5 font-bold text-xs border-pg-primary-300 bg-white dark:border-2 dark:border-pg-primary-600 dark:bg-pg-primary-800 dark:text-pg-primary-300 dark:hover:text-pg-primary-400 text-pg-primary-600 hover:text-pg-primary-500"
                >
                    <?php echo e($label); ?>

                    <!--[if BLOCK]><![endif]--><?php if($sort == 'desc'): ?>
                        <?php if (isset($component)) { $__componentOriginal2e1b5523106c69884ec1704606080510 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e1b5523106c69884ec1704606080510 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.chevron-down','data' => ['class' => 'w-4 h-4 ml-1 group-hover:hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 ml-1 group-hover:hidden']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e1b5523106c69884ec1704606080510)): ?>
<?php $attributes = $__attributesOriginal2e1b5523106c69884ec1704606080510; ?>
<?php unset($__attributesOriginal2e1b5523106c69884ec1704606080510); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e1b5523106c69884ec1704606080510)): ?>
<?php $component = $__componentOriginal2e1b5523106c69884ec1704606080510; ?>
<?php unset($__componentOriginal2e1b5523106c69884ec1704606080510); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal7d60ff8e342013a80b7e0c15ae7afd01 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d60ff8e342013a80b7e0c15ae7afd01 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.x','data' => ['class' => 'w-4 h-4 ml-1 hidden group-hover:block transition-all']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.x'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 ml-1 hidden group-hover:block transition-all']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d60ff8e342013a80b7e0c15ae7afd01)): ?>
<?php $attributes = $__attributesOriginal7d60ff8e342013a80b7e0c15ae7afd01; ?>
<?php unset($__attributesOriginal7d60ff8e342013a80b7e0c15ae7afd01); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d60ff8e342013a80b7e0c15ae7afd01)): ?>
<?php $component = $__componentOriginal7d60ff8e342013a80b7e0c15ae7afd01; ?>
<?php unset($__componentOriginal7d60ff8e342013a80b7e0c15ae7afd01); ?>
<?php endif; ?>
                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginal4a18472d0e12ecf3266d6d759f2c6a97 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a18472d0e12ecf3266d6d759f2c6a97 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.chevron-up','data' => ['class' => 'w-4 h-4 ml-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.chevron-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 ml-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a18472d0e12ecf3266d6d759f2c6a97)): ?>
<?php $attributes = $__attributesOriginal4a18472d0e12ecf3266d6d759f2c6a97; ?>
<?php unset($__attributesOriginal4a18472d0e12ecf3266d6d759f2c6a97); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a18472d0e12ecf3266d6d759f2c6a97)): ?>
<?php $component = $__componentOriginal4a18472d0e12ecf3266d6d759f2c6a97; ?>
<?php unset($__componentOriginal4a18472d0e12ecf3266d6d759f2c6a97); ?>
<?php endif; ?>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </span>
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /Users/achmadrifqi/Documents/Development/Laravel/simrs/vendor/power-components/livewire-powergrid/src/Providers/../../resources/views/components/frameworks/tailwind/header/multi-sort.blade.php ENDPATH**/ ?>