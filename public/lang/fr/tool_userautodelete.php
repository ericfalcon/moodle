<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_userautodelete', language 'fr', version '4.5'.
 *
 * @package     tool_userautodelete
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['affected_users'] = 'Utilisateurs concernés';
$string['back_to_settings'] = 'Retour aux réglages';
$string['deleted'] = 'Supprimé';
$string['dry_run'] = 'Essai (sans modification)';
$string['dry_run_explanation'] = 'Cette page affiche les actions qui seraient effectuées lors de l’exécution de la prochaine tâche de vérification. Aucune de ces actions ne sera réellement effectuée !';
$string['inactivity_warning'] = 'Avertissement d’inactivité';
$string['last_check'] = 'Dernière vérification';
$string['next_check'] = 'Prochaine vérification';
$string['next_check_never'] = 'Jamais (plugin désactivé)';
$string['next_check_would'] = 'Sera vérifié';
$string['plugin_disabled_skipping_execution'] = 'Le plugin est désactivé globalement, l’exécution est ignorée.';
$string['pluginname'] = 'Suppression automatique d’utilisateurs';
$string['recovered'] = 'Récupéré';
$string['reltime_prefix_ago'] = 'il y a';
$string['reltime_prefix_in'] = 'dans';
$string['reltime_suffix_ago'] = '';
$string['reltime_suffix_in'] = '';
$string['setting_enable'] = 'Activer le plugin';
$string['setting_enable_desc'] = 'Active ou désactive le plugin de manière globale. Si cette option est désactivée, aucune action ne sera effectuée.';
$string['setting_plugin_desc'] = 'Ce plugin supprime automatiquement les utilisateurs qui ne se sont pas connectés après un nombre de jours paramétrable. Cela permet de garder votre base de données propre et de supprimer les anciens comptes qui ne sont plus nécessaires. Le plugin peut être configuré pour envoyer des courriels d’avertissement quelques jours avant la suppression de l’utilisateur. Cela donne aux utilisateurs la possibilité de se reconnecter et de conserver leur compte actif. Ce plugin prend également en charge la suppression des utilisateurs conformément au RGPD (règlement général européen sur la protection des données), sans laisser aucune trace d’informations personnelles identifiables dans la table « user » en base de données.';
$string['setting_task_execution_interval'] = 'Intervalle de vérification';
$string['setting_task_execution_interval_button'] = 'Configurer l’intervalle de vérification';
$string['setting_task_execution_interval_desc'] = 'La vérification des utilisateurs inactifs est exécutée en utilisant une tâche programmée qui est exécutée par le cron de Moodle. Vous pouvez configurer l’intervalle auquel il s’exécute en cliquant sur le bouton suivant.';
$string['users_to_delete'] = 'Les utilisateurs à supprimer';
$string['users_to_warn'] = 'Les utilisateurs à avertir';
$string['warned'] = 'Averti';
