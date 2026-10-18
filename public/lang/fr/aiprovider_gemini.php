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
 * Strings for component 'aiprovider_gemini', language 'fr', version '4.5'.
 *
 * @package     aiprovider_gemini
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:generate_image:endpoint'] = 'Point de terminaison API';
$string['action:generate_image:model'] = 'Modèle IA';
$string['action:generate_text:endpoint'] = 'Point de terminaison API';
$string['action:generate_text:model'] = 'Modèle IA';
$string['action:generate_text:systeminstruction'] = 'Instruction système';
$string['action:summarise_text:endpoint'] = 'Point de terminaison API';
$string['action:summarise_text:model'] = 'Modèle IA';
$string['action:summarise_text:systeminstruction'] = 'Instruction système';
$string['apikey'] = 'Clef API';
$string['endpoint_desc'] = 'Pour Gemini 3 et les modèles d’image natifs, utiliser un point de terminaison API Interactions. Les configurations obsolètes existantes peuvent continuer à utiliser leur point de terminaison GenerateContent.';
$string['getallmodels_error'] = 'Vous devez d’abord insérer la clef API.';
$string['image_endpoint_unsupported'] = 'La génération d’images native Gemini requiert un point de terminaison API Interactions. Modifier le point de terminaison du fournisseur dans les réglages d’administration.';
$string['image_model_unsupported'] = 'Le modèle d’image configuré n’est plus pris en charge. Sélectionner un modèle d’image natif stable Gemini 3.';
$string['image_quality_unsupported'] = 'Le modèle d’image sélectionné ne prend en charge que des sorties de 1 Ko. Sélectionner Qualité standard ou un autre modèle d’image.';
$string['image_response_missing'] = 'La réponse de l’API Gemini ne comporte pas d’image générée.';
$string['pluginname'] = 'Fournisseur API Gemini';
$string['privacy:metadata'] = 'Le plugin fournisseur API Gemini n’enregistre aucune donnée personnelle.';
$string['privacy:metadata:aiprovider_gemini:externalpurpose'] = 'Cette information est envoyée à l’API Gemini pour permettre la génération d’une réponse. Les réglages de votre compte Gemini peuvent modifier la façon dont Gemini enregistre ces données. Aucune donnée personnelle n’est directement envoyée à Gemini ou enregistrée dans Moodle par ce plugin.';
$string['privacy:metadata:aiprovider_gemini:model'] = 'Le modèle utilisé pour générer la réponse.';
$string['privacy:metadata:aiprovider_gemini:numberimages'] = 'Lorsque des images sont générées, le nombre d’images utilisées dans la réponse.';
$string['privacy:metadata:aiprovider_gemini:prompttext'] = 'Le prompt saisi par l’utilisateur pour générer la réponse.';
$string['privacy:metadata:aiprovider_gemini:responseformat'] = 'Le format de la réponse, quand des images sont générées.';
