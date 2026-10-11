# SellPilot WaWi

Eine saubere Warenwirtschafts- und Shop-Connector-Architektur als PHP-Anwendung.

Ziel:
- zentrale Warenwirtschaft
- klare Modulstruktur
- späterer Connector für Modified
- skalierbar und wartbar

Projektstruktur:

- index.php
- includes/
  - bootstrap.php
  - Database.php
- modules/
  - dashboard.php
  - products.php
  - customers.php
  - orders.php
  - settings.php
- connectors/
  - ConnectorInterface.php
  - ModifiedConnector.php
- assets/
  - css/app.css
  - js/app.js
- .env.example
- README.md

Grundprinzip:
- UI = Darstellung
- Module = fachliche Bereiche
- Services/Connectors = Verbindung nach außen
- Datenbank = zentrale Datenquelle

Nächste Schritte:
1. Hauptseite und Navigationsstruktur
2. Produktverwaltung
3. Kunden und Bestellungen
4. Connector-Konfiguration
5. Modified-Synchronisation

Lokale Vorschau:

php -S localhost:8000

Dann im Browser:
http://localhost:8000
