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
                <td><?= $item->sds;?></td>
                <td><?= $item->certificate_num;?></td>
                <td><?= $item->active_from;?></td>
                <td><?= $item->active_to;?></td>
                <td><?= $item->certification_body_information;?></td>
                <td><?= $item->service_information;?></td>
                <td><?= $item->manufacturer_information;?></td>
                <td><?= $item->applicant_information;?></td>
                <td><?= $item->meets_requirements ? 'ДА' : 'НЕТ';?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>