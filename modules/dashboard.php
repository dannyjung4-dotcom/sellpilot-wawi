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
    <h2>Übersicht</h2>
    <button type="button" class="primary-btn">Neu</button>
</div>

<div class="stat-grid">
    <div class="stat-card accent">
        <span class="stat-label">Umsatz</span>
        <strong>€ 28.450</strong>
        <small>+12,4 %</small>
    </div>
    <div class="stat-card">
        <span class="stat-label">Bestellungen</span>
        <strong>186</strong>
        <small>+8 heute</small>
    </div>
    <div class="stat-card">
        <span class="stat-label">Artikel</span>
        <strong>1.284</strong>
        <small>94 aktiv</small>
    </div>
    <div class="stat-card">
        <span class="stat-label">Lagerwert</span>
        <strong>€ 83.270</strong>
        <small>3 Artikel knapp</small>
    </div>
</div>

<div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th>Artikel</th>
                <th>Bestand</th>
                <th>Preis</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>OL-500 Rot</td>
                <td>48</td>
                <td>€ 29,90</td>
                <td><span class="status ok">Verfügbar</span></td>
            </tr>
            <tr>
                <td>BT-250 schwarz</td>
                <td>12</td>
                <td>€ 89,00</td>
                <td><span class="status warn">Wenig</span></td>
            </tr>
            <tr>
                <td>WS-990 basic</td>
                <td>72</td>
                <td>€ 119,00</td>
                <td><span class="status ok">Verfügbar</span></td>
            </tr>
        </tbody>
    </table>
</div>
