<?php

require_once 'component.php';

if (!empty($result['ITEMS'])):
    ?>

    <nav class="teal">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php foreach ($result['ITEMS'] as $item): ?>
                <li <?php if ($item['ACTIVE'] == 'Y'): ?>class="active"<?php endif; ?>><a href="<?php echo $item['LINK'] ?>"><?php echo $item['NAME'] ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </nav>
<?php endif;
