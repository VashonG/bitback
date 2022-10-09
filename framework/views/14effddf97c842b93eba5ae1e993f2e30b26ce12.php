<?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



<?php  $component  = $components[str_replace('/','.',$block['blockName']) ]??false;

            if(!$component)
			{
				if( $block['blockName']=='core/html')
					echo $block['innerHTML'];
				
			continue;
			}
			

            if($block['blockName']!='core/column' || true) {
                echo $wrapper_class =  ( strlen(trim( $block['innerHTML']) ) > 8 )  ? str_replace('</div>','',$block['innerHTML']  ) : null; ;
                if(! $wrapper_class && isset($block['attrs']['className']))
                echo $wrapper_class = '<div class="'.$block['attrs']['className'].'">';
            }
            else
            {
                $wrapper_class= false;
            }


            echo \EnactOn\ProCashBee\UI\View\Components\DynamicComponent::render( $components,$block,$component['component_class'],$block['attrs']);
               if($wrapper_class) echo '</div>';
            ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/dynamic-block.blade.php ENDPATH**/ ?>