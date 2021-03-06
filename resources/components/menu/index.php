<?php

require_once 'component.php';

if (!empty($result['ITEMS'])):
    ?>

    <nav class="teal">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php
                foreach ($result['ITEMS'] as $item):
                    if (empty($item['LINK'])) {
                        $item['LINK'] = 'javascript:void(0)';
                    }
                    ?>

                    <li <?php if ($item['ACTIVE'] == 'Y'): ?>class="active"<?php endif; ?>><a class="<?php echo strtolower($item['NAME']) ?>" href="<?php echo $item['LINK'] ?>"><?php echo $item['NAME'] ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </nav>
<?php endif;
