<option value="
<?= $category['id'] ?>"
    <?php if ($category['id'] == $this->model->category_id) echo "Selected" ?>>
    <?= $tab . $category['name'] ?></option>
<?php if (isset($category['childs'])) { ?>
    <ul>
        <?= $this->getMenuHtml($category["childs"], $tab  . '-'); ?>
    </ul>
<?php } ?>
<?php
