<?php

return array(

    "customfield"               => "Champ personnalisé|Champs personnalisés",

    // Options
    "boolean"                   => "Booléen",
    "checkbox"                  => "Checkbox",
    "checklist"                 => "Liste de contrôle",
    "date"                      => "Date",
    "multiple"                  => "Options multiples",
    "options"                   => "Options",
    "radio"                     => "Boutons radio",
    "rating"                    => "Évaluation (1 to 5)",
    "text"                      => "Texte",
    "textarea"                  => "Zone texte",

    "required_desc"             => "Si le champ sur mesure doit être rempli.",
    "public"                    => "Public",
    "public_desc"               => "Si le champ sur mesure est visible au public ou si c'est seulement pour le staff.",
    "encrypted"                 => "Encrypté",
    "encrypted_desc"            => "Si l'info du champ sur mesure doit être encryptée.",
    "purge"                     => "Effacer sur fermeture",
    "purge_desc"                => "If the custom field value should be purged automatically when the ticket is resolved.",
    "locked"                    => "Bloqué",
    "locked_desc"               => "If the custom field value cannot be changed by the user once set.",
    "department_desc"           => "Sélectionner le département où ce champ doit être disponible.",

    /*
     * 2.0.2
     */
    "please_select"             => "Veuillez sélectionner...",

    /*
     * 2.0.3
     */
    "description_desc"          => "Le texte d'aide apparaissant sous le champ sur mesure. C'est possible de ne rien indiquer.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Choisir les marques où ce champ doit être disponible.",

    /*
     * 2.3.0
     */
    "option_warning"            => "Deleting existing options will clear any saved fields that currently have those values selected.",
    "regex_basic_desc"          => "Optionally specify a regular expression to validate the custom field value.",
    "regex_desc"                => "The regex is case-sensitive, there's no need to specify regex delimiters, and use of forward slashes will be automatically escaped. Example: ^[a-z0-9_-]{6,18}$ would enforce that the value is 6-18 characters long and contains only a mix of alphanumeric characters, underscores and dashes.",
    "regex_error_message"       => "Validation Error Message",
    "regex_error_message_desc"  => "Optionally specify a custom error message that will be shown if the value does not match the regex validation, otherwise a generic message will be shown. The message will be shown exactly as entered, therefore we recommend to include the custom field name to make the error message more obvious.",
    "custom_field_values"       => "Custom Field Values",
    "depends_on"                => "Depends On",
    "depends_on_desc"           => "If selected, this field will only be shown to the user when the specified field value is selected. The brand and department visibility will be automatically inherited from the field it depends on.",
    "select_option"             => "Select an option...",
    "purge"                     => "Purge",
    "encrypted_desc"            => "If the custom field value is sensitive and should be saved in the database encrypted. This cannot be changed once the custom field has been created.",

    /*
     * 2.3.1
     */
    "required_desc"             => "If the custom field must be filled out. For the checkbox, checklist or multiple options types, it will require the user to select at least one option.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** ENCRYPTED **",
);
