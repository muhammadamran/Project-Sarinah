<div class="line-page-bottom"></div>
<div class="footer-wrap pd-20 mb-20 card-box" style="text-align: center;">
    Copyright © 2022 - PT. Sarinah  All Rights Reserved.
    <a class="font-w600" href="mailto:info@hellos-id.com" target="_blank">

    </a>
    <br>
    <?php if ($resultSetting['version'] == NULL) { ?>
        <b>Version 1.0.0</b>
    <?php } else { ?>
        <b><?= $resultSetting['version'] ?> - <?= $resultSetting['type'] ?></b>
    <?php } ?>
</div>