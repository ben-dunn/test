<?php

return [
    'field' => [
        'invalid_type' => 'Felaktig fälttyp använd :type.',
        'options_method_not_exists' => 'Modelklassen :model måste definera en metod :method() som returnerar villkor för formfältet ":field"',
    ],
    'widget' => [
        'not_registered' => "En widget med klassnamnet ':name' har ej blivit registrerad",
        'not_bound' => "En widget med klassnamnet ':name' saknas i controllern",
    ],
    'page' => [
        'untitled' => "Ej namngiven",
        'access_denied' => [
            'label' => "Nekat tillträde",
            'help' => "Du har inte behörighet att visa den här sidan.",
            'cms_link' => "Gå till CMS backend",
        ],
    ],
    'partial' => [
        'not_found_name' => "En partial med namn ':name' kunde ej hittas",
    ],
    'account' => [
        'sign_out' => 'Logga ut',
        'login' => 'Logga in',
        'reset' => 'Nollställ',
        'restore' => 'Återställ',
        'login_placeholder' => 'användarnamn',
        'password_placeholder' => 'lösenord',
        'forgot_password' => "Glömt ditt lösenord?",
        'enter_email' => "Ange din epost-adress",
        'enter_login' => "Ange ditt användarnamn",
        'email_placeholder' => "epost",
        'enter_new_password' => "Välj ett nytt lösenord",
        'password_reset' => "Återställ lösenord",
        'restore_success' => "Ett meddelande har sänts till din epost-adress med instruktioner om hur du återställer ditt lösenord",
        'restore_error' => "En användare med användarnamnet ':login' kunde ej hittas",
        'reset_success' => "Ditt lösenord har blivit återställt. Du kan nu logga in",
        'reset_error' => "Felaktig data för lösenordsåterställning. Var vänlig prova igen",
        'reset_fail' => "Det gick tyvärr inte att nollställa ditt lösenord",
        'apply' => 'Spara',
        'cancel' => 'Avbryt',
        'delete' => 'Radera',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Kontrollpanelen',
    ],
    'user' => [
        'name' => 'Administratör',
        'menu_label' => 'Administratörer',
        'list_title' => 'Hantera administratörer',
        'new' => 'Ny Administratör',
        'login' => "Användarnamn",
        'first_name' => "Förnamn",
        'last_name' => "Efternamn",
        'full_name' => "Fullständigt namn",
        'email' => "E-post",
        'groups' => "Grupper",
        'groups_comment' => "Välj vilken grupp denna person hör till",
        'avatar' => "Avatar",
        'password' => "Lösenord",
        'password_confirmation' => "Bekräfta lösenord",
        'superuser' => "Superanvändare",
        'superuser_comment' => "Markera denna checkbox för att ge denna person tillgång till alla områden",
        'send_invite' => 'Inbjudan är sänd via e-post',
        'send_invite_comment' => 'Markera denna checkbox för att skicka en inbjudan till användaren via e-post',
        'delete_confirm' => 'Vill du verkligen radera denna administratör?',
        'return' => 'Återgå till administratörlistan',
        'group' => [
            'name' => 'Grupp',
            'name_field' => 'Namn',
            'menu_label' => 'Grupper',
            'list_title' => 'Hantera grupper',
            'new' => 'New administratörgrupp',
            'delete_confirm' => 'Vill du verkligen radera denna administratörgrupp?',
            'return' => 'Återgå till grupplistan',
        ],
        'preferences' => [
            'not_authenticated' => 'Det finns ingen autentiserad användare att ladda eller spara inställningar för',
        ]
    ],
    'list' => [
        'default_title' => 'Lista',
        'search_prompt' => 'Sök...',
        'no_records' => 'Det finns inga träffar för denna vy',
        'missing_model' => 'List-egenskapen i :class har ingen modell definerad',
        'missing_column' => 'Det finns inga kolumndefinitioner för :columns',
        'missing_columns' => 'Listan som används i :class har inga listkolumner definerade',
        'missing_definition' => "Listegenskapen saknar en kolumn för ':field'",
        'behavior_not_ready' => 'Listegenskapen har inte blivit initierad, kontrollera att du har anropat makeLists() i din controller',
        'invalid_column_datetime' => "Column value ':column' is not a DateTime object, are you missing a \$dates reference in the Model?",
    ],
    'form' => [
        'create_title' => "Ny :name",
        'update_title' => "Redigera :name",
        'preview_title' => "Förhandsgranska :name",
        'create_success' => ':name är nu skapad',
        'update_success' => ':name har blivit uppdaterad',
        'delete_success' => ':name kunde ej raderas',
        'missing_id' => "Record ID för formuläret har ej blivit specificerat",
        'missing_model' => 'Formuläregenskapen som används i :class har ingen modell definierad',
        'missing_definition' => "Formuläregenskapen saknar ett fält för ':field'",
        'not_found' => 'Record ID :id för formuläret kunde ej hittas',
        'create' => 'Skapa',
        'create_and_close' => 'Skapa och stäng',
        'creating' => 'Skapar...',
        'save' => 'Spara',
        'save_and_close' => 'Spara och stäng',
        'saving' => 'Sparar...',
        'delete' => 'Radera',
        'deleting' => 'Raderar...',
        'undefined_tab' => 'Övrigt',
        'field_off' => 'Av',
        'field_on' => 'På',
        'apply' => 'Spara',
        'cancel' => 'Avbryt',
        'close' => 'Stäng',
        'ok' => 'OK',
        'or' => 'eller',
        'confirm_tab_close' => 'Vill du verkligen stänga fliken? Ej sparade ändringar kommer gå förlorade',
        'behavior_not_ready' => 'Formuläregenskap har ej blivit initierad, kontrollera att du anropat initForm() i din controller',
    ],
    'relation' => [
        'missing_definition' => "Relationen saknar en definintion för ':field'",
        'missing_model' => "Relationen som används i :class har ingen modell definierad",
        'invalid_action_single' => "Den här åtgärden kan inte appliceras på en enskild relation",
        'invalid_action_multi' => "Denna åtgärd kan inte appliceras på flera relationer",
        'add' => "Lägg till",
        'add_name' => "Lägg till :name",
        'create' => "Skapa",
        'create_name' => "Skapa :name",
        'update' => "Update",
        'update_name' => "Update :name",
        'remove' => "Ta bort",
        'remove_name' => "Ta bort :name",
        'delete' => "Radera",
        'delete_name' => "Radera :name",
    ],
    'model' => [
        'name' => "Modell",
        'not_found' => "Modellen ':class' med ID :id kunde ej hittas",
        'missing_id' => "Det finns inget ID anviget för modellen",
        'missing_relation' => "Modellen ':class' saknar en definition för ':relation'",
        'invalid_class' => "Modellen :model i klass :class är ej giltig. Den måste ärva från \Model-klassen",
        'mass_assignment_failed' => "Mass assignment failed for Model attribute ':attribute'.",
    ],
    'warnings' => [
        'tips' => 'System configuration tips',
        'tips_description' => 'There are issues you need to pay attention to in order to configure the system properly.',
        'permissions'  => 'Directory :name or its subdirectories is not writable for PHP. Please set corresponding permissions for the webserver on this directory.',
        'extension' => 'The PHP extension :name is not installed. Please install this library and activate the extension.'
    ],
    'editor' => [
        'menu_label' => 'Editor Configuration',
        'menu_description' => 'Manage editor configuration.',
        'font_size' => 'Font size',
        'tab_size' => 'Tab size',
        'use_hard_tabs' => 'Indent using tabs',
        'code_folding' => 'Code folding',
        'word_wrap' => 'Word wrap',
        'highlight_active_line' => 'Highlight active line',
        'show_invisibles' => 'Show invisible characters',
        'show_gutter' => 'Show gutter',
        'theme' => 'Color scheme',
    ],
];
