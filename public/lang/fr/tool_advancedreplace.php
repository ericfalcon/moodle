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
 * Strings for component 'tool_advancedreplace', language 'fr', version '4.5'.
 *
 * @package     tool_advancedreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirm_delete'] = 'Voulez-vous vraiment supprimer la recherche ? Cela supprimera aussi les résultats existants.';
$string['copyoptions'] = 'Copier les options de recherche';
$string['errorcolumntypenotsupported'] = 'Le type de colonne n’est pas pris en charge.';
$string['errorfilenotfound'] = 'Fichier introuvable.';
$string['errorinvalidfile'] = 'Le fichier n’est pas valide.';
$string['errorinvalidparam'] = 'Paramètre non valide.';
$string['errormissingfields'] = 'Les champs suivants manquent : {$a}';
$string['errorregexnotsupported'] = 'Les recherches par expression régulière ne sont pas prises en charge par cette base de données.';
$string['errorreplacingcontentzip'] = 'Impossible de charger le contenu du fichier depuis l’archive zip';
$string['errorreplacingfile'] = 'Le nouveau fichier n’a pas été créé';
$string['errorreplacingfilenotfound'] = 'Fichier introuvable';
$string['errorreplacingfilenotfoundzip'] = 'Fichier introuvable dans l’archive zip';
$string['errorreplacingopenzip'] = 'Impossible d’ouvrir l’archive zip';
$string['errorreplacingstring'] = 'Texte de recherche introuvable dans l’enregistrement';
$string['errorreplacingstringnorecord'] = 'L’enregistrement n’existe pas dans la base de données';
$string['errorsearchmethod'] = 'Veuillez choisir une des méthodes de recherche : texte brut ou expression régulière.';
$string['eta'] = 'Délai : {$a}';
$string['excludedtables'] = 'Plusieurs tables qui ne prennent pas en charge les remplacements ne sont pas recherchées. Elles incluent les tables de configuration, de journal, d’événements et de session.';
$string['field_actions'] = 'Actions';
$string['field_column'] = 'Colonne';
$string['field_component'] = 'Composant';
$string['field_components'] = 'Composants';
$string['field_components_help'] = 'Restreindre la recherche à ces composants. Séparer les composants par des virgules. Ex : core_h5p,mod_hvp,mod_assign';
$string['field_duration'] = 'Durée';
$string['field_error'] = 'Erreur';
$string['field_filearea'] = 'Zone de fichier';
$string['field_filename'] = 'Nom de fichier';
$string['field_filenames'] = 'Noms de fichier';
$string['field_filenames_help'] = 'Restreindre la recherche à ces noms de fichiers. Séparer les noms de fichiers par des virgules. Ex : chapter1.html,chapter2.html';
$string['field_id'] = 'ID';
$string['field_matches'] = 'Trouvé';
$string['field_mimetypes'] = 'Types MIME';
$string['field_mimetypes_help'] = 'Restreindre la recherche à ces types MIME. Séparer les types MIME par des virgules. Ex : application/zip.h5p,application/json';
$string['field_name'] = 'Nom';
$string['field_name_help'] = 'Nom facultatif pour identifier la recherche. Servira aussi de nom de fichier.';
$string['field_openzips'] = 'Ouvrir les zips';
$string['field_openzips_help'] = 'Ouvrir les archives zip et rechercher les sous-fichiers à l’intérieur.';
$string['field_options'] = 'Options';
$string['field_output'] = 'Résultats';
$string['field_pattern'] = 'Expression régulière';
$string['field_pattern_help'] = 'Expression régulière à faire correspondre dans les fichiers.';
$string['field_prematch'] = 'Filtre de précorrespondance';
$string['field_prematch_help'] = 'Filtre facultatif pour faire une précorrespondance avant la recherche par expression régulière. Cela peut aider à accélérer la recherche, mais les performances dépendront du moteur de la base de données, de la complexité de l’expression régulière et des index de table.';
$string['field_progress'] = 'Progression';
$string['field_regex'] = 'Utiliser l’expression régulière';
$string['field_row'] = 'Numéro de ligne';
$string['field_search'] = 'Recherche';
$string['field_shards'] = 'Parties';
$string['field_shards_help'] = 'Diviser la recherche de fichier en un nombre de parties afin d’accélérer potentiellement le traitement. Chaque partie s’exécute en tant que tâche adhoc distincte. Il est généralement recommandé de laisser cette valeur à 1, sauf si vous avez augmenté la mémoire.';
$string['field_skipareas'] = 'Ignorer des zones';
$string['field_skipareas_help'] = 'Exclure ces zones de fichier de la recherche. Séparer les zones par des virgules. Ex : legacy,submission_files';
$string['field_skipcolumns'] = 'Ignorer des colonnes';
$string['field_skipcolumns_help'] = 'Colonnes à ignorer. Séparer plusieurs colonnes par une virgule.';
$string['field_skipcomponents'] = 'Ignorer des composants';
$string['field_skipcomponents_help'] = 'Exclure ces composants de la recherche. Séparer les composants par des virgules. Ex : backup,calendar,mod_zoom';
$string['field_skipfilenames'] = 'Ignorer les noms de fichiers';
$string['field_skipfilenames_help'] = 'Exclure ces noms de fichiers de la recherche. Séparer les noms de fichiers par des virgules. Ex : quotes.html,welcome.html';
$string['field_skipmimetypes'] = 'Ignorer les types MIME';
$string['field_skipmimetypes_help'] = 'Exclure ces types MIME de la recherche. Séparer les types MIME par des virgules. Ex : image/jpeg,image/png';
$string['field_skiptables'] = 'Ignorer les tables';
$string['field_skiptables_help'] = 'Tables à ignorer. Séparer plusieurs tables par une virgule.';
$string['field_skipzipfilenames'] = 'Ignorer les noms de fichiers zip';
$string['field_skipzipfilenames_help'] = 'Expression régulière pour rejeter les sous-fichiers à l’intérieur d’une archive zip.';
$string['field_summary'] = 'Mode résumé';
$string['field_summary_help'] = 'Le mode résumé affiche uniquement la colonne/la table où le texte est trouvé.';
$string['field_table'] = 'Table';
$string['field_tables'] = 'Tables';
$string['field_tables_help'] = 'Tables et colonnes à rechercher. Séparer plusieurs tables/colonnes par une virgule. Si non spécifié, rechercher toutes les tables et toutes les colonnes. Exemple de format : <code>user,assign_submission:submission</code>';
$string['field_timeend'] = 'Fin';
$string['field_timestart'] = 'Début';
$string['field_userid'] = 'Utilisateur';
$string['field_zipfilenames'] = 'Noms de fichiers zip';
$string['field_zipfilenames_help'] = 'Expression régulière pour faire correspondre les sous-fichiers dans une archive zip.';
$string['filespageheader'] = 'Rechercher du texte dans les fichiers Moodle';
$string['filespagename'] = 'Rechercher dans les fichiers';
$string['lastupdated'] = 'Dernière mise à jour il y a {$a}';
$string['newreplace'] = 'Nouveau remplacement';
$string['newsearch'] = 'Nouvelle recherche';
$string['pluginname'] = 'Recherche avancée et remplacement';
$string['privacy:metadata:tool_advancedreplace_files'] = 'Recherche avancée de fichiers';
$string['privacy:metadata:tool_advancedreplace_files:userid'] = 'Utilisateur ayant créé la recherche de fichiers';
$string['privacy:metadata:tool_advancedreplace_files:usermodified'] = 'Utilisateur ayant modifié la recherche de fichiers';
$string['privacy:metadata:tool_advancedreplace_search'] = 'Recherche avancée dans la base de données';
$string['privacy:metadata:tool_advancedreplace_search:userid'] = 'Utilisateur ayant créé la recherche dans la base de données';
$string['privacy:metadata:tool_advancedreplace_search:usermodified'] = 'Utilisateur ayant modifié la recherche dans la base de données';
$string['replace'] = 'Remplacer';
$string['replace_warning'] = 'Remplacement via l’interface non activé. Pour l’activer, définissez dans config.php :<br><code>{$a->file}</code><br> ou via la commande CLI :<br><code>{$a->command}</code>';
$string['replacecheckdb'] = 'Voulez-vous vraiment remplacer des chaînes dans la base de données à l’aide du fichier csv déposé ?';
$string['replacecheckfiles'] = 'Voulez-vous vraiment remplacer des chaînes dans les fichiers à l’aide du fichier csv déposé ?';
$string['replacefilespageheader'] = 'Remplacer du texte stocké dans les fichiers';
$string['replacefilespagename'] = 'Remplacer des chaînes dans les fichiers';
$string['replacepageheader'] = 'Remplacer du texte stocké dans la base de données';
$string['replacepagename'] = 'Remplacer des chaînes dans la base de données';
$string['searchcopy'] = 'Les options de recherche ont été copiées depuis une recherche précédente. Cela sera traité comme une nouvelle recherche.';
$string['searchdeleted'] = 'La recherche sélectionnée a été supprimée.';
$string['searchpageheader'] = 'Rechercher du texte stocké dans la base de données';
$string['searchpagename'] = 'Rechercher dans la base de données';
$string['searchqueued'] = 'Votre recherche a été mise en file en tant que tâche ad hoc.';
$string['selectfile'] = 'Sélectionner un fichier';
$string['settings:excludetables'] = 'Exclure les tables';
$string['settings:excludetables_help'] = 'Liste personnalisée de tables qui seront toujours exclues des recherches. Chaque table doit être sur une nouvelle ligne.';
$string['settings:includetables'] = 'Inclure les tables';
$string['settings:includetables_help'] = 'Une fois défini, toutes les recherches seront restreintes uniquement aux tables spécifiées et à celles définies dans les options de recherche. Chaque table doit être sur une nouvelle ligne, et peut inclure une colonne en la formatant comme <code>nomdelatable:nomdelacolonne</code>.';
$string['settings:logduration'] = 'Journalisation de la recherche';
$string['settings:logduration_help'] = 'Afficher des informations de journal pour les colonnes qui n’ont aucun résultat correspondant, lorsque cela dépasse la durée spécifiée.';
$string['strftimedatetimemonthshort'] = '%d %b %y, %H:%M:%S';
