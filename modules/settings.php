<?php
$settingsSections = [
    'grundeinstellungen' => 'Grundeinstellungen',
    'nummernkreise' => 'Nummernkreise',
    'zahlungsarten' => 'Zahlungsarten',
    'laender-steuern' => 'Länder & Steuern',
    'versand-lager' => 'Versand & Lager',
    'einheiten-umrechnung' => 'Einheiten & Umrechnung',
    'cross-selling' => 'Cross-Selling',
    'eigenschaften-varianten' => 'Eigenschaften & Varianten',
    'mieteinstellungen' => 'Mieteinstellungen',
    'eigene-felder' => 'Eigene Felder',
    'apps' => 'Apps',
];

$activeSection = $_GET['section'] ?? 'grundeinstellungen';
if (!isset($settingsSections[$activeSection])) {
    $activeSection = 'grundeinstellungen';
}
?>

<div class="panel-header">
    <h2><?= htmlspecialchars($settingsSections[$activeSection], ENT_QUOTES, 'UTF-8') ?></h2>
    <button type="button" class="primary-btn">Speichern</button>
</div>

<div class="settings-grid">
    <div class="setting-box">
        <h3><?= htmlspecialchars($settingsSections[$activeSection], ENT_QUOTES, 'UTF-8') ?></h3>
        <p>Dieser Bereich ist für die Konfiguration der System- und Betriebsparameter vorbereitet.</p>
        <p>Aktiver Bereich: <strong><?= htmlspecialchars($settingsSections[$activeSection], ENT_QUOTES, 'UTF-8') ?></strong></p>
    </div>

    <?php foreach ($settingsSections as $sectionKey => $sectionLabel): ?>
        <div class="setting-box">
            <h3><?= htmlspecialchars($sectionLabel, ENT_QUOTES, 'UTF-8') ?></h3>
            <p>Konfiguration für <?= htmlspecialchars($sectionLabel, ENT_QUOTES, 'UTF-8') ?>.</p>
            <p>Link: ?module=settings&section=<?= htmlspecialchars($sectionKey, ENT_QUOTES, 'UTF-8') ?></p>
        </div>
    <?php endforeach; ?>
</div>
