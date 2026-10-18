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
 * Strings for component 'qtype_stack', language 'fr', version '4.5'.
 *
 * @package     qtype_stack
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ATAddConst_Opt'] = 'Le test de réponse n\'a pas pu s\'exécuter correctement : veuillez en informer votre enseignant. Il y a un problème avec les options fournies au test de réponse AddConst.';
$string['ATAddConst_generic'] = 'Vous avez ajouté une constante supplémentaire, mais vous ne vous êtes pas contenté de l\'ajouter !';
$string['ATAddConst_noconst'] = 'Vous devez ajouter une constante. Il doit s\'agir d\'une constante arbitraire, et non d\'un nombre.';
$string['ATAddConst_severalconst'] = 'Plusieurs constantes ont été ajoutées et non pas une seule constante d\'intégration !';
$string['ATAlgEquiv_SA_not_equation'] = 'Votre réponse doit être une équation.';
$string['ATAlgEquiv_SA_not_expression'] = 'Votre réponse doit être une expression, et non une équation, ni une inéquation, ni une liste, ni un ensemble et ni une matrice.';
$string['ATAlgEquiv_SA_not_function'] = 'Votre réponse doit être une fonction, définie au moyen de l’opérateur <tt>:=</tt>.';
$string['ATAlgEquiv_SA_not_inequality'] = 'Votre réponse doit être une inéquation.';
$string['ATAlgEquiv_SA_not_list'] = 'Votre réponse doit être une liste. La syntaxe pour une liste est la suivante : les éléments de la liste sont séparés par des virgules et entourés de crochets [ et ].';
$string['ATAlgEquiv_SA_not_list_semi'] = 'Votre réponse devrait être une liste, mais ce n\'est pas le cas. Notez que pour saisir une liste, il faut placer les valeurs séparées par des points-virgules (;) entre crochets.';
$string['ATAlgEquiv_SA_not_logic'] = 'Votre réponse doit être une équation, une inéquation ou une combinaison logique de plusieurs d’entre elles.';
$string['ATAlgEquiv_SA_not_matrix'] = 'Votre réponse doit être une matrice.';
$string['ATAlgEquiv_SA_not_realset'] = 'Votre réponse doit être un sous-ensemble de nombres réels, par exemple un ensemble de nombre ou une collection d’intervalles.';
$string['ATAlgEquiv_SA_not_set'] = 'Votre réponse doit être un ensemble. La syntaxe pour un ensemble est la suivante : les éléments de la liste sont séparés par des virgules et entourés d’accolades \\{ et \\}.';
$string['ATAlgEquiv_SA_not_set_semi'] = 'Votre réponse devrait être un ensemble, mais ce n\'est pas le cas. Notez que pour saisir un ensemble, il faut placer les valeurs séparées par des points-virgules (;) entre accolades.';
$string['ATAlgEquiv_SA_not_string'] = 'La réponse doit être une chaîne de caractères.';
$string['ATAlgEquiv_TA_not_equation'] = 'Vous avez saisi une équation, qui n’est pas attendue ici. Vous avez peut-être sais quelque chose comme « y=2*x+1 », alors que vous ne devez saisir que « 2*x+1 ».';
$string['ATAntidiff_STACKERROR_Opt'] = 'Le test de réponse n\'a pas pu s\'exécuter correctement : veuillez en informer votre enseignant. Il y a un problème avec les options fournies au test de réponse ATAntidiff.';
$string['ATAntidiff_diff'] = 'On dirait plutôt que vous avez différencié !';
$string['ATAntidiff_error_list'] = 'Le test de réponse a échoué. Veuillez contacter votre administrateur système.';
$string['ATAntidiff_generic'] = 'La dérivée de votre réponse devrait être égale à l\'expression que l\'on vous a demandé d\'intégrer, à savoir : {$a->m0}. En réalité, la dérivée de votre réponse par rapport à {$a->m1} est : {$a->m2} ; vous avez donc dû faire une erreur !';
$string['ATCompSquare_SA_not_depend_var'] = 'Votre réponse doit dépendre de la variable {$a->m0}.';
$string['ATCompSquare_false_no_summands'] = 'La complétion au carré est de la forme \\( a(\\cdots\\cdots)^2 + b\\), où \\(a\\) et \\(b\\) ne dépendent pas de la variable. Dans votre réponse, un ou plusieurs termes dépendent de la variable.';
$string['ATCompSquare_not_AlgEquiv'] = 'Votre réponse semble être dans le bon format, mais n’est pas équivalente à la bonne réponse.';
$string['ATDiff_error_list'] = 'Le test de réponse a échoué. Veuillez contacter l’administrateur de la plateforme.';
$string['ATDiff_int'] = 'Il semble que vous avez calculé l’intégrale !';
$string['ATEqualComAssRules_Opt_Incompatible'] = 'L’option de ce test de réponse contient des règles incompatibles. Veuillez contacter votre enseignant.';
$string['ATEqualComAssRules_Opt_List'] = 'La réponse à ce test doit être une liste non vide de règles supportées. Il s’agit d’une erreur. Veuillez contacter votre enseignant.';
$string['ATEquivFirst_SA_not_list'] = 'Le premier argument d’un test de réponse Equiv doit être une liste. Veuillez contacter votre enseignant.';
$string['ATEquivFirst_SA_wrong_end'] = 'Votre réponse finale n’est pas dans le format correct.';
$string['ATEquivFirst_SA_wrong_start'] = 'La première ligne de votre argument doit être « {$a->m0} ».';
$string['ATEquivFirst_SB_not_list'] = 'Le deuxième argument d’un test de réponse Equiv doit être une liste. Veuillez contacter votre enseignant.';
$string['ATEquiv_SA_not_list'] = 'Le premier argument d’un test de réponse Equiv doit être une liste. Veuillez contacter votre enseignant.';
$string['ATEquiv_SB_not_list'] = 'Le deuxième argument d’un test de réponse Equiv doit être une liste. Veuillez contacter votre enseignant.';
$string['ATFacForm_error_list'] = 'Le test de réponse a échoué. Veuillez contacter l’administrateur de la plateforme.';
$string['ATFacForm_isfactored'] = 'Votre réponse est factorisée, bravo !';
$string['ATFacForm_notalgequiv'] = 'Votre réponse n’est pas algébriquement équivalente à la réponse correcte. Vous vous êtes sans doute trompé.';
$string['ATFacForm_notfactored'] = 'Votre réponse n’est pas factorisée.';
$string['ATFacForm_notpoly'] = 'On s\'attendrait à ce que ce terme soit un polynôme, mais ce n\'est pas le cas.';
$string['ATInequality_backwards'] = 'Votre inéquation semble être à l’envers.';
$string['ATInequality_nonstrict'] = 'Votre inéquation doit être une inégalité stricte.';
$string['ATInequality_strict'] = 'Votre inéquation ne doit pas être une inégalité stricte.';
$string['ATInt_EqFormalDiff'] = 'La dérivée formelle de votre réponse est égale à l’expression dont on vous a demandé l’intégration. Cependant, votre réponse diffère de la réponse correcte de façon significative (il ne s’agit pas simplement, par exemple, d’une constante d’intégration). Veuillez contacter votre enseignant à ce sujet.';
$string['ATInt_STACKERROR_OptList'] = 'Le test de réponse a échoué : veuillez alerter votre enseignant. Quand l’option de ATInt est une liste, elle doit avoir exactement deux éléments.';
$string['ATInt_const'] = 'Vous devez ajouter une constante d’intégration. À part ça, votre résultat est correct. Bravo !';
$string['ATInt_const_int'] = 'Vous devez ajouter une constante d’intégration, qui doit être une constante arbitraire, pas un nombre.';
$string['ATInt_diff'] = 'Il semble que vous avez calculé la dérivée !';
$string['ATInt_error_list'] = 'Le test de réponse a échoué. Veuillez contacter l’administrateur de la plateforme.';
$string['ATInt_generic'] = 'La dérivée de votre réponse doit être égale à l’expression dont on vous a demandé l’intégration, et qui était {$a->m0}. Or la dérivée de votre réponse par rapport à {$a->m1} est {$a->m2}. Vous avez donc fait une erreur quelque part.';
$string['ATInt_logabs'] = 'La dérivée formelle de votre réponse est égale à l’expression dont on vous a demandé l’intégration. Cependant, votre réponse diffère de la réponse correcte de façon significative (il ne s’agit pas simplement, par exemple, d’une constante d’intégration). Votre enseignant attend peut-être le résultat \\(\\int\\frac{1}{x} dx = \\log(|x|)+c\\) plutôt que \\(\\int\\frac{1}{x} dx = \\log(x)+c\\). Veuillez contacter votre enseignant à ce sujet.';
$string['ATInt_logabs_inconsistent'] = 'D’étranges incohérences se trouvent dans votre utilisation de (\\log(…)\\) et \\(\\log(|…|)\\). Veuillez contacter votre enseignant à ce sujet.';
$string['ATInt_weirdconst'] = 'La dérivée formelle de votre réponse est égale à l’expression dont on vous a demandé l’intégration. Cependant, votre constante d’intégration est étrange. Veuillez contacter votre enseignant à ce sujet.';
$string['ATLevenshtein_SA_not_string'] = 'Le premier argument du test de réponse de Levenshtein doit être une chaîne de caractères. Le test a échoué. Veuillez contacter votre enseignant.';
$string['ATLevenshtein_SB_malformed'] = 'Le deuxième argument du test de réponse Levenshtein doit être sous la forme [allow, deny], chaque élément étant une liste de chaînes de caractères. Cet argument est mal formé ; le test a donc échoué. Veuillez contacter votre enseignant.';
$string['ATLevenshtein_match'] = 'La correspondance la plus proche était « {$a->m0} ».';
$string['ATLevenshtein_tol_not_number'] = 'La tolérance dans le test de réponse de Levenshtein doit être un nombre, mais ce n\'est pas le cas. Le test a échoué. Veuillez contacter votre enseignant.';
$string['ATLevenshtein_upper_not_boolean'] = 'L\'option relative à la distinction entre majuscules et minuscules dans le test de réponse de Levenshtein doit être une valeur booléenne, mais ce n\'est pas le cas. Le test a échoué. Veuillez contacter votre enseignant.';
$string['ATList_wrongentries'] = 'Les éléments incorrects sont soulignés en rouge ci-dessous. {$a->m0}';
$string['ATList_wronglen'] = 'Votre liste doit comporter {$a->m0} éléments, mais elle en a {$a->m1}.';
$string['ATLowestTerms_entries'] = 'Les termes suivants de votre réponses ne sont pas dans leur forme réduite. {$a->m0} Veuillez essayer encore.';
$string['ATLowestTerms_not_rat'] = 'Vous devez simplifier cela dans le dénominateur de votre fraction : {$a->m0}';
$string['ATLowestTerms_wrong'] = 'Vous devez simplifier les fractions de votre réponse.';
$string['ATMatrix_wrongentries'] = 'Les éléments incorrects sont soulignés en rouge ci-dessous. {$a->m0}';
$string['ATMatrix_wrongsz'] = 'Votre matrice doit être de dimension {$a->m0} par {$a->m1}, mais elle est de dimension {$a->m2} par {$a->m3}.';
$string['ATNumDecPlacesWrong_OptNotInt'] = 'Pour ATNumDecPlacesWrong, l\'option de test doit être un entier positif ; or la valeur « {$a->m0} » a été reçue.';
$string['ATNumDecPlaces_Float'] = 'Votre réponse doit être un nombre à virgule flottante, mais ce n\'est pas le cas.';
$string['ATNumDecPlaces_NoDP'] = 'Votre réponse doit être un nombre décimal, avec un point décimal.';
$string['ATNumDecPlaces_OptNotInt'] = 'Pour ATNumDecPlaces, l\'option de test doit être un entier positif ; or la valeur « {$a->m0} » a été reçue.';
$string['ATNumDecPlaces_Wrong_DPs'] = 'Votre réponse comporte un nombre incorrecte de chiffres après le point décimal.';
$string['ATNumSigFigs_Inaccurate'] = 'La précision de votre réponse est insuffisante. Soit votre arrondi est incorrecte, soit vous avez arrondi un résultat intermédiaire, ce qui a propagé une erreur.';
$string['ATNumSigFigs_NotDecimal'] = 'Votre réponse doit être un nombre décimal.';
$string['ATNumSigFigs_WrongDigits'] = 'Votre réponse ne contient pas le nombre correct de chiffres significatifs.';
$string['ATNumSigFigs_WrongSign'] = 'Votre réponse n’a pas le bon signe.';
$string['ATNumSigFigs_error_list'] = 'Le test de réponse a échoué. Veuillez contacter l’administrateur de votre plateforme';
$string['ATNum_OutofRange'] = 'Une expression numérique est en dehors de l’intervalle supporté. Veuillez contacter votre enseignant.';
$string['ATNumerical_FAILED'] = 'Votre réponse doit être soit un nombre à virgule, soit une liste, soit un ensemble de nombres.';
$string['ATNumerical_SA_not_list'] = 'Votre réponse doit être une liste. Veuillez remarquer la syntaxe pour une liste : les éléments de la liste sont séparés par des virgules et entourés de crochets [ et ].';
$string['ATNumerical_SA_not_list_semi'] = 'Votre réponse devrait être une liste, mais ce n\'est pas le cas. Notez que pour saisir une liste, il faut placer les valeurs séparées par des points-virgules (;) entre crochets.';
$string['ATNumerical_SA_not_number'] = 'Votre réponse doit être un nombre à virgule.';
$string['ATNumerical_SA_not_set'] = 'Votre réponse doit être un ensemble. Veuillez remarquer la syntaxe pour un ensemble : les éléments de la liste sont séparés par des virgules et entourés d’accolades \\{ et \\}.';
$string['ATNumerical_SA_not_set_semi'] = 'Votre réponse devrait être un ensemble, mais ce n\'est pas le cas. Notez que pour saisir un ensemble, il faut placer les valeurs séparées par des points-virgules (;) entre accolades.';
$string['ATNumerical_SB_not_number'] = 'La valeur indiquée pour la réponse de l\'enseignant devrait être un nombre à virgule flottante, mais ce n\'est pas le cas. Il s\'agit d\'une erreur interne du test. Veuillez vous renseigner auprès de votre enseignant à ce sujet.';
$string['ATNumerical_STACKERROR_tol'] = 'La tolérance numérique pour ATNumerical doit être un nombre à virgule. Il s’agit d’une erreur interne du test. Veuillez en informer votre enseignant.';
$string['ATPartFrac_denom_ret'] = 'Si votre réponse est écrite sous la forme d’une fraction simple, son dénominateur est {$a->m0}. En fait, il devrait être {$a->m1}.';
$string['ATPartFrac_diff_variables'] = 'Les variables de votre réponse ne sont pas les mêmes que celle de la question.';
$string['ATPartFrac_error_list'] = 'Le test de réponse a échoué. Veuillez contacter l’administrateur de la plateforme.';
$string['ATPartFrac_ret_expression'] = 'Votre réponse comme fraction simple est {$a->m0}';
$string['ATSRegExp_SA_not_string'] = 'Le premier argument de la fonction SRegExp doit être une chaîne de caractères. Le test a échoué. Veuillez contacter votre enseignant.';
$string['ATSRegExp_SB_not_string'] = 'Le deuxième argument de la fonction SRegExp doit être une chaîne de caractères. Le test a échoué. Veuillez contacter votre enseignant.';
$string['ATSet_wrongentries'] = 'La saisie ci-dessous est incorrecte, même si elle semble être une forme simplifiée de ce que vous avez saisi. {$a->m0}';
$string['ATSet_wrongsz'] = 'L’ensemble doit avoir {$a->m0} éléments distincts, mais n’en contient que {$a->m1}.';
$string['ATSets_SA_not_set'] = 'Votre réponse devrait être un ensemble, mais ce n\'est pas le cas. Notez que pour saisir un ensemble, il faut placer les valeurs séparées par des virgules entre accolades.';
$string['ATSets_SA_not_set_semi'] = 'Votre réponse devrait être un ensemble, mais ce n\'est pas le cas. Notez que pour saisir un ensemble, il faut placer les valeurs séparées par des points-virgules (;) entre accolades.';
$string['ATSets_SB_not_set'] = 'Le test « Ensembles » attend que son deuxième argument soit un ensemble. Il s’agit d’une erreur.  Veuillez contacter votre enseignant.';
$string['ATSets_duplicates'] = 'Votre ensemble semble contenir des entrées en double !';
$string['ATSets_missingentries'] = 'Il manque les éléments suivants dans votre ensemble : {$a->m0}';
$string['ATSets_wrongentries'] = 'Ces entrées ne doivent pas faire partie de votre ensemble. {$a->m0}';
$string['ATSingleFrac_div'] = 'Votre réponse contient des fractions de fractions. Vous devez les simplifier et écrire votre réponse sous la forme d’une fraction simple.';
$string['ATSingleFrac_error_list'] = 'Le test de réponse a échoué. Veuillez contacter l’administrateur de la plateforme.';
$string['ATSingleFrac_part'] = 'Votre réponse doit être une fraction simple, de la forme \\( {a}\\over{b} \\).';
$string['ATSingleFrac_ret_exp'] = 'Votre réponse n’est pas équivalente algébriquement à la réponse correcte. Vous vous êtes trompé quelque part.';
$string['ATSingleFrac_var'] = 'Les variables de votre réponse sont différentes de celles données dans la question.';
$string['ATString_SA_not_string'] = 'Votre réponse devrait être une chaîne de caractères, mais ce n\'est pas le cas.';
$string['ATString_SB_not_string'] = 'La réponse de l\'enseignant devrait être une chaîne de caractères, mais ce n\'est pas le cas.';
$string['ATSubstEquiv_Opt_List'] = 'La réponse à ce questionnaire doit être une liste. Il s\'agit d\'une erreur. Veuillez contacter votre enseignant.';
$string['ATSysEquiv_SA_extra_variables'] = 'Votre réponse comporte trop de variables.';
$string['ATSysEquiv_SA_missing_variables'] = 'Il manque une ou plusieurs variables dans votre réponse.';
$string['ATSysEquiv_SA_not_eq_list'] = 'Votre réponse doit être une liste d’équations.';
$string['ATSysEquiv_SA_not_list'] = 'Votre réponse doit être une liste.';
$string['ATSysEquiv_SA_not_poly_eq_list'] = 'Une ou plusieurs de vos équations ne sont pas polynomiales.';
$string['ATSysEquiv_SA_system_overdetermined'] = 'Les saisies soulignées en rouge ci-dessous sont incorrectes. {$a->m0}';
$string['ATSysEquiv_SA_system_underdetermined'] = 'Les équations de votre système sont correctes, mais vous avez besoins par ailleurs d’autres équations.';
$string['ATSysEquiv_SA_wrong_variables'] = 'Votre réponse utilise les mauvaises variables !';
$string['ATSysEquiv_SB_not_eq_list'] = 'La réponse de l’enseignant n’est pas une liste d’équations.';
$string['ATSysEquiv_SB_not_list'] = 'La réponse de l’enseignant n’est pas une liste. Veuillez contacter votre enseignant.';
$string['ATSysEquiv_SB_not_poly_eq_list'] = 'La réponse de l’enseignant doit être une liste d’équations polynomiales. Veuillez contacter votre enseignant.';
$string['ATUnits_SA_bad_units'] = 'Votre réponse doit avoir des unités et il faut utiliser une multiplication pour les indiquer à la suite d’une valeur, par exemple ainsi : <code>3.2*m/s</code>.';
$string['ATUnits_SA_errorbounds_invalid'] = 'Votre réponse a des marges d’erreur. Dans ce cas, n’indiquez pas des marges d’erreur ; utilisez uniquement une valeur et des unités.';
$string['ATUnits_SA_excess_units'] = 'Votre réponse comporte des unités ou des variables, mais elle ne devrait comporter qu’un nombre.';
$string['ATUnits_SA_no_units'] = 'Votre réponse doit avoir des unités.';
$string['ATUnits_SA_not_expression'] = 'Votre réponse doit être un nombre avec des unités. N’utilisez pas d’ensemble, de liste, d’équation ou de matrice.';
$string['ATUnits_SA_only_units'] = 'Votre réponse doit être un nombre avec des unités. Elle ne comporte que des unités.';
$string['ATUnits_SO_wrong_units'] = 'Les unités indiquées pour la tolérance numérique doivent correspondre à celles utilisées dans la réponse de l\'enseignant. Il s\'agit d\'une erreur interne du test. Veuillez vous renseigner auprès de votre enseignant à ce sujet.';
$string['ATUnits_compatible_units'] = 'Vos unités sont différentes de celles utilisées par l’enseignant, mais elles sont compatibles. Les valeurs numériques ont été converties en unités du SI pour comparaison.';
$string['ATUnits_correct_numerical'] = 'Veuillez vérifier soigneusement vos unités.';
$string['ATUnits_incompatible_units'] = 'Vos unités sont incompatibles avec celles utilisées par l’enseignant.';
$string['ATValidator_STACKERROR_ev'] = 'Le validateur a généré une erreur lors de son exécution. Il s\'agit d\'une erreur dans le test ; veuillez contacter votre enseignant.';
$string['ATValidator_not_fun'] = 'Le validateur n\'a pas pu effectuer l\'évaluation. Avez-vous indiqué le nom correct de la fonction de validation ? Il s\'agit d\'une erreur dans l\'exercice ; veuillez contacter votre enseignant.';
$string['ATValidator_res_not_string'] = 'Le résultat de votre validateur doit être une chaîne de caractères, mais ce n\'est pas le cas. Il s\'agit d\'une erreur dans le test ; veuillez contacter votre enseignant.';
$string['AT_EmptySA'] = 'Tentative d\'exécution d\'un test de réponse avec une réponse vide de la part de l\'étudiant ; il s\'agit probablement d\'un problème de validation CAS survenu lors de la création de la question.';
$string['AT_EmptyTA'] = 'Tentative d\'exécution d\'un test de réponse avec une réponse de l\'enseignant vide ; il s\'agit probablement d\'un problème de validation CAS survenu lors de la création de la question.';
$string['AT_InvalidOptions'] = 'Le champ d’option n’est pas valide. {$a->errors}';
$string['AT_MissingOptions'] = 'Option manquante lors de l’exécution du test.';
$string['AT_raw_sans_needed'] = 'Certains tests à choix multiples s\'appuient sur les réponses brutes fournies par l\'étudiant ; le champ « SAns » du nœud doit donc correspondre au nom d\'un champ de saisie de la question. Veuillez vérifier l\'élément suivant (prt.node), qui semble plutôt correspondre à une valeur calculée : {$a->prt}';
$string['Bad_assignment'] = 'Vous devez lister les valeurs d’une variable de la façon suivante : {$a->m0}. Veuillez modifier votre saisie.';
$string['CommaError'] = 'Votre réponse comprend des virgules qui ne sont pas dans une liste, un ensemble ou une matrice.<ul><li>Si vous voulez saisir une liste, utilisez <tt>[…]</tt>,</li><li>Si vous voulez saisir un ensemble, utilisez<tt>{…}</tt>.</li></ul>';
$string['Equiv_Illegal_list'] = 'Les listes ne sont pas permises dans un raisonnement par équivalence.';
$string['Equiv_Illegal_matrix'] = 'Les matrices ne sont pas permises dans un raisonnement par équivalence.';
$string['Equiv_Illegal_set'] = 'Les ensembles ne sont pas permis dans un raisonnement par équivalence.';
$string['FacForm_UnPick_morework'] = 'Vous pouvez encore travailler sur le terme {$a->m0}.';
$string['Illegal_control_flow'] = 'Votre réponse contient des instructions de contrôle de flux telles que la condition <code>if</code> ou la boucle <code>do</code> ; celles-ci sont interdites ici. Vous devriez probablement indiquer le résultat de ces instructions dans votre réponse.';
$string['Illegal_extraevaluation'] = 'L\'opérateur d\'évaluation supplémentaire de Maxima <code>“</code> n\'est pas pris en charge par STACK.';
$string['Illegal_floats'] = 'Votre réponse contient des nombres à virgule, qui ne sont pas permis pour cette question. Veuillez saisir les nombres sous forme de fractions. Par exemple, vous devez saisir 1/3 et non 0.3333, qui n’est après tout qu’une approximation de 1/3.';
$string['Illegal_groupping'] = 'Votre réponse contient des parenthèses utilisées pour regrouper des opérations ; celles-ci sont interdites ici. Vous devriez probablement modifier l\'expression pour les supprimer.';
$string['Illegal_groups'] = 'Votre réponse contient des groupes d\'évaluation « (a,b,c) » ; ceux-ci ne sont pas autorisés ici.';
$string['Illegal_identifiers_in_units'] = 'L\'entrée contient un nom de variable alors qu\'on s\'attendait uniquement à des unités.';
$string['Illegal_illegal_operation_in_units'] = 'L\'opérateur <code>{$a}</code> n\'est pas autorisé dans cette entrée.';
$string['Illegal_illegal_power_of_ten_in_units'] = 'La valeur ne doit pas contenir de puissances de dix dont la puissance n\'est pas entière.';
$string['Illegal_input_form_units'] = 'Cette entrée attend une valeur numérique suivie ou multipliée par une expression définissant une unité, par exemple <code>1,23*W/m^2</code>. Notez que l\'unité requise ici peut être différente.';
$string['Illegal_lists'] = 'Votre réponse contient des listes « [a,b,c] » ; celles-ci ne sont pas autorisées ici.';
$string['Illegal_sets'] = 'Votre réponse contient des ensembles « {a,b,c} » ; ceux-ci ne sont pas autorisés ici.';
$string['Illegal_singleton_floats'] = 'Ce champ n\'accepte pas les nombres décimaux sous la forme indiquée. Il doit contenir une valeur numérique présentée sous l\'une des formes suivantes : <code>{$a->forms}</code>';
$string['Illegal_singleton_integer'] = 'Ce champ n\'accepte pas les valeurs entières. Il doit contenir une valeur numérique présentée sous l\'une des formes suivantes : <code>{$a->forms}</code>';
$string['Illegal_singleton_power'] = 'Cette entrée doit être une valeur numérique présentée sous l\'une des formes suivantes : <code>{$a->forms}</code>';
$string['Illegal_strings'] = 'Votre réponse contient des « chaînes de caractères » ; celles-ci ne sont pas autorisées ici.';
$string['Illegal_x10'] = 'Votre réponse semble utiliser la lettre « x » comme signe de multiplication. Veuillez utiliser <code>*</code> pour la multiplication.';
$string['Interval_backwards'] = 'Lorsqu\'on définit un intervalle réel, les extrémités doivent être ordonnées. {$a->m0} doit devenir {$a->m1}.';
$string['Interval_illegal_entries'] = 'L\'expression suivante ne doit pas apparaître lors de la construction d\'ensembles réels : {$a->m0}';
$string['Interval_notinterval'] = 'On s\'attendait à un intervalle, mais on a plutôt {$a->m0}.';
$string['Interval_wrongnumargs'] = 'La construction d\'intervalle doit comporter exactement deux arguments ; il s\'agit donc d\'une erreur : {$a->m0}.';
$string['Lowest_Terms'] = 'Votre réponse contient certaines fractions qui ne sont pas écrites sous forme réduite. Veuillez simplifier les facteurs et essayer à nouveau.';
$string['Maxima_Args'] = 'args : l’argument doit être une expression non-atomique.';
$string['Maxima_DivisionZero'] = 'Division par zéro.';
$string['Subst'] = 'Votre réponse serait correcte si vous utilisiez la substitution de variables suivante : {$a->m0}';
$string['TEST_FAILED'] = 'Le test de réponse n\'a pas pu s\'exécuter correctement : veuillez en informer votre enseignant. {$a->errors}';
$string['TEST_FAILED_Q'] = 'Le test de vérification des réponses n\'a pas pu s\'exécuter correctement : veuillez en informer votre enseignant.';
$string['ValidateVarsMissing'] = 'Ces variables sont manquantes : {$a->m0}.';
$string['ValidateVarsSpurious'] = 'Ces variables ne sont pas nécessaires : {$a->m0}.';
$string['Variable_function'] = 'Les éléments suivants apparaissent dans votre expression à la fois comme variable et comme fonction : {$a->m0}. Veuillez clarifier votre saisie. Insérez les symboles <code>*</code> pour supprimer les fonctions, ou transformez toutes les occurrences en fonctions.';
$string['addanothernode'] = 'Ajouter un ou plusieurs nœuds';
$string['addanothertestcase'] = 'Ajouter un autre cas de test';
$string['addatestcase'] = 'Ajouter un cas de test…';
$string['addingatestcase'] = 'Ajout d’un cas de test à la question {$a}';
$string['alg_indices_fact'] = 'Les lois suivantes gouvernent la manipulation des exposants :
\\[a^ma^n = a^{m+n}\\]
\\[\\frac{a^m}{a^n} = a^{m-n}\\]
\\[(a^m)^n = a^{mn}\\]
\\[a^0 = 1\\]
\\[a^{-m} = \\frac{1}{a^m}\\]
\\[a^{\\frac{1}{n}} = \\sqrt[n]{a}\\]
\\[a^{\\frac{m}{n}} = \\left(\\sqrt[n]{a}\\right)^m\\]';
$string['alg_indices_name'] = 'Les lois des exposants';
$string['alg_inequalities_fact'] = '\\[a>b \\hbox{ signifie que } a \\hbox{ est plus grand que } b.\\]
\\[ a < b \\hbox{ signifie que } a \\hbox{ est plus petit que } b.\\]
\\[a\\geq b \\hbox{ signifie que } a \\hbox{ est plus grand ou égal à } b.\\]
\\[a\\leq b \\hbox{ signifie que } a \\hbox{ est plus petit ou égal à } b.\\]';
$string['alg_inequalities_name'] = 'Inégalités';
$string['alg_logarithms_fact'] = 'Pour toute base \\(c>0\\) avec \\(c \\neq 1\\) :
\\[\\log_c(a) = b \\mbox{, signifie que } a = c^b\\]
\\[\\log_c(a) + \\log_c(b) = \\log_c(ab)\\]
\\[\\log_c(a) - \\log_c(b) = \\log_c\\left(\\frac{a}{c}\\right)\\]
\\[n\\log_c(a) = \\log_c\\left(a^n\\right)\\]
\\[\\log_c(1) = 0\\]
\\[\\log_c(b) = 1\\]
La formule pour un changement de base est :
\\[\\log_a(x) = \\frac{\\log_b(x)}{\\log_b(a)}\\]
Le logarithme en base \\(e\\), noté \\(\\log_e\\) ou bien \\(\\ln\\), est appelé le logarithme naturel. La lettre \\(e\\) représente la constante exponentielle, dont la valeur approximative est de \\(2.718\\).';
$string['alg_logarithms_name'] = 'Les lois des logarithmes';
$string['alg_partial_fractions_fact'] = 'Les fractions \\[{\\frac{P(x)}{Q(x)}}\\]
lorsque \\(P\\) et \\(Q\\) sont des polynômes et que le degré de \\(P\\) est inférieur à celui de \\(Q\\), sont appelées <em>fractions algébriques propres</em>.
Pour réécrire cela sous forme de <em>fractions partielles</em>, on écrit \\(Q(x)\\) sous forme factorisée,
<ul>
<li>un <em>facteur linéaire</em> \\(ax+b\\) au dénominateur produit une fraction partielle de la forme \\[{\\frac{A}{ax+b}}.\\]</li>
<li>un <em>facteur linéaire répété</em> \\((ax+b)^2\\) au dénominateur
donne des fractions partielles de la forme \\[{A\\over ax+b}+{B\\over (ax+b)^2}.\\]</li>
<li>un <em>facteur quadratique</em> \\(ax^2+bx+c\\) au dénominateur donne une fraction partielle de la forme \\[{Ax+B\\over ax^2+bx+c}\\]</li>
<li><em>Les fractions impropres</em> nécessitent un terme supplémentaire qui est un polynôme de degré \\(n-d\\), où \\(n\\) est le degré du numérateur (c\'est-à-dire \\(P(x)\\)) et \\(d\\) est le degré du dénominateur (c\'est-à-dire \\(Q(x)\\)).</li>
</ul>';
$string['alg_partial_fractions_name'] = 'Fractions partielles';
$string['alg_quadratic_formula_fact'] = 'Les solutions d’une équation quadratique de la forme :
\\[ax^2 + bx + c = 0,\\]
sont données par la formule quadratique :
\\[x = \\frac{-b \\pm \\sqrt{b^2 - 4ac}}{2a}.\\]';
$string['alg_quadratic_formula_name'] = 'La formule quadratique';
$string['all'] = 'Tout';
$string['allnodefeedbackmustusethesameformat'] = 'Tous les feedbacks pour tous les nœuds d’un PRT doivent être dans le même format.';
$string['allowwords'] = 'Mots autorisés';
$string['allowwords_help'] = 'Par défaut, des noms de fonctions ou de variables de plus de deux caractères ne sont pas permis. Voici la liste des noms de fonction et de variables qui sont permises dans les réponses des étudiants.';
$string['allowwords_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Allow_Words';
$string['alreadydeployed'] = 'Une variante correspondant à cette annotation de question est déjà déployée.';
$string['alttextmissing'] = 'Une ou plusieurs images semblent présenter une balise « alt » manquante ou vide dans « {$a->field} » ({$a->num}).';
$string['alwaysmanuallygrade'] = 'Cette question est toujours corrigée manuellement.';
$string['analyzeresponsesnotes'] = 'Remarque : (1) toutes les réponses des étudiants pour chaque tentative de test sont incluses ici, (2) toutes les versions de la question sont incluses.';
$string['ansnotemismatch'] = '[Erreur de correspondance d’annotation de réponse]';
$string['answernote'] = 'Annotation de réponse';
$string['answernote_err'] = 'Les annotations de réponse ne peuvent pas comporter le caractère |. Ce caractère est inséré par STACK, pour être utilisé afin de séparer les annotations de façon automatique.';
$string['answernote_err2'] = 'Les notes de réponse ne doivent pas contenir les caractères ; ou :. Ces caractères servent à séparer les chaînes de résumé des réponses aux questions dans les outils de rapport hors ligne.';
$string['answernote_help'] = 'Il s\'agit d\'une balise essentielle à des fins de rapport. Elle est conçue pour enregistrer le parcours unique dans l\'arborescence, ainsi que le résultat de chaque test de réponse. Elle est générée automatiquement, mais peut être remplacée par une valeur plus significative.';
$string['answernote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md#Answer_note';
$string['answernotedefaultfalse'] = '{$a->prtname}-{$a->nodename}-F';
$string['answernotedefaulttrue'] = '{$a->prtname}-{$a->nodename}-T';
$string['answernoterequired'] = 'L’annotation de réponse doit être renseignée.';
$string['answernoteunique'] = 'Une annotation de réponse en doublon a été détectée dans cet arbre de réponse potentiel.';
$string['answertest'] = 'Test de réponse';
$string['answertest_ab'] = 'Test';
$string['answertest_help'] = 'Le test de réponse est utilisé pour comparer deux expressions dans le but d’établir si elle satisfont un critère mathématique donné.';
$string['answertest_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['api_advance_variant'] = 'Variante suivante';
$string['api_choose_file'] = 'Veuillez sélectionner un fichier de questions';
$string['api_choose_folder'] = 'Choisissez un dossier STACK';
$string['api_choose_q'] = 'Choisissez un fichier d\'exemple STACK';
$string['api_correct'] = 'Réponses correctes';
$string['api_correct_answer'] = 'La bonne réponse est :';
$string['api_difference'] = 'Différence par rapport à la valeur par défaut';
$string['api_display'] = 'Afficher la question';
$string['api_display_correct'] = 'Afficher les bonnes réponses';
$string['api_display_correct_hide'] = 'Masquer les bonnes réponses';
$string['api_error_msg'] = 'Une erreur s\'est produite lors de l\'affichage de la requête. Veuillez réessayer ou actualiser la page.';
$string['api_errors'] = 'Erreurs';
$string['api_failures'] = 'échecs';
$string['api_general_errors'] = 'Erreurs générales, par exemple : XML incorrect';
$string['api_local_file'] = 'Ou sélectionnez un fichier de votre choix';
$string['api_marks_sub'] = 'Notes attribuées à ce travail';
$string['api_no_deployed_variants'] = 'Le fichier XML de la question ne contient pas de variantes déployées';
$string['api_out_of'] = 'à partir de';
$string['api_passes'] = 'passes';
$string['api_q_select'] = 'Choisissez une question';
$string['api_q_xml'] = 'Question XML';
$string['api_read_only'] = 'Lecture seule';
$string['api_response'] = 'Résumé des réponses';
$string['api_seed_not_in_variants'] = 'La graine indiquée n\'appartient à aucune variante déployée.';
$string['api_submit'] = 'Envoyer les réponses';
$string['api_valid_all_parts'] = 'Veuillez saisir des réponses valides pour toutes les parties de la question.';
$string['api_which_typed'] = 'que l\'on peut écrire de la façon suivante';
$string['assumepositive'] = 'Présumé positif';
$string['assumepositive_help'] = 'Cette option définit la valeur de la variable assume_pos de Maxima.';
$string['assumepositive_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_options.md#Assume_Positive';
$string['assumereal'] = 'Présumé réel';
$string['assumereal_help'] = 'Cette option définit la variable <code>assume_real</code>.';
$string['assumereal_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_options.md#Assume_Real';
$string['autosimplify'] = 'Auto-simplifier';
$string['autosimplify_help'] = 'Définit la variable « simp » de Maxima pour cette question (i.e. pour les variables de question, le texte de la question). Une valeur différente mentionnée dans chaque arbre de réponse potentielle écrasera cette valeur pour toutes les expressions définies dans l’arbre.';
$string['autosimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Simplification.md';
$string['autosimplifyprt'] = 'Auto-simplifier';
$string['autosimplifyprt_help'] = 'Définit la variable « simp » de Maxima pour les variables de feedback définies dans cet arbre de réponse potentielle. La simplification des expressions dans les notes de PRT avant leur utilisation dépend du test de réponse. Par exemple, les arguments de AlgEquiv sont simplifiés, alors que ceux de EqualComAss ne le sont pas.';
$string['autosimplifyprt_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Simplification.md';
$string['autotestcase'] = 'Cas de test supposant que la réponse de l\'enseignant obtient la note maximale.';
$string['basicquestionreport'] = '<i class="fa fa-bar-chart"></i> Analyser les réponses';
$string['basicquestionreport_help'] = 'Génère un rapport très simple sur les tentatives de réponse à cette question sur le serveur. Utile pour déterminer quel test de PRT peut être ajouté afin d\'améliorer le feedback en fonction des performances réelles de l\'étudiant. (La plupart des questions ne sont utilisées qu\'à un seul endroit.)';
$string['basicreportinputsummary'] = 'Matières premières, quelle que soit la variante utilisée';
$string['basicreportnotes'] = 'Fréquence des notes de réponse, pour chaque PRT, quelle que soit la variante utilisée';
$string['basicreportnotessplit'] = 'Fréquence des notes de réponse, pour chaque PRT, ventilée par |, quelle que soit la variante utilisée';
$string['basicreportraw'] = 'Données brutes';
$string['basicreportvariants'] = 'Données brutes et notes de réponse au PRT par variante';
$string['booleangotunrecognisedvalue'] = 'Saisie non valide.';
$string['boxsize'] = 'Taille du champ de saisie';
$string['boxsize_help'] = 'Largeur du champ de formulaire html.';
$string['boxsize_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Box_Size';
$string['branchfeedback'] = 'Feedback de la branche du nœud';
$string['branchfeedback_help'] = 'Ceci est un CASText, qui pourra dépendre des variables de la question, des éléments d’entrée et des variables de feedback. Ce texte est évalué et affiché à l’étudiant s’il traverse cette branche.';
$string['bulktestallincontext'] = 'Tout tester';
$string['bulktestcontinuefromhere'] = 'Recommencer ou continuer à partir d’ici';
$string['bulktestindexintro'] = 'Cliquer un des liens lancera tous les tests de la question de toutes les questions STACK de ce contexte.';
$string['bulktestindexintro_desc'] = 'Le <a href="{$a->link}">script de test des questions par lots</a> vous permet de tester facilement toutes les questions STACK d’un contexte donné. Ce script teste toutes les questions, et c’est aussi un bon moyen de remplir le cache du CAS s’il a été purgé.';
$string['bulktestindextitle'] = 'Lancer les tests de question par lots';
$string['bulktestnodeployedseeds'] = 'Cette question comporte certes des variantes aléatoires, mais aucune graine n\'a été définie.';
$string['bulktestnogeneralfeedback'] = 'Cette question ne fait l\'objet d\'aucun feedback général.';
$string['bulktestnotests'] = 'Cette question n’a pas de test.';
$string['bulktestquiz'] = '<i class="fa fa-certificate"></i> Vérifier le test en masse';
$string['bulktestquiznotes'] = 'Vérifier en masse la dernière version de toutes les questions d\'un test contenant cette question.';
$string['bulktestquizselect'] = 'Sélectionner un test';
$string['bulktestrun'] = 'Lancer tous les tests de toutes les questions de la plateforme (lent, seulement pour l’administrateur)';
$string['bulktesttitle'] = 'Test de toutes les questions STACK de {$a}';
$string['cachedef_librarycache'] = 'Affichage de la bibliothèque de questions STACK et structure des fichiers';
$string['cachedef_parsercache'] = 'STACK a analysé les expressions Maxima';
$string['calc_chain_rule_fact'] = 'La règle suivante permet de déterminer la dérivée de la composée de deux fonctions.
Soit une fonction \\(f(g(x))\\) ; en posant \\(u=g(x)\\), la dérivée par rapport à \\(x\\) est donnée par :
\\[\\frac{\\mathrm{d}f(g(x))}{\\mathrm{d}x} = \\frac{\\mathrm{d}g(x)}{\\mathrm{d}x}\\cdot\\frac{\\mathrm{d}f(u)}{\\mathrm{d}u}.\\]
On peut également écrire :
\\[\\frac{\\mathrm{d}f(x)}{\\mathrm{d}x} = f\'(g(x))\\cdot g\'(x).\\]';
$string['calc_chain_rule_name'] = 'La règle de la chaîne';
$string['calc_diff_linearity_rule_fact'] = '\\[{\\mathrm{d}\\,\\over \\mathrm{d}x}\\big(af(x)+bg(x)\\big)=a{\\mathrm{d}f(x)\\over \\mathrm{d}x}+b{\\mathrm{d}g(x)\\over \\mathrm{d}x}\\quad a,b {\\rm\\  constant.}\\]';
$string['calc_diff_linearity_rule_name'] = 'La règle de linéarité de la différentiation';
$string['calc_diff_standard_derivatives_fact'] = 'La table ci-dessous affiche les dérivées de quelques fonctions standards. Il est utile d’apprendre ces dérivées standards, car elles sont utilisées fréquemment en analyse.

|\\(f(x)\\)|\\(f\'(x)\\)|
|--- |--- |
|\\(k\\), constante|\\(0\\)|
|\\(x^n\\), pour toute constante \\(n\\)|\\(nx^{n-1}\\)|
|\\(e^x\\)|\\(e^x\\)|
|\\(\\ln(x)=\\log_{\\rm e}(x)\\)|\\(\\frac{1}{x}\\)|
|\\(\\sin(x)\\)|\\(\\cos(x)\\)|
|\\(\\cos(x)\\)|\\(-\\sin(x)\\)|
|\\(\\tan(x) = \\frac{\\sin(x)}{\\cos(x)}\\)|\\(\\sec^2(x)\\)|
|\\(cosec(x)=\\frac{1}{\\sin(x)}\\)|\\(-cosec(x)\\cot(x)\\)|
|\\(\\sec(x)=\\frac{1}{\\cos(x)}\\)|\\(\\sec(x)\\tan(x)\\)|
|\\(\\cot(x)=\\frac{\\cos(x)}{\\sin(x)}\\)|\\(-cosec^2(x)\\)|
|\\(\\cosh(x)\\)|\\(\\sinh(x)\\)|
|\\(\\sinh(x)\\)|\\(\\cosh(x)\\)|
|\\(\\tanh(x)\\)|\\(sech^2(x)\\)|
|\\(sech(x)\\)|\\(-sech(x)\\tanh(x)\\)|
|\\(cosech(x)\\)|\\(-cosech(x)\\coth(x)\\)|
|\\(coth(x)\\)|\\(-cosech^2(x)\\)|

 \\[ \\frac{d}{dx}\\left(\\sin^{-1}(x)\\right) =  \\frac{1}{\\sqrt{1-x^2}}\\]
 \\[ \\frac{d}{dx}\\left(\\cos^{-1}(x)\\right) =  \\frac{-1}{\\sqrt{1-x^2}}\\]
 \\[ \\frac{d}{dx}\\left(\\tan^{-1}(x)\\right) =  \\frac{1}{1+x^2}\\]
 \\[ \\frac{d}{dx}\\left(\\cosh^{-1}(x)\\right) =  \\frac{1}{\\sqrt{x^2-1}}\\]
 \\[ \\frac{d}{dx}\\left(\\sinh^{-1}(x)\\right) =  \\frac{1}{\\sqrt{x^2+1}}\\]
 \\[ \\frac{d}{dx}\\left(\\tanh^{-1}(x)\\right) =  \\frac{1}{1-x^2}\\]';
$string['calc_diff_standard_derivatives_name'] = 'Dérivées standards';
$string['calc_int_linearity_rule_fact'] = '\\[\\int \\left(af(x)+bg(x)\\right)\\mathrm{d}x = a\\int\\!\\!f(x)\\,\\mathrm{d}x
\\,+\\,b\\int \\!\\!g(x)\\,\\mathrm{d}x, \\quad (a,b \\, \\, {\\rm constant.})
\\]';
$string['calc_int_linearity_rule_name'] = 'La règle de linéarité de l’intégration';
$string['calc_int_methods_parts_fact'] = '\\[
\\int_a^b u{\\mathrm{d}v\\over \\mathrm{d}x}\\mathrm{d}x=\\left[uv\\right]_a^b-
\\int_a^b{\\mathrm{d}u\\over \\mathrm{d}x}v\\,\\mathrm{d}x\\]
ou bien : \\[\\int_a^bf(x)g(x)\\,\\mathrm{d}x=\\left[f(x)\\,\\int
g(x)\\mathrm{d}x\\right]_a^b -\\int_a^b{\\mathrm{d}f\\over {\\rm
d}x}\\left\\{\\int g(x)\\mathrm{d}x\\right\\}\\mathrm{d}x.\\]';
$string['calc_int_methods_parts_indefinite_fact'] = '\\[
\\int u{\\mathrm{d}v\\over \\mathrm{d}x}\\mathrm{d}x=uv- \\int{\\mathrm{d}u\\over \\mathrm{d}x}v\\,\\mathrm{d}x\\]
ou bien :  \\[\\int f(x)g(x)\\,\\mathrm{d}x=f(x)\\,\\int
g(x)\\mathrm{d}x -\\int {\\mathrm{d}f\\over \\mathrm{d}x}\\left\\{\\int g(x)\\mathrm{d}x\\right\\}\\mathrm{d}x.\\]';
$string['calc_int_methods_parts_indefinite_name'] = 'Intégration par parties';
$string['calc_int_methods_parts_name'] = 'Intégration par parties';
$string['calc_int_methods_substitution_fact'] = '\\[
\\int f(u){{\\rm d}u\\over {\\rm d}x}{\\rm d}x=\\int f(u){\\rm d}u
\\quad\\hbox{ et }\\quad \\int_a^bf(u){{\\rm d}u\\over {\\rm d}x}\\,{\\rm
d}x = \\int_{u(a)}^{u(b)}f(u){\\rm d}u.
\\]';
$string['calc_int_methods_substitution_name'] = 'Intégration par substitution';
$string['calc_int_standard_integrals_fact'] = '<p>\\[\\int k\\ \\mathrm{d}x = kx +c, \\text{ where } k \\text{ is constant.}\\]
\\[\\int x^n\\ \\mathrm{d}x  = \\frac{x^{n+1}}{n+1}+c, \\quad (n\\ne -1)\\]
\\[\\int x^{-1}\\ \\mathrm{d}x = \\int {\\frac{1}{x}}\\ \\mathrm{d}x = \\ln(|x|)+c = \\ln(k|x|)\\]</p>
<table style="padding-right:5%;width: 60%;">
<thead>
<tr>
<th>\\(f(x)\\)</th>
<th>\\(\\int f(x)\\ \\mathrm{d}x\\)</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>\\(e^x\\)</td>
<td>\\(e^x+c\\)</td>
<td></td>
</tr>
<tr>
<td>\\(\\cos(x)\\)</td>
<td>\\(\\sin(x)+c\\)</td>
<td></td>
</tr>
<tr>
<td>\\(\\sin(x)\\)</td>
<td>\\(-\\cos(x)+c\\)</td>
<td></td>
</tr>
<tr>
<td>\\(\\tan(x)\\)</td>
<td>\\(\\ln(\\sec(x))+c\\)</td>
<td>\\(-\\frac{\\pi}{2} &lt; x &lt; \\frac{\\pi}{2}\\)</td>
</tr>
<tr>
<td>\\(\\sec x\\)</td>
<td>\\(\\ln (\\sec(x)+\\tan(x))+c\\)</td>
<td>\\( -{\\pi\\over 2}&lt; x &lt; {\\frac{\\pi}{2}}\\)</td>
</tr>
<tr>
<td>\\(\\text{cosec}(x)\\)</td>
<td>\\(\\ln (\\text{cose}c(x)-\\cot(x))+c\\quad\\)</td>
<td>\\(0 &lt; x &lt; \\pi\\)</td>
</tr>
<tr>
<td>cot(\\x\\)</td>
<td>\\(\\ln(\\sin(x))+c\\)</td>
<td>\\(0&lt; x&lt; \\pi\\)</td>
</tr>
<tr>
<td>\\(\\cosh(x)\\)</td>
<td>\\(\\sinh(x)+c\\)</td>
<td></td>
</tr>
<tr>
<td>\\(\\sinh(x)\\)</td>
<td>\\(\\cosh(x) + c\\)</td>
<td></td>
</tr>
<tr>
<td>\\(\\tanh(x)\\)</td>
<td>\\(\\ln(\\cosh(x))+c\\)</td>
<td></td>
</tr>
<tr>
<td>\\(\\text{coth}(x)\\)</td>
<td>\\(\\ln(\\sinh(x))+c \\)</td>
<td>\\(x&gt;0\\)</td>
</tr>
<tr>
<td>\\({1\\over x^2+a^2}\\)</td>
<td>\\({1\\over a}\\tan^{-1}{x\\over a}+c\\)</td>
<td>\\(a&gt;0\\)</td>
</tr>
<tr>
<td>\\({1\\over x^2-a^2}\\)</td>
<td>\\({1\\over 2a}\\ln{x-a\\over x+a}+c\\)</td>
<td>\\(x > a >0\\)</td>
</tr>
<tr>
<td>\\({1\\over a^2-x^2}\\)</td>
<td>\\({1\\over 2a}\\ln{a+x\\over a-x}+c\\)</td>
<td>\\(a > x >0\\)</td>
</tr>
<tr>
<td>\\(\\frac{1}{\\sqrt{x^2+a^2}}\\)</td>
<td>\\(\\sinh^{-1}\\left(\\frac{x}{a}\\right) + c\\)</td>
<td>\\(a&gt;0\\)</td>
</tr>
<tr>
<td>\\({1\\over \\sqrt{x^2-a^2}}\\)</td>
<td>\\(\\cosh^{-1}\\left(\\frac{x}{a}\\right) + c\\)</td>
<td>\\(x\\geq a &gt; 0\\)</td>
</tr>
<tr>
<td>\\({1\\over \\sqrt{x^2+k}}\\)</td>
<td>\\(\\ln (x+\\sqrt{x^2+k})+c\\)</td>
<td></td>
</tr>
<tr>
<td>\\({1\\over \\sqrt{a^2-x^2}}\\)</td>
<td>\\(\\sin^{-1}\\left(\\frac{x}{a}\\right)+c\\)</td>
<td>\\(-a\\leq x\\leq a\\)</td>
</tr>
</tbody>
</table>';
$string['calc_int_standard_integrals_name'] = 'Intégrales standards';
$string['calc_product_rule_fact'] = 'La règle ci-dessous permet de calculer la dérivée d’un produit de fonctions. On dérive \\(f(x)g(x)\\) par rapport à \\(x\\).
\\[ \\frac{\\mathrm{d}}{\\mathrm{d}{x}} \\big(f(x)g(x)\\big) = f(x) \\cdot \\frac{\\mathrm{d} g(x)}{\\mathrm{d}{x}}  + g(x)\\cdot \\frac{\\mathrm{d} f(x)}{\\mathrm{d}{x}},\\] ou bien, avec une autre notation, \\[ (f(x)g(x))\' = f\'(x)g(x)+f(x)g\'(x). \\]';
$string['calc_product_rule_name'] = 'La règle du produit';
$string['calc_quotient_rule_fact'] = 'La règle du quotient permet de calculer la dérivée d’un quotient de fonctions différentiables \\(f(x)\\) et \\(g(x)\\) :
 \\[\\frac{d}{dx}\\left(\\frac{f(x)}{g(x)}\\right)=\\frac{g(x)\\cdot\\frac{df(x)}{dx}\\ \\ - \\ \\ f(x)\\cdot \\frac{dg(x)}{dx}}{g(x)^2}. \\]';
$string['calc_quotient_rule_name'] = 'La règle du quotient';
$string['calc_rules_fact'] = '<b>La règle du produit</b><br />La règle suivante permet de dériver des fonctions qui sont
multipliées entre elles.  Supposons que l\'on veuille dériver \\(f(x)g(x)\\) par rapport à \\(x\\).
\\[ \\frac{\\mathrm{d}}{\\mathrm{d}{x}} \\big(f(x)g(x)\\big) = f(x) \\cdot \\frac{\\mathrm{d} g(x)}{\\mathrm{d}{x}}  + g(x)\\cdot \\frac{\\mathrm{d} f(x)}{\\mathrm{d}{x}},\\] ou, en utilisant une notation alternative, \\[ (f(x)g(x))“ = f”(x)g(x)+f(x)g\'(x). \\]
<b>La règle du quotient</b><br />La règle du quotient en dérivation stipule que, pour deux fonctions dérivables \\(f(x)\\) et \\(g(x)\\),
\\[\\frac{\\mathrm{d}}{\\mathrm{d}x}\\left(\\frac{f(x)}{g(x)}\\right)=\\frac{g(x)\\cdot\\frac{\\mathrm{d}f(x)}{\\mathrm{d}x}\\ \\ - \\ \\ f(x)\\cdot \\frac{\\mathrm{d}g(x)}{\\mathrm{d}x}}{g(x)^2}. \\]
<b>La règle de la chaîne</b><br />La règle suivante permet de déterminer la dérivée d’une composition de deux fonctions.
Soit une fonction \\(f(g(x))\\) ; en posant \\(u = g(x)\\), la dérivée par rapport à \\(x\\) est donnée par :
\\[\\frac{\\mathrm{d}f(g(x))}{\\mathrm{d}x} = \\frac{\\mathrm{d}g(x)}{\\mathrm{d}x}\\cdot\\frac{\\mathrm{d}f(u)}{\\mathrm{d}u}.\\]
On peut également écrire :
\\[\\frac{\\mathrm{d}f(x)}{\\mathrm{d}x} = f\'(g(x))\\cdot g\'(x).\\]';
$string['calc_rules_name'] = 'Règles d’analyse';
$string['casdisplay'] = 'Affichage CAS';
$string['cassuitecolerrors'] = 'Erreur CAS';
$string['castext'] = 'Texte CAS';
$string['castext_debug_header_disp_no_simp'] = 'Valeur affichée';
$string['castext_debug_header_disp_simp'] = 'Valeur affichée simplifiée';
$string['castext_debug_header_key'] = 'Nom de la variable';
$string['castext_debug_header_value_no_simp'] = 'Valeur';
$string['castext_debug_header_value_simp'] = 'Valeur simplifiée';
$string['castext_debug_no_vars'] = 'Cette question ne comporte aucune variable à déboguer ici ! Affichez les variables de la question dans le texte de la question et les variables de feedback dans les feedbacks du nœud.';
$string['castext_error_header'] = 'Échec du rendu du contenu textuel.';
$string['castext_error_unevaluated'] = 'Le contenu de ce texte n\'a jamais été évalué.';
$string['casvalid'] = 'V2';
$string['casvalidatemismatch'] = '[Erreur de correspondance validation CAS]';
$string['casvalue'] = 'Valeur CAS';
$string['chat'] = 'Envoyer au CAS';
$string['chat_desc'] = 'Le <a href="{$a->link}">script de chat CAS</a> vous permet de tester la connexion au CAS et de vous familiariser avec la syntaxe de Maxima.';
$string['chatintro'] = 'Cette page permet d’évaluer directement du texte CASText. C’est un simple script fournissant un exemple minimal et une façon utile de vérifier si le CAS fonctionne correctement, ainsi que de tester des valeurs saisies. Le premier champ permet de définir des variables et le second est destiné au CASText proprement dit.';
$string['chatintro2'] = 'L\'option « Enregistrer dans la question » remplace les variables de la question et le feedback général de la dernière version de celle-ci. Cliquer sur « Envoyer vers le formulaire de modification de la question » n\'enregistre pas directement vos modifications. Cela vous redirigera vers le formulaire de modification de la version de la question indiquée en haut de cette page. De là, vous pourrez enregistrer vos modifications en tant que nouvelle version de la question. Utilisez « Envoyer vers le CAS » juste avant « Envoyer vers le formulaire de modification » pour actualiser la version sur laquelle vous travaillez.';
$string['chattitle'] = 'Tester la connexion au CAS';
$string['checkanswertype'] = 'Vérifier le type de la réponse';
$string['checkanswertype_help'] = 'Si ce réglage est activé, les réponses de différents types (par exemple expression, équation, matrice, liste, ensemble) sont rejetées comme non valides.';
$string['checkanswertype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Check_Type';
$string['checkcasconnection_check'] = 'Connexion Maxima pour STACK';
$string['checkstack_version_check'] = 'Version de la bibliothèque STACK-Maxima';
$string['clearedthecache'] = 'Le cache CAS a été vidé.';
$string['clearingcachefiles'] = 'Effacement des fichiers de tracé STACK mis en cache {$a->done}/{$a->total}';
$string['clearthecache'] = 'Vider le cache';
$string['comparexml'] = '<i class="fa fa-columns"></i> Comparer le XML de la question';
$string['comparexmlcomparefile'] = 'Par rapport à';
$string['comparexmlcurrentfile'] = 'Fichier XML';
$string['comparexmlcurrentversion'] = 'Version actuelle {$a}';
$string['comparexmllatest'] = 'Dernière';
$string['comparexmlloadfiles'] = 'Charger des fichiers XML';
$string['comparexmlrefresh'] = 'Actualiser la version actuelle';
$string['comparexmlselectcurrentversion'] = 'Version';
$string['comparexmlselectedfile'] = 'Fichier sélectionné';
$string['comparexmlselectedversion'] = 'Version comparée {$a}';
$string['comparexmlselectquestion'] = 'Question';
$string['comparexmlselectversion'] = 'Comparé à la version';
$string['comparexmlshowalllines'] = 'Afficher toutes les lignes';
$string['comparexmlshowdifferencesonly'] = 'Afficher uniquement les différences';
$string['comparexmlshowsplit'] = 'Afficher l\'affichage fractionné';
$string['comparexmlshowunified'] = 'Afficher un affichage unifié';
$string['comparexmltitle'] = 'Comparer la question XML';
$string['completetestcase'] = 'Remplissez le reste du formulaire pour créer un exemple de test réussi.';
$string['complexno'] = 'Signification et affichage de sqrt(-1)';
$string['complexno_help'] = 'Définit le sens et l’affichage du symbole i et de sqrt(-1)';
$string['complexno_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_options.md#sqrt_minus_one.';
$string['confirmthistestcase'] = 'Vérifier le comportement actuel du test.';
$string['createtestcase'] = 'Créer un cas de test';
$string['currentlyselectedvariant'] = 'Ceci est la variante affichée ci-dessous';
$string['dashboardissues'] = 'Votre question pose problème.';
$string['ddl_badanswer'] = 'Le champ modèle de réponse pour cette entrée n’est pas formé correctement : <code>{$a}</code>.';
$string['ddl_duplicates'] = 'Des doublons ont été trouvées lors de la génération des options de l’entrée.';
$string['ddl_empty'] = 'Aucune option n’a été fournie pour ce menu déroulant.';
$string['ddl_nocorrectanswersupplied'] = 'L’enseignant n’a pas indiqué de réponse correcte.';
$string['ddl_runtime'] = 'Cette entrée a généré l’erreur suivante, qui vous empêche de répondre. Veuillez contacter votre enseignant.';
$string['ddl_unknown'] = 'STACK a reçu le code <code>{$a}</code>, qui n’est pas listé comme une option par l’enseignant.';
$string['debuginfo'] = 'Infos de débogage';
$string['decimals'] = 'Séparateur décimal';
$string['decimals_help'] = 'Sélectionnez le symbole et les options relatives au séparateur décimal.';
$string['decimals_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_options.md#decimals';
$string['defaultmarkzeroifnoprts'] = 'Le score par défaut doit être 0 si cette question n’a pas de PRTs.';
$string['defaultprtcorrectfeedback'] = 'Réponse correcte, bravo !';
$string['defaultprtincorrectfeedback'] = 'Réponse incorrecte.';
$string['defaultprtpartiallycorrectfeedback'] = 'Réponse partiellement correcte.';
$string['defaulttestfail'] = 'Le test par défaut utilisant les réponses types ne renvoie pas un score de 1.';
$string['defaulttestpass'] = 'Le test par défaut utilisant les réponses types donne un score de 1.';
$string['deleteexisting'] = 'Désinstaller les variantes existantes';
$string['deleteselected'] = 'Désinstaller la sélection';
$string['deletetestcase'] = 'Supprimer le cas de test {$a->no} pour la question {$a->question}';
$string['deletetestcaseareyousure'] = 'Voulez-vous vraiment supprimer le cas de test {$a->no} pour la question {$a->question} v{$a->version} ?';
$string['deletethistestcase'] = 'Supprimer le cas de test {$a}';
$string['dependenciesintro_desc'] = 'L\'outil de vérification des <a href="{$a->link}">dépendances</a> détecte les problèmes liés à des dépendances telles que JSXGraph ou à l\'inclusion de code Maxima externe.';
$string['deploy'] = 'Déployer variante simple';
$string['deploybtn'] = 'Déployer';
$string['deployduplicateerror'] = 'Des notes de question en double ont été détectées dans les variantes déployées. Nous vous recommandons vivement de ne déployer chaque note de question qu\'une seule fois, sans quoi vous aurez des difficultés à obtenir des statistiques pertinentes lors du regroupement par variante. Veuillez envisager de supprimer certaines variantes comportant des notes en double.';
$string['deployedprogress'] = 'Déploiement des variantes';
$string['deployedvariants'] = 'Variantes déployées';
$string['deployedvariantsn'] = 'Variantes déployées ({$a})';
$string['deployfrom'] = 'Déployer des graines depuis';
$string['deployfromlist'] = 'Énumérez les nombres entiers positifs, à raison d\'un par ligne.';
$string['deployfromlistbtn'] = 'Supprimer les variantes et les redéployer à partir de la liste';
$string['deployfromlisterror'] = 'Une erreur a été détectée dans votre liste de nombres entiers ; par conséquent, aucune modification n\'a été apportée à la liste des variantes déployées.';
$string['deployfromlistexisting'] = 'Graines actuelles :';
$string['deployhalt'] = 'Arrêter le déploiement lorsqu\'un test échoue';
$string['deployhalthelp'] = 'Le déploiement sera plus lent si cette option est sélectionnée.';
$string['deploymany'] = 'Tentative de déploiement automatique du nombre suivant de variantes :';
$string['deploymanybtn'] = 'Nombre de variantes à déployer :';
$string['deploymanyerror'] = 'Erreur d’entrée de l\'utilisateur : impossible de déployer {$a->err} variantes.';
$string['deploymanynonew'] = 'Trop de doublons d’annotations de question existantes ont été générés.';
$string['deploymanynotes'] = 'Tentative de déployer automatiquement plusieurs variantes. STACK abandonnera s’il y a plus de 10 échecs de génération de nouvelle annotation de question ou si un test de question échoue.';
$string['deploymanysuccess'] = 'Nombre de nouvelles variantes créées, testées et déployées : {$a->no}.';
$string['deploynumber'] = 'Nombre de variantes à déployer';
$string['deployoutoftime'] = 'Le délai a été dépassé : cela a pris environ {$a->time} secondes. Veuillez réessayer pour effectuer un déploiement plus long.';
$string['deployrange'] = 'Déployer une gamme de variantes';
$string['deployremoveall'] = 'Dé-déployer toutes les variantes';
$string['deployruntimeerr'] = 'Tentative de déploiement de la graine {$a->no}, mais cela a provoqué une erreur d\'exécution ; l\'opération a donc été ignorée. (Cette erreur ne sera affichée que pour une seule graine.)';
$string['deploysystematicbtn'] = 'Répartir les graines de 1 à :';
$string['deploysystematicfrombtn'] = 'Déployer les graines à partir de :';
$string['deploysystematicto'] = 'à :';
$string['deploytestall'] = 'Lancer tous les tests sur toutes les variantes déployées (lent)';
$string['deployto'] = 'Déployer des graines vers';
$string['deploytoomanyerror'] = 'STACK tentera de déployer jusqu\'à 100 nouvelles variantes au maximum par requête. Aucune nouvelle variante n\'a été déployée.';
$string['description'] = 'Description';
$string['description_err'] = 'La description du nœud dépasse 255 caractères.';
$string['dismiss'] = 'Rejeter';
$string['displaymismatch'] = '[Mauvaise correspondance LaTeX]';
$string['dropdowngotunrecognisedvalue'] = 'Entrée non valide.';
$string['editingtestcase'] = 'Modification du cas de test {$a->no} pour la question {$a->question}';
$string['editquestioninthequestionbank'] = '<i class="fa fa-pencil"></i> Modifier la question';
$string['editthistestcase'] = 'Modifier le cas de test {$a}';
$string['editxml'] = '<i class="fa fa-align-left"></i> Modifier le XML de la question';
$string['editxmlbutton'] = 'Enregistrer comme une nouvelle version et continuer la modification';
$string['editxmlintro'] = 'Vous pouvez modifier le code XML de la question ici, puis l\'enregistrer en tant que nouvelle version de la question. En cas d\'échec de la validation, un avertissement s\'affichera et la question enregistrée sera marquée comme défectueuse (c\'est-à-dire que la balise <code>&lt;isbroken&gt;</code> sera définie sur 1). Des problèmes majeurs liés à la structure des nœuds peuvent empêcher l\'enregistrement de la question. L\'absence d\'éléments de la question ou la présence de valeurs invalides sont susceptibles de provoquer une erreur. Dans la plupart des cas, un message d\'erreur apparaîtra et vous serez averti que la question n\'a pas été enregistrée. Vous pourrez alors modifier votre contenu et réessayer. Toutefois, un grand pouvoir implique de grandes responsabilités : si vous ne manipulez pas le XML avec précaution, vous risquez de rencontrer des problèmes et des messages d\'erreur obscurs, dont vous êtes normalement épargnés lorsque vous utilisez le formulaire d\'édition standard. Veuillez enregistrer fréquemment vos modifications et/ou éditer la question dans une autre application afin d\'éviter toute perte de travail.';
$string['editxmlquestion'] = 'Question XML';
$string['editxmltitle'] = 'Modifier une question XML';
$string['equiv_AND'] = 'et';
$string['equiv_ANDOR'] = 'Confusion et/ou !';
$string['equiv_ASSUMEPOSREALVARS'] = 'Supposons que les variables réelles soient positives';
$string['equiv_ASSUMEPOSVARS'] = 'Supposons que les variables soient positives';
$string['equiv_IMPLIES'] = 'implique que';
$string['equiv_LET'] = 'Soit';
$string['equiv_MISSINGVAR'] = 'Devoirs manquants';
$string['equiv_NAND'] = 'nand';
$string['equiv_NOR'] = 'nor';
$string['equiv_NOT'] = 'not';
$string['equiv_OR'] = 'or';
$string['equiv_SAMEROOTS'] = '(mêmes racines)';
$string['equiv_XNOR'] = 'xnor';
$string['equiv_XOR'] = 'xor';
$string['equivfirstline'] = 'Vous avez utilisé une mauvaise première ligne dans votre argument !';
$string['equivmixedreasoning'] = 'Lorsque vous raisonnez par équivalence, vous devez soit (i) réécrire les expressions, soit (ii) réécrire les équations étape par étape. Vous semblez mélanger les deux approches, ce qui n\'est pas valide.';
$string['equivnocomments'] = 'Il n’est pas permis d’utiliser des commentaires dans ce type d’entrée. Veuillez simplement travailler ligne par ligne.';
$string['errors'] = 'Erreurs';
$string['exceptionmessage'] = '{$a}';
$string['expand'] = 'Développer';
$string['expandtitle'] = 'Afficher les catégories de questions';
$string['expectedanswernote'] = 'Annotation de réponse attendue';
$string['expectedoutcomes'] = 'Résultats attendus';
$string['expectedpenalty'] = 'Pénalité attendue';
$string['expectedscore'] = 'Score attendu';
$string['exportthisquestion'] = '<i class="fa fa-download"></i> Exporter au format XML';
$string['exportthisquestion_help'] = 'Cela permettra de créer un fichier d\'exportation XML Moodle ne contenant que cette question. Cela peut notamment s\'avérer utile si vous pensez que cette question met en évidence un bug dans STACK que vous souhaitez signaler aux développeurs.';
$string['fact_sheet_preamble'] = '<h1> Astuces </h1>

STACK contient une « feuille de formules » regroupant des fragments utiles qu’un enseignant peut souhaiter intégrer de manière cohérente.  Cela est rendu possible grâce au système des « astuces ».

Les astuces peuvent être intégrées dans n’importe quel fichier [CASText](../../Authoring/CASText.md).

Pour inclure une astuce, utilisez la syntaxe suivante :

    [[facts:tag]]

Le « tag » est choisi parmi la liste ci-dessous.  Notez que ces astuces sont des chaînes HTML simples et qu’elles sont stockées dans les fichiers de langue.

<h2> Toutes les fiches de référence prises en charge </h2>';
$string['false'] = 'Faux';
$string['falsebranch'] = 'Branch faux';
$string['falsebranch_help'] = 'Ces champs déterminent ce qui se passe lorsque le test de réponse échoue.
<h3> Mod et score </h3>
Comment le score est ajusté. « = » signifie fixer le score à une valeur donnée ; « +/- » signifie ajouter ou soustraire le score indiqué du total actuel.

<h3> Pénalité </h3>
En mode adaptatif ou interactif, accumuler ce nombre de points de pénalité.

<h3> Suivant </h3>
Indique s’il faut passer à un autre nœud, et si oui, lequel, ou s’il faut s’arrêter.

<h3>Note de réponse</h3>
Il s’agit d’une balise essentielle à des fins de rapport. Elle est conçue pour enregistrer le parcours unique à travers l’arborescence, ainsi que le résultat de chaque test de réponse. Elle est générée automatiquement, mais peut être remplacée par une valeur significative.';
$string['feedbackfromprtx'] = '[ Feedback de {$a}. ]';
$string['feedbackstyle'] = 'Style de feedback du PRT';
$string['feedbackstyle0'] = 'Formative';
$string['feedbackstyle1'] = 'Standard';
$string['feedbackstyle2'] = 'Compacte';
$string['feedbackstyle3'] = 'Symbole uniquement';
$string['feedbackstyle_help'] = 'Détermine la manière dont les feedbacks de PRT s\'affichent.';
$string['feedbackstyle_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md';
$string['feedbackvariables'] = 'Variables de feedback';
$string['feedbackvariables_help'] = 'Les variables de feedback vous permettent de manipuler les entrées et les variables de question avant de traverser l’arbre. Les variables définies ici peuvent être utilisées n’importe où dans cet arbre.';
$string['feedbackvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Variables.md#Feedback_variables';
$string['fieldshouldnotcontainplaceholder'] = '{$a->field} ne doit pas comporter de paramètres [[{$a->type}:…]].';
$string['fixdollars'] = 'Corriger les symboles « dollar »';
$string['fixdollars_help'] = 'Cette option est utile si vous copiez-collez (ou saisissez) du code TeX comportant les délimiteurs <code>$…$</code> et <code>$$…$$</code>. Ces délimiteurs seront remplacés par les délimiteurs recommandés lors de l\'enregistrement.';
$string['fixdollarslabel'] = 'Remplacer <code>$…$</code> par <code>\\(…\\)</code>, <code>$$…$$</code> par <code>\\[…\\]</code> et <code>@…@</code> par <code>{@…@}</code> lors de l’enregistrement.';
$string['forbiddendoubledollars'] = 'Veuillez utiliser les délimiteurs <code>\\(…\\)</code> pour les formules mathématiques en ligne et <code>\\[…\\]</code> pour les formules mathématiques en bloc. Les formats <code>$…$</code> et <code>$$…$$</code> ne sont pas autorisés. Une option disponible à la fin du formulaire permet de corriger cela automatiquement.';
$string['forbidfloat'] = 'Interdire les nombres à virgule';
$string['forbidfloat_help'] = 'Si ce réglage est activé, les réponses contenant des nombres à virgule seront rejetées comme non valides.';
$string['forbidfloat_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Forbid_Floats';
$string['forbidwords'] = 'Mots interdits';
$string['forbidwords_help'] = 'Une liste de chaînes de caractères interdites dans les réponses des étudiants, séparées par des virgules.';
$string['forbidwords_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Forbidden_Words';
$string['free_text_calc'] = 'Ce champ vous permet d\'intégrer des calculs simples entre <code>{@...@}</code>, plutôt que d\'avoir recours à une calculatrice externe.';
$string['free_text_calc_min'] = '{@...@}';
$string['free_text_fact'] = 'Ce champ vous permet de saisir du texte libre, par exemple votre démonstration complète ou votre raisonnement mathématique.
<ol>
<li>Vous pouvez saisir du texte au format Markdown.</li>
<li>Vous pouvez saisir des expressions AsciiMath entre des accents graves (backticks) : <code>`...`</code></li>
<li>Vous pouvez inclure du code LaTeX entre des délimiteurs : <code>\\(...\\)</code> pour des formules intégrées au texte et <code>\\[...\\]</code> pour des formules isolées (centrées).</li>
<li>Si cette option est activée par l\'enseignant, les calculs placés entre <code>{@...@}</code> seront évalués automatiquement.</li>
</ol>
<p>AsciiMath propose deux formats. Le format <em>en ligne</em> (intégré au texte) commence et se termine par un accent grave, par exemple : <code>`sum_(k=1)^oo 1/(n^2)=pi^2/6`</code>.</p>
<p>Le format <em>isolé</em> (ou « affiché ») commence et se termine par un accent grave placé sur une ligne vide, avec les formules mathématiques entre les deux. Exemple :
<pre>`<br>x^2-5x+6=0<br>(x-3)(x-2)=0<br>`</pre>
<p>Une documentation plus détaillée sur Markdown, AsciiMath et LaTeX est disponible en ligne.</p>';
$string['free_text_name'] = 'Champs de saisie libre';
$string['free_text_toolong'] = 'Votre réponse ne doit pas dépasser {$a->max} caractères. Elle en compte actuellement {$a->current}.';
$string['generalerrors'] = 'Votre question contient des erreurs. Veuillez vérifier attentivement ce qui suit.';
$string['generalfeedback'] = 'Feedback général';
$string['generalfeedback_help'] = 'Le feedback général est en CASText. Il est affiché à l’étudiant après qu’il a répondu à la question. Contrairement au feedback normal, qui dépend du contenu de la réponse donnée par l’étudiant, le commentaire général est indépendant du contenu de la réponse. Il peut toutefois répondre des variables de la question utilisées dans la version de la question.';
$string['generalfeedback_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#general_feedback';
$string['gosummary'] = 'Aller au sommaire.';
$string['greek_alphabet_fact'] = '<center>
<table>
<tr><td>
 Majuscule, \\(\\quad\\) </td><td>  minuscule, \\(\\quad\\) </td><td>  nom </td> </tr>   <tr> <td>
 \\(A\\)  </td><td>  \\(\\alpha\\)  </td><td>  alpha  </td> </tr>   <tr> <td>
 \\(B\\)  </td><td>  \\(\\beta\\)  </td><td>  bêta </td> </tr>   <tr> <td>
 \\(\\Gamma\\)  </td><td>  \\(\\gamma\\)  </td><td>  gamma </td> </tr>   <tr> <td>
 \\(\\Delta\\)  </td><td>  \\(\\delta\\)  </td><td>  delta </td> </tr>   <tr> <td>
 \\(E\\)  </td><td>  \\(\\epsilon\\)  </td><td>  epsilon </td> </tr>   <tr> <td>
 \\(Z\\)  </td><td>  \\(\\zeta\\)  </td><td>  zêta </td> </tr>   <tr> <td>
 \\(H\\)  </td><td>  \\(\\eta\\)  </td><td>  êta </td> </tr>   <tr> <td>
 \\(\\Theta\\)  </td><td>  \\(\\theta\\)  </td><td>  thêta </td> </tr>   <tr> <td>
 \\(K\\)  </td><td>  \\(\\kappa\\)  </td><td>  kappa </td> </tr>   <tr> <td>
 \\(M\\)  </td><td>  \\(\\mu\\)  </td><td>  mu </td> </tr>   <tr> <td>
 \\(N\\)  </td><td>  \\( u\\)  </td><td>  nu </td> </tr>   <tr> <td>
 \\(\\Xi\\)  </td><td>  \\(\\xi\\)  </td><td>  xi </td> </tr>   <tr> <td>
 \\(O\\)  </td><td>  \\(o\\)  </td><td>  omicron </td> </tr>   <tr> <td>
 \\(\\Pi\\)  </td><td>  \\(\\pi\\)  </td><td>  pi </td> </tr>   <tr> <td>
 \\(I\\)  </td><td>  \\(\\iota\\)  </td><td>  iota </td> </tr>   <tr> <td>
 \\(P\\)  </td><td>  \\(\\rho\\) </td><td>  rho </td> </tr>   <tr> <td>
 \\(\\Sigma\\)  </td><td>  \\(\\sigma\\)  </td><td>  sigma </td> </tr>   <tr> <td>
 \\(\\Lambda\\)  </td><td>  \\(\\lambda\\)  </td><td>  lambda </td> </tr>   <tr> <td>
 \\(T\\)  </td><td>  \\(\\tau\\)  </td><td>  tau </td> </tr>   <tr> <td>
 \\(\\Upsilon\\)  </td><td>  \\(\\upsilon\\)  </td><td>  upsilon </td> </tr>   <tr> <td>
 \\(\\Phi\\)  </td><td>  \\(\\phi\\)  </td><td>  phi </td> </tr>   <tr> <td>
 \\(X\\)  </td><td>  \\(\\chi\\)  </td><td>  chi </td> </tr>   <tr> <td>
 \\(\\Psi\\)  </td><td>  \\(\\psi\\)  </td><td> psi </td> </tr>   <tr> <td>
 \\(\\Omega\\)  </td><td>  \\(\\omega\\)  </td><td>  oméga </td></tr>
</table></center>';
$string['greek_alphabet_name'] = 'L’alphabet grec';
$string['healthautomaxopt'] = 'Créer automatiquement une image Maxima optimisée';
$string['healthautomaxopt_failed'] = 'Échec de la création d\'une image Maxima optimisée : [{$a->errmsg}]';
$string['healthautomaxopt_nolisp'] = 'Impossible de déterminer la version de LISP. L’image Maxima n’a pas été créée automatiquement.';
$string['healthautomaxopt_nolisprun'] = 'Impossible de localiser automatiquement le fichier lisp.run. Essayez de lancer la commande « sudo updatedb » depuis la ligne de commande et consultez la documentation sur l\'optimisation.';
$string['healthautomaxopt_notok'] = 'L\'image Maxima n\'a pas été créée automatiquement.';
$string['healthautomaxopt_ok'] = 'Image Maxima créée à l\'adresse : <tt>{$a->command}</tt>';
$string['healthautomaxopt_succeeded'] = 'Création d\'une image Maxima optimisée : RÉUSSITE';
$string['healthautomaxoptintro'] = 'Pour obtenir les meilleures performances, nous devons optimiser Maxima sur une machine Linux. Utilisez la page du plugin « healthcheck » et consultez la documentation à ce sujet.';
$string['healthcheck'] = 'Diagnostic STACK';
$string['healthcheck_desc'] = 'Le <a href="{$a->link}">script de diagnostic</a> vous aide à vérifier tous que tous les aspects de STACK fonctionnent correctement.';
$string['healthcheckcache_db'] = 'Les résultats CAS sont mis en cache dans la base de données.';
$string['healthcheckcache_none'] = 'Les résultats CAS ne sont pas mis en cache.';
$string['healthcheckcache_otherdb'] = 'Les résultats CAS sont mis en cache dans une autre base de données.';
$string['healthcheckcachestatus'] = 'Le cache contient actuellement {$a} entrées.';
$string['healthcheckconnect'] = 'Tentative de connexion au CAS';
$string['healthcheckconnectintro'] = 'Nous essayons d\'évaluer le texte CAS suivant :';
$string['healthcheckconnectunicode'] = 'Tentative d\'envoi de caractères Unicode vers le CAS';
$string['healthcheckcreateimage'] = 'Créer une image Maxima';
$string['healthcheckfail'] = 'Le bilan de fonctionnement a détecté des problèmes graves. Veuillez consulter les informations de diagnostic ci-dessous pour plus de détails.';
$string['healthcheckfaildocs'] = 'Vous trouverez des notes détaillées et des conseils de dépannage dans la documentation, sous <a href="{$a->link}">Installation > Test de l\'installation</a>.';
$string['healthcheckfilters'] = 'Veuillez vous assurer que l\'option {$a->filter} est activée sur la page <a href="{$a->url}">Gérer les filtres</a>.';
$string['healthcheckfreetext'] = 'Bloc de questions à réponse libre';
$string['healthcheckfreetextintro'] = 'Un panneau d\'affichage de texte libre, relié à une zone de saisie de type « textarea », devrait figurer ci-dessous. Le code ASCIIMath saisi doit s\'afficher sous forme de LaTeX entièrement rendu : la première ligne doit être alignée à gauche, tandis que les autres équations doivent être centrées et alignées sur le signe « égal ». Le résultat doit correspondre à la représentation matricielle ASCIIMath.';
$string['healthcheckfreetextsample'] = '<div class="que stack">
<div class="content">
<div class="formulation clearfix">
<div class="qtext">
<div class="free-text-container">
<textarea id="_ans1" cols="60">
`prod_(k=0)^(n+1)(1+x^(2^k))=sum_(k=0)^(2^((n+1)+1)-1) x^k.`

`
a = b
c = d
[[2,1],[3,2]] [[2,-1],[-3,2]] =[[1,0],[0,1]]
`

Cette ligne n\'est PAS le résultat
</textarea>
[[ascii input="ans1" width="100%"]]
  [[extractor targetinput="ans2" type="lastexpr"/]]
[[/ascii]]
</div>
</div>
<p>Résultat = <input id="_ans2"/></p>
</div>
</div>
</div>
</div>';
$string['healthcheckgeogebra'] = 'Bloc GeoGebra';
$string['healthcheckgeogebraintro'] = 'Vous devriez voir ci-dessous un graphique GeoGebra et un champ de saisie. Lorsque vous interagissez avec le graphique, cela devrait modifier la valeur saisie.';
$string['healthcheckgeogebrasample'] = '<div class="formulation" style="width:36vw;margin:auto;">
[[geogebra input-ref-fakeinputA="stateRefA" input-ref-fakeinputB="stateRefB" input-ref-fakeinputC="stateRefC"]]
params["material_id"]="seehz3km";
params["appletOnLoad"]=function(){stack_geogebra.bind_point(stateRefA, applet.getAppletObject(), "A");
    stack_geogebra.bind_point(stateRefB, applet.getAppletObject(), "B");
    stack_geogebra.bind_point(stateRefC, applet.getAppletObject(), "C");}
[[/geogebra]]
<br/><p>A=<input id="_fakeinputA" value="[5, 3]" size="40"/></p>
<br/><p>B=<input id="_fakeinputB" value="[1, 1]" size="40"/></p>
<br/><p>C=<input id="_fakeinputC" value="[4, 1]" size="40"/></p>
</div>';
$string['healthcheckjsxgraph'] = 'Liaison JSXGraph et MathJax';
$string['healthcheckjsxgraphintro'] = 'Un graphique et un champ de saisie devraient apparaître ci-dessous. Les interactions avec le graphique devraient avoir un effet sur le champ de saisie, et inversement. Si ce n\'est pas le cas, cela signifie qu\'il y a des problèmes au niveau des bibliothèques JavaScript ou de leur exécution. Le graphique devrait également afficher une formule LaTeX rendue par MathJax. Si ce n\'est pas le cas, il se peut que vous bloquiez l\'accès à certains éléments et que vous deviez ajuster vos pare-feu, proxys, etc  ; si vous utilisez une installation fermée, essayez de modifier les adresses distantes dans <code>vle_specific.php</code>. Le graphique (s\'il fonctionne) s\'inspire de <a href="https://jsxgraph.org/share/example/differential-equations">cet exemple</a>.';
$string['healthcheckjsxgraphsample'] = '<div class="formulation" style="width:36vw;margin:auto;">
[[jsxgraph input-ref-fakeinput1="input" width="35vw" aspect-ratio="1"]]
JXG.Options.text.useMathJax = true; JXG.Options.point.snapToGrid = true;
JXG.Options.point.snapSizeX = 0.002; JXG.Options.point.snapSizeY = 0.002;
const board = JXG.JSXGraph.initBoard(BOARDID, {axis:true, boundingbox:[-11,11,11,-11]});
board.create("text",[-10,6,"\\\\[y\' = (2-t)y+c\\\\]"], {fontSize:24});
var N = board.create("slider", [[-7, 9.5], [7, 9.5], [-15, 10, 15]], {name:"N"});
var slider = board.create("slider", [[-7, 8], [7, 8], [-15, 0, 15]], {name:"c", snapWidth:0.002});
var P = board.create("point", [0, 1], {name:"(\\\\(t_0, y_0\\\\))"});
var snip = board.jc.snippet("(2-t)*y + c", true, "t, y");
var f = (t,y) => [snip(t,y[0])];
var ode = () => JXG.Math.Numerics.rungeKutta("heun", [P.Y()], [P.X(), P.X()+N.Value()], 200, f);
var g = board.create("curve", [[0],[0]], {strokeColor:"red", strokeWidth:2});
g.updateDataArray = function() {
    var data = ode();
    var i,h = N.Value() / 200;
    this.dataX = [];
    this.dataY = [];
    for (i = 0; i < data.length; i++) {
        this.dataX[i] = P.X() + i * h;
        this.dataY[i] = data[i][0];
    }
};
var ser = () => JSON.stringify([P.X(),P.Y(),slider.Value()]);
var deser = (val) => {
    var data = JSON.parse(val);
    slider.setValue(data[2]);
    slider.update();
    P.setPosition(JXG.COORDS_BY_USER,[data[0],data[1]]);
    P.update(),
    board.update();
};
stack_jxg.custom_bind(input, ser, deser, [P,slider]);
[[/jsxgraph]]
<br/><p>[t_0,y_0,c]=<input id="_fakeinput1" value="[0,1,0]" size="40"/> </p>
</div>';
$string['healthchecklatex'] = 'Vérifier que LaTeX est converti correctement';
$string['healthchecklatexintro'] = 'STACK génère du code LaTeX à la volée et permet aux enseignants d’écrire du code LaTeX dans leurs questions. Il part du principe que ce code sera converti par un filtre Moodle. Vous trouverez ci-dessous des exemples d’expressions LaTeX affichées et intégrées qui devraient s’afficher correctement dans votre navigateur. Les problèmes rencontrés ici sont dus à des paramètres de filtre Moodle incorrects, et non à des dysfonctionnements de STACK lui-même. STACK n’utilise lui-même que la notation à un ou deux dollars, mais certains auteurs de questions peuvent recourir à d’autres formes.';
$string['healthchecklatexmathjax'] = 'STACK utilise le filtre MathJax de Moodle. Une autre solution consiste à ajouter du code JavaScript dans la section HTML supplémentaire de Moodle. Consultez la documentation d\'installation de STACK pour plus de détails sur cette option.';
$string['healthcheckmathsdisplaymethod'] = 'Méthode d\'affichage des mathématiques utilisée : {$a}.';
$string['healthcheckmathsmathjaxloc'] = 'Il semble que vous utilisiez une copie locale de MathJax ; vous devez donc vous assurer que votre serveur web envoie les en-têtes CORS appropriés pour les fichiers MathJax. Consultez la documentation « Tester l\'installation » pour plus de détails.';
$string['healthcheckmathsmathjaxurl'] = 'Mathjaxurl (<tt>filter_mathjaxloader | httpsurl</tt>) : {$a}.';
$string['healthcheckmaximaavailable'] = 'Versions de Maxima disponibles sur ce serveur';
$string['healthcheckmaximalocal'] = 'Contenu du fichier « maximalocal »';
$string['healthchecknombstring'] = 'STACK v4.3 et les versions ultérieures nécessitent le module PHP mbstring, qui est absent. Veuillez consulter la documentation d\'installation.';
$string['healthcheckparsons'] = 'Bloc de preuve « glisser-déposer » de Parson';
$string['healthcheckparsonsintro'] = 'Un bloc de démonstration « glisser-déposer » de Parson devrait apparaître ci-dessous, lié à un bloc de saisie. Le champ de saisie devrait être vide au départ et se remplir progressivement d\'un objet JSON correspondant à l\'état des listes « glisser-déposer » de Parson dès que l\'on commence à déplacer les éléments.';
$string['healthcheckparsonssample'] = '<div class="formulation">
[[parsons input="fakeparsonsinput"]]
{# stackjson_stringify([[base64("assume"), "Supposons, par contradiction, qu\'il n\'existe qu\'un nombre fini de nombres premiers."],
 [base64("false_hyp"), "Énumérez tous les nombres premiers \\\\( p_1, p_2, \\\\dots, p_n\\\\)."],
 [base64("obs1"), "Tout nombre naturel fait partie de cette liste ou est divisible par un nombre de cette liste."],
 [base64("gadget"), "Considérons \\\\(N=p_1\\\\times p_2 \\\\times \\\\cdots \\\\times p_n +1.\\\\)"],
 [base64("notmem1"), "Pour tout \\\\(k=1,\\\\dots, n\\\\), le nombre \\\\(N > p_k\\\\)"],
 [base64("notmem2"), "Par conséquent, \\\\(N\\\\neq p_k\\\\)."],
 [base64("notmem3"), "Par conséquent, \\\\(N\\\\) ne figure pas dans la liste."],
 [base64("div1"), "Pour tout \\\\(k=1,\\\\dots, n\\\\), lorsque l\'on divise \\\\(N\\\\) par \\\\(p_k\\\\), on obtient un reste égal à \\\\(1\\\\)."],
 [base64("div2"), "Par conséquent, \\\\(N\\\\) n\'est divisible par aucun \\\\(p_k\\\\)."],
 [base64("contra1"), "\\\\(N\\\\) ne fait pas partie de la liste et n\'est divisible par aucun nombre de cette liste."],
 [base64("contra2"), "Cela contredit le fait que tout nombre fait partie de cette liste ou est divisible par un nombre de cette liste."],
 [base64("conc"), "Par conséquent, la liste des nombres premiers n\'est pas finie."]
]) #}
[[/parsons]]
<br/><p>input=<input id="_fakeparsonsinput" style="width:70vw;margin:auto"/></p></div>';
$string['healthcheckpass'] = 'Le bilan de fonctionnement s’est déroulé sans détecter de problème. Veuillez toutefois lire attentivement les informations détaillées ci-dessous. Tous les problèmes ne peuvent pas être détectés automatiquement.';
$string['healthcheckplots'] = 'Tracé de graphiques';
$string['healthcheckplotsintro'] = 'Parcelles d’échantillonnage.';
$string['healthcheckproxysettings'] = '<strong>Avertissement :</strong> Moodle est configuré pour utiliser un serveur proxy, mais les appels vers Maxima contournent cette configuration. Remplacez la plate-forme « server » par « server (via proxy) » pour acheminer les appels via le serveur proxy, ou ajoutez le serveur Maxima à $CFG->proxybypass pour rendre ce contournement explicite. STACK devrait continuer à fonctionner pour l\'instant même si vous n\'effectuez aucune modification, mais les paramètres de proxy de Moodle seront appliqués de manière obligatoire dans une version ultérieure.';
$string['healthchecksamplecas'] = 'La dérivée de {@ x^4/(1+x^4) @} est \\[ \\frac{\\mathrm{d}}{\\mathrm{d}x} \\frac{x^4}{1+x^4} = {@ diff(x^4/(1+x^4),x) @}. \\]';
$string['healthchecksamplecasunicode'] = 'Vérifiez si Unicode est pris en charge : \\(\\forall\\) devrait s\'afficher sous la forme {@unicode(8704)@}.';
$string['healthchecksampledisplaytex'] = '\\[\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}.\\]';
$string['healthchecksampleinlinetex'] = '\\(\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}\\).';
$string['healthchecksampleplots'] = 'Voici deux exemples de graphiques ci-dessous. {@plot([x^4/(1+x^4),diff(x^4/(1+x^4),x)],[x,-3,3])@} {@plot([sin(x),x,x^2,x^3],[x,-3,3],[y,-3,3],grid2d)@} Un troisième graphique, plus petit, devrait s\'afficher ci-dessous avec des axes classiques. {@plot([x,2*x^2-1,x*(4*x^2-3),8*x^4-8*x^2+1,x*(16*x^4-20*x^2+5),(2*x^2-1)*(16*x^4-16*x^2+1)],[x,-1,1],[y,-1.2,1.2],[box, false],[yx_ratio, 1],[axes, solid],[xtics, -3, 1, 3],[ytics, -3, 1, 3],[size,250,250])@}';
$string['healthchecksampleplots5.46'] = 'Depuis la version 5.46, Maxima prend en charge les tracés de courbes implicites. (Si la version « par défaut » de Maxima est antérieure à la 5.46, le tracé ci-dessous pourrait échouer.) {@plot(2^2*x*y*(x^2-y^2)-x^2-y^2=0, [x,-4,4], [y,-4,4])@}';
$string['healthchecksstacklibrariesworking'] = 'Bibliothèques optionnelles de Maxima';
$string['healthchecksstacklibrariesworkingfailed'] = 'La ou les bibliothèques Maxima suivantes semblent ne pas se charger : {$a->err}. Essayez de recréer votre image Maxima.';
$string['healthchecksstacklibrariesworkingok'] = 'Les bibliothèques optionnelles de Maxima semblent se charger correctement.';
$string['healthchecksstacklibrariesworkingsession'] = 'La vérification des bibliothèques Maxima optionnelles a généré l\'erreur suivante : {$a->err}';
$string['healthchecksstackmaximanotupdated'] = 'Il semblerait que STACK n\'ait pas été correctement mis à jour. Veuillez vous rendre sur la page <a href="{$a}">Administration du système -> Notifications</a>.';
$string['healthchecksstackmaximatooold'] = 'Cette version est si ancienne qu\'on ne connaît même pas son numéro !';
$string['healthchecksstackmaximaversion'] = 'Version de Maxima';
$string['healthchecksstackmaximaversionfixoptimised'] = 'Veuillez <a href="{$a->url}">recompiler votre exécutable Maxima optimisé</a>.';
$string['healthchecksstackmaximaversionfixserver'] = 'Veuillez recompiler le code Maxima sur votre serveur MaximaPool.';
$string['healthchecksstackmaximaversionfixunknown'] = 'On ne sait pas vraiment comment cela s\'est produit. Vous devrez résoudre ce problème par vous-même. Commencez par vider le cache CAS.';
$string['healthchecksstackmaximaversionmismatch'] = 'La version des bibliothèques STACK-Maxima utilisée ({$a->usedversion}) ne correspond pas à celle attendue ({$a->expectedversion}) par cette version du type de question STACK. {$a->fix}';
$string['healthchecksstackmaximaversionok'] = 'La version de la bibliothèque STACK-Maxima utilisée est correcte et conforme aux attentes ({$a->usedversion}).';
$string['healthchecksstackmaximawarning'] = 'AVERTISSEMENT : la version des bibliothèques STACK-Maxima utilisée ne correspond pas à la version attendue. Veuillez consulter la page « STACK Heathcheck » pour résoudre ces problèmes.';
$string['healthunabletolistavail'] = 'Le type de plateforme n\'est actuellement pas défini sur « linux » et il n\'y a pas de cache de base de données ; il est donc impossible d\'afficher la liste des versions disponibles de Maxima.';
$string['healthuncached'] = 'Appel CAS non mis en cache';
$string['healthuncachedintro'] = 'Cette section envoie toujours une requête authentique au CAS, quels que soient les paramètres actuels du cache. Cette procédure est nécessaire pour s’assurer que la connexion au CAS fonctionne bien à ce moment-là.';
$string['healthuncachedstack_CAS_calculation'] = 'Calcul CAS prévu : {$a->expected}. Calcul CAS réel : {$a->actual}.';
$string['healthuncachedstack_CAS_not'] = 'Le CAS a renvoyé certaines données comme prévu, mais il y avait des erreurs.';
$string['healthuncachedstack_CAS_ok'] = 'Le CAS a renvoyé les données comme prévu. Vous disposez d\'une connexion active au CAS.';
$string['healthuncachedstack_CAS_trigsimp'] = 'La fonction « trigsimp » ne fonctionne pas. Peut-être devriez-vous également installer le package maxima-share sur votre système ?';
$string['healthuncachedstack_CAS_version'] = 'Version attendue de Maxima : « {$a->expected} ». Version réelle de Maxima : {$a->actual}.';
$string['healthuncachedstack_CAS_versionnotchecked'] = 'Vous avez choisi la version « par défaut » de Maxima ; par conséquent, aucune vérification de la version de Maxima n\'est effectuée. Votre connexion brute utilise en réalité la version {$a->actual}.';
$string['history'] = '<i class="fa fa-list-alt"></i> Historique de la question';
$string['hyp_functions_fact'] = 'Les fonctions hyperboliques présentent des propriétés similaires à celles des fonctions trigonométriques, mais peuvent être représentées sous forme exponentielle comme suit :
 \\[ \\cosh(x)      = \\frac{e^x+e^{-x}}{2}, \\qquad \\sinh(x)=\\frac{e^x-e^{-x}}{2} \\]
 \\[ \\tanh(x)      = \\frac{\\sinh(x)}{\\cosh(x)} = \\frac{{e^x-e^{-x}}}{e^x+e^{-x}} \\]
 \\[ {\\rm sech}(x) ={1\\over \\cosh(x)}={2\\over {\\rm e}^x+{\\rm e}^{-x}}, \\qquad  {\\rm cosech}(x)= {1\\over \\sinh(x)}={2\\over {\\rm e}^x-{\\rm e}^{-x}} \\]
 \\[ {\\rm coth}(x) ={\\cosh(x)\\over \\sinh(x)} = {1\\over {\\rm tanh}(x)} ={{\\rm e}^x+{\\rm e}^{-x}\\over {\\rm e}^x-{\\rm e}^{-x}}\\]';
$string['hyp_functions_name'] = 'Fonctions hyperboliques';
$string['hyp_identities_fact'] = 'La similitude entre le comportement des fonctions hyperboliques et celui des fonctions trigonométriques apparaît clairement lorsqu’on examine certaines identités hyperboliques fondamentales :
  \\[{\\rm e}^x=\\cosh(x)+\\sinh(x), \\quad {\\rm e}^{-x}=\\cosh(x)-\\sinh(x)\\]
  \\[\\cosh^2(x) -\\sinh^2(x) = 1\\]
  \\[1-{\\rm tanh}^2(x)={\\rm sech}^2(x)\\]
  \\[{\\rm coth}^2(x)-1={\\rm cosech}^2(x)\\]
  \\[\\sinh(x\\pm y)=\\sinh(x)\\ \\cosh(y)\\ \\pm\\ \\cosh(x)\\ \\sinh(y)\\]
  \\[\\cosh(x\\pm y)=\\cosh(x)\\ \\cosh(y)\\ \\pm\\ \\sinh(x)\\ \\sinh(y)\\]
  \\[\\sinh(2x)=2\\,\\sinh(x)\\cosh(x)\\]
  \\[\\cosh(2x)=\\cosh^2(x)+\\sinh^2(x)\\]
  \\[\\cosh^2(x)={\\cosh(2x)+1\\over 2}\\]
  \\[\\sinh^2(x) = \\frac{\\cosh(2x) - 1}{2}\\]';
$string['hyp_identities_name'] = 'Identités hyperboliques';
$string['hyp_inverse_functions_fact'] = '\\[\\cosh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2-1}\\right) \\quad \\text{ pour } x\\geq 1\\]
 \\[\\sinh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2+1}\\right)\\]
 \\[\\tanh^{-1}(x) = \\frac{1}{2}\\ln\\left({1+x\\over 1-x}\\right) \\quad \\text{ pour } -1< x < 1\\]';
$string['hyp_inverse_functions_name'] = 'Fonctions hyperboliques inverses';
$string['illegalcaschars'] = 'Les caractères @, $ et \\ ne sont pas permis dans l’entrée du CAS.';
$string['importwillfail'] = 'Cette question ne peut pas être enregistrée ou importée en l\'état.';
$string['inputdisplayed'] = 'Affiché comme';
$string['inputentered'] = 'Valeur saisie';
$string['inputexpression'] = 'Entrée du test';
$string['inputextraoptions'] = 'Options supplémentaires';
$string['inputextraoptions_help'] = 'Certains types d’entrée requièrent des options supplémentaires pour fonctionner. Vous pouvez les saisir ici. Cette valeur est une expression CAS.';
$string['inputextraoptions_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Extra options';
$string['inputheading'] = 'Entrée : {$a}';
$string['inputinvalidparamater'] = 'Paramètre non valide';
$string['inputlanguageproblems'] = 'Il existe des incohérences entre les différentes langues au niveau des balises de saisie et de validation.';
$string['inputmonospace'] = 'Police Monospace';
$string['inputmonospace_help'] = 'Sélectionnez les types de champs de saisie pour lesquels la police monospace sera utilisée par défaut. Ce paramètre s\'applique à toutes les questions, et pas seulement aux nouvelles. Ces valeurs par défaut peuvent être modifiées pour un champ de saisie particulier à l\'aide des options supplémentaires « monospace » et « monospace:false ».';
$string['inputname'] = 'Nom de l’entrée';
$string['inputnameform'] = 'Les noms des paramètres d\'entrée doivent être composés uniquement de lettres suivies (éventuellement) de chiffres. « {$a} » n\'est pas autorisé.';
$string['inputnamelength'] = 'Les noms des entrées ne peuvent pas dépasser 18 caractères. « {$a} » est trop long.';
$string['inputopterr'] = 'La valeur de l\'option <code>{$a->opt}</code> ne peut pas être définie comme <code>{$a->val}</code>.';
$string['inputoptionunknown'] = 'Cette entrée ne supporte pas l’option « {$a} ».';
$string['inputremovedconfirm'] = 'Voulez-vous vraiment supprimer cette entrée de cette question ?';
$string['inputremovedconfirmbelow'] = 'L’entrée « {$a} » a été supprimée. Veuillez confirmer ceci ci-dessous.';
$string['inputs'] = 'Entrées';
$string['inputstatus'] = 'Statut';
$string['inputstatusname'] = 'Vide';
$string['inputstatusnameinvalid'] = 'Non valide';
$string['inputstatusnamescore'] = 'Score';
$string['inputstatusnamevalid'] = 'Valide';
$string['inputtest'] = 'Test d’entrée';
$string['inputtype'] = 'Type d’entrée';
$string['inputtype_help'] = 'Ceci détermine le type de l’entrée, par exemple zone de texte, liste déroulante, vrai/faux, etc.';
$string['inputtype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md';
$string['inputtypealgebraic'] = 'Forme algébrique';
$string['inputtypeboolean'] = 'Vrai/Faux';
$string['inputtypecheckbox'] = 'Case à cocher';
$string['inputtypedropdown'] = 'Liste déroulante';
$string['inputtypeequiv'] = 'Raisonnement d’équivalence';
$string['inputtypefreetext'] = 'Texte libre';
$string['inputtypegeogebra'] = 'GeoGebra';
$string['inputtypejson'] = 'JSON';
$string['inputtypematrix'] = 'Matrice';
$string['inputtypenotes'] = 'Annotations';
$string['inputtypenumerical'] = 'Numérique';
$string['inputtypeparsons'] = 'Parsons';
$string['inputtypeparsons_incorrect_model_ans'] = 'Le champ de réponse type correspondant à l\'entrée « Parsons » est mal formé. Il doit prendre l\'une des formes suivantes : <ul> <li> <strong>Questions de démonstration</strong> : une liste de la forme <code>[ta, proof_steps]</code>, où <code>ta</code> est la variable de réponse correcte et <code>proof_steps</code> est la variable contenant toutes les étapes de démonstration disponibles. </li><li><strong>Questions de regroupement</strong> Si la variable « columns » est définie dans le bloc Parsons, alors un tableau de la forme <code>[ta, steps, n]</code>, où <code>ta</code> est la variable de réponse correcte, <code>steps</code> est la variable contenant toutes les étapes disponibles et <code>n</code> est le nombre de colonnes. </li> <li><strong>Questions sous forme de grille</strong> Si les variables « columns » et « row » sont toutes deux définies dans le bloc de Parson, alors un tableau de la forme <code> [ta, steps, n, m]</code>, où <code>ta</code> est la variable de réponse correcte, <code>steps</code> est la variable contenant toutes les étapes disponibles, <code>n</code> est le nombre de colonnes et <code>m</code> est le nombre de lignes.</li>';
$string['inputtyperadio'] = 'Bouton radio';
$string['inputtypesinglechar'] = 'Caractère unique';
$string['inputtypestring'] = 'Chaîne de caractères';
$string['inputtypetextarea'] = 'Zone de texte';
$string['inputtypeunits'] = 'Unités';
$string['inputtypevarmatrix'] = 'Matrice de taille variable';
$string['inputvalidatorerr'] = 'Le nom d\'une fonction de validation doit être un identifiant Maxima valide, composé de lettres a-zA-Z, éventuellement suivies de chiffres.';
$string['inputvalidatorerrcouldnot'] = 'Le validateur optionnel a généré des erreurs internes à Maxima.';
$string['inputvalidatorerrors'] = 'Le validateur facultatif a renvoyé des erreurs {$a->err}.';
$string['inputwillberemoved'] = 'Cette entrée n’est plus référencée dans le texte de la question. Si vous enregistrez la question maintenant, les données associées à cette entrée seront perdues. Veuillez confirmer que vous voulez bien ceci. Sinon, veuillez modifier le texte de la question et y remettre les paramètres fictifs « [[input:{$a}]] » et « [[validation:{$a}]] ».';
$string['insertspaces'] = 'Insérer des étoiles uniquement pour les espaces';
$string['insertspacesfunctions'] = 'Insérer des astérisques pour les multiplications implicites, des espaces, et ne pas utiliser de fonctions définies par l\'utilisateur';
$string['insertspacesfunctionssingle'] = 'Insérer des astérisques pour les multiplications implicites, des espaces, pas de fonctions utilisateur et en supposant que les variables ne contiennent qu\'un seul caractère';
$string['insertstars'] = 'Insérer des étoiles';
$string['insertstars_help'] = 'Cette option fournit différentes possibilités d’insérer des étoiles là où une multiplication est implicite. Veuillez consulter la documentation détaillée.';
$string['insertstars_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Insert_Stars';
$string['insertstarsassumesinglechar'] = 'Insérer des étoiles en supposant des noms de variables d’un seul caractère';
$string['insertstarsno'] = 'Ne pas insérer d’étoile';
$string['insertstarsspaces'] = 'Insérer des étoiles pour les multiplications implicites et les espaces';
$string['insertstarsspacessinglechar'] = 'Insérer des étoiles en supposant des noms de variables d’un seul caractère, les multiplications implicites et les espaces';
$string['insertstarsyes'] = 'Insérer des étoiles uniquement pour les multiplications implicites';
$string['invalid_json'] = 'JSON non valide transmis';
$string['inversetrig'] = 'Fonctions trigonométriques réciproques';
$string['inversetrig_help'] = 'Définit comment les fonctions trigonométriques réciproques sont affichées dans la sortie CAS.';
$string['inversetrig_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_options.md#inverse_trig';
$string['invertvariantselection'] = 'Inverser la sélection des variantes';
$string['irred_Q_commonint'] = 'Vous devez simplifier un facteur commun.';
$string['irred_Q_optional_fac'] = 'Vous pouvez continuer le travail, car {$a->m0} peut encore être factorisé. Cependant, cela n’est pas nécessaire.';
$string['isbroken'] = 'Enregistrer comme « endommagé »';
$string['isbroken_help'] = 'Cette option vous permet d\'enregistrer votre travail même si une question est incomplète ou comporte des erreurs. Vous ou un collègue pourrez alors y revenir plus tard pour la compléter. Vous devrez toutefois remplir les champs obligatoires et cocher les cases pour confirmer la suppression éventuelle des données saisies ou des PRT avant que la question ne soit enregistrée.';
$string['isbrokenlabel'] = 'Marquez la question comme « défectueuse ». Cela permettra de l\'enregistrer même si elle contient de nombreuses erreurs, mais elle ne sera pas affichée aux étudiants.';
$string['jsondata'] = 'Données JSON';
$string['languageproblemsexist'] = 'Votre question comporte de potentiels problèmes de langage.';
$string['languageproblemsextra'] = 'Le champ {$a->field} contient les langues suivantes, qui ne figurent pas dans le texte de la question : {$a->langs}.';
$string['languageproblemsmissing'] = 'La balise de langue {$a->lang} est manquante dans ce qui suit : {$a->missing}.';
$string['latest'] = 'Recharger la version la plus récente';
$string['logicsymbol'] = 'Symboles logiques';
$string['logicsymbol_help'] = 'Détermine la manière dont les symboles logiques doivent s\'afficher dans les résultats du CAS.';
$string['logicsymbol_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_options.md#logicsymbol';
$string['logicsymbollang'] = 'Langue';
$string['logicsymbolsymbol'] = 'Symbolique';
$string['markedasbroken'] = 'La question a été signalée comme défectueuse et ne sera pas accessible aux étudiants.';
$string['matrixparens'] = 'Forme par défaut des parenthèses des matrices';
$string['matrixparens_help'] = 'Définit la forme par défaut des parenthèses affichées dans les sorties de CAS.';
$string['matrixparens_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Matrix.md#matrixparens';
$string['mbstringrequired'] = 'L\'installation de la bibliothèque MBSTRING est indispensable pour STACK.';
$string['missingnextnode'] = 'La structure du PRT est mal formé. Le nœud suivant de type {$a->type} pour le nœud {$a->node} du PRT {$a->prt} est invalide. Il a été configuré pour s\'arrêter.';
$string['moodleerrors'] = 'Vous rencontrez des erreurs liées à la configuration de base des questions dans Moodle.';
$string['multcross'] = 'Croix';
$string['multdot'] = 'Point';
$string['multipleinputs'] = 'Plusieurs champs de saisie portent le même nom : {$a}.';
$string['multiplenodes'] = 'Plusieurs nœuds portent le nom {$a->node} dans le PRT {$a->prt}.';
$string['multipleprts'] = 'Plusieurs PRTS portent le même nom : {$a}.';
$string['multiplicationsign'] = 'Signe de multiplication';
$string['multiplicationsign_help'] = 'Définit comme les signes de multiplication sont affichés.';
$string['multiplicationsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_options.md#multiplication';
$string['multonlynumbers'] = 'Uniquement des nombres';
$string['multspace'] = 'Espace';
$string['mustconfirm'] = 'Vous avez des modifications à valider.';
$string['mustverify'] = 'Demander à l’étudiant de vérifier';
$string['mustverify_help'] = 'Ce champ spécifie si la saisie de l’étudiant lui est présentée en retour, dans le cadre d’un processus en deux étapes avant qu’elle soit évaluée. Les erreurs de syntaxe sont toujours rapportées.';
$string['mustverify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Student_must_verify';
$string['mustverifyshowvalidation'] = 'Vous ne pouvez pas choisir d\'imposer une validation en deux étapes sans afficher les résultats de la validation à l\'étudiant après la première étape. Cela le place dans une situation impossible.';
$string['namealreadyused'] = 'Vous avez déjà utilisé ce nom.';
$string['newnameforx'] = 'Nouveau nom pour « {$a} »';
$string['next'] = 'Suivant';
$string['nodeaddnum'] = 'Nombre à ajouter (max. 9)';
$string['nodehelp'] = 'Nœud de l’arbre de réponse';
$string['nodehelp_help'] = '<h3> Test de réponse</h3>
Un test de réponse sert à comparer deux expressions afin de déterminer si elles satisfont à certains critères mathématiques.

<h3> SAns (student answer)</h3>
Il s\'agit du premier argument de la fonction de test de réponse. Dans les tests asymétriques, il est considéré comme la « réponse de l\'étudiant », bien qu\'il puisse s\'agir de n\'importe quelle expression CAS valide et qu\'il puisse dépendre des variables de la question ou des variables de retour d\'information.

<h3> TAns (Teacher answer)</h3>
Il s’agit du deuxième argument de la fonction de test de réponse. Dans les tests asymétriques, il est considéré comme la « réponse de l’enseignant », bien qu’il puisse s’agir de n’importe quelle expression CAS valide et qu’il puisse dépendre des variables de la question ou des variables de retour d’information.

<h3>Options de test</h3>
Ce champ permet aux tests de réponse d’accepter une option, par exemple une variable ou une précision numérique.

<h3>Silencieux</h3>
Lorsqu’il est défini sur « oui », tout feedback généré automatiquement par les tests de réponse est supprimé et n’est pas affiché à l’étudiant. Les champs de retour d’information dans les branches ne sont pas affectés par cette option.';
$string['nodeloopdetected'] = 'Ce lien crée un cycle dans cette PRT.';
$string['nodenotused'] = 'Pas d’autre nœud dans le lien PRT vers ce nœud.';
$string['nodex'] = 'Nœud {$a}';
$string['nodexdelete'] = 'Supprimer le nœud {$a}';
$string['nodexfalsefeedback'] = 'Feedback d\'erreur pour le nœud {$a}';
$string['nodextruefeedback'] = 'Feedback de réussite pour le nœud {$a}';
$string['nodexwhenfalse'] = 'Nœud {$a} si faux';
$string['nodexwhentrue'] = 'Nœud {$a} si vrai';
$string['noinputs'] = 'Cette question ne comporte aucune entrée ; aucun test n\'est donc requis.';
$string['nonempty'] = 'Ceci ne doit pas être vide.';
$string['noprtsifnoinputs'] = 'Une question sans entrée ne peut pas avoir de PRTs.';
$string['noroots'] = 'La courbe de cette PRT ne possède pas de racines. Possède-t-elle des nœuds ?';
$string['nosemicolon'] = 'Ici, vous ne devez pas terminer les expressions Maxima par un point-virgule.';
$string['notanswered'] = '(Effacer ma sélection)';
$string['notavalidname'] = 'Nom non valide';
$string['notefail'] = 'Échec de la vérification de la note de la question';
$string['notepass'] = 'Vérification de la note de la question réussie';
$string['notestcasesyet'] = 'Aucun cas de test n’a encore été ajouté.';
$string['notsaved'] = '** LA QUESTION N\'A PAS ÉTÉ ENREGISTRÉE **';
$string['numericalinputdp'] = 'Vous devez indiquer exactement \\( {$a} \\) décimales.';
$string['numericalinputmaxdp'] = 'Vous devez indiquer au maximum \\( {$a} \\) décimales.';
$string['numericalinputmaxsf'] = 'Vous devez indiquer au maximum \\( {$a} \\) chiffres significatifs.';
$string['numericalinputmindp'] = 'Vous devez indiquer au moins \\( {$a} \\) décimales.';
$string['numericalinputminmaxerr'] = 'Le nombre minimum requis de décimales dépasse le nombre maximal de décimales !';
$string['numericalinputminsf'] = 'Vous devez indiquer au moins \\( {$a} \\) chiffres significatifs.';
$string['numericalinputminsfmaxdperr'] = 'Ne précisez pas à la fois le nombre de décimales et le nombre de chiffres significatifs dans la même entrée.';
$string['numericalinputmustfloat'] = 'Cette entrée attend un nombre à virgule flottante.';
$string['numericalinputmustint'] = 'Cette entrée attend un entier explicite.';
$string['numericalinputmustnumber'] = 'Cette entrée attend une valeur numérique.';
$string['numericalinputmustrational'] = 'Cette entrée doit être une fraction ou un nombre rationnel.';
$string['numericalinputoptboolerr'] = 'La valeur de l\'option <code>{$a->opt}</code> devrait être de type booléen, mais elle est en réalité <code>{$a->val}</code>.';
$string['numericalinputoptinterr'] = 'La valeur de l\'option <code>{$a->opt}</code> devrait être un nombre entier, mais elle est en réalité <code>{$a->val}</code>.';
$string['numericalinputsf'] = 'Vous devez indiquer exactement \\( {$a} \\) chiffres significatifs.';
$string['numericalinputvarsforbidden'] = 'Cette entrée doit être un nombre ; elle ne doit donc pas contenir de variables.';
$string['options'] = 'Options';
$string['options_short'] = 'Opt';
$string['overallresult'] = 'Résultat global';
$string['parsertester'] = 'Testeur d\'analyseur';
$string['parsertester_input'] = 'Entrée de test';
$string['parsertester_output'] = 'Sortie';
$string['parsertester_settings'] = 'Paramètres de l\'analyseur';
$string['parsertester_settings_insert'] = 'Logique de tentative de correction';
$string['parsertester_settings_rule'] = 'Variante d\'analyseur';
$string['parsertester_settings_separators'] = 'Séparateurs décimaux et autres';
$string['parsons_got_unrecognised_value'] = 'Entrée non valide pour une question de type Parson.';
$string['penalty'] = 'Pénalité';
$string['penalty_help'] = 'Le schéma de pénalité soustrait cette valeur du résultat de chaque PRT pour chaque tentative différente et valide qui n’est pas entièrement correcte.';
$string['penalty_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Feedback.md';
$string['penaltyerror'] = 'La pénalité doit être une valeur numérique comprise entre 0 et 1 ou une variable (dont la valeur n\'est pas vérifiée).';
$string['penaltyerror2'] = 'La pénalité doit être vide ou un nombre entre 0 et 1.';
$string['penaltyfail'] = 'Le contrôle de pénalité a échoué';
$string['penaltypass'] = 'Vérification de la pénalité validée';
$string['phpcasstring'] = 'Sortie PHP';
$string['phpsuitecolerror'] = 'Erreurs PHP';
$string['phpvalid'] = 'V1';
$string['phpvalidatemismatch'] = '[Incohérence de validation PHP]';
$string['pleaseananswerallparts'] = 'Veuillez répondre à toutes les parties de la question';
$string['pleasecheckyourinputs'] = 'Veuillez vérifier que votre saisie a été interprétée comme attendu.';
$string['pluginname'] = 'STACK';
$string['pluginname_help'] = 'STACK est un système d’évaluation pour les mathématiques.';
$string['pluginnameadding'] = 'Ajout d’une question STACK';
$string['pluginnameediting'] = 'Modification d’une question STACK';
$string['pluginnamesummary'] = 'STACK permet de créer des questions mathématiques pour les tests de Modèle. Un système de calcul formel est utilisé pour établir les propriétés mathématiques des réponses des étudiants.';
$string['privacy:metadata'] = 'Le plugin de type de question « STACK » ne stocke aucune donnée à caractère personnel.';
$string['prtcorrectfeedback'] = 'Feedback standard pour réponse correcte';
$string['prtheading'] = 'Arbre de réponse potentiel : {$a}';
$string['prtincorrectfeedback'] = 'Feedback standard pour réponse incorrecte';
$string['prtmustbesetup'] = 'Ce PRT doit être configuré avant que la question puisse être enregistrée.';
$string['prtname'] = 'Nom du PRT';
$string['prtnamelength'] = 'Les noms de PRT ne peuvent pas dépasser 18 caractères. « {$a} » est trop long.';
$string['prtnodesheading'] = 'Nœuds de l’arbre de réponse potentiel ({$a})';
$string['prtpartiallycorrectfeedback'] = 'Feedback standard pour réponse partiellement correcte';
$string['prtremovedconfirm'] = 'Je confirme que je veux supprimer de cette question cet arbre de réponse potentiel.';
$string['prtremovedconfirmbelow'] = 'L’arbre de réponse potentiel « {$a} » a été supprimé. Veuillez confirmer ceci ci-dessous.';
$string['prtruntimeerror'] = 'Le nœud {$a->node} a généré l’erreur suivante : {$a->error}';
$string['prtruntimepenalty'] = 'La pénalité n\'a pas été entièrement convertie en valeur numérique (vérifier les noms des variables).';
$string['prtruntimescore'] = 'Le score n\'a pas été entièrement converti en valeur numérique (vérifiez les noms des variables).';
$string['prts'] = 'Arbres de réponse potientiels';
$string['prtwillbecomeactivewhen'] = 'Cet arbre de réponse potentiel sera actif quand l’étudiant aura répondu : {$a}';
$string['prtwillberemoved'] = 'Cet arbre de réponses potentielles n\'est plus mentionné dans le texte de la question ni dans les feedbacks spécifiques. Si vous enregistrez la question maintenant, les données relatives à cet arbre de réponses potentielles seront perdues. Veuillez confirmer que vous souhaitez procéder ainsi. Vous pouvez également modifier le texte de la question ou les feedbacks spécifiques afin de réinsérer l\'espace réservé « [[feedback:{$a}]] ».';
$string['pslash'] = 'Protection des barres obliques dans les variables de chaîne de caractères Maxima :';
$string['qm_error'] = 'Votre réponse contient des points d\'interrogation (?), qui ne sont pas autorisés dans les réponses. Vous devez les remplacer par une valeur précise.';
$string['questionbroken'] = 'La question a été marquée comme défectueuse lors de la modification ou de l\'importation.';
$string['questionbrokenshort'] = 'Marqué comme défectueuse';
$string['questiondescription'] = 'Description de la question';
$string['questiondescription_help'] = 'La description de la question est de type CASText. L’objectif d’une description de question est d’offrir un espace propice à la discussion autour de la question. Cette description n’est pas accessible aux étudiants.';
$string['questiondetails'] = 'Données de la question';
$string['questiondoesnotuserandomisation'] = 'Cette question n’utilise pas la génération de valeurs aléatoires.';
$string['questionnotdeployedyet'] = 'Aucune variante de cette question n’a encore été déployée.';
$string['questionnote'] = 'Annotation de question';
$string['questionnote_help'] = 'L’annotation de question est en CASText. Le but d’une annotation de question est de distinguer les différentes versions aléatoires d’une question. Deux versions d’une questions sont égales si, et seulement si, leurs annotations de question sont égales. Il est très utile d’indiquer une annotation de question significative pour analyse ultérieure.';
$string['questionnote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_note.md';
$string['questionnote_missing'] = 'La note de question est vide. Veuillez ajouter une note de question pertinente (résumé).';
$string['questionnotempty'] = 'L’annotation de question ne peut pas être vide si rand() est mentionné dans les variables de la questions. Cette annotation est utilisée pour distinguer les différentes versions aléatoires d’une question.';
$string['questionpreview'] = 'Prévisualisation de question';
$string['questionrender'] = 'Affichage de la question';
$string['questionsimplify'] = 'Simplification au niveau de la question';
$string['questionsimplify_help'] = 'Définit la variable globale « simp » dans Maxima pour l\'ensemble de l\'exercice.';
$string['questionsimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Simplification.md';
$string['questiontestempty'] = 'Les questions non répondues ne sont pas autorisés !';
$string['questiontests'] = 'Tests de question';
$string['questiontestsdefault'] = '(Par défaut)';
$string['questiontestsempty'] = 'Le résultat attendu est vide, ce qui constitue une erreur de construction du cas de test. Utilisez NULL pour les PRT qui ne s\'activent pas.';
$string['questiontestsfailed'] = 'Tous les tests de la question n\'ont pas été réussis.';
$string['questiontestsfirst'] = 'On s\'attendait au premier nœud de {$a->expected}, mais on a obtenu {$a->actual}.';
$string['questiontestsfor'] = 'Tests de questions pour la graine {$a}';
$string['questiontestslast'] = 'On s\'attendait au dernier nœud de {$a->expected}, mais on a obtenu {$a->actual}.';
$string['questiontestslong'] = 'Les notes attendues sont tronquées à 1000 caractères dans la base de données. Le PRT {$a->prt} comptait {$a->len} caractères. Le cas de test n\'a pas été enregistré.';
$string['questiontestsmissing'] = 'Nœud attendu : {$a}.';
$string['questiontestsnotnull'] = 'Résultat nul attendu, mais obtenu : {$a}.';
$string['questiontestsnull'] = 'Un résultat nul inattendu a été obtenu.';
$string['questiontestspass'] = 'Tous les tests de question ont réussi.';
$string['questiontext'] = 'Texte de la question';
$string['questiontext_help'] = 'Le texte de la question est en CASText. C’est le texte présenté à l’étudiant comme question. Vous devez insérer les éléments d’entrée et les chaînes de validation dans ce champ et uniquement dans ce champ. Par exemple, on peut y insérer « [[input:ans1]] [[validation:ans1]] ».';
$string['questiontext_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#question_text';
$string['questiontextfeedbacklanguageproblems'] = 'Il existe des incohérences dans les balises de feedback d\'une langue à l\'autre.';
$string['questiontextfeedbackonlycontain'] = 'Le texte de la question, associé aux feedbacks spécifiques, ne doit contenir le jeton « {$a} » qu\'une seule fois.';
$string['questiontextlanguages'] = 'Les balises de langue présentes dans votre question sont : {$a}.';
$string['questiontextmustcontain'] = 'Le texte de la question doit contenir le token « {$a} ».';
$string['questiontextnonempty'] = 'Le texte de la question ne doit pas être vide.';
$string['questiontextonlycontain'] = 'Le texte de la question ne doit pas contenir le jeton « {$a} » qu’une seule fois.';
$string['questiontextplaceholderswhitespace'] = 'Les espaces de remplacement ne doivent pas contenir d\'espaces. Celui-ci semble en contenir : « {$a} ».';
$string['questionvalue'] = 'Valeur de la question';
$string['questionvaluepostive'] = 'La valeur de la question dont être positive ou nulle.';
$string['questionvariables'] = 'Variables de question';
$string['questionvariables_help'] = 'Ce champ vous permet de définir et de manipuler des variables CAS, par exemple de créer des versions aléatoires. Les variables sont disponibles dans toutes les autres parties de la question.';
$string['questionvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Variables.md#Question_variables';
$string['questionvariablevalues'] = 'Valeur des variables de question';
$string['questionwarnings'] = 'Avertissements relatifs aux questions';
$string['questionwarnings_help'] = 'Les avertissements liés aux questions sont des points que vous pourriez vouloir corriger, mais qui ne constituent pas des erreurs à proprement parler.';
$string['quiet'] = 'Silencieux';
$string['quiet_help'] = 'Si ce réglage est activé, les feedbacks générés automatiquement par les tests de réponse sont supprimés et donc pas affichés pour les étudiants. Les champs de feedback des branches ne sont pas concernés par ce réglage.';
$string['quiet_icon_false'] = '<span title="Mode silencieux désactivé" alt="Icône de microphone (mode silencieux désactivé)" style="font-size: 1,25em; color: blue;"><i class="fa fa-commenting-o"></i></span>';
$string['quiet_icon_true'] = '<span title="Mode silencieux activé" alt="Icône de microphone en mode silencieux" style="font-size: 1,25em; color:red;"><i class="fa fa-microphone-slash" aria-hidden="true"></i></span>';
$string['rawdata'] = 'Données brutes';
$string['reloadsavedXML'] = '<i class="fa fa-rotate-left"></i> Recharger la version enregistrée de la question';
$string['renamequestionparts'] = 'Renommer les parties de la question';
$string['replacedollarscount'] = 'Cette catégorie comprend {$a} questions STACK.';
$string['replacedollarsin'] = 'Correction des délimiteurs mathématiques dans le champ {$a}';
$string['replacedollarsindex'] = 'Contextes avec des questions STACK';
$string['replacedollarsindexintro'] = 'En cliquant sur l\'un de ces liens, vous accéderez à une page où vous pourrez passer en revue les questions comportant des délimiteurs mathématiques de l\'ancien type et les corriger automatiquement. Si vous avez trop de questions (des milliers) dans un même contexte, le volume de données générées risque de saturer votre navigateur web ; dans ce cas, ajoutez le paramètre preview=0 à l\'URL et réessayez.';
$string['replacedollarsindextitle'] = 'Remplacer les dollars dans les textes de la qeustion';
$string['replacedollarsnoproblems'] = 'Aucun problème de délimiteur trouvé.';
$string['replacedollarstitle'] = 'Remplacer les $ dans les textes des question de {$a}';
$string['requirelowestterms'] = 'Imposer des fractions réduites';
$string['requirelowestterms_help'] = 'Si cette option est activée, les coefficients et autres nombres rationnels dans une expression doivent être donnés en forme réduite. Dans le cas contraire, la réponse sera rejetée comme non valable.';
$string['requirelowestterms_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Require_lowest_terms';
$string['runquestiontests'] = 'Tableau de bord des questions STACK';
$string['runquestiontests_alert'] = 'Il manque des tests ou des variantes dans la question.';
$string['runquestiontests_auto'] = 'Ajout automatique d\'un cas de test en partant du principe que la réponse de l\'enseignant obtient la note maximale. Veuillez vérifier attentivement la note de correction.';
$string['runquestiontests_autoprompt'] = 'Ajoutez un cas de test en partant du principe que la réponse de l\'enseignant obtient la note maximale.';
$string['runquestiontests_example'] = 'exemple';
$string['runquestiontests_explanation'] = 'Si vous ajoutez le test, son résultat ressemblera à ceci :';
$string['runquestiontests_help'] = 'Le tableau de bord exécute des tests de questions qui vérifient, par des tests unitaires, que le comportement des questions correspond bien aux attentes exprimées par l\'enseignant ; de plus, les variantes déployées garantissent que les versions aléatoires présentées à un étudiant ont été préalablement testées à l\'aide de ces tests de questions. Ces outils ont pour but de vous aider à créer et à tester des questions fiables et doivent être utilisés chaque fois qu\'une question est destinée à être utilisée par des étudiants. Le tableau de bord propose également de nombreuses autres fonctions spécifiques à STACK.';
$string['runquestiontests_icon'] = '<i class="fa fa-wrench"></i>';
$string['runtimeerror'] = 'Cette question a provoqué une erreur interne inattendue.';
$string['runtimefielderr'] = 'Le champ « {$a->field} » a généré l\'erreur suivante : {$a->err}';
$string['sans'] = 'SAns';
$string['sans_help'] = 'Il s\'agit du premier argument de la fonction de vérification des réponses. Dans les tests asymétriques, il est considéré comme la « réponse de l\'étudiant », bien qu\'il puisse s\'agir de n\'importe quelle expression CAS valide et qu\'il puisse dépendre des variables de la question ou des variables de feedback.';
$string['sans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['sansrequired'] = 'SAns ne doit pas être vide.';
$string['savechat'] = 'Retour à la question';
$string['savechatexp'] = 'Vous serez alors redirigé vers le formulaire de modification de la question. De là, vous pourrez enregistrer vos modifications en tant que nouvelle version de la question.';
$string['savechatmsg'] = 'Les variables de la question et les feedbacks généraux sont enregistrés dans la question.';
$string['savechatnew'] = 'Envoyer vers le formulaire de modification';
$string['sbasen_validate_base_too_big'] = 'Le système de base N ne prend pas actuellement en charge la base {$a->base} ; seules les bases 2 à 36 sont prises en charge.';
$string['sbasen_validate_invalid_digits'] = 'Certains chiffres du nombre en base N {$a->num} ne sont pas valides pour la base ({$a->base}) utilisée.';
$string['sbasen_validate_not_basen'] = 'Un nombre brut en base N était attendu.';
$string['scientificnotation'] = 'Notation scientifique';
$string['scientificnotation_10'] = 'n * 10^m';
$string['scientificnotation_E'] = 'n E m';
$string['scientificnotation_help'] = 'Choisissez le format de la notation scientifique.';
$string['scientificnotation_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_options.md#scientificnotation';
$string['score'] = 'Score';
$string['scoreerror'] = 'La note doit être une valeur numérique comprise entre 0 et 1, ou une variable ( qui elle n\'est pas vérifiée).';
$string['scorefail'] = 'Échec de la vérification du score';
$string['scoremode'] = 'Mod';
$string['scorepass'] = 'Vérification du score réussie';
$string['seed'] = 'Graine';
$string['seednumber'] = 'Graine numéro';
$string['seedx'] = 'Graine {$a}';
$string['seekhelp'] = 'Demandez à votre professeur des précisions à ce sujet.';
$string['seethisquestioninthequestionbank'] = '<i class="fa fa-list-alt"></i> Afficher dans la banque de questions';
$string['seetodolist'] = '<i class="fa fa-exclamation-triangle"></i> Rechercher <tt>[[todo]]</tt> des blocs';
$string['seetodolist_desc'] = 'Cette page a pour but de recenser toutes les questions contenant des blocs <tt>[[todo]]</tt> et de les regrouper par tag. Les questions signalées comme étant défectueuses seront également identifiées et affichées.';
$string['seetodolist_help'] = 'En cliquant sur le titre de la question, vous accédez au tableau de bord. Vous pouvez également prévisualiser la question.';
$string['selectquiz'] = 'Sélectionnez un test pour analyser les résultats';
$string['selectvariant'] = 'Sélectionner une variante';
$string['sendgeneralfeedback'] = '<i class="fa fa-file-text"></i> Envoyer les feedbacks généraux au CAS';
$string['settingajaxvalidation'] = 'Validation instantanée';
$string['settingajaxvalidation_desc'] = 'Si ce réglage est activé, la saisie des étudiants est validée dès qu’ils font une pause dans leur saisie. Cela donne une meilleure expérience utilisateur, mais va charger le serveur.';
$string['settingcasdebugging'] = 'Débogage CAS';
$string['settingcasdebugging_desc'] = 'Détermine s’il faut enregistrer les infos de débogage sur la connexion CAS.';
$string['settingcasmaximaversion'] = 'Version de Maxima';
$string['settingcasmaximaversion_desc'] = 'La version de Maxima utilisée.';
$string['settingcaspreparse'] = 'Analyser au préalable l\'ensemble du code avant de l\'envoyer à Maxima.';
$string['settingcaspreparse_desc'] = 'Nous recommandons que tout code figurant dans les variables de questions, etc., même s\'il provient d\'enseignants de confiance, fasse l\'objet d\'une analyse préalable visant à détecter d\'éventuels motifs malveillants.  Ceci est particulièrement important lors de l\'acceptation de questions importées provenant de sources connues.  Cependant, il est possible que cette analyse préalable atteigne son délai d\'expiration ; il serait alors nécessaire de désactiver (temporairement) cette vérification pour sortir d\'une impasse potentielle.  Ce code est encore en phase de test et de développement, et ce paramètre sera supprimé dans les prochaines versions afin de garantir que cette analyse préalable soit toujours appliquée.';
$string['settingcaspreparse_false'] = 'Ne pas effectuer de pré-analyse (non recommandé)';
$string['settingcaspreparse_true'] = 'Toujours se préparer';
$string['settingcasresultscache'] = 'Mise en cache des résultats CAS';
$string['settingcasresultscache_db'] = 'Cache dans la base de données';
$string['settingcasresultscache_desc'] = 'Ce réglage détermine si les appels au CAS sont mis en cache. Ce réglage doit être activé, à moins que vous ne faissiez du développement modifiant le code de Maxima. L’état actuel du cache est affiché sur la page de diagnostic. Si vous modifiez vos réglages, par exemple la commande gnuplot, vous aurez à vider le cache avant de voir les effets de ces changements.';
$string['settingcasresultscache_none'] = 'Ne pas enregistrer en cache';
$string['settingcastimeout'] = 'Délai de connexion CAS';
$string['settingcastimeout_desc'] = 'Le délai de connexion à utiliser lors de la connexion à Maxima.';
$string['settingdefaultinputoptions'] = 'Options d’entrée par défaut';
$string['settingdefaultinputoptions_desc'] = 'Options utilisées lors de la création d’une question ou lors de l’ajout d’une entrée dans une question existante.';
$string['settingdefaultquestionoptions'] = 'Options de question par défaut';
$string['settingdefaultquestionoptions_desc'] = 'Options utilisées lors de la création d’une question.';
$string['settingmathsdisplay'] = 'Filtre d’affichage des maths';
$string['settingmathsdisplay_desc'] = 'La méthode utilisée pour afficher les maths. Si vous choisissez MathJax, vous devez suivre les instructions de configuration sur la page de Diagnostic. Si vous choisissez un filtre, assurez-vous que ce filtre est activé dans la page de gestion des filtres.';
$string['settingmathsdisplay_mathjax'] = 'MathJax';
$string['settingmathsdisplay_maths'] = 'Ancien filtre de maths OU';
$string['settingmathsdisplay_oumaths'] = 'Nouveau filtre de maths OU';
$string['settingmathsdisplay_tex'] = 'Filtre Tex de Moodle';
$string['settingmaximalibraries'] = 'Charger les bibliothèques optionnelles de Maxima :';
$string['settingmaximalibraries_desc'] = 'Il s\'agit d\'une liste, séparée par des virgules, des noms de bibliothèques Maxima qui seront automatiquement chargées dans Maxima. Seuls les noms de bibliothèques pris en charge peuvent être utilisés : « stats, distrib, descriptive, simplex ». Si vous modifiez la liste des bibliothèques, vous devez recompiler l\'image optimisée de Maxima.';
$string['settingmaximalibraries_error'] = 'Le paquetage suivant n’est pas supporté : {$a}';
$string['settingmaximalibraries_failed'] = 'Certains paquetages Maxima demandés n’ont pas pu être chargés. Veuillez vous référer aux instructions d’installation pour des informations au sujet de cette erreur.';
$string['settingparsercacheinputlength'] = 'Mettre en cache les expressions analysées dont la longueur est supérieure à';
$string['settingparsercacheinputlength_desc'] = 'L\'analyseur d\'expressions devient assez lent lorsqu\'il traite des expressions longues (par exemple, des variables de question complexes). C\'est pourquoi nous mettons en cache le résultat de l\'analyse des expressions dépassant cette limite. Idéalement, ce paramètre devrait être réglé sur une valeur telle que la recherche dans le cache prenne à peu près autant de temps que l\'analyse elle-même. 50 caractères constituent une estimation raisonnable à cet égard. Si la valeur est définie sur 0, le cache est désactivé.';
$string['settingplatformmaximacommand'] = 'Commande Maxima';
$string['settingplatformmaximacommand_desc'] = 'Si ce champ est vide, STACK tentera de deviner l\'emplacement de Maxima. En cas d\'échec, il convient d\'indiquer ici le chemin d\'accès complet de l\'exécutable « maxima » ou « maxima-optimised ». À utiliser uniquement à des fins de développement et de débogage. Ne pas utiliser sur un système de production : utilisez plutôt l\'option « optimised », ou mieux encore, l\'option « Maxima Pool ».';
$string['settingplatformmaximacommandopt'] = 'Commande Maxima optimisée';
$string['settingplatformmaximacommandopt_desc'] = 'Il faut indiquer ici le chemin d\'accès complet de l\'exécutable « maxima-optimised ». Pensez à utiliser la commande « timeout » sur les systèmes sous Linux. Par exemple : timeout --kill-after=10s 10s maxima';
$string['settingplatformmaximacommandserver'] = 'URL de la liste Maxima';
$string['settingplatformmaximacommandserver_desc'] = 'Pour le type de plateforme « Serveur », ce paramètre doit être défini sur l\'URL du servlet Maxima Pool.';
$string['settingplatformplotcommand'] = 'Commande de traçage';
$string['settingplatformplotcommand_desc'] = 'En règle générale, ce champ peut rester vide, mais si le tracé du graphique ne fonctionne pas, vous devrez peut-être indiquer ici le chemin d\'accès complet à la commande gnuplot.';
$string['settingplatformtype'] = 'Type de plateforme';
$string['settingplatformtype_desc'] = 'STACK doit savoir sur quel type de système d\'exploitation il s\'exécute. L\'option « Server » offre de meilleures performances, mais nécessite la configuration d\'un serveur supplémentaire. L\'option « Linux (optimisé) » est décrite dans la page « Optimisation de Maxima » de la documentation.';
$string['settingplatformtypelinux'] = 'Linux';
$string['settingplatformtypelinuxoptimised'] = 'Linux (version optimisée)';
$string['settingplatformtypeserver'] = 'Serveur';
$string['settingplatformtypeserverproxy'] = 'Serveur (via un proxy)';
$string['settingreplacedollars'] = 'Remplacer <code>$</code> et <code>$$</code>';
$string['settingreplacedollars_desc'] = 'Remplacez les délimiteurs <code>$…$</code> et <code>$$…$$</code> dans le texte de la question, ainsi que <code>\\\\[…\\\\]</code> et <code>\\\\(…\\\\)</code>. Une meilleure solution consiste à utiliser le script « Fix maths delimiters » mentionné ci-dessous.';
$string['settingserveruserpass'] = 'Données d’authentification du serveur';
$string['settingserveruserpass_desc'] = 'Si vous utilisez une plateforme de type « Serveur » et que vous avez configuré votre serveur de pool Maxima avec une authentification HTTP, vous pouvez saisir le nom d\'utilisateur et le mot de passe ici. Cette méthode est légèrement plus sûre que de les inclure dans l\'URL. Le format requis est : nom_utilisateur:mot_de_passe.';
$string['settingsmathsdisplayheading'] = 'Options d’affichage des maths';
$string['settingsmaximasettings'] = 'Connexion à Maxima';
$string['settingusefullinks'] = 'Liens utiles';
$string['showingundeployedvariant'] = 'Affichage de la variante non déployée : {$a}';
$string['showvalidation'] = 'Afficher la validation';
$string['showvalidation_help'] = 'Affiche tout message de validation concernant ce champ de saisie, y compris la reproduction de son expression sous forme de notation bidimensionnelle classique. Les erreurs de syntaxe sont toujours signalées.';
$string['showvalidation_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Show_validation';
$string['showvalidationcompact'] = 'Oui, compact';
$string['showvalidationno'] = 'Non';
$string['showvalidationyes'] = 'Oui, avec la liste des variables';
$string['showvalidationyesnovars'] = 'Oui, sans la liste des variables';
$string['singlechargotmorethanone'] = 'Vous ne pouvez saisir ici qu’un caractère unique.';
$string['specificfeedback'] = 'Feedback spécifique';
$string['specificfeedback_help'] = 'Par défaut, le feedback pour chaque arbre de réponse potentiel sera affiché dans ce bloc. Il peut être déplacé dans le texte de la question, et dans ce cas Moodle aura moins de contrôle sur son affichage en fonction des divers comportements. Veuillez remarquer que ce bloc n’est pas en CASText.';
$string['splitsummary'] = 'Résumé de la division';
$string['sqrtsign'] = 'Notation symbolique pour la racine carrée';
$string['sqrtsign_help'] = 'Définit comment les racines sont affichées.';
$string['sqrtsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_options.md#surd';
$string['stack:usediagnostictools'] = 'Utiliser les outils STACK';
$string['stackBlock_ascii_answer_format'] = 'L\'attribut de réponse du bloc ASCII doit être au format \\"[ans1,extracteur,filtre],[ans2,extracteur,filtre],...\\".';
$string['stackBlock_ascii_height'] = 'La hauteur de l\'affichage du bloc ASCII doit utiliser une unité de longueur CSS connue.';
$string['stackBlock_ascii_height_num'] = 'La partie numérique de la hauteur de l\'affichage du bloc ASCII doit être un nombre brut et ne doit contenir aucun caractère supplémentaire.';
$string['stackBlock_ascii_length_num'] = 'La valeur numérique de la longueur doit être un entier positif et ne doit contenir aucun caractère supplémentaire ni aucun autre type numérique.';
$string['stackBlock_ascii_overdefined_dimension'] = 'Lors de la définition du rapport hauteur/largeur pour l\'affichage en blocs ASCII, il convient de ne définir que la largeur ou la hauteur, et non les deux.';
$string['stackBlock_ascii_param'] = 'Les paramètres valides sont : {$a->param}.';
$string['stackBlock_ascii_underdefined_dimension'] = 'Lors de la définition du rapport hauteur/largeur pour l\'affichage en blocs ASCII, il est nécessaire de définir soit la largeur, soit la hauteur des listes.';
$string['stackBlock_ascii_unknown_param'] = 'Paramètre inconnu « {$a} » pour le bloc ASCII.';
$string['stackBlock_ascii_width'] = 'La largeur de la zone d\'affichage du bloc ASCII doit utiliser une unité de longueur CSS connue.';
$string['stackBlock_ascii_width_num'] = 'La partie numérique de la largeur de l\'affichage du bloc ASCII doit être un nombre brut et ne doit contenir aucun caractère supplémentaire.';
$string['stackBlock_elif_after_else'] = '« elif » après un « else » dans un bloc « if ».';
$string['stackBlock_elif_out_of_an_if'] = '« elif » ne peut pas être présent en dehors d’un bloc « if ».';
$string['stackBlock_else_out_of_an_if'] = '« else » ne peut pas être présent en dehors d’un bloc « if ».';
$string['stackBlock_escapeNeedsValue'] = 'L\'élément « escape-block » doit comporter un attribut « value ».';
$string['stackBlock_extractor_param'] = 'Les paramètres valides sont : {$a->param}.';
$string['stackBlock_extractor_targetinput_required'] = 'Vous devez définir la cible vers laquelle le bloc extracteur doit envoyer la réponse.';
$string['stackBlock_extractor_type_required'] = 'Vous devez définir le type d\'extracteur que vous souhaitez utiliser.';
$string['stackBlock_extractor_unknown'] = 'Type inconnu « {$a->type} » pour le bloc extracteur. Les types valides sont : « {$a->extractors} »';
$string['stackBlock_extractor_unknown_param'] = 'Paramètre inconnu « {$a} » pour le bloc d\'extraction.';
$string['stackBlock_filter_trans_unknown'] = 'Transformation inconnue « {$a->transforms} » pour le bloc de filtre. Les transformations valides sont : « {$a->valid} »';
$string['stackBlock_filter_type_required'] = 'Vous devez définir le type de filtre que vous souhaitez utiliser.';
$string['stackBlock_filter_unknown'] = 'Type inconnu « {$a->type} » pour le bloc de filtres. Les types valides sont : « {$a->filters} »';
$string['stackBlock_geogebra_heading'] = 'Ressources GeoGebra';
$string['stackBlock_geogebra_height'] = 'La hauteur d\'un module GeoGebra doit être exprimée dans une unité de longueur CSS connue.';
$string['stackBlock_geogebra_height_num'] = 'La partie numérique de la hauteur d\'un module GeoGebra doit être un nombre brut et ne doit contenir aucun caractère supplémentaire.';
$string['stackBlock_geogebra_link'] = 'Lien vers le module GeoGebra mentionné';
$string['stackBlock_geogebra_link_help'] = 'Vous souhaitez modifier ce contenu ? S\'il s\'agit de votre propre contenu GeoGebra sur geogebra.org, vous pouvez le modifier. Si ce n\'est pas votre contenu GeoGebra, vous devez d\'abord le copier depuis geogebra.org. Vous devrez ensuite le publier et modifier la valeur « material_id » ci-dessous dans le texte de la question.';
$string['stackBlock_geogebra_overdefined_dimension'] = 'Lors de la définition du format d\'image pour L\' Applet GeoGebra, il faut définir soit la largeur, soit la hauteur, mais pas les deux.';
$string['stackBlock_geogebra_param'] = 'Dans ce contexte, le bloc Geogebra ne prend en charge que ces paramètres : {$a->param}.';
$string['stackBlock_geogebra_ref'] = 'Le bloc Geogebra ne prend en charge que les références aux entrées présentes dans la même section CASText ; « {$a->var} » n\'existe pas ici.';
$string['stackBlock_geogebra_settingdefaultoptions'] = 'Options de GeoGebra dans STACK';
$string['stackBlock_geogebra_settingdefaultoptions_desc'] = 'La documentation relative à l\'utilisation de GeoGebra avec STACK se trouve dans le répertoire Specialist_tools/GeoGebra/';
$string['stackBlock_geogebra_underdefined_dimension'] = 'Lorsqu\'on définit le format d\'image de la fenêtre GeoGebra, il faut indiquer soit la largeur, soit la hauteur du graphique.';
$string['stackBlock_geogebra_width'] = 'La largeur d\'un module GeoGebra doit être exprimée en une unité de longueur CSS connue.';
$string['stackBlock_geogebra_width_num'] = 'La partie numérique de la largeur d\'un module GeoGebra doit être un nombre brut et ne doit contenir aucun caractère supplémentaire.';
$string['stackBlock_geogebrabaseurl'] = 'Lien vers l\'hébergement GeoGebra (facultatif)';
$string['stackBlock_geogebrabaseurl_help'] = 'Vous pouvez ajouter ici un lien personnalisé si vous hébergez des scripts GeoGebra sur votre propre serveur. Si vous souhaitez simplement utiliser une version spécifique de GeoGebra, utilisez : https://www.geogebra.org/apps/5.0.498.0/web3d (par exemple, pour la version 5.0.498.0)';
$string['stackBlock_ifNeedsCondition'] = 'Le bloc « if » nécessite un attribut de test.';
$string['stackBlock_incorrect_available_header_type'] = 'L\'en-tête de la liste des éléments disponibles doit être transmis sous forme de chaîne de caractères ou de liste de longueur un.';
$string['stackBlock_incorrect_header_length'] = 'La liste des en-têtes doit avoir la même longueur que le nombre de colonnes transmis à l\'en-tête du bloc.';
$string['stackBlock_incorrect_header_type'] = 'Les en-têtes doivent être un tableau contenant des chaînes de caractères.';
$string['stackBlock_incorrect_index_length'] = 'La longueur de l\'index doit être supérieure d\'une unité au nombre de lignes transmises à l\'en-tête de bloc. Un élément situé dans le coin supérieur gauche doit toujours figurer dans l\'index.';
$string['stackBlock_incorrect_index_type'] = '« Index » doit être un tableau contenant des chaînes de caractères.';
$string['stackBlock_jsxgraph_height'] = 'La hauteur d\'un JSXGraph doit être exprimée en une unité de longueur CSS connue.';
$string['stackBlock_jsxgraph_height_num'] = 'La partie numérique de la hauteur d\'un JSXGraph doit être un nombre brut et ne doit contenir aucun caractère supplémentaire.';
$string['stackBlock_jsxgraph_overdefined_dimension'] = 'Lorsqu\'on définit le rapport d\'aspect pour JSXGraph, il faut se limiter à définir soit la largeur, soit la hauteur, mais pas les deux.';
$string['stackBlock_jsxgraph_param'] = 'Dans ce contexte, le bloc jsxgraph ne prend en charge que ces paramètres : {$a->param}.';
$string['stackBlock_jsxgraph_ref'] = 'Le bloc jsxgraph ne prend en charge que les références aux entrées présentes dans la même section CASText ; « {$a->var} » n\'existe pas ici.';
$string['stackBlock_jsxgraph_underdefined_dimension'] = 'Lorsqu\'on définit le format d\'image pour JSXGraph, il faut préciser soit la largeur, soit la hauteur du graphique.';
$string['stackBlock_jsxgraph_unknown_style'] = 'Style JSXGraph inconnu : <code>{$a->style}</code>.';
$string['stackBlock_jsxgraph_width'] = 'La largeur d\'un objet JSXGraph doit utiliser une unité de longueur CSS connue.';
$string['stackBlock_jsxgraph_width_num'] = 'La partie numérique de la largeur d\'un JSXGraph doit être un nombre brut et ne doit contenir aucun caractère supplémentaire.';
$string['stackBlock_missmatch'] = 'n’a pas de correspondance.';
$string['stackBlock_multiple_else'] = 'Plusieurs branches « else » dans un bloc « if ».';
$string['stackBlock_overwritten_sortable_option'] = 'Options de tri non modifiables détectées ; les éléments suivants sont ignorés :';
$string['stackBlock_parsons_available_header'] = 'Faites glisser à partir d\'ici :';
$string['stackBlock_parsons_contents'] = 'Le contenu d\'un bloc Parson doit être soit un JSON de la forme {#stackjson_stringify(steps)#}, où « steps » est le tableau bidimensionnel Maxima contenant des paires clé-valeur d\'éléments, soit de la forme {“steps” : {#stackjson_stringify(steps)#}, “options” : {JSON contenant les options de tri}, “header” : [liste d’en-têtes], « available_header » : « chaîne contenant l’en-tête de la liste des éléments disponibles », « index » : [liste contenant l’index]}, où les clés « options », « header », « available_header » et « index » sont facultatives. Sinon, le contenu du bloc Parsons peut contenir des équivalents JSON bruts. Si vous utilisez du JSON brut à l’intérieur du bloc Parsons, les clés numériques ne sont pas prises en charge en raison de problèmes de réordonnancement ; veuillez utiliser des balises descriptives. Notez que toutes les étapes doivent être des chaînes de caractères. Voir https://docs.stack-assessment.org/en/Authoring/Parsons/ pour plus de détails.';
$string['stackBlock_parsons_height'] = 'La hauteur d\'un bloc « Parson » doit être exprimée en une unité de longueur CSS connue.';
$string['stackBlock_parsons_height_num'] = 'La partie numérique de la hauteur d\'un bloc Parson doit être un nombre brut et ne doit contenir aucun caractère supplémentaire.';
$string['stackBlock_parsons_invalid_columns_value'] = 'La valeur de colonnes dans l\'en-tête du bloc Parson doit être une chaîne de caractères contenant un entier positif.';
$string['stackBlock_parsons_invalid_item-height_value'] = 'La valeur de hauteur d’élément (item-height) dans l’en-tête du bloc Parson doit être une chaîne de caractères contenant un nombre entier positif.';
$string['stackBlock_parsons_invalid_item-width_value'] = 'La valeur de largeur d\'élément dans l\'en-tête du bloc Parson doit être une chaîne de caractères contenant un entier positif.';
$string['stackBlock_parsons_invalid_rows_value'] = 'Le nombre de lignes (rows) dans l’en-tête du bloc Parson doit être une chaîne de caractères contenant un entier positif.';
$string['stackBlock_parsons_length_num'] = 'La valeur numérique de la longueur doit être un nombre entier positif et ne doit contenir aucun caractère supplémentaire ni aucun type numérique.';
$string['stackBlock_parsons_overdefined_dimension'] = 'Lorsqu\'on définit le rapport d\'aspect d\'un bloc de Parson, il faut se limiter à définir soit la largeur, soit la hauteur, mais pas les deux.';
$string['stackBlock_parsons_param'] = 'Le bloc {$a->block} ne prend en charge que les paramètres suivants dans ce contexte : \'{$a->param}\'.';
$string['stackBlock_parsons_ref'] = 'Le bloc de Parson ne prend en charge que les références aux entrées présentes dans la même section CASText ; « {$a->var} » n’existe pas ici.';
$string['stackBlock_parsons_underdefined_dimension'] = 'Pour définir le rapport de largeur/hauteur d\'un bloc de Parson, il faut préciser soit la largeur, soit la hauteur des listes.';
$string['stackBlock_parsons_underdefined_grid'] = 'Lorsqu\'on définit les « lignes » d\'un bloc de Parson, il faut également définir les « colonnes ».';
$string['stackBlock_parsons_unknown_mathjax_version'] = 'Le bloc Parson ne prend en charge que les versions MathJax {$a->mjversion} ; veuillez vérifier la version de MathJax dans les paramètres d\'administration de votre site.';
$string['stackBlock_parsons_unknown_named_version'] = 'Le bloc de Parson ne prend en charge que les versions nommées : {$a->version}.';
$string['stackBlock_parsons_unknown_style'] = 'Style de bloc Parson inconnu : <code>{$a->style}</code>.';
$string['stackBlock_parsons_unknown_transpose_value'] = 'La valeur de « Transpose » doit être soit « true », soit « false ».';
$string['stackBlock_parsons_used_header'] = 'Élaborez votre solution ici :';
$string['stackBlock_parsons_width'] = 'La largeur d\'un bloc de Parson doit être exprimée en une unité de longueur CSS connue.';
$string['stackBlock_parsons_width_num'] = 'La partie numérique de la largeur d\'un bloc Parson doit être un nombre brut et ne doit contenir aucun caractère supplémentaire.';
$string['stackBlock_proof_incorrect_header_length'] = 'Les en-têtes doivent être un tableau contenant un seul en-tête ; utilisez « available_header » pour mettre à jour l\'en-tête de la liste des éléments disponibles.';
$string['stackBlock_proof_mode_index'] = 'L\'utilisation de « index » n\'est pas prise en charge lorsque l\'on utilise le bloc Parson\'s pour l\'évaluation des preuves.';
$string['stackBlock_unknownBlock'] = 'Le bloc suivant n’est pas connu :';
$string['stackBlock_unknown_sortable_option'] = 'Options de tri inconnues détectées ; les éléments suivants sont ignorés :';
$string['stackCas_CASError'] = 'Le CAS a retourné l’erreur suivante :';
$string['stackCas_CASErrorCaused'] = 'a causé l’erreur suivante :';
$string['stackCas_MissingAt'] = 'Caractère <code>@</code> manquant.';
$string['stackCas_MissingCloseDisplay'] = 'Code <code>\\]</code> manquant.';
$string['stackCas_MissingCloseHTML'] = 'Balise html fermante manquante.';
$string['stackCas_MissingCloseInline'] = 'Code <code>\\)</code> manquant.';
$string['stackCas_MissingClosingRawCAS'] = 'Code <code>#}</code> manquant.';
$string['stackCas_MissingClosingTeXCAS'] = 'Code <code>@}</code> manquant.';
$string['stackCas_MissingDollar'] = 'Caractère <code>$</code> manquant.';
$string['stackCas_MissingOpenDisplay'] = 'Code <code>\\[</code> manquant.';
$string['stackCas_MissingOpenHTML'] = 'Balise html ouvrante manquante.';
$string['stackCas_MissingOpenInline'] = 'Code <code>\\(</code> manquant.';
$string['stackCas_MissingOpenRawCAS'] = 'Code <code>{#</code> manquant.';
$string['stackCas_MissingOpenTeXCAS'] = 'Code <code>{@</code> manquant.';
$string['stackCas_MissingStars'] = 'Des caractères * semblent manquer. Vous vouliez peut-être saisir {$a->cmd}.';
$string['stackCas_MissingString'] = 'Caractère <code>"</code> manquant.';
$string['stackCas_OpenComment'] = 'Il y a un commentaire <code>/*</code> qui n\'a pas été fermé.';
$string['stackCas_OpenString'] = 'Il y a une chaîne de caractères <code>"</code> qui n\'a pas été fermée.';
$string['stackCas_StringOperation'] = 'Une chaîne de caractère est au mauvais endroit. Erreur <code>{$a->issue}</code>.';
$string['stackCas_allFailed'] = 'Le CAS n’a pas réussi à retourner d’expression évaluée. Veuillez vérifier la connexion avec le CAS.';
$string['stackCas_apostrophe'] = 'Les apostrophes ne sont pas permises dans les réponses.';
$string['stackCas_applyfunmakestring'] = 'Le nom de la fonction ne peut pas être une chaîne de caractères dans <code>{$a->type}</code>.';
$string['stackCas_applyingnonobviousfunction'] = 'Cet appel de fonction {$a->problem} ne semble pas comporter de nom de fonction clairement identifiable. Pour des raisons de sécurité, vous devrez peut-être simplifier cet appel afin que le validateur puisse identifier son nom.';
$string['stackCas_backward_inequalities'] = 'Les égalités non strictes, par exemple \\( \\leq \\) ou \\( \\geq \\), doivent être saisies sous la forme <= ou >=. Votre expression contient {$a->cmd}, qui est à l’envers.';
$string['stackCas_badLogIn'] = 'Vous avez saisi <tt>In</tt> dans votre expression. Le logarithme naturel doit être saisi <tt>ln</tt> (avec un « L » minuscule et non un « I » majuscule)';
$string['stackCas_baddotdot'] = 'L\'utilisation de la multiplication matricielle « . » avec des nombres à virgule flottante scalaires est interdite ; utilisez plutôt la multiplication classique « * » pour obtenir le même résultat.';
$string['stackCas_badhtmlelement'] = 'Maxima a reçu <code>{$a->val}</code> au lieu de {$a->key}, ce qui indique que votre éditeur de texte modifie peut-être silencieusement votre contenu. Nous recommandons de modifier le code source CASText comme un document en texte brut.';
$string['stackCas_badpostfixop'] = 'Il y a un opérateur « postfix » incorrect dans votre expression.';
$string['stackCas_bracketsdontmatch'] = 'Les crochets sont imbriqués de façon incorrecte dans l’expression {$a->cmd}.';
$string['stackCas_callingasfunction'] = 'Il est interdit d\'appeler le résultat d\'un appel de fonction {$a->problem}, mais les fonctions lambdas restent autorisées.';
$string['stackCas_chained_inequalities'] = 'Il semble que vous ayez utilisé des « opérateurs en chaîne », par exemple \\(a {$a->op} b {$a->op} c\\).  Vous devez relier les clauses individuelles à l’aide d’opérations logiques telles que \\(and\\) ou \\(or\\).';
$string['stackCas_decimal_usedcomma'] = 'Vous avez utilisé le point <code>.</code>, mais vous devez utiliser la virgule <code>,</code> comme séparateur décimal !';
$string['stackCas_decimal_usedthreesep'] = 'Vous avez utilisé le point <code>.</code>, la virgule <code>,</code> et le point-virgule <code>;</code> dans votre expression. Veuillez respecter une cohérence dans la position de la virgule décimale (<code>.</code> ou <code>,</code>) et dans les séparateurs des éléments de la liste (<code>,</code> ou <code>;</code>). Votre réponse est ambiguë !';
$string['stackCas_errorpos'] = 'À peu près à la ligne {$a->line}, au caractère {$a->col}.';
$string['stackCas_failedReturn'] = 'CAS n’a retourné aucune donnée.';
$string['stackCas_failedReturnOne'] = 'CAS n’a pas retourné certaines données.';
$string['stackCas_failedValidation'] = 'Le CASText n’est pas valide.';
$string['stackCas_failedtimeout'] = 'Le CAS n\'a renvoyé aucune donnée en raison d\'un délai d\'attente dépassé.';
$string['stackCas_finalChar'] = '« {$a->char} » est un caractère final non valide dans {$a->cmd}';
$string['stackCas_finalToken'] = '« {$a->token} » est un terme final invalide dans {$a->cmd}';
$string['stackCas_forbiddenChar'] = 'Les commandes CAS ne doivent pas contenir les caractères suivants : {$a->char}.';
$string['stackCas_forbiddenFunction'] = 'Fonction interdite : {$a->forbid}.';
$string['stackCas_forbiddenOperator'] = 'Opérateur interdit : {$a->forbid}.';
$string['stackCas_forbiddenVariable'] = 'Variable ou constante interdite : {$a->forbid}.';
$string['stackCas_forbiddenWord'] = 'L’expression {$a->forbid} n’est pas permise.';
$string['stackCas_forbiddenntuple'] = 'Les coordonnées ne sont pas autorisées dans ce champ.';
$string['stackCas_functionNameSubstitutionToForbiddenOne'] = 'Le nom de fonction « {$a->name} » est susceptible d\'être remplacé, par le biais de substitutions, par « {$a->trg} », ce qui est interdit.';
$string['stackCas_inputsdefined'] = 'Vous ne pouvez pas utiliser les noms des entrées comme variables. Vous avez tenté de définir <code>{$a}</code>';
$string['stackCas_invalidCommand'] = 'Les commandes CAS ne sont pas valides.';
$string['stackCas_missingLeftBracket'] = 'Il manque un crochet ouvrant <span class="stacksyntaxexample">{$a->bracket}</span> dans l’expression {$a->cmd}.';
$string['stackCas_missingRightBracket'] = 'Il manque un crochet fermant <span class="stacksyntaxexample">{$a->bracket}</span> dans l’expression {$a->cmd}.';
$string['stackCas_missmatchedRightBracket'] = 'Vous fermez <span class="stacksyntaxexample">{$a->bracket}</span>, mais <span class="stacksyntaxexample">{$a->expected}</span> doit être fermé en premier, dans l\'expression : {$a->cmd}.';
$string['stackCas_nested_function_declaration'] = 'Il est désormais interdit de définir une fonction à l\'intérieur d\'une autre fonction. Si vous devez modifier la définition d\'une fonction depuis l\'intérieur d\'une autre fonction, utilisez la fonctionnalité de renommage de la fonction.';
$string['stackCas_newline'] = 'Les caractères saut de ligne ne sont pas permis dans les réponses.';
$string['stackCas_noFunction'] = 'L\'utilisation de la fonction {$a->forbid} dans le terme {$a->term} n\'est pas autorisée dans ce contexte.';
$string['stackCas_operatorAsVariable'] = 'L\'opérateur {$a->op} est interprété comme une variable ; vérifiez la syntaxe.';
$string['stackCas_overlyComplexSubstitutionGraphOrRandomisation'] = 'Le code de la question comporte des substitutions trop complexes ou le tirage aléatoire est construit de manière incrémentale et difficile à valider, ce qui a entraîné un dépassement du délai de validation ; pour y remédier, simplifiez la logique et consultez la documentation.';
$string['stackCas_overrecursivesignatures'] = 'Le code de la question contient trop de fonctions définies par mise en correspondance.';
$string['stackCas_percent'] = '% trouvé dans l’expression {$a->expr}.';
$string['stackCas_prematureRightBracket'] = 'Vous fermez <span class="stacksyntaxexample">{$a->bracket}</span> avant que son contenu ne soit complet, dans l\'expression : {$a->cmd}.';
$string['stackCas_qmarkoperators'] = 'Les points d\'interrogation ne sont pas autorisés dans les réponses.';
$string['stackCas_redefine_built_in'] = 'La redéfinition d\'une fonction intégrée « {$a->name} » est interdite.';
$string['stackCas_redefinitionOfConstant'] = 'La redéfinition de constantes clés est interdite : {$a->constant}.';
$string['stackCas_reserved_function'] = 'La fonction nommée « {$a->name} » n\'est pas autorisée dans cette question. Veuillez contacter votre enseignant.';
$string['stackCas_spaces'] = 'Espaces illégaux trouvés dans l’expression {$a->expr}.';
$string['stackCas_spuriousop'] = 'Opérateur inconnu {$a->cmd}.';
$string['stackCas_studentInputAsFunction'] = 'L\'utilisation de la réponse de l\'étudiant comme nom de fonction n\'est pas autorisée.';
$string['stackCas_trigexp'] = 'Il n’est pas possible de représenter une puissance d’une fonction trigonométrique en écrivant {$a->forbid}. Le carré de la valeur de \\(\\sin(x)\\) s’écrit \\(\\sin(x)^2\\). La fonction réciproque de \\(\\sin(x)\\) s’écrit <tt>asin(x)</tt> et non \\(\\sin^{-1}(x)\\).';
$string['stackCas_triginv'] = 'Les fonctions trigonométriques réciproques sont écrites {$a->goodinv}, et non {$a->badinv}.';
$string['stackCas_trigop'] = 'Vous devez appliquer {$a->trig} à un argument. Vous semblez avoir {$a->forbid}, ce qui donne l\'impression que vous avez tenté d\'utiliser {$a->trig} comme nom de variable.';
$string['stackCas_trigparens'] = 'Lorsque vous appliquez une fonction trigonométrique à ses arguments, vous devez utiliser des parenthèses rondes et non des crochets. Par exemple : {$a->forbid}.';
$string['stackCas_trigspace'] = 'Pour appliquer une fonction trigonométrique à ses arguments, vous devez utiliser des crochets et non des espaces. Utilisez par exemple {$a->trig} à la place.';
$string['stackCas_underscores'] = 'L’utilisation suivante du caractères souligné n’est pas permises : {$a}.';
$string['stackCas_unencpsulated_comma'] = 'Une virgule apparaît de manière inattendue dans votre expression. Les virgules servent à séparer des éléments dans des listes, des ensembles, etc. Vous devez utiliser un point décimal, et non une virgule, pour les nombres à virgule flottante.';
$string['stackCas_unencpsulated_semicolon'] = 'Un point-virgule (;) apparaît de manière inattendue dans votre expression. Les points-virgules servent à séparer des éléments dans des listes, des ensembles, etc.';
$string['stackCas_unencpsulated_varmatrix'] = 'Dans une matrice de taille variable <b>, utilisez des espaces pour séparer les éléments </b>, et non une virgule.';
$string['stackCas_unitssynonym'] = 'Il semble que vous ayez utilisé {$a->forbid}. Vouliez-vous plutôt dire {$a->unit} ?';
$string['stackCas_unknownFunction'] = 'Fonction inconnue : {$a->forbid} dans le terme {$a->term}.';
$string['stackCas_unknownFunctionCase'] = 'La saisie est sensible à la casse : {$a->forbid} est une fonction inconnue. Vouliez-vous dire {$a->lower} ?';
$string['stackCas_unknownSubstitutionPotenttiallyMaskingAFunctionName'] = 'Le nom de fonction « {$a->name} » risque d\'être redéfini dans des substitutions ambiguës.';
$string['stackCas_unknownUnitsCase'] = 'La saisie des unités est sensible à la casse : {$a->forbid} est une unité inconnue. Vouliez-vous plutôt choisir l\'une des unités de la liste suivante {$a->unit} ?';
$string['stackCas_unknownVariableCase'] = 'La saisie est sensible à la casse : {$a->forbid} est une variable inconnue. Vouliez-vous dire {$a->lower} ?';
$string['stackCas_useinsteadChar'] = 'Veuillez remplacer <span class="stacksyntaxexample">{$a->bad}</span> par « <span class="stacksyntaxexample">{$a->char}</span> ».';
$string['stackCas_varmatrix_eg'] = 'Par exemple : {$a->good} plutôt que {$a->bad}.';
$string['stackDoc_404'] = 'Erreur 404';
$string['stackDoc_404message'] = 'Fichier non trouvé.';
$string['stackDoc_AnswerTestResults'] = 'Résultats des tests de réponses

Cette page présente les résultats des tests de réponses effectués sur les cas de test STACK. Elle est générée automatiquement à partir des tests unitaires STACK et a pour but de montrer aux auteurs de questions comment fonctionnent concrètement les tests de réponses. Elle inclut les cas où les tests de réponses échouent actuellement, ce qui donne une note attendue négative. Vos commentaires et vos suggestions de nouveaux cas de test sont les bienvenus.';
$string['stackDoc_community'] = 'Site communautaire';
$string['stackDoc_directoryStructure'] = 'Structure des dossiers';
$string['stackDoc_docs'] = 'Documentation STACK';
$string['stackDoc_docs_desc'] = 'La documentation <a href="{$a->link}"> de STACK</a> : un wiki statique local qui documente le code que vous exécutez réellement sur votre serveur.';
$string['stackDoc_home'] = 'Accueil de la documentation';
$string['stackDoc_index'] = 'Index des catégories';
$string['stackDoc_licence'] = 'La documentation STACK est soumise à la licence <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International</a>.';
$string['stackDoc_licence_alt'] = 'Licence Creative Commons';
$string['stackDoc_siteMap'] = 'Carte du site';
$string['stackDoc_siteMap_en'] = 'Plan du site en anglais';
$string['stackDoc_version'] = 'Votre plateforme utilise la version {$a} de STACK.';
$string['stackInstall_input_intro'] = 'Cette page vous permet de tester la manière dont STACK interprète différentes entrées saisies par un étudiant.  Pour l\'instant, cette fonctionnalité ne fonctionne qu\'avec les paramètres les plus souples, en essayant d\'adopter une syntaxe informelle et d\'insérer des astérisques.  <br />Les colonnes « V » indiquent la validité telle qu\'évaluée par PHP et le CAS.  V1 = valide selon PHP, V2 = valide selon le CAS.';
$string['stackInstall_input_title'] = 'Une suite de tests pour la validation des données saisies par les étudiants';
$string['stackInstall_input_title_desc'] = 'Le script <a href="{$a->link}">input-tests</a> fournit des cas de test illustrant la manière dont STACK interprète les expressions mathématiques.  Ils sont également utiles pour apprendre par l\'exemple.';
$string['stackInstall_replace_dollars_desc'] = 'Le script <a href="{$a->link}">« fix maths delimiters »</a> permet de remplacer les délimiteurs de l\'ancienne version, tels que <code>@…@</code>, <code>$…$</code> et <code>$$…$$</code> dans vos questions par les nouveaux délimiteurs recommandés <code>{@…@}</code>, <code>\\(…\\)</code> et <code>\\[…\\]</code>.';
$string['stackInstall_testsuite_choose'] = 'Veuillez choisir un test de réponses.';
$string['stackInstall_testsuite_errors'] = 'Cette question a généré les erreurs suivantes lors de l\'exécution.';
$string['stackInstall_testsuite_fail'] = 'Certains tests n’ont pas réussi !';
$string['stackInstall_testsuite_failingtests'] = 'Tests ayant échoué';
$string['stackInstall_testsuite_failingupgrades'] = 'Questions ayant échoué lors de la mise à niveau.';
$string['stackInstall_testsuite_failingvalidation'] = 'Questions ayant déclenché des avertissements de validation.';
$string['stackInstall_testsuite_intro'] = 'Cette page vous permet de consulter des exemples de tests de réponses et de vérifier que les tests de réponses STACK fonctionnent correctement. Notez que seuls les tests de réponses peuvent être vérifiés via l\'interface web. Si la note est négative, cela indique un échec attendu ; une note de -1 correspond à un échec dû à une erreur interne attendue.';
$string['stackInstall_testsuite_nodeployedseeds'] = 'Questions comportant des variantes aléatoires, mais sans graines définies';
$string['stackInstall_testsuite_nogeneralfeedback'] = 'Questions sans feedbacks de réponses généraux : les étudiants apprécient vraiment les corrigés détaillés !';
$string['stackInstall_testsuite_notests'] = 'Questions sans cas de tests : merci d\'en ajouter quelques-uns !';
$string['stackInstall_testsuite_pass'] = 'Tous les tests ont réussi !';
$string['stackInstall_testsuite_title'] = 'Une suite de tests pour les tests de réponse  STACK';
$string['stackInstall_testsuite_title_desc'] = 'Le script <a href="{$a->link}">answer-tests</a> permet de vérifier que les tests de réponse fonctionnent correctement. Il est également utile pour découvrir, à travers des exemples, comment utiliser chaque test de réponse.';
$string['stackOptions_AnsTest_values_AddConst'] = 'AddConst';
$string['stackOptions_AnsTest_values_AlgEquiv'] = 'AlgEquiv';
$string['stackOptions_AnsTest_values_AlgEquivNouns'] = 'AlgEquivNouns';
$string['stackOptions_AnsTest_values_Antidiff'] = 'Antidiff';
$string['stackOptions_AnsTest_values_CasEqual'] = 'CasEqual';
$string['stackOptions_AnsTest_values_CompSquare'] = 'CompletedSquare';
$string['stackOptions_AnsTest_values_Diff'] = 'Diff';
$string['stackOptions_AnsTest_values_EqualComAss'] = 'EqualComAss';
$string['stackOptions_AnsTest_values_EqualComAssRules'] = 'EqualComAssRules';
$string['stackOptions_AnsTest_values_Equiv'] = 'EquivReasoning';
$string['stackOptions_AnsTest_values_EquivFirst'] = 'EquivFirst';
$string['stackOptions_AnsTest_values_Expanded'] = 'Expanded';
$string['stackOptions_AnsTest_values_FacForm'] = 'FacForm';
$string['stackOptions_AnsTest_values_GT'] = 'Num-GT';
$string['stackOptions_AnsTest_values_GTE'] = 'Num-GTE';
$string['stackOptions_AnsTest_values_Int'] = 'Int';
$string['stackOptions_AnsTest_values_Levenshtein'] = 'Levenshtein';
$string['stackOptions_AnsTest_values_LowestTerms'] = 'LowestTerms';
$string['stackOptions_AnsTest_values_NumAbsolute'] = 'NumAbsolute';
$string['stackOptions_AnsTest_values_NumDecPlaces'] = 'NumDecPlaces';
$string['stackOptions_AnsTest_values_NumDecPlacesWrong'] = 'Nombre de chiffres décimaux erronés';
$string['stackOptions_AnsTest_values_NumRelative'] = 'NumRelative';
$string['stackOptions_AnsTest_values_NumSigFigs'] = 'NumSigFigs';
$string['stackOptions_AnsTest_values_PartFrac'] = 'PartFrac';
$string['stackOptions_AnsTest_values_PropLogic'] = 'Logique propositionnelle';
$string['stackOptions_AnsTest_values_SRegExp'] = 'SRegExp';
$string['stackOptions_AnsTest_values_SameType'] = 'SameType';
$string['stackOptions_AnsTest_values_Sets'] = 'Ensembles';
$string['stackOptions_AnsTest_values_SigFigsStrict'] = 'SigFigsStrict';
$string['stackOptions_AnsTest_values_SingleFrac'] = 'SingleFrac';
$string['stackOptions_AnsTest_values_String'] = 'String';
$string['stackOptions_AnsTest_values_StringSloppy'] = 'StringSloppy';
$string['stackOptions_AnsTest_values_SubstEquiv'] = 'SubstEquiv';
$string['stackOptions_AnsTest_values_SysEquiv'] = 'SysEquiv';
$string['stackOptions_AnsTest_values_UnitsAbsolute'] = 'UnitsAbsolute';
$string['stackOptions_AnsTest_values_UnitsRelative'] = 'UnitsRelative';
$string['stackOptions_AnsTest_values_UnitsSigFigs'] = 'UnitsSigFigs';
$string['stackOptions_AnsTest_values_UnitsStrictAbsolute'] = 'UnitsStrictAbsolute';
$string['stackOptions_AnsTest_values_UnitsStrictRelative'] = 'UnitsStrictRelative';
$string['stackOptions_AnsTest_values_UnitsStrictSigFigs'] = 'UnitsStrictSigFigs';
$string['stackOptions_AnsTest_values_Validator'] = 'Validateur';
$string['stack_library'] = 'Bibliothèque de questions STACK';
$string['stack_library_destination'] = 'Les questions seront importées dans la catégorie suivante :';
$string['stack_library_error'] = 'Une erreur s\'est produite. Veuillez actualiser la page et réessayer.';
$string['stack_library_failure'] = 'Échec de l\'importation de :';
$string['stack_library_help'] = 'Plutôt que de créer votre propre question, suivez ce lien pour accéder à la bibliothèque de questions STACK. La bibliothèque de questions STACK contient de nombreuses questions STACK prédéfinies, prêtes à être importées dans Moodle. Vous pouvez ensuite les utiliser telles quelles ou les modifier pour les adapter à vos besoins.';
$string['stack_library_import'] = 'Importer';
$string['stack_library_import_folder'] = 'Dossier d\'importation';
$string['stack_library_importlist'] = 'Questions importées :';
$string['stack_library_instructions_five'] = 'Il est possible d\'ajouter des tests au cours en cours en important leur fichier .json.';
$string['stack_library_instructions_four'] = 'Utilisez la liste déroulante pour changer de catégorie.';
$string['stack_library_instructions_one'] = 'Sélectionnez une question dans la liste ci-dessous pour l\'afficher ici.';
$string['stack_library_instructions_three'] = 'Cliquez sur « Importer » pour importer la question dans la catégorie de questions actuelle. Vous pouvez également cliquer sur « Importer le dossier » pour importer toutes les questions du dossier actuel.';
$string['stack_library_instructions_two'] = 'Remarque : par défaut, les balises <code>[[feedback:????]]</code> présentes dans le corps de la question ne sont pas remplacées et sont conservées pour indiquer l\'emplacement des feedbacks PRT.';
$string['stack_library_not_stack'] = 'Il ne s\'agit pas d\'une question STACK ; elle ne peut donc pas être affichée dans son intégralité ici, mais vous pouvez tout de même l\'importer.';
$string['stack_library_qb_return'] = 'Retour à la banque de questions';
$string['stack_library_quiz'] = 'Voici un test :';
$string['stack_library_quiz_course'] = 'Le test sera importé dans le cours :';
$string['stack_library_quiz_prefix'] = 'Test :';
$string['stack_library_quiz_return'] = 'Retour au test';
$string['stack_library_select'] = 'Sélectionner une bibliothèque :';
$string['stack_library_selected'] = 'Question affichée :';
$string['stack_library_success'] = 'Importation réussie de :';
$string['stackerrors'] = 'Votre question contient des erreurs.';
$string['stackfilesizeerror'] = 'Un ou plusieurs fichiers (par exemple, des images) dépassent 1 Mo.';
$string['stackfileuseerror'] = 'Un ou plusieurs fichiers (par exemple, des images) sont associés en interne à {$a}, mais aucun ne semble être utilisé dans le texte actuel lui-même.';
$string['stackversioncomment'] = 'Cette question semble utiliser des commentaires de type /*…*/ dans le {$a->qfield}, qui ne sont plus pris en charge.';
$string['stackversionedited'] = 'Cette question a été rédigée à l\'aide de la version {$a} de STACK.';
$string['stackversionerror'] = 'Cette question utilise {$a->pat} dans {$a->qfield}, ce qui a changé dans la version {$a->ver} de STACK et n\'est plus pris en charge.';
$string['stackversionerroralt'] = 'Une autre possibilité est {$a}.';
$string['stackversionmulerror'] = 'Cette question contient une entrée qui utilise l\'option « mul », qui n\'est plus prise en charge depuis la version 4.2 de STACK. Veuillez modifier cette question.';
$string['stackversionnone'] = 'Cette question n\'a pas été modifiée depuis la mise en place de la numérotation des variantes de questions dans STACK 4.2. Veuillez relire attentivement votre question.';
$string['stackversionnow'] = 'La version actuelle de STACK est {$a}.';
$string['stackversionregexp'] = 'Le test de réponse RegExp n\'est plus pris en charge à partir de la version 4.3 de STACK. Veuillez utiliser la nouvelle fonction SRegExp à la place.';
$string['stop'] = '[stop]';
$string['strictsyntax'] = 'Syntaxe stricte';
$string['strictsyntax_help'] = 'Cette option détermine si cette entrée doit utiliser la syntaxe Maxima stricte. Si vous indiquez « Non », la quantité de possibilités indiquant les étoiles manquantes, y compris dans l’application de fonction et la notation scientifique, sera plus grande';
$string['strictsyntax_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/';
$string['strlengtherror'] = 'Cette chaîne de caractères ne doit pas dépasser 255 caractères.';
$string['structuralproblem'] = 'La structure PRT est mal formée.';
$string['studentValidation_invalidAnswer'] = 'Cette réponse n’est pas valide';
$string['studentValidation_listofunits'] = 'Les unités trouvées dans votre réponses étaient : {$a}';
$string['studentValidation_listofvariables'] = 'Les variables trouvées dans votre réponses étaient : {$a}';
$string['studentValidation_notes'] = 'Cette entrée n’est pas évaluée automatiquement par STACK. Vous pouvez l’utiliser pour enregistrer des remarques ou commentaires pour l’enseignant.';
$string['studentValidation_yourLastAnswer'] = 'Votre dernière réponse a été interprétée comme suit : {$a}';
$string['studentanswer'] = 'Réponse de l’étudiant';
$string['studentinputtoolong'] = 'Votre saisie dépasse la longueur autorisée par STACK.';
$string['switch'] = 'Changer';
$string['switchtovariant'] = 'Passer à la graine :';
$string['symbolicprtcorrectfeedback'] = '<span style="font-size: 1.5em; color:green;"><i class="fa fa-check"></i></span>';
$string['symbolicprtincorrectfeedback'] = '<span style="font-size: 1.5em; color:red;"><i class="fa fa-times"></i></span>';
$string['symbolicprtpartiallycorrectfeedback'] = '<span style="font-size: 1.5em; color:orange;"><i class="fa fa-adjust"></i></span>';
$string['syntaxattribute'] = 'Attribut d’indice';
$string['syntaxattribute_help'] = 'L’indice syntaxique sera affiché sous la forme d’une *valeur* modifiable ou d’un *paramètre fictif* non-modifiable.';
$string['syntaxattribute_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Syntax_Hint';
$string['syntaxattributeplaceholder'] = 'Paramètre fictif';
$string['syntaxattributevalue'] = 'Valeur';
$string['syntaxhint'] = 'Indice syntaxique';
$string['syntaxhint_help'] = 'L’indice syntaxique sera affiché dans le champ de la réponse, s’il est laissé vide par l’étudiant.';
$string['syntaxhint_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Syntax_Hint';
$string['syntaxhint_toolong'] = 'Le champ de suggestion de syntaxe est limité à 255 caractères. Définissez une variable de chaîne (par exemple <code>sh:« Long hint »;</code>) dans les variables de la question, puis intégrez-la ici en utilisant, par exemple, <code>{@sh@}</code>.';
$string['tans'] = 'TAns';
$string['tans_help'] = 'Il s\'agit du deuxième argument de la fonction de test de réponse. Dans les tests asymétriques, il est considéré comme la « réponse de l\'enseignant », bien qu\'il puisse s\'agir de n\'importe quelle expression CAS valide et qu\'il puisse dépendre des variables de la question ou des variables de feedback.';
$string['tans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['tansrequired'] = 'TAns ne doit pas être vide.';
$string['teacheranswer'] = 'Réponse de l\'enseignant';
$string['teacheranswercase'] = 'Utiliser les réponses de l\'enseignant comme cas de test';
$string['teacheranswerempty'] = 'Ce champ peut être laissé vide.';
$string['teacheranswershow'] = 'La réponse \\( {$a->display} \\), que l\'on peut saisir sous la forme {$a->value}, serait correcte.';
$string['teacheranswershow_disp'] = 'La réponse {$a->display} serait correcte.';
$string['teacheranswershow_mcq'] = 'La bonne réponse est : {$a->display}';
$string['teacheranswershownotes'] = 'Il n’y a pas de réponse correcte fournie pour cette entrée.';
$string['teachersanswer'] = 'Modèle de réponse';
$string['teachersanswer_help'] = 'L’enseignant doit indiquer un modèle de réponse pour chaque entrée. Ce modèle de réponse doit être une chaîne Maxima syntaxiquement valide et peut inclure les variables de la question.';
$string['teachersanswer_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#model_answer';
$string['testallincategory'] = 'Testez toutes les questions de cette catégorie';
$string['testalltitle'] = 'Testez toutes les questions dans ce contexte';
$string['testcasexresult'] = 'Cas de test {$a->no} {$a->result}';
$string['testingquestion'] = 'Test de la question {$a}';
$string['testingquestiontests'] = 'Préparation des résultats du test';
$string['testingquestionvariants'] = 'Préparation des variantes de questions';
$string['testinputs'] = 'Données de test';
$string['testinputsimpwarning'] = 'Veuillez noter que les entrées de test sont toujours <em>non simplifiées</em>, quels que soient la question ou le paramétrage de l\'option PRT. Veuillez utiliser <tt>ev(…,simp)</tt> pour simplifier tout ou partie des expressions d\'entrée de test.';
$string['testoptions'] = 'Options de test';
$string['testoptions_help'] = 'Ce champ permet à l\'enseignant d\'indiquer l\'objectif du contrôle.';
$string['testoptions_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md';
$string['testoptionsinvalid'] = 'Les options de test ne sont pas valides : {$a}';
$string['testoptionsrequired'] = 'Des options sont requises pour ce test.';
$string['testpassesandfails'] = '{$a->passes} réussit et {$a->fails} échecs.';
$string['tests'] = 'Tests';
$string['testsuitecolerror'] = 'Erreurs CAS';
$string['testsuitecolmark'] = 'Marque';
$string['testsuitecolpassed'] = '?';
$string['testsuitefail'] = '<span style="color:red;"><i class="fa fa-times"></i></span>';
$string['testsuitefeedback'] = 'Feedback';
$string['testsuiteknownfail'] = '<span style="color:orange;"><i class="fa fa-adjust"></i></span>';
$string['testsuiteknownfailmaths'] = '<span style="color:orange;"><i class="fa fa-adjust"></i>!</span>';
$string['testsuitenotests'] = 'Nombre de tests : {$a->no}';
$string['testsuitepass'] = '<span style="color:green;"><i class="fa fa-check"></i></span>';
$string['testsuiteteststook'] = 'Les tests ont pris {$a->time} secondes.';
$string['testsuiteteststookeach'] = 'Moyenne par test : {$a->time} secondes.';
$string['testthisvariant'] = 'Activer cette variante pour la tester';
$string['texdisplaystyle'] = 'Équation en mode mis en évidence (displaystyle)';
$string['texinlinestyle'] = 'Équation intégrée';
$string['tidyquestion'] = '<i class="fa fa-sort-amount-asc"></i> Mise en ordre des données saisies et des PRT';
$string['tidyquestion_txt'] = 'Entrées et PRT propres';
$string['tidyquestionx'] = 'Renommer les parties de la question {$a}';
$string['todo_desc'] = 'La page <a href="{$a->link}">« à faire »</a> recense les questions contenant des blocs <tt>[[todo]]</tt> ainsi que celles signalées comme défectueuses.';
$string['todowarning'] = 'Vous avez des blocs « à faire » non résolus dans « {$a->field} ».';
$string['trig_degrees_radians_fact'] = '\\[
360^\\circ= 2\\pi \\hbox{ radians},\\quad
1^\\circ={2\\pi\\over 360}={\\pi\\over 180}\\hbox{ radians}
\\]
\\[
1 \\hbox{ radian} = {180\\over \\pi} \\hbox{ degrees}
\\approx 57.3^\\circ
\\]';
$string['trig_degrees_radians_name'] = 'Degrés et radians';
$string['trig_standard_identities_fact'] = '\\[\\sin(a\\pm b)\\ = \\  \\sin(a)\\cos(b)\\ \\pm\\  \\cos(a)\\sin(b)\\]
 \\[\\cos(a\\ \\pm\\ b)\\ = \\  \\cos(a)\\cos(b)\\ \\mp \\sin(a)\\sin(b)\\]
 \\[\\tan (a\\ \\pm\\ b)\\ = \\  {\\tan (a)\\ \\pm\\ \\tan (b)\\over1\\ \\mp\\ \\tan (a)\\tan (b)}\\]
 \\[ 2\\sin(a)\\cos(b)\\ = \\  \\sin(a+b)\\ +\\ \\sin(a-b)\\]
 \\[ 2\\cos(a)\\cos(b)\\ = \\  \\cos(a-b)\\ +\\ \\cos(a+b)\\]
 \\[ 2\\sin(a)\\sin(b) \\ = \\  \\cos(a-b)\\ -\\ \\cos(a+b)\\]
 \\[ \\sin^2(a)+\\cos^2(a)\\ = \\  1\\]
 \\[ 1+{\\rm cot}^2(a)\\ = \\  {\\rm cosec}^2(a),\\quad \\tan^2(a) +1 \\ = \\  \\sec^2(a)\\]
 \\[ \\cos(2a)\\ = \\  \\cos^2(a)-\\sin^2(a)\\ = \\  2\\cos^2(a)-1\\ = \\  1-2\\sin^2(a)\\]
 \\[ \\sin(2a)\\ = \\  2\\sin(a)\\cos(a)\\]
 \\[ \\sin^2(a) \\ = \\  {1-\\cos (2a)\\over 2}, \\qquad \\cos^2(a)\\ = \\  {1+\\cos(2a)\\over 2}\\]';
$string['trig_standard_identities_name'] = 'Relations trigonométriques standards';
$string['trig_standard_values_fact'] = '\\[\\sin(45^\\circ)={1\\over \\sqrt{2}}, \\qquad \\cos(45^\\circ) = {1\\over \\sqrt{2}},\\qquad
\\tan( 45^\\circ)=1
\\]
\\[
\\sin (30^\\circ)={1\\over 2}, \\qquad \\cos (30^\\circ)={\\sqrt{3}\\over 2},\\qquad
\\tan (30^\\circ)={1\\over \\sqrt{3}}
\\]
\\[
\\sin (60^\\circ)={\\sqrt{3}\\over 2}, \\qquad \\cos (60^\\circ)={1\\over 2},\\qquad
\\tan (60^\\circ)={ \\sqrt{3}}
\\]';
$string['trig_standard_values_name'] = 'Valeurs trigonométriques standards';
$string['true'] = 'Vrai';
$string['truebranch'] = 'Branche vraie';
$string['truebranch_help'] = 'Ces champs déterminent ce qui se passe lorsque le test de réponse est réussi
<h3> Mod et score </h3>
Comment le score est ajusté. « = » signifie fixer le score à une valeur donnée ; « +/- » signifie ajouter ou soustraire le score indiqué du total actuel.

<h3> Pénalité </h3>
En mode adaptatif ou interactif, accumuler ce nombre de points de pénalité.

<h3> Suivant </h3>
Indique s’il faut passer à un autre nœud, et si oui lequel, ou s’arrêter.

<h3> Note de réponse </h3>
Il s’agit d’une balise essentielle à des fins de rapport. Elle est conçue pour enregistrer le chemin unique parcouru dans l’arborescence, ainsi que le résultat de chaque test de réponse. Elle est générée automatiquement, mais peut être remplacée par une valeur significative.';
$string['unauthorisedbulktest'] = 'Vous ne disposez pas des droits d\'accès nécessaires pour consulter les questions de STACK';
$string['undeploy'] = 'Dé-déployer';
$string['unknown_block'] = 'Bloc inconnu de type {$a->type} demandé !';
$string['unrecognisedfactstags'] = 'Les balises suivantes ne sont pas reconnues : {$a->tags}.';
$string['upgradeerrors'] = 'Erreurs de mise à niveau';
$string['usetextarea'] = 'Nous vous recommandons vivement d\'utiliser l\'éditeur « textarea » pour les questions STACK. D\'autres éditeurs peuvent modifier le contenu, ce qui risque de perturber le fonctionnement des questions contenant du JavaScript ou d\'autres codes lorsque vous enregistrez votre question. Rendez-vous dans Préférences -> Préférences de l\'éditeur et sélectionnez « Zone de texte brut ».';
$string['variant'] = 'Variante';
$string['variantmanagement'] = 'Gestion des variantes';
$string['variants'] = 'Variantes';
$string['variantsselectionseed'] = 'Groupe aléatoire';
$string['variantsselectionseed_help'] = 'Ce champ peut être normalement laissé vide. Si cependant vous voulez que plusieurs questions d’un test utilisent la même graine aléatoire (seed), saisissez ici la même chaîne de caractères dans ces questions (et déployez le même jeu de germes aléatoires, si vous déployez des versions). Les germes aléatoires de ces questions seront alors synchronisés.';
$string['verifyquestionandupdate'] = 'Vérifier le texte de la question et mettre à jour le formulaire';
$string['version'] = 'Version';
$string['versionwarning'] = 'Cela mettra à jour la dernière version de la question. Si vous souhaitez que vos modifications soient prises en compte dans une nouvelle version de la question, veuillez enregistrer la question dans <a href="{$a->url}">le formulaire de modification de la question</a> avant de valider cette page.';
$string['xmlcompare_desc'] = 'La page <a href="{$a->link}">comparaison XML</a> permet de comparer deux fichiers XML (tels que des questions STACK).';
$string['xmldisplayerror'] = 'Un problème est survenu lors de l\'affichage du XML.';
$string['youmustconfirm'] = 'Veuillez confirmer ici.';
