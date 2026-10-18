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
 * Strings for component 'classjournal', language 'fr', version '4.5'.
 *
 * @package     classjournal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlesson'] = 'Ajouter une leçon';
$string['aggregation'] = 'Agrégation finale de la note';
$string['aggregation_help'] = 'Contrôle comment le total du journal est calculé dans la vue du journal, le carnet de note Moodle et l\'API. Somme ajoute les points de la leçon et plafonne le résultat au maximum du carnet de note. Moyenne calcule le pourcentage moyen et le convertit selon le maximum du carnet de note.';
$string['aggregationavg'] = 'Moyenne';
$string['aggregationavgdescription'] = 'Note finale : Moodle utilise le poucentage moyen des leçons avec des notes et le convertit en {$a}. Les notes vides sont ignorées.';
$string['aggregationavgzerodescription'] = 'Note finale : Moodle utilise le pourcentage moyen de toutes les leçons et les convertit en {$a}. Les notes vides comptent comme 0.';
$string['aggregationsum'] = 'Somme';
$string['aggregationsumdescription'] = 'Note finale : les points des leçons sont additionnés, les notes vides sont ignorées et le résultat est plafonné à {$a} dans le carnet de notes Moodle.';
$string['aggregationsumzerodescription'] = 'Note finale : les points des leçons sont additionnés, les notes vides sont comptées comme 0, et le résultat final est plafonné à {$a} dans le carnet de notes Moodle.';
$string['calendarevents'] = 'Afficher les dates des leçons dans le calendrier';
$string['calendarevents_desc'] = 'Défaut pour les nouveaux journaux : publier les dates des leçons dans le calendrier.';
$string['calendarevents_help'] = 'Quand cette option est active, chaque date de leçon est publiée sous forme d\'événement dans le calendrier du cours et les événements sont mis à jour ou supprimés quand les leçons sont modifiées. Désactiver cette option si un autre module (par exemple le module attendance) ajoute déjà ces dates au calendrier, afin d\'éviter les doublons.';
$string['changedate'] = 'Changer la date';
$string['changedateinfo'] = 'Une nouvelle date sera appliquée sur les leçons sélectionnées ({$a}). Les heures des leçons sont maintenues.';
$string['classjournal:addinstance'] = 'Ajouter un nouveau journal de classe';
$string['classjournal:grade'] = 'Noter les leçons du journal de classe';
$string['classjournal:manage'] = 'Gérer les leçons du journal de classe';
$string['classjournal:view'] = 'Visualiser le journal de classe';
$string['classjournal:viewallgrades'] = 'Visualiser toutes les notes du journal de classe';
$string['comment'] = 'Commentaire';
$string['confirmbulkdeletelessons'] = 'Supprimer les leçons sélectionnées ({$a}) et leurs notes ?';
$string['confirmdeletelesson'] = 'Supprimer la leçon « {$a} » et toutes ses notes ?';
$string['csvfile'] = 'Fichier Excel ou CSV';
$string['decimalpoints'] = 'Nombre de décimales';
$string['decimalpoints_help'] = 'Nombre de chiffres affichés après la virgule dans les notes numériques des leçons, les notes maximales et les totaux du journal. Ceci modifie uniquement la manière dont les notes sont affichées, les notes enregistrées conservent leur entière précision.';
$string['deletelesson'] = 'Supprimer la leçon';
$string['deleteselectedlessons'] = 'Supprimer les leçons sélectionnées';
$string['description'] = 'Description';
$string['editlesson'] = 'Éditer la leçon';
$string['emptygradeszero'] = 'Considérer les notes vides comme zéro';
$string['emptygradeszero_help'] = 'Si cette option est activée, les leçons sans note sont incluses dans le calcul final sous forme de 0. Si elle est désactivée, les notes vides sont ignorées de manière qu\'une moyenne soit basée uniquement sur les leçons où une note a été entrée.';
$string['exportcsv'] = 'Exporter vers Excel';
$string['fillcolumn'] = 'Compléter la colonne';
$string['grade'] = 'Note';
$string['gradebookmax'] = 'Maximum dans le carnet de notes';
$string['gradebookmax_help'] = 'Valeur maximale de la note synthétique dans le carnet de notes Moodle pour ce journal. Les maxima des leçons peuvent toujours être 5, 10 ou 100, alors que la colonne dans le carnet de notes final peut toujours être affichée selon un barème fixe tel que 100.';
$string['gradedlessons'] = 'Leçons notées';
$string['gradelesson'] = 'Noter une leçon';
$string['grades'] = 'Notes';
$string['gradetype'] = 'Notes';
$string['gradetype_help'] = 'Choisir comment cette leçon sera notée :

* **Points** – les enseignants entrent un nombre entre 0 et le maximum choisi.
* **Barème** – les enseignants choisissent une option nommée dans un barème Moodle.

Quoi qu\'il en soit, le carnet de notes conserve un  **total numérique unique** pour tout le journal. L\'option Barème est convertie en son équivalent numérique (par exemple les 3e et 4e options = 75%) et ajoutée au total comme n\'importe quelle autre leçon..

