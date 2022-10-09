<div class="stores-offers align-items-center">
    <div class="lb-sort-stores me-auto">
        <ul>
            <li class="pointer active" onclick="filterStoreByAlpha('', this)">All</li>
            <?php $__currentLoopData = $alphas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alpha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li class="pointer" onclick="filterStoreByAlpha('<?php echo e($alpha); ?>', this)"><?php echo e($alpha); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <div class="form-check me-3 ">
        <input type="checkbox" class="form-check-input" name="isCashback" onchange="showCashbackStore(this)">
        <label class="form-check-label">
            <?php echo e(__('common.search_filter.store_with_cashback')); ?>

        </label>
    </div>

    <div class="sort-by-drp">
        <select name="sortBy" onchange="sortByStore(this)" class="form-select store-sorter" id="sortBy">
            <option value="name"><?php echo e(__('common.search_filter.alphabetical')); ?></option>
            <option value="pop"><?php echo e(__('common.search_filter.popular')); ?></option>
            <option value="cashback"><?php echo e(__('common.search_filter.cashback')); ?></option>
        </select>
    </div>
</div>

<div class="lb-store-cpn d-flex">
    <ul class="lb-store-coupon" id="store-list-wrapper">
        <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->first(['components.store.list.native.custom','components.store.list.native.1','components.store.list.custom','components.store.list.1'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>


<?php $__env->startPush('footStack'); ?>
<script>
    // TODO : Add this to JS
    function filterStoreByAlpha(alpha, el) {

        if(document.querySelector('.lb-sort-stores li.active'))
            document.querySelector('.lb-sort-stores li.active').classList.remove('active');
        el.classList.add('active');

        var allStoreSelector = document.querySelectorAll(".store-coupon-card");
        if (alpha == '') {
            allStoreSelector.forEach(function(item) {
                item.classList.remove('d-none');
            });
        } else {
            allStoreSelector.forEach(function(item) {
                item.classList.add('d-none');
            });

            document.querySelectorAll(".store-coupon-card[data-alpha='" + alpha + "']").forEach(function(item) {
                item.classList.remove('d-none');
            });
        }

    }

    function showCashbackStore(el) {
        var allStoreSelector = document.querySelectorAll(".store-coupon-card");
        if (el.checked) {
            allStoreSelector.forEach(function(item) {
                item.classList.add('d-none');
            });


            document.querySelectorAll(".store-coupon-card[data-iscb='1']").forEach(function(item) {
                item.classList.remove('d-none');
            });
        } else {

            allStoreSelector.forEach(function(item) {
                item.classList.remove('d-none');
            });
        }


    }

    function sortByStore(el) {
        sortStoreList(el.value, !(el.value == 'alpha'||el.value == 'name'));
    }

    function sortStoreList(attributeKey, isDesc) {
        var toSort = document.getElementById('store-list-wrapper').children;
        toSort = Array.prototype.slice.call(toSort, 0);

        toSort.sort(function(a, b) {
            var aord = a.getAttribute('data-' + attributeKey).toLowerCase();
            var bord = b.getAttribute('data-' + attributeKey).toLowerCase();
            // two elements never have the same ID hence this is sufficient:
            if (!isDesc)
                return (aord > bord) ? 1 : -1;
            else
                return (aord < bord) ? 1 : -1;
        });

        var parent = document.getElementById('store-list-wrapper');
        parent.innerHTML = "";

        for (var i = 0, l = toSort.length; i < l; i++) {
            parent.appendChild(toSort[i]);
        }
    }
    // TODO: Make this into a class, clean it and use it for store cate also
    // FIXME: Dishant
</script>

<?php $__env->stopPush(); ?><?php /**PATH /var/www/kaped.app/packages/ui/resources/views/partials/store-list-filter-native.blade.php ENDPATH**/ ?>