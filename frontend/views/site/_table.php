<div class="table">
    <table id="table">
        <thead id="tr1">
        <?php
        $certs = new \common\models\Certificate;
        $attrs = $certs->attributeLabels();
        foreach ($attrs as $c):?>
        <?php if($c == 'ID') continue;?>
            <th><?= $c ?></th>
        <?php endforeach; ?>
        </thead>
        <?php foreach ($res as $item): ?>
            <tr id="tr2">
                <th><?= $item->sds;?></th>
                <th><?= $item->certificate_num;?></th>
                <th><?= $item->active_from;?></th>
                <th><?= $item->active_to;?></th>
                <th><?= $item->certification_body_information;?></th>
                <th><?= $item->service_information;?></th>
                <th><?= $item->manufacturer_information;?></th>
                <th><?= $item->applicant_information;?></th>
                <th><?= $item->meets_requirements;?></th>
            </tr>
        <?php endforeach; ?>
    </table>
</div>