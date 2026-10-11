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
    <h2>Artikel</h2>
    <button type="button" class="primary-btn">Neu</button>
</div>

<div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th>Artikelnummer</th>
                <th>Name</th>
                <th>Preis</th>
                <th>Bestand</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>OL-500</td>
                <td>Outdoor Leder Tasche</td>
                <td>€ 29,90</td>
                <td>48</td>
                <td><span class="status ok">Aktiv</span></td>
            </tr>
            <tr>
                <td>BT-250</td>
                <td>Business Tasche</td>
                <td>€ 89,00</td>
                <td>12</td>
                <td><span class="status warn">Wenig</span></td>
            </tr>
            <tr>
                <td>WS-990</td>
                <td>Wander Set</td>
                <td>€ 119,00</td>
                <td>72</td>
                <td><span class="status ok">Aktiv</span></td>
            </tr>
        </tbody>
    </table>
</div>
