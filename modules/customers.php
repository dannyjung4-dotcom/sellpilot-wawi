<?php
$navIcons = [
    'dashboard' => '▦',
    'products' => '◆',
    'customers' => '◎',
    'orders' => '▤',
    'settings' => '⚙',
];
?>

<div class="panel-header">
    <h2>Kunden</h2>
    <button type="button" class="primary-btn">Neu</button>
</div>

<div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th>Kundennummer</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10042</td>
                <td>Max Schneider</td>
                <td>max@example.com</td>
                <td><span class="status ok">Aktiv</span></td>
            </tr>
            <tr>
                <td>10487</td>
                <td>Anna Meier</td>
                <td>anna@example.com</td>
                <td><span class="status ok">Aktiv</span></td>
            </tr>
            <tr>
                <td>11019</td>
                <td>Thomas Klein</td>
                <td>thomas@example.com</td>
                <td><span class="status warn">Prüfen</span></td>
            </tr>
        </tbody>
    </table>
</div>