Les options disponibles pour un barème sont celle définies dans *Administration > Notes > Barèmes*.';
$string['gradetypepoint'] = 'Points';
$string['gradetypescale'] = 'Barème';
$string['import'] = 'Importer';
$string['importbadformat'] = 'Ce fichier ne peut être lu. Utiliser un fichier précédemment exporté depuis cette page, comprenant la colonne « userid » et des colonnes de leçons.';
$string['importcsv'] = 'Importer depuis un fichier';
$string['importdone'] = 'Notes mises à jour : {$a->written}, colonnes ignorées : {$a->skipped}.';
$string['importhelp'] = 'Téléverser un fichier Excel (.xlsx) ou CSV précédemment exporté depuis cette page. Conserver la colonne « userid » et les colonnes de leçons (se terminant par [#id]). Une valeur indique une note, une cellule vide signifie pas de note. Les commentaires ne sont pas modifiés.';
$string['invalidgrade'] = 'La note doit être comprise entre 0 et {$a}.';
$string['invalidlessongroup'] = 'Vous ne pouvez pas attribuer une leçon à ce groupe.';
$string['invalidlessontime'] = 'L\'heure de fin doit être postérieure à l\'heure de début';
$string['lesson'] = 'Leçon';
$string['lessondate'] = 'Date de la leçon';
$string['lessongroup'] = 'Groupe';
$string['lessongroup_help'] = 'Restreindre la leçon à un groupe de cours.
* **Tous les participants** - tous les étudiants voient la leçon, et l\'événement de calendrier est un événement de cours
* **Un groupe** - seuls les membre de ce groupe voient la leçon et sont notés dessus, et l\'événement de calendrier est affiché à ce groupe uniquement.

Les leçons des autres groupes sont ignorées quand le total du journal est calculé, de manière qu\'un groupe ne soit jamais affecté que par les leçons auxquelles il est assigné.';
$string['lessongroupall'] = 'Tous les participants';
$string['lessonname'] = 'Nom de la leçon';
$string['lessonnotforuser'] = 'n/a';
$string['lessons'] = 'Leçons';
$string['lessonsdatechanged'] = 'La date des leçons sélectionnées a été modifiée.';
$string['lessonsdeleted'] = 'Les leçons sélectionnées ont été supprimées.';
$string['lessontime'] = 'Heure';
$string['maxgrade'] = 'Note maximale.';
$string['modulename'] = 'Journal de classe';
$string['modulename_help'] = 'L\'activité Journal de Classe permet à un enseignant de gérer un registre traditionnel à l\'intérieur d\'un cours: une liste de leçons à gauche, les étudiants à droite et une note par étudiant et par leçon.

Les enseignants peuvent:

* Créer des leçons une par une, ou répéter une leçon toutes les N semaines pour compléter une période en une fois.
* Donner à chaque leçon une date, un intervale de temps optionnel et une note maximale sous la forme de points ou d\'un barême Moodle.
* Restreindre une leçon à un seul groupe de cours, de manière que seuls les membres du groupe la voient et soient notés dessus.
* Entrer les notes et les commentaires dans un tableau, avec sauvegarde automatique, ou exporter le tableau vers un fichier Excel et le réimporter ensuite.
* Publier les dates des leçons dans le calendrier du cours.

Les étudiants visualisent leurs notes pour chaque leçon, leur total en cours et le nombre de leçons pour lesquelles ils ont reçu une note. Le Carnet de notes reçoit une note unique par Journal de classe, calculée comme la somme ou la moyenne des leçons. Par conséquent, le Journal de classe y contribue sous la forme d\'une colonne distincte dans le total du cours.';
$string['modulenameplural'] = 'Journaux de classe';
$string['nogrades'] = 'Pas encore de note.';
$string['nolessons'] = 'Pas encore de leçons.';
$string['pluginadministration'] = 'Administration du journal de classe';
$string['pluginname'] = 'Journal de classe';
$string['privacy:metadata:classjournal_grades'] = 'Stocke les notes et commentaires des leçons d\'un journal de classe';
$string['privacy:metadata:classjournal_grades:comment'] = 'Le commentaire optionnel de l\'enseignant.';
$string['privacy:metadata:classjournal_grades:grade'] = 'La note de la leçon.';
$string['privacy:metadata:classjournal_grades:timemodified'] = 'L\'heure à laquelle la note a été modifiée pour la dernière fois.';
$string['privacy:metadata:classjournal_grades:userid'] = 'L\'utilisateur qui a reçu la note.';
$string['repeatcount'] = 'Nombre de leçons à créer';
$string['repeatinterval'] = 'Répéter toutes les N semaines';
$string['savegrades'] = 'Enregistrer les notes';
$string['scale'] = 'Barème';
$string['scale_help'] = 'Les options de notes affichées aux enseignants sont les items de ce barème, listés du plus petit au plus grand. On peut gérer les barèmes dans *Administration du cours > Notes > Barèmes*. L\'option choisie est stockée et convertie en un pourcentage du barème pour alimenter le total numérique unique du journal dans le carnet de notes.';
$string['searchlessons'] = 'Chercher des leçons';
$string['selectlesson'] = 'Sélectionner la leçon {$a}';
$string['settime'] = 'Choisir l\'heure de la leçon';
$string['showallgrades'] = 'Visualiser les notes des autres étudiants';
$string['showallgrades_help'] = 'Si activé, les étudiants peuvent consulter les notes pour d\'autres étudiants. Garder désactivé pour des journaux privés.';
$string['total'] = 'Total';
$string['usernotinlessongroup'] = 'L\'étudiant n\'est pas membre du groupe auquel la leçon est assignée.';
$string['viewall'] = 'Tout';
$string['viewday'] = 'Aujourd\'hui';
$string['viewmonth'] = 'Mois';
$string['viewpast'] = 'Passées';
$string['viewweek'] = 'Semaine';
$string['visiblelessonssaved'] = 'Cette page enregistre les notes uniquement pour les leçons actuellement affichées en fonction des filtres et de la pagination.';
$string['withselectedlessons'] = 'Avec les leçons sélectionnées';
