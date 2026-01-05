<?php
require '/var/www/crudapp/config/fetch.php';

foreach ($datas as $row) {
<tr>
                    <td><?= htmlspecialchars($row['Name']) ?></td>
                    <td><?= htmlspecialchars($row['Age']) ?></td>
</tr>
}
