<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Domena Active Directory',
    'ad_domain_help'			=> 'To je včasih enako kot vaša domena e-pošte, vendar ne vedno.',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'is_ad'				        => 'To je strežnik Active Directory',
	'alert_email'				=> 'Pošlji opozorila na',
	'alerts_enabled'			=> 'Opozorila e-pošte so omogočena',
	'alert_interval'			=> 'Prag za opozorilo pri poteku (v dneh)',
	'alert_inv_threshold'		=> 'Prag za opozorilo pri inventuri',
	'asset_ids'					=> 'ID sredstva',
	'audit_interval'            => 'Revizijski interval',
    'audit_interval_help'       => 'Če boste morali redno fizično pregledovati svoja sredstva, vnesite interval v mesecih.',
	'audit_warning_days'        => 'Prag za opozorilo o reviziji',
    'audit_warning_days_help'   => 'Koliko dni vnaprej vas opozorimo, kdaj so sredstva namenjena za revizijo?',
	'auto_increment_assets'		=> 'Ustvari samodejno povečanje ID-jev sredstev',
	'auto_increment_prefix'		=> 'Predpona (neobvezno)',
	'auto_incrementing_help'    => 'Najprej omogočite samodejno povečanje ID-jev sredstev',
	'backups'					=> 'Varnostna kopija',
	'barcode_settings'			=> 'Nastavitve črtne kode',
    'confirm_purge'			    => 'Potrdi čiščenje',
    'confirm_purge_help'		=> 'V spodnje polje vnesite besedilo »DELETE«, da odstranite izbrisane zapise. To dejanje ni mogoče razveljaviti.',
	'custom_css'				=> 'CSS po meri',
	'custom_css_help'			=> 'Vnesite CSS po meri, ki bi jih radi uporabili. Ne vključite &lt;style&gt;&lt;/style&gt; oznake.',
    'custom_forgot_pass_url'	=> 'URL za ponastavitev gesla po meri',
    'custom_forgot_pass_url_help'	=> 'S tem se nadomešča vgrajeni URL za pozabljeni geslo na zaslonu za prijavo, ki je uporaben za usmerjanje ljudi v notranje ali gostiteljsko funkcijo ponastavitve gesla LDAP. Učinkovito bo onemogočil lokalno uporabniško pozabljeno geslo.',
    'dashboard_message'			=> 'Sporočilo nadzorne plošče',
    'dashboard_message_help'	=> 'To besedilo bo prikazano na nadzorni plošči za vse, ki imajo dovoljenje za ogled nadzorne plošče.',
	'default_currency'  		=> 'Privzeta valuta',
	'default_eula_text'			=> 'Privzeta EULA',
  'default_language'			=> 'Privzeti jezik',
	'default_eula_help_text'	=> 'Prav tako lahko povežete EULA po meri z določenimi kategorijami sredstev.',
    'display_asset_name'        => 'Prikaži ime sredstva',
    'display_checkout_date'     => 'Prikaže datum izdaje',
    'display_eol'               => 'Prikaz EOL v pogledu tabele',
    'display_qr'                => 'Prikaži kvadratne kode',
	'display_alt_barcode'		=> 'Prikaži 1D črtno kodo',
	'barcode_type'				=> 'Tip 2D črtne kode',
	'alt_barcode_type'			=> 'Tip 1D črtne kode',
    'eula_settings'				=> 'Nastavitve EULA',
    'eula_markdown'				=> 'Ta EULA dovoljuje <a href="https://help.github.com/articles/github-flavored-markdown/">Github z okusom markdowna</a>.',
    'footer_text'               => 'Dodatno besedilo noge ',
    'footer_text_help'          => 'To besedilo bo prikazano v desnem delu noge. Povezave so dovoljene z uporabo <a href="https://help.github.com/articles/github-flavored-markdown/">Gothub okusno markdown</a>. Prelomi vrstic, glave, slike itd. Lahko povzročijo nepredvidljive rezultate.',
    'general_settings'			=> 'Splošne nastavitve',
	'generate_backup'			=> 'Ustvari varnostno kopiranje',
    'header_color'              => 'Barva glave',
    'info'                      => 'Te nastavitve vam omogočajo prilagoditev določenih vidikov vaše namestitve.',
    'laravel'                   => 'Laravel Version',
    'ldap_enabled'              => 'Omogočen LDAP',
    'ldap_integration'          => 'Integracija LDAP',
    'ldap_settings'             => 'Nastavitve LDAP',
    'ldap_login_test_help'      => 'Vnesite veljavno uporabniško ime in geslo za LDAP iz osnovnega DN, ki ste ga navedli zgoraj, da preizkusite, ali je vaša prijava LDAP konfigurirana pravilno. Najprej morate shraniti posodobljene nastavitve za LDAP.',
    'ldap_login_sync_help'      => 'To samo testira, če lahko LDAP pravilno sinhronizira. Če vaša poizvedba LDAP Authentication ni pravilna, se uporabniki morda še vedno ne morejo prijaviti. Najprej morate shraniti posodobljene nastavitve za LDAP.',
    'ldap_server'               => 'Strežnik LDAP',
    'ldap_server_help'          => 'To se mora začeti z ldap: / / (za nešifrirano ali TLS) ali ldaps: / / (za SSL)',
	'ldap_server_cert'			=> 'Validacija potrdila SSL LDAP',
	'ldap_server_cert_ignore'	=> 'Dovoli neveljavno potrdilo SSL',
	'ldap_server_cert_help'		=> 'Izberite to potrditveno polje, če uporabljate samo-podpisano potrdilo SSL in želite sprejeti neveljavno potrdilo SSL.',
    'ldap_tls'                  => 'Uporabi TLS',
    'ldap_tls_help'             => 'To je treba preveriti le, če na vašem strežniku LDAP uporabljate STARTTLS. ',
    'ldap_uname'                => 'Uporabniško ime za povezavo z LDAP',
    'ldap_pword'                => 'LDAP uporabniško geslo',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP sinhronizacija gesla',
    'ldap_pw_sync_help'         => 'Počistite polje, če ne želite, da se gesla LDAP sinhronizirajo z lokalnimi gesli. Če funkcijo onemogočite, se vaši uporabniki morda ne bodo mogli prijaviti, če vaš strežnik LDAP iz neznanega razloga ni dosegljiv.',
    'ldap_username_field'       => 'Uporabniško polje',
    'ldap_lname_field'          => 'Priimek',
    'ldap_fname_field'          => 'LDAP ime',
    'ldap_auth_filter_query'    => 'Poizvedba za preverjanje pristnosti LDAP',
    'ldap_version'              => 'Različica LDAP',
    'ldap_active_flag'          => 'Aktivna zastava LDAP',
    'ldap_emp_num'              => 'LDAP številka zaposlenega',
    'ldap_email'                => 'E-pošta LDAP',
    'license'                  => 'Licenca za programsko opremo',
    'load_remote_text'          => 'Oddaljene skripte',
    'load_remote_help_text'		=> 'Ta namestitev Snipe-IT lahko naloži skripte iz zunanjega sveta.',
    'login_note'                => 'Opomba za prijavo',
    'login_note_help'           => 'Na zaslonu za prijavo lahko dodate še nekaj stavkov, na primer za pomoč ljudem, ki so našli izgubljeno ali ukradeno napravo. To polje sprejema <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'logo'                    	=> 'Logotip',
    'logo_print_assets'         => 'Use in Print',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'Omejevanje uporabnikov (tudi administratorjev), dodeljenih podjetjem za sredstva podjetja.',
    'full_multiple_companies_support_text' => 'Popolna podpora podjetij',
    'show_in_model_list'   => 'Prikaži v spustnem meniju Modeli',
    'optional'					=> 'Opcijsko',
    'per_page'                  => 'Rezultatov na stran',
    'php'                       => 'PHP različica',
    'php_gd_info'               => 'Za prikaz QR kod morate namestiti php-gd, glejte navodila za namestitev.',
    'php_gd_warning'            => 'PHP Obdelava slik in vtičnik GD nista nameščena.',
    'pwd_secure_complexity'     => 'Zapletenost gesla',
    'pwd_secure_complexity_help' => 'Izberite katera pravila zapletenosti gesel želite uveljaviti.',
    'pwd_secure_min'            => 'Minimalni znaki gesla',
    'pwd_secure_min_help'       => 'Najmanjša dovoljena vrednost je 5',
    'pwd_secure_uncommon'       => 'Preprečevanje pogostega gesla',
    'pwd_secure_uncommon_help'  => 'S tem uporabniki ne bodo mogli uporabljati pogostih gesel izmed 10.000 gesel, prijavljenih v kršitvah.',
    'qr_help'                   => 'Najprej omogočite QR kodo da nastavite to',
    'qr_text'                   => 'Besedilo QR kode',
    'setting'                   => 'Nastavitev',
    'settings'                  => 'Nastavitve',
    'show_alerts_in_menu'       => 'Pokaži opozorila v zgornjem meniju',
    'show_archived_in_list'     => 'Arhivirana sredstva',
    'show_archived_in_list_text'     => 'Prikaz arhiviranih sredstva v seznamu "vsa sredstva"',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Ime mesta',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack nastavitve',
    'slack_integration_help'    => 'Slack integracija je neobvezna, vendar je potrebna končna točka in kanal, če ga želite uporabiti. Če želite konfigurirati integracijo Slack, morate najprej <a href=":slack_link" target="_new">ustvariti dohodni spletnik</a> na vašem slack računu.',
    'slack_integration_help_button'    => 'Once you have saved your Slack information, a test button will appear.',
    'slack_test_help'           => 'Test whether your Slack integration is configured correctly. YOU MUST SAVE YOUR UPDATED SLACK SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT različica',
    'support_footer'            => 'Povezava do podpore v nogi ',
    'support_footer_help'       => 'Določite, kdo vidi povezave do informacij o podpori Snipe-IT in uporabniškega priročnika',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'Sistemske informacije',
    'update'                    => 'Posodobi nastavitve',
    'value'                     => 'Vrednost',
    'brand'                     => 'Branding',
    'about_settings_title'      => 'O nastavitvah',
    'about_settings_text'       => 'Te nastavitve vam omogočajo prilagoditev določenih vidikov vaše namestitve.',
    'labels_per_page'           => 'Nalepke na stran',
    'label_dimensions'          => 'Dimenzije nalepk (inch)',
    'next_auto_tag_base'        => 'Naslednje samodejno povečanje',
    'page_padding'              => 'Robovi strani (inch)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Počisti izbrisane zapise',
    'labels_display_bgutter'    => 'Oznaka spodnjega kanala',
    'labels_display_sgutter'    => 'Oznaka stranskega kanala',
    'labels_fontsize'           => 'Velikost pisave nalepke',
    'labels_pagewidth'          => 'Širina lista nalepk',
    'labels_pageheight'         => 'Višina lista nalepk',
    'label_gutters'        => 'Razmik med nalepkami (inch)',
    'page_dimensions'        => 'Dimenzije strani (inch)',
    'label_fields'          => 'Vidna polja nalepke',
    'inches'        => 'inch',
    'width_w'        => 'š',
    'height_h'        => 'v',
    'show_url_in_emails'                => 'Povezava na Snipe-IT v e-poštnih sporočilih',
    'show_url_in_emails_help_text'      => 'Počistite polje, če se ne želite povezati z namestitvijo Snipe-IT v njenih e-poštnih podnožjih. Uporabno, če se večina uporabnikov nikoli ne prijavlja. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max višina sličice',
    'thumbnail_max_h_help'   => 'Maksimalna višina v slikovnih pikah, sličic ki se lahko prikažejo v pogledu seznama. Min 25, največ 500.',
    'two_factor'        => 'Dvo-stopna avtentikacija',
    'two_factor_secret'        => 'Dvo-stopna koda',
    'two_factor_enrollment'        => 'Dvo-stopni vpis',
    'two_factor_enabled_text'        => 'Omogoči dvostopenjsko avtentikacijo',
    'two_factor_reset'        => 'Ponastavi dvo-stopenjsko skrivnost',
    'two_factor_reset_help'        => 'To bo prisililo uporabnika, da znova vnese svojo napravo z Google Authenticator. To je lahko uporabno, če je njihova trenutno vpisana naprava izgubljena ali ukradena. ',
    'two_factor_reset_success'          => 'Dvostopenjska naprava je bila uspešno ponastavljena',
    'two_factor_reset_error'          => 'Ponastavitev dvostopenjskih naprav ni uspela',
    'two_factor_enabled_warning'        => 'Omogočanje dvostopenjske avtentifikacije, če trenutno ni omogočeno, vas bo takoj prisililo, da se potrdite s storitvijo Google Auth. Imeli boste možnost vpisati svojo napravo, če niste včlanjeni.',
    'two_factor_enabled_help'        => 'S pomočjo storitve Google Authenticator se bo vklopilo dvostopenjsko preverjanje pristnosti.',
    'two_factor_optional'        => 'Selektivno (uporabniki lahko dovolijo ali onemogočijo, če imajo dovoljeno to funkcijo)',
    'two_factor_required'        => 'Zahtevano za vse uporabnike',
    'two_factor_disabled'        => 'Onemogočeno',
    'two_factor_enter_code'	=> 'Vnesite dvo-stopenjsko kodo',
    'two_factor_config_complete'	=> 'Pošlji kodo',
    'two_factor_enabled_edit_not_allowed' => 'Vaš skrbnik vam ne dovoli urejanja te nastavitve.',
    'two_factor_enrollment_text'	=> "Zahtevano je dvo-stopenjsko preverjanje pristnosti, vendar vaša naprava še ni bila včlanjena. Odprite aplikacijo Google Authenticator in si oglejte spodnjo kodo QR, če želite vnesti svojo napravo. Ko vnesete napravo, vnesite spodnjo kodo",
    'require_accept_signature'      => 'Zahtevaj podpis',
    'require_accept_signature_help_text'      => 'Če omogočite to funkcijo, se bodo uporabniki morali fizično odjaviti ob sprejemu sredstva.',
    'left'        => 'levo',
    'right'        => 'desno',
    'top'        => 'na vrh',
    'bottom'        => 'na dno',
    'vertical'        => 'navpično',
    'horizontal'        => 'vodoravno',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Dolžina oznak sredstev, vključno z zerofilom',
);
