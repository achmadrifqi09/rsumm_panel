<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['icon', 'value', 'description']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['icon', 'value', 'description']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div
    class="p-4 border border-gray-100 rounded-xl shadow-sm flex items-start bg-white gap-4 w-full">
    <div class="rounded-full p-2 bg-primary/40 w-max h-max">
        <div class="text-white bg-primary p-3 rounded-full w-max">
            <?php echo e($icon); ?>

        </div>
    </div>
    <div>

        <h3 class="text-2xl font-bold"><?php echo e($value ?? 0); ?></h3>
        <p class="text-secondary-text"><?php echo e($description ?? "Description"); ?></p>
    </div>
</div>
<?php /**PATH /Users/achmadrifqi/Documents/Development/Laravel/test/simrs/resources/views/components/summary-item.blade.php ENDPATH**/ ?>