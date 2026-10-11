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

$moduleFile = __DIR__ . '/modules/' . $module . '.php';
if (!file_exists($moduleFile)) {
    $module = 'dashboard';
    $moduleFile = __DIR__ . '/modules/dashboard.php';
}

$moduleTitle = $moduleTitles[$module] ?? 'Dashboard';
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
                    <a href="?module=<?= htmlspecialchars($navModule, ENT_QUOTES, 'UTF-8') ?>"
                       class="nav-item <?= $module === $navModule ? 'active' : '' ?>">
                        <span class="nav-icon"><?= $navIcons[$navModule] ?? '•'; ?></span>
                        <?= htmlspecialchars($moduleTitles[$navModule], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                <?php endforeach; ?>
            </nav>

            <div class="nav-bottom">
                <a href="?module=settings" class="nav-item <?= $module === 'settings' ? 'active' : '' ?>">
                    <span class="nav-icon">⚙</span>
                    Einstellungen
                </a>
            </div>
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
                        <strong>Daniel Jung</strong>
                        <small>Administrator</small>
                    </div>
                    <button type="button" class="ghost-btn">Abmelden</button>
                </div>
            </header>

            <section class="workspace">
                <div class="list-panel">
                    <?php require $moduleFile; ?>
                </div>

                <aside class="detail-panel">
                    <div class="detail-header">
                        <div>
                            <span class="eyebrow">Arbeitsfenster</span>
                            <h3><?= htmlspecialchars($moduleTitle, ENT_QUOTES, 'UTF-8') ?></h3>
                        </div>
                        <button type="button" class="primary-btn">Speichern</button>
                    </div>

                    <div class="detail-body">
                        <div class="field-row">
                            <label>Bezeichnung</label>
                            <div class="value-box">SellPilot – Bereich</div>
                        </div>
                        <div class="field-row">
                            <label>Beschreibung</label>
                            <div class="value-box note-box">
                                Zentraler Bereich für die Steuerung der WaWi-Funktionen.
                            </div>
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
