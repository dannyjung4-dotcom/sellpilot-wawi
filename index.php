<?php
require __DIR__ . '/includes/bootstrap.php';

$module = $_GET['module'] ?? 'dashboard';
$availableModules = ['dashboard', 'products', 'customers', 'orders', 'settings'];

if (!in_array($module, $availableModules, true)) {
    $module = 'dashboard';
}

$moduleTitles = [
    'dashboard' => 'Dashboard',
    'products' => 'Artikel',
    'customers' => 'Kunden',
    'orders' => 'Aufträge',
    'settings' => 'Einstellungen',
];

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

$moduleFile = __DIR__ . '/modules/' . $module . '.php';
if (!file_exists($moduleFile)) {
    $module = 'dashboard';
    $moduleFile = __DIR__ . '/modules/dashboard.php';
}

$moduleTitle = $moduleTitles[$module] ?? 'Dashboard';
$navIcons = [
    'dashboard' => '▦',
    'products' => '◆',
    'customers' => '◎',
    'orders' => '▤',
    'settings' => '⚙',
];

$selectedSettingsSection = $_GET['section'] ?? 'grundeinstellungen';
if ($module !== 'settings' || !isset($settingsSections[$selectedSettingsSection])) {
    $selectedSettingsSection = 'grundeinstellungen';
}
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SellPilot – <?= htmlspecialchars($moduleTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
    <div class="app-shell">
        <aside class="sidebar">
            <div class="brand">
                <span class="brand-mark">◆</span>
                <span>SellPilot</span>
            </div>

            <nav class="nav" aria-label="Hauptmenü">
                <?php foreach ($availableModules as $navModule): ?>
                    <?php if ($navModule === 'settings'): ?>
                        <div class="nav-group <?= $module === 'settings' ? 'active-group' : '' ?>">
                            <a href="?module=settings&section=grundeinstellungen"
                               class="nav-item <?= $module === 'settings' ? 'active' : '' ?>">
                                <span class="nav-icon"><?= $navIcons[$navModule] ?? '•'; ?></span>
                                <?= htmlspecialchars($moduleTitles[$navModule], ENT_QUOTES, 'UTF-8') ?>
                            </a>

                            <?php if ($module === 'settings'): ?>
                                <div class="subnav">
                                    <?php foreach ($settingsSections as $sectionKey => $sectionLabel): ?>
                                        <a href="?module=settings&section=<?= htmlspecialchars($sectionKey, ENT_QUOTES, 'UTF-8') ?>"
                                           class="subnav-item <?= $selectedSettingsSection === $sectionKey ? 'selected' : '' ?>">
                                            <?= htmlspecialchars($sectionLabel, ENT_QUOTES, 'UTF-8') ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <a href="?module=<?= htmlspecialchars($navModule, ENT_QUOTES, 'UTF-8') ?>"
                           class="nav-item <?= $module === $navModule ? 'active' : '' ?>">
                            <span class="nav-icon"><?= $navIcons[$navModule] ?? '•'; ?></span>
                            <?= htmlspecialchars($moduleTitles[$navModule], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </nav>
        </aside>

        <main class="main-panel">
            <header class="topbar">
                <div>
                    <div class="breadcrumb">SellPilot / <?= htmlspecialchars($moduleTitle, ENT_QUOTES, 'UTF-8') ?></div>
                    <h1><?= htmlspecialchars($moduleTitle, ENT_QUOTES, 'UTF-8') ?></h1>
                </div>

                <div class="user-box">
                    <span class="avatar">DJ</span>
                    <div class="user-meta">
                        <strong>Daniel</strong>
                        <small>Admin</small>
                    </div>
                    <button type="button" class="ghost-btn">Logout</button>
                </div>
            </header>

            <section class="workspace">
                <div class="list-panel">
                    <?php require $moduleFile; ?>
                </div>

                <aside class="detail-panel">
                    <div class="detail-header">
                        <div>
                            <span class="eyebrow">Detail</span>
                            <h3><?= htmlspecialchars($moduleTitle, ENT_QUOTES, 'UTF-8') ?></h3>
                        </div>
                        <button type="button" class="primary-btn">Save</button>
                    </div>

                    <div class="detail-body">
                        <div class="field-row">
                            <label>Bereich</label>
                            <div class="value-box"><?= htmlspecialchars($settingsSections[$selectedSettingsSection] ?? 'Grundeinstellungen', ENT_QUOTES, 'UTF-8') ?></div>
                        </div>
                        <div class="field-row">
                            <label>Hinweis</label>
                            <div class="value-box note-box">Die Einstellungen sind jetzt als Unterpunkte organisiert. Damit bleibt die Oberfläche kompakt und übersichtlich.</div>
                        </div>
                        <div class="field-row two-col">
                            <div>
                                <label>Status</label>
                                <div class="value-box">Aktiv</div>
                            </div>
                            <div>
                                <label>Version</label>
                                <div class="value-box">0.1</div>
                            </div>
                        </div>
                    </div>
                </aside>
            </section>
        </main>
    </div>

    <script src="assets/js/app.js"></script>
</body>
</html>
