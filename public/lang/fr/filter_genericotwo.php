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
 * Strings for component 'filter_genericotwo', language 'fr', version '4.5'.
 *
 * @package     filter_genericotwo
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Ajouter un modèle';
$string['aigensuccess'] = 'Génération par l’IA réussie';
$string['aihelper_apply_btn'] = 'Appliquer';
$string['aihelper_generate_btn'] = 'Générer';
$string['aihelper_generating'] = 'Génération…';
$string['aihelper_modal_instruction'] = 'Saisir les instructions pour que l’IA modifie le contenu du modèle. L’IA recevra le contenu de tous les éditeurs de cette page.';
$string['aihelper_modal_title'] = 'Assistant IA';
$string['aihelper_prompt_label'] = 'Instructions';
$string['aihelper_prompt_placeholder'] = 'Par exemple&nbsp;: formater le HTML, ajouter une mise en page de base, etc.';
$string['aihelper_response_label'] = 'Réponse de l’IA';
$string['airesponsetruncated'] = 'La réponse de l’IA a été coupée avant la fin (le modèle a atteint sa limite de production). Essayer une instruction plus spécifique qui modifie moins d’éditeurs, ou utiliser un modèle avec une limite de production plus grande.';
$string['bundle'] = 'Lot';
$string['deleteconfirm'] = 'Voulez-vous vraiment supprimer ce modèle&nbsp;?';
$string['deletetemplate'] = 'Supprimer le modèle';
$string['edittemplate'] = 'Modifier le modèle';
$string['enableaihelper'] = 'Activer l’assistant IA';
$string['enableaihelper_desc'] = 'Activer le bouton de l’assistant IA pour la modification de modèle.';
$string['filtername'] = 'Filtre Generico Two';
$string['finished'] = 'Terminé';
$string['fullwidth'] = 'Pleine largeur';
$string['genericotwo:managetemplates'] = 'Gérer les modèles';
$string['handlelegacytags'] = 'Gérer les balises héritées';
$string['handlelegacytags_desc'] = 'Si activé, ce filtre traitera également les balises {GENERICO:type="xx"} en utilisant les modèles Generico Two.';
$string['jsonparsefail'] = 'Échec de l’analyse de la réponse JSON du fournisseur d’IA.';
$string['jsonparsefaildetail'] = '({$a->error}) La réponse a commencé par&nbsp;: «&nbsp;{$a->snippet}&nbsp;»';
$string['managetemplates'] = 'Gérer les modèles';
$string['migrateconfirm'] = 'Voulez-vous vraiment migrer les modèles sélectionnés&nbsp;?';
$string['migratelegacy'] = 'Migrer les modèles anciens';
$string['migrateselected'] = 'Migrer les modèles sélectionnés';
$string['migrationsuccess'] = 'Migration réussie de «&nbsp;{$a}&nbsp;» modèles.';
$string['nomigrationcandidates'] = 'Aucun modèle disponible pour la migration (tous les modèles Generico existent déjà dans Generico Two).';
$string['nopreviewstring'] = 'La chaîne de test est vide. Elle devrait ressembler à {G2:type=mytemplate,var=abc}';
$string['paused'] = 'En pause';
$string['play'] = 'Lire';
$string['playbackspeed'] = 'Vitesse de lecture';
$string['playing'] = 'Lecture en cours';
$string['pluginname'] = 'Filtre Generico Two (G2)';
$string['presetavailable'] = 'Préréglage Generico Two disponible';
$string['presets'] = 'Préréglages';
$string['presets_help'] = 'Choisir un préréglage pour remplir ce modèle avec des valeurs préconfigurées, puis cliquer sur «&nbsp;Enregistrer les modifications&nbsp;» pour créer le modèle. Les préréglages ne sont pas disponibles tant qu’ils n’ont pas été enregistrés en tant que modèles.';
$string['preview'] = 'Aperçu';
$string['preview_desc'] = 'Prévisualiser le résultat du modèle en utilisant les chaînes Test 1 ou Test 2.';
$string['privacy:metadata'] = 'Le filtre Generico Two (G2) n’enregistre aucune donnée personnelle.';
$string['privacy:preference:templates_fullwidth'] = 'Indique si la page des modèles est affichée en pleine largeur ou en largeur limitée.';
$string['ready'] = 'Prêt';
$string['remainingplays'] = 'Lectures restantes';
$string['required'] = 'Ce champ est obligatoire.';
$string['restart'] = 'Recommencer';
$string['selectall'] = 'Tout sélectionner';
$string['skipback'] = 'Reculer';
$string['skipforward'] = 'Avancer';
$string['skiptoend'] = 'Aller à la fin';
$string['speeddown'] = 'Ralentir';
$string['speedup'] = 'Accélérer';
$string['template'] = 'Modèle';
$string['template_allowedcontextids'] = 'Identifiants de contexte autorisés';
$string['template_allowedcontextids_help'] = 'Identifiants de contexte séparés par des virgules où ce modèle peut s’afficher. Laisser vide pour tous les contextes. Par exemple&nbsp;: 42,56,103';
$string['template_allowedcontexts'] = 'Contextes autorisés';
$string['template_allowedcontexts_help'] = 'Noms de contexte séparés par des virgules où ce modèle peut s’afficher. Laisser vide pour tous les contextes. Par exemple&nbsp;: course,system,block,mod_forum,coursecat,user';
$string['template_content'] = 'Contenu';
$string['template_content_help'] = 'Le HTML qui remplace la balise de filtre, rendu sous forme de modèle Mustache. Insérer des variables avec {{variablename}}, ou utiliser le bouton Insérer une variable. Par exemple&nbsp;: <div id="{{AUTOID}}">{{heading}}</div>';
$string['template_cssstyles'] = 'Styles CSS';
$string['template_customcss'] = 'CSS personnalisé';
$string['template_customcss_help'] = 'CSS appliqué partout où ce modèle s’affiche. Il s’agit de CSS brut, pas d’un modèle Mustache, donc les variables ne fonctionnent pas ici. Limitez la portée de vos règles avec les propres noms de classe du modèle afin qu’elles ne puissent pas déborder sur le reste de la page.';
$string['template_dataset'] = 'Corps du jeu de données';
$string['template_dataset_help'] = 'Récupérer des données de la base de données à l’aide de requêtes SQL paramétrées en utilisant ? comme espaces réservés. Par exemple&nbsp;: SELECT id, firstname, lastname FROM {user} WHERE id = ?';
$string['template_datasetsettings'] = 'Jeu de données';
$string['template_datasetvars'] = 'Variables du jeu de données';
$string['template_datasetvars_help'] = 'Valeurs séparées par des virgules passées comme paramètres ?&nbsp;: {{USER:id}}. Résultats disponibles dans le modèle sous la forme {{#DATASET}}{{firstname}}{{/DATASET}}.';
$string['template_importcss'] = 'URL du CSS à importer';
$string['template_importcss_help'] = 'URL d’une feuille de style à charger partout où ce modèle s’affiche, par exemple une bibliothèque hébergée sur un CDN. Une URL commençant par // prend le protocole de ce site, et une commençant par / est traitée comme un chemin au sein de ce site. Par exemple&nbsp;: https://cdn.example.com/widget.css';
$string['template_instructions'] = 'Instructions';
$string['template_instructions_help'] = 'Affiché à l’utilisateur lorsqu’il insère ce widget depuis l’éditeur. Expliquer ce que fait le widget, quoi mettre entre les balises de début et de fin s’il possède les deux, et à quoi sert chacune de ses variables. Les préréglages groupés fournissent leurs propres instructions.';
$string['template_jscontent'] = 'Contenu JS';
$string['template_jscontent_help'] = 'Ajouter du JavaScript pour contrôler le comportement du modèle.';
$string['template_name'] = 'Nom';
$string['template_name_help'] = 'Un nom lisible pour ce modèle, affiché dans la liste des modèles. Il n’est pas utilisé dans la balise de filtre, il peut donc être modifié à tout moment.';
$string['template_previewcontext'] = 'Contexte d’aperçu';
$string['template_security'] = 'Sécurité';
$string['template_templateend'] = 'Fin du modèle';
$string['template_templateend_help'] = 'Rendu en utilisant {G2:type=templatekey_end}. Par exemple&nbsp;: {G2:type=templatekey}votre contenu ici{G2:type=templatekey_end}';
$string['template_templatekey'] = 'Clef du modèle';
$string['template_templatekey_help'] = 'Le nom utilisé dans la balise de filtre pour appeler ce modèle, sous la forme {G2:type=templatekey}. Il doit être unique pour tous les modèles. Le modifier rompt toutes les balises existantes qui utilisent l’ancienne clef.';
$string['template_test1'] = 'Chaîne de test 1';
$string['template_test1_help'] = 'Saisir une balise de filtre pour prévisualiser ce modèle. Inclure des variables pour les tester&nbsp;: {G2:type=templatekey,heading=Welcome}. Pour tester la fin du modèle, inclure les deux balises&nbsp;: {G2:type=templatekey}{G2:type=templatekey_end}';
$string['template_test2'] = 'Chaîne de test 2';
$string['template_test2_help'] = 'Saisir une balise de filtre pour prévisualiser ce modèle. Inclure des variables pour les tester&nbsp;: {G2:type=templatekey,heading=Welcome}. Pour tester la fin du modèle, inclure les deux balises&nbsp;: {G2:type=templatekey}{G2:type=templatekey_end}';
$string['template_variabledefaults'] = 'Valeurs par défaut des variables';
$string['template_variabledefaults_help'] = 'Définir des valeurs par défaut pour vos variables, par exemple `width=500,height=300,heading=welcome`.';
$string['template_version'] = 'Version';
$string['template_version_help'] = 'La version de ce modèle, par exemple 1.0.1. Pour un modèle issu d’un préréglage groupé, elle est comparée à la version du préréglage pour proposer une mise à jour sur la liste des modèles, donc la baisser ou l’effacer est à vos risques et périls.';
$string['templateadded'] = 'Modèle ajouté avec succès';
$string['templatedeleted'] = 'Modèle supprimé avec succès';
$string['templates'] = 'Modèles';
$string['templatesinstructions'] = 'Ajouter ou modifier un modèle ici pour le rendre disponible pour le filtre. Un modèle est un modèle Mustache avec certains champs, du JavaScript et du CSS.';
$string['templatesupdated'] = 'Mise à jour de «&nbsp;{$a}&nbsp;» modèle(s) à partir des préréglages';
$string['templateupdated'] = 'Modèle mis à jour avec succès';
$string['test1'] = 'Test 1';
$string['test2'] = 'Test 2';
$string['updateall'] = 'Tout mettre à jour';
$string['updateallconfirm'] = 'Voulez-vous vraiment mettre à jour tous les modèles pouvant l’être à partir de leurs préréglages plus récents&nbsp;? Toutes les modifications locales apportées à ces modèles seront écrasées. Les contextes autorisés et les chaînes de test seront conservés.';
$string['updateconfirm'] = 'Voulez-vous vraiment mettre à jour ce modèle à partir de son préréglage plus récent (version «&nbsp;{$a}&nbsp;»)&nbsp;? Toutes les modifications locales apportées à ce modèle seront écrasées. Les contextes autorisés et les chaînes de test seront conservés.';
$string['updatetoversion'] = 'Mettre à jour vers la version «&nbsp;{$a}&nbsp;»';
$string['variables_autoid'] = 'Un identifiant DOM unique pour cette balise. L’utiliser pour nommer les éléments dans le corps, puis les sélectionner dans le JS.';
$string['variables_coursecontextid'] = 'L’identifiant de contexte du cours actuel';
$string['variables_coursecustomfield'] = 'Champ personnalisé de cours&nbsp;: «&nbsp;{$a}&nbsp;»';
$string['variables_coursefield'] = 'Cours actuel&nbsp;: «&nbsp;{$a}&nbsp;»';
$string['variables_datasetcolumn'] = 'Une colonne de la ligne actuelle du jeu de données, utilisée à l’intérieur d’une section de jeu de données';
$string['variables_datasetempty'] = 'Affiché uniquement lorsque la requête du jeu de données n’a renvoyé aucune ligne';
$string['variables_datasetloop'] = 'Répète son contenu une fois pour chaque ligne renvoyée par la requête du jeu de données';
$string['variables_group_course'] = 'Cours';
$string['variables_group_dataset'] = 'Jeu de données';
$string['variables_group_helpers'] = 'Assistants Moodle';
$string['variables_group_system'] = 'Système';
$string['variables_group_template'] = 'Ce modèle';
$string['variables_group_urlparam'] = 'Paramètres d’URL';
$string['variables_group_user'] = 'Utilisateur';
$string['variables_helpercleanstr'] = 'Une chaîne de langue Moodle sans le HTML';
$string['variables_helperpix'] = 'Une icône Moodle';
$string['variables_helperstr'] = 'Une chaîne de langue Moodle';
$string['variables_insert'] = 'Insérer une variable';
$string['variables_jsnote'] = 'Les variables sont insérées non échappées ({{{name}}}) ici, ce dont les littéraux de chaîne JavaScript ont besoin.';
$string['variables_moodlepageid'] = 'Le paramètre id de l’URL de la page actuelle, ou 0 s’il n’y en a pas';
$string['variables_nomatches'] = 'Aucune variable correspondante';
$string['variables_search'] = 'Rechercher des variables';
$string['variables_uniqid'] = 'Le même identifiant unique que AUTOID';
$string['variables_urlparam'] = 'Paramètre d’URL&nbsp;: «&nbsp;{$a}&nbsp;»';
$string['variables_urlparamother'] = 'Tout autre paramètre de l’URL de la page actuelle. Saisir le nom du paramètre.';
$string['variables_userfield'] = 'Utilisateur actuel&nbsp;: «&nbsp;{$a}&nbsp;»';
$string['variables_userpic'] = 'La photo de profil de l’utilisateur actuel, sous forme d’image HTML';
$string['variables_userpicurl'] = 'L’URL de la photo de profil de l’utilisateur actuel';
$string['variables_userprofilefield'] = 'Champ de profil utilisateur&nbsp;: «&nbsp;{$a}&nbsp;»';
$string['variables_wwwroot'] = 'L’URL de ce site Moodle';
$string['volumedown'] = 'Diminuer le volume';
$string['volumeup'] = 'Augmenter le volume';
