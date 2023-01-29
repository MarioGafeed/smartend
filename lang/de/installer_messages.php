<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Smartend CMS Installer',
    'next' => 'Nächster Schritt',
    'back' => 'Zurück',
    'finish' => 'Installieren',
    'forms' => [
        'errorTitle' => 'Es sind folgende Fehler aufgetreten:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => 'Willkommen',
        'title' => 'Smartend CMS Installer',
        'message' => 'Einfacher Installations- und Einrichtungsassistent.',
        'next' => 'Anforderungen prüfen',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => 'Schritt 1 | Serveranforderungen',
        'title' => 'Server-Anforderungen',
        'next' => 'Berechtigungen prüfen',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => 'Schritt 2 | Genehmigungen',
        'title' => 'Berechtigungen',
        'next' => 'Umgebung konfigurieren',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Schritt 3 | Umgebungseinstellungen',
            'title' => 'Umgebungseinstellungen',
            'desc' => 'Bitte wählen Sie aus, wie Sie die <code>.env</code>-Datei der Anwendung konfigurieren möchten.',
            'wizard-button' => 'Form Wizard Setup',
            'classic-button' => 'Klassischer Texteditor',
        ],
        'wizard' => [
            'templateTitle' => 'Schritt 3 | Umgebungseinstellungen | Begleiteter Assistent',
            'title' => 'Begleiteter <code>.env</code>-Assistent',
            'tabs' => [
                'environment' => 'Umgebung',
                'database' => 'Datenbank',
                'application' => 'Anwendung'
            ],
            'form' => [
                'name_required' => 'Ein Umgebungsname ist erforderlich.',
                'app_name_label' => 'App Name',
                'app_name_placeholder' => 'App Name',
                'app_environment_label' => 'App Umgebung',
                'app_environment_label_local' => 'Lokal',
                'app_environment_label_developement' => 'Entwicklung',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Produktion',
                'app_environment_label_other' => 'Sonstige',
                'app_environment_placeholder_other' => 'Geben Sie Ihre Umgebung an...',
                'app_debug_label' => 'App Debug',
                'app_debug_label_true' => 'Wahr',
                'app_debug_label_false' => 'False',
                'app_log_level_label' => 'App Log Level',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'notice',
                'app_log_level_label_warning' => 'warning',
                'app_log_level_label_error' => 'error',
                'app_log_level_label_critical' => 'kritisch',
                'app_log_level_label_alert' => 'alert',
                'app_log_level_label_emergency' => 'Notfall',
                'app_url_label' => 'App Url',
                'app_url_placeholder' => 'App Url',
                'db_connection_label' => 'Datenbankverbindung',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Datenbank-Host',
                'db_host_placeholder' => 'Datenbank-Host',
                'db_port_label' => 'Datenbank Port',
                'db_port_placeholder' => 'Datenbank Port',
                'db_name_label' => 'Datenbank Name',
                'db_name_placeholder' => 'Datenbank Name',
                'db_username_label' => 'Datenbank-Benutzername',
                'db_username_placeholder' => 'Datenbank-Benutzername',
                'db_password_label' => 'Datenbank Passwort',
                'db_password_placeholder' => 'Datenbank-Passwort',

                'app_tabs' => [
                    'more_info' => 'Weitere Informationen',
                    'broadcasting_title' => 'Broadcasting, Caching, Session, &amp; Queue',
                    'broadcasting_label' => 'Rundfunktreiber',
                    'broadcasting_placeholder' => 'Broadcasting-Treiber',
                    'cache_label' => 'Cache-Treiber',
                    'cache_placeholder' => 'Cache-Treiber',
                    'session_label' => 'Sitzungstreiber',
                    'session_placeholder' => 'Session Driver',
                    'queue_label' => 'Warteschlangentreiber',
                    'queue_placeholder' => 'Queue-Treiber',
                    'redis_label' => 'Redis-Treiber',
                    'redis_host' => 'Redis-Host',
                    'redis_password' => 'Redis Passwort',
                    'redis_port' => 'Redis Port',

                    'mail_label' => 'Mail',
                    'mail_driver_label' => 'Mail-Treiber',
                    'mail_driver_placeholder' => 'Mail-Treiber',
                    'mail_host_label' => 'Mail Host',
                    'mail_host_placeholder' => 'Mail Host',
                    'mail_port_label' => 'Mail Port',
                    'mail_port_placeholder' => 'Mail Port',
                    'mail_username_label' => 'Mail-Benutzername',
                    'mail_username_placeholder' => 'Mail-Benutzername',
                    'mail_password_label' => 'Mail Passwort',
                    'mail_password_placeholder' => 'Mail-Passwort',
                    'mail_encryption_label' => 'Mail-Verschlüsselung',
                    'mail_encryption_placeholder' => 'Mail-Verschlüsselung',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'Pusher App Id',
                    'pusher_app_id_palceholder' => 'Pusher App Id',
                    'pusher_app_key_label' => 'Pusher App Key',
                    'pusher_app_key_palceholder' => 'Pusher App Key',
                    'pusher_app_secret_label' => 'Pusher App Secret',
                    'pusher_app_secret_palceholder' => 'Pusher App Secret',
                ],
                'buttons' => [
                    'setup_database' => 'Datenbank einrichten',
                    'setup_application' => 'Anwendung einrichten',
                    'install' => 'Installieren',
                ],
                'db_connection_failed' => 'Die Verbindung zur Datenbank konnte nicht hergestellt werden. Überprüfen Sie Ihre Verbindungsdetails',
            ],
        ],
        'classic' => [
            'templateTitle' => 'Schritt 3 | Umgebungseinstellungen | Klassischer Editor',
            'title' => 'Klassischer Umgebungseditor',
            'save' => '.env speichern',
            'back' => 'Formular-Assistent verwenden',
            'install' => 'Speichern und installieren',
        ],
        'success' => 'Ihre Einstellungen in der .env-Datei wurden gespeichert.',
        'errors' => 'Die .env-Datei konnte nicht gespeichert werden, bitte erstellen Sie sie manuell.',
    ],

    'install' => 'Installieren',

    /**
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'Laravel Installer erfolgreich INSTALLIERT auf ',
    ],

    /**
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'Installation abgeschlossen',
        'templateTitle' => 'Installation abgeschlossen',
        'finished' => 'Smartend wurde erfolgreich installiert.',
        'migration' => 'Migration &amp; Seed Console Output:',
        'console' => 'Ausgabe der Anwendungskonsole:',
        'log' => 'Installationsprotokolleintrag:',
        'env' => 'Endgültige .env-Datei:',
        'exit' => 'Zum Smartend Dashboard gehen',
    ],

    /**
     *
     * Update specific translations
     *
     */
    'updater' => [
        /**
         *
         * Shared translations.
         *
         */
        'title' => 'Laravel Updater',

        /**
         *
         * Welcome page translations for update feature.
         *
         */
        'welcome' => [
            'title' => 'Willkommen beim Aktualisierungsassistenten',
            'message' => 'Willkommen beim Update-Assistenten',
        ],

        /**
         *
         * Welcome page translations for update feature.
         *
         */
        'overview' => [
            'title' => 'Übersicht',
            'message' => "Es gibt 1 Update", "Es gibt :Anzahl Updates",
            'install_updates' => "Updates installieren"
        ],

        /**
         *
         * Final page translations.
         *
         */
        'final' => [
            'title' => 'Beendet',
            'finished' => 'Die Datenbank der Anwendung wurde erfolgreich aktualisiert.',
            'exit' => 'Klicken Sie hier, um zum Admin Dashboard zu gelangen',
        ],

        'log' => [
            'success_message' => 'Laravel Installer erfolgreich UPDATED am ',
        ],
    ],

];
