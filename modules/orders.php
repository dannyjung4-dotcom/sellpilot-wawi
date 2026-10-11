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
    <h2>Aufträge</h2>
    <button type="button" class="primary-btn">Neu</button>
</div>

<div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th>Auftragsnummer</th>
                <th>Kunde</th>
                <th>Betrag</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2048</td>
                <td>Max Schneider</td>
                <td>€ 194,90</td>
                <td><span class="status ok">Versendet</span></td>
            </tr>
            <tr>
                <td>2051</td>
                <td>Anna Meier</td>
                <td>€ 79,00</td>
                <td><span class="status warn">In Arbeit</span></td>
            </tr>
            <tr>
                <td>2058</td>
                <td>Thomas Klein</td>
                <td>€ 299,00</td>
                <td><span class="status danger">Storno</span></td>
            </tr>
        </tbody>
    </table>
</div>
