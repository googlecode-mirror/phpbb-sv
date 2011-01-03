<?php
/** 
*
* ucp [Swedish] (phpBB 3.0.7)
*
* @package language
* @version $Id$
* @copyright (c) 2006 phpBB Group, modified and translated by Swedish translation team
* @source file is copyright (c) 2005 phpBB Group, modified and translated by Swedish translation team
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
* @author (c) 2006-2008 Jonathan Gulbrandsen 
* Translators: Swedish translation team, working at http://www.phpbb-se.com contact translation team leader at peetra.mammapappa@gmail.com 
*
* This file is part of the Swedish language package for phpBB 3.0.x.
* Copyright (c) 2006-2010 Swedish translation team
*
* The Swedish language package for phpBB 3.0.x is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License as published by the Free Software
* Foundation, version 2 of the License.
*
* The Swedish Language package for phpBB 3.0.x is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
* A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with this language
* package. If not, see <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>.
*
*/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Genom att besöka “%1$s” (hädanefter “vi”, “oss”, “vår”, “%1$s”, “%2$s”), så godkänner du att du binder dig juridiskt till följande avtal. Om du inte godkänner följande avtal, besök inte eller använd inte “%1$s”. Vi kan ändra detta avtal när som helst och vi kommer att göra allt för att informera dig om ändringar, men det vore klokt av dig att granska denna sida regelbundet på egen hand eftersom fortsatt användning av “%1$s” även efter ändringar innebär att du godkänner att du är juridiskt bunden till detta avtal.<br />
	<br />
	Vårt forum drivs av phpBB (hädanefter “de”, “dem”, “deras”, “phpBB mjukvara”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) som är en forumprogramvara tillgänglig under “<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>” (hädanefter “GPL”) och kan laddas ner från <a href="http://www.phpbb.com/">www.phpbb.com</a>. phpBB mjukvaran främjar endast Internetbaserade diskussioner, phpBB Group är inte ansvariga för vad vi tillåter och/eller förbjuder för innehåll och/eller uppförande. För mer information om phpBB, besök <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Du går med på att inte posta något grovt, obscent, vulgärt, förtalande, hatiskt, hotande, sexuellt orienterat eller något annat material som kan bryta mot lagarna i ditt land, lagar i landet där “%1$s” finns, eller internationell lag. Om du bryter mot detta så kan det leda till omedelbar och permanent bannlysning samt att vi kontaktar din Internetleverantör. IP-adressen för alla inlägg sparas. Du går med på att “%1$s” har rätten att ta bort, redigera, flytta eller stänga vilka trådar som helst, när som helst. Som användare godkänner du att all information du skriver in sparas i en databas. Denna information kommer inte att delges till någon tredje part utan ditt samtycke, men varken “%1$s” eller phpBB kan hållas ansvariga för eventuella intrångsförsök som kan leda till att information komprometteras.
	',
	'PRIVACY_POLICY'		=> 'Denna policy förklarar i detalj hur “%1$s” och deras partners (hädanefter “vi”, “oss”, “vår”, “%1$s”, “%2$s”) och phpBB (hädanefter “de”, “dem”, “deras”, “phpBB mjukvara”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) använder information som samlas in under din användning av webbplatsen (hädanefter “din information”).<br />
	<br />
	Din information samlas in på två sätt. För det första, genom att besöka “%1$s” så kommer phpBB mjukvaran att skapa ett antal cookies, vilket är små textfiler som laddas ner till din dators webbläsares temporära filer. De två första cookisarna innehåller bara en användaridentifierare (hädanefter “användar-id”) och en anonym sessionsidentifierare (hädanefter “sessions-id”), som automatiskt tilldelas dig av phpBB mjukvaran. En tredje cookie kommer skapas när du väl läst några trådar på “%1$s” och används för att komma ihåg vilka trådar som har lästs och inte lästs, och på detta sätt förbättras din användarupplevelse.<br />
	<br />
	Vi kan också möjligen skapa cookies utanför phpBB mjukvaran när du besöker “%1$s”, men dessa ligger utanför detta dokument som endast är till för att täcka sidorna som skapats av phpBB mjukvaran. Det andra sättet vi samlar in din information är genom vad du skickar till oss. Detta kan vara, men är inte begränsat till: inlägg gjorda som anonym besökare (hädanefter “anonyma inlägg”), registrering på “%1$s” (hädanefter “ditt konto”) och inlägg sparade av dig efter din registrering och medan du är inloggad (hädanefter “dina inlägg”).<br />
	<br />
	Ditt konto kommer alltid minst innehålla ett unikt identifierbart namn (hädanefter “ditt användarnamn”), ett personligt lösenord som används för att logga in på ditt konto (hädanefter “ditt lösenord”) och en personlig, giltig e-postadress (hädanefter “din e-postadress”). Informationen i ditt konto på “%1$s” skyddas av dataskyddslagar i landet som vi finns i. All information utöver ditt användarnamn, lösenord och din e-postadress som krävs av “%1$s” under registreringsprocessen är endera obligatorisk eller frivillig, enligt forumledningens val. Du kan enligt forumledningens val välja vilken information i ditt konto som ska visas publikt. Vidare så kan du, i ditt konto, välja vilka automatiskt genererade e-postmeddelanden phpBB mjukvaran skickar ut som du vill ha och inte ha.<br />
	<br />
	Ditt lösenord är chiffrerat (genom ett envägs-hash) så att det är säkert. Dock är det rekommenderat att du inte använder samma lösenord på flera olika webbplatser. Ditt lösenord är vägen in till ditt konto på “%1$s”, så skydda det noga. Aldrig under några som helst omständigheter kommer någon från “%1$s”, phpBB eller annan tredje part att fråga dig efter ditt lösenord. Om du glömmer bort ditt lösenord så kan du använda “Jag har glömt mitt lösenord”-funktionen som finns i phpBB mjukvaran. Denna process kommer att be dig om ditt användarnamn och din e-postadress, sen kommer phpBB mjukvaran skicka dig ett nytt lösenord till din e-postadress.<br />
	',
));
// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Ditt konto aktiverades. Tack för att du registrerade dig.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Kontot aktiverades.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Ditt konto återaktiverades.',
	'ACCOUNT_ADDED'					=> 'Tack för att du registrerade dig, ditt konto skapades. Du kan nu logga in med ditt användarnamn och lösenord.',
	'ACCOUNT_COPPA'					=> 'Ditt konto skapades men måste godkännas innan du kan använda det, läs din e-post för vidare instruktioner.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Ditt konto skapades. Dock kräver detta forum att alla konton återaktiverats efter ändring av e-postadressen. En aktiveringsnyckel har skickats till din nya e-postadress. Läs din e-post för vidare instruktioner.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Ditt konto skapades. Dock kräver detta forum att alla konton återaktiverats av en administratör efter ändring av e-postadressen. Ett e-postmeddelande har skickats till administratörerna och du kommer informeras när ditt konto återaktiverats.',
	'ACCOUNT_INACTIVE'				=> 'Ditt konto skapades. Dock kräver detta forum att alla konton aktiveras innan de kan användas. En aktiveringsnyckel har skickats till dig till den e-postadress du angav. Läs din e-post för vidare instruktioner.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Ditt konto skapades. Dock kräver detta forum att alla konton aktiveras av administratörsgruppen innan de kan användas. Ett e-postmeddelande har skickats till administratörerna och du kommer att informeras när ditt konto har aktiverats.',
	'ACTIVATION_EMAIL_SENT'         => 'Ett e-postmeddelande för aktivering av ditt konto har skickats till din e-postadress.',
	'ACTIVATION_EMAIL_SENT_ADMIN'   => 'Ett e-postmeddelande för aktivering av ditt konto har skickats till administratörerna.',
	'ADD'							=> 'Lägg till',
	'ADD_BCC'						=> 'Lägg till [Dold kopia]',
	'ADD_FOES'						=> 'Lägg till nya ovänner',
	'ADD_FOES_EXPLAIN'				=> 'Du kan skriva in flera användarnamn, ett på varje rad.',
	'ADD_FOLDER'					=> 'Lägg till mapp',
	'ADD_FRIENDS'					=> 'Lägg till nya vänner',
	'ADD_FRIENDS_EXPLAIN'			=> 'Du kan skriva in flera användarnamn, ett på varje rad.',
	'ADD_NEW_RULE'					=> 'Lägg till ny regel',
	'ADD_RULE'						=> 'Lägg till regel',
	'ADD_TO'						=> 'Lägg till',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Här kan du lägga till nya medlemmar till gruppen. Du kan göra gruppen till standardgrupp för de valda användarna. Ange varje användarnamn på en ny rad.',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Här kan du lägga till nya medlemmar till gruppen. Du kan göra gruppen till standardgrupp för de valda användarna. Ange varje användarnamn på en ny rad.',
	'ADMIN_EMAIL'					=> 'Administratörer kan skicka mig information via e-post',
	'AGREE'							=> 'Jag godkänner detta avtal',
	'ALLOW_PM'						=> 'Tillåt att andra användare skickar personliga meddelanden till mig',
	'ALLOW_PM_EXPLAIN'				=> 'Observera att administratörer och moderatorer alltid kommer att kunna skicka meddelanden till dig.',
	'ALREADY_ACTIVATED'				=> 'Du har redan aktiverat ditt konto.',
	'ATTACHMENTS_EXPLAIN'			=> 'Detta är en lista över filer du har bifogat till inlägg på detta forum.',
	'ATTACHMENTS_DELETED'			=> 'Bilagorna togs bort.',
	'ATTACHMENT_DELETED'			=> 'Bilagan togs bort.',
	'AVATAR_CATEGORY'				=> 'Kategori',
	'AVATAR_EXPLAIN'				=> 'Maximalstorlek; bredd: %1$d pixlar, höjd: %2$d pixlar, filstorlek: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Stödet för visningsbilder är för närvarande inaktiverat.',
	'AVATAR_GALLERY'				=> 'Lokalt galleri',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Kunde inte ladda upp visningsbild till %s.',
	'AVATAR_NOT_ALLOWED'			=> 'Din visningsbild kan inte visas, eftersom funktionen för visning av visningsbilder har inaktiverats.',
	'AVATAR_PAGE'					=> 'Sida',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Din nuvarande visningsbild kan inte visas, eftersom denna typ av visningsbilder har förbjudits.',

	'BACK_TO_DRAFTS'			=> 'Tillbaka till sparade utkast',
	'BACK_TO_LOGIN'				=> 'Tillbaka till inloggningsskärmen',
	'BIRTHDAY'					=> 'Födelsedag',
	'BIRTHDAY_EXPLAIN'			=> 'Genom att ange ett år så kommer din ålder att visas när det är din födelsedag.',
	'BOARD_DATE_FORMAT'			=> 'Mitt datumformat',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Använd samma syntax som för PHPs <a href="http://www.php.net/date">date()</a>-funktion för inställning av detta fält.',
	'BOARD_DST'					=> 'Sommartid/<abbr title="Daylight Saving Time">DST</abbr> är aktiverat',
	'BOARD_LANGUAGE'			=> 'Mitt språk',
	'BOARD_STYLE'				=> 'Min stil',
	'BOARD_TIMEZONE'			=> 'Min tidszon',
	'BOOKMARKS'					=> 'Bokmärken',
	'BOOKMARKS_EXPLAIN'			=> 'Du kan lägga till trådar som bokmärken för framtida bruk. Kryssa i rutorna för de bokmärken som du vill ta bort och klicka på <em>Ta bort markerade bokmärken</em>.',
	'BOOKMARKS_DISABLED'		=> 'Bokmärken är inaktiverade på detta forum.',
	'BOOKMARKS_REMOVED'			=> 'Bokmärkena togs bort.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Du kan inte längre redigera eller ta bort det meddelandet.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Meddelandena kan inte flyttas till den mapp som du vill ta bort.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Meddelanden kan inte flyttas från utkorgen.',
	'CANNOT_RENAME_FOLDER'		=> 'Det går inte att byta namn på denna mapp.',
	'CANNOT_REMOVE_FOLDER'		=> 'Det går inte att ta bort denna mapp.',
	'CHANGE_DEFAULT_GROUP'		=> 'Byt standardgrupp',
	'CHANGE_PASSWORD'			=> 'Byt lösenord',
	'CLICK_RETURN_FOLDER'		=> '%1$sÅtergå till din “%3$s”-mapp%2$s',
	'CONFIRMATION'				=> 'Verifiering av registrering',
	'CONFIRM_CHANGES'			=> 'Bekräfta ändringar',
	'CONFIRM_EMAIL'				=> 'Bekräfta e-postadress',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Du måste endast ange detta om du vill byta e-postadress.',
	'CONFIRM_EXPLAIN'			=> 'För att förhindra automatiska registreringar så kräver forumet att du här skriver in en verifieringskod. Koden visas i bilden nedan. Om du ser dåligt eller av annan anledning inte kan se koden, kontakta %sforumadministratörerna%s.',
	'VC_REFRESH'				=> 'Uppdatera verifieringskod',
	'VC_REFRESH_EXPLAIN'		=> 'Om du inte ser koden  på bilden, så kan du be om en ny genom att klicka på knappen under.',

	'CONFIRM_PASSWORD'			=> 'Bekräfta lösenord',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Du måste endast bekräfta ditt lösenord om du ändrade det ovan.',
	'COPPA_BIRTHDAY'			=> 'För att fortsätta med registreringen, berätta när du föddes.',
	'COPPA_COMPLIANCE'			=> 'COPPA',
	'COPPA_EXPLAIN'				=> 'Genom att klicka på <em>Skicka</em> så kommer ditt konto skapats. Dock kan det inte aktiveras förrän en förälder eller förmyndare godkänt din registrering. Du kommer få ett e-postmeddelande med formuläret du måste fylla i och med detaljer var det ska skickas.',
	'CREATE_FOLDER'				=> 'Lägg till  mapp…',
	'CURRENT_IMAGE'				=> 'Nuvarande bild',
	'CURRENT_PASSWORD'			=> 'Nuvarande lösenord',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Du måste bekräfta med ditt nuvarande lösenord om du vill byta lösenord, e-postadress eller användarnamn.',
	'CUR_PASSWORD_ERROR'		=> 'Lösenordet du angav är felaktigt.',
	'CUSTOM_DATEFORMAT'			=> 'Eget…',

	'DEFAULT_ACTION'			=> 'Standardåtgärd',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Denna åtgärd kommer att utlösas om ingen av de ovanstående är tillämpliga.',
	'DEFAULT_ADD_SIG'			=> 'Infoga min signatur som standard',
	'DEFAULT_BBCODE'			=> 'Aktivera BBCode som standard',
	'DEFAULT_NOTIFY'			=> 'Meddela mig vid svar som standard',
	'DEFAULT_SMILIES'			=> 'Aktivera smilies som standard',
	'DEFINED_RULES'				=> 'Definierade regler',
	'DELETED_TOPIC'				=> 'Tråden togs bort.',
	'DELETE_ATTACHMENT'			=> 'Ta bort bilaga',
	'DELETE_ATTACHMENTS'		=> 'Ta bort bilagor',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Är du säker på att du vill ta bort denna bilaga?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Är du säker på att du vill ta bort dessa bilagor?',
	'DELETE_AVATAR'				=> 'Ta bort bild',
	'DELETE_COOKIES_CONFIRM'	=> 'Är du säker på att du vill ta bort alla cookies som skapats av detta forum?',
	'DELETE_MARKED_PM'			=> 'Ta bort markerade meddelanden',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Är du säker på att du vill ta bort alla markerade meddelanden?',
	'DELETE_OLDEST_MESSAGES'	=> 'Ta bort äldsta meddelandena',
	'DELETE_MESSAGE'			=> 'Ta bort meddelande',
	'DELETE_MESSAGE_CONFIRM'	=> 'Är du säker på att du vill ta bort detta personliga meddelande?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Ta bort alla meddelanden',
	'DELETE_RULE'				=> 'Ta bort regel',
	'DELETE_RULE_CONFIRM'		=> 'Är du säker på att du vill ta bort denna regel?',
	'DEMOTE_SELECTED'			=> 'Säg upp ledarskap för vald grupp',
	'DISABLE_CENSORS'			=> 'Aktivera ordcensur',
	'DISPLAY_GALLERY'			=> 'Visa galleri',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Den angivna e-postdomänen har ingen giltigt MX-pekning.',
	'DOWNLOADS'					=> 'Nerladdningar',
	'DRAFTS_DELETED'			=> 'Alla valda utkast togs bort.',
	'DRAFTS_EXPLAIN'			=> 'Här kan du se, redigera och ta bort dina sparade utkast.',
	'DRAFT_UPDATED'				=> 'Utkastet uppdaterades.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Här kan du redigera dina utkast. Utkasten innehåller ingen bilage- eller omröstningsinformation.',
	'EMAIL_BANNED_EMAIL'		=> 'E-postadressen du angav får inte användas.',
	'EMAIL_INVALID_EMAIL'		=> 'E-postadressen du angav är ogiltig.',
	'EMAIL_REMIND'				=> 'Detta måste vara e-postadressen som är associerad med ditt konto. Om du inte har ändrat den via kontrollpanelen så är detta e-postadressen som du registrerade ditt konto med.',
	'EMAIL_TAKEN_EMAIL'			=> 'Den angivna e-postadressen används redan av en annan användare.',
	'EMPTY_DRAFT'				=> 'Du måste skriva ett meddelande för att spara dina ändringar.',
	'EMPTY_DRAFT_TITLE'			=> 'Du måste ange en utkaststitel.',
	'EXPORT_AS_XML'				=> 'Exportera som XML',
	'EXPORT_AS_CSV'				=> 'Exportera som CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Exportera som CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Exportera som TXT',
	'EXPORT_AS_MSG'				=> 'Exportera som MSG',
	'EXPORT_FOLDER'				=> 'Exportera denna vy',

	'FIELD_REQUIRED'					=> 'Fältet “%s” måste fyllas i.',
	'FIELD_TOO_SHORT'					=> 'Fältet “%1$s” är för kort, minst %2$d tecken krävs.',
	'FIELD_TOO_LONG'					=> 'Fältet “%1$s” är för långt, maximalt %2$d tecken är tillåtna.',
	'FIELD_TOO_SMALL'					=> 'Värdet av “%1$s” är för lågt, det måsta vara lika med eller högre än %2$d.',
	'FIELD_TOO_LARGE'					=> 'Värdet av “%1$s” är för högt, det största värdet som är tillåtet är %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Fältet “%s” innehåller felaktiga tecken, endast siffror är tillåtna.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Fältet “%s” innehåller felaktiga tecken, endast alfanumeriska tecken är tillåtna.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Fältet “%s” innehåller felaktiga tecken, endast alfanumeriska tecken, mellanslag och -+_[] är tillåtna.',
	'FIELD_INVALID_DATE'				=> 'Fältet “%s” innehåller ett felaktigt datum.',
	'FOE_MESSAGE'				=> 'Meddelande från ovän',
	'FOES_EXPLAIN'				=> 'Ovänner är användare som kommer att ignoreras automatiskt. Inlägg av dessa användare kommer inte att visas helt. Personliga meddelanden från ovänner tillåts fortfarande. Observera att du inte kan ignorera moderatorer eller administratörer.',
	'FOES_UPDATED'				=> 'Din lista över ovänner uppdaterades.',
	'FOLDER_ADDED'				=> 'Mappen lades till.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d av %2$d meddelanden lagrade',
	'FOLDER_NAME_EMPTY'			=> 'Du måste ange ett namn för denna mapp.',
	'FOLDER_NAME_EXIST'			=> 'Mappen <strong>%s</strong> finns redan.',
	'FOLDER_OPTIONS'			=> 'Mappalternativ',
	'FOLDER_RENAMED'			=> 'Bytte namn på mappen.',
	'FOLDER_REMOVED'			=> 'Mappen togs bort.',
	'FOLDER_STATUS_MSG'			=> 'Mappen är %1$d%% full (%2$d av %3$d meddelanden lagrade)',
	'FORWARD_PM'				=> 'Vidarebefordra PM',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Innan du kan fortsätta så måste du byta ditt lösenord.',
	'FRIEND_MESSAGE'			=> 'Meddelande från vän',
	'FRIENDS'					=> 'Vänner',
	'FRIENDS_EXPLAIN'			=> 'Vänskapslistan ger dig snabb tillgång till medlemmar du ofta kommunicerar med. Inlägg gjorda av vänner kan framhävas om forumstilen stöder det.',
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'Din lista lista över vänner uppdaterades.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Åtgärden som ska utföras när en mapp är full har ändrats.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Originalmeddelande --------',
	'FWD_SUBJECT'				=> 'Ämne: %s',
	'FWD_DATE'					=> 'Datum: %s',
	'FWD_FROM'					=> 'Från: %s',
	'FWD_TO'					=> 'Till: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Globalt meddelande',

	'HIDE_ONLINE'				=> 'Dölj att jag är online',
	'HIDE_ONLINE_EXPLAIN'		=> 'Om du ändrar denna inställning så kommer det nya valet inte att börja gälla förrän ditt nästa besök.',
	'HOLD_NEW_MESSAGES'			=> 'Ta inte emot nya meddelanden (Nya meddelanden kommer att hållas tillbaka tills tillräckligt med utrymme finns)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Nya meddelanden hålls tillbaka',

	'IF_FOLDER_FULL'			=> 'Om mappen är full',
	'IMPORTANT_NEWS'			=> 'Viktiga meddelanden',
	'INVALID_USER_BIRTHDAY'		=> 'Födelsedagen som angavs är inte ett giltigt datum.',
	'INVALID_CHARS_USERNAME'	=> 'Användarnamnet innehåller förbjudna tecken.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Lösenordet innehåller inte de tecken som krävs.',
	'ITEMS_REQUIRED'			=> 'Fält märkta med * måste fyllas i.',

	'JOIN_SELECTED'				=> 'Gå med i vald grupp',

	'LANGUAGE'					=> 'Språk',
	'LINK_REMOTE_AVATAR'		=> 'Länk utanför denna webbplats',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Ange URL:en för platsen som innehåller visningsbilden som du vill länka till.',
	'LINK_REMOTE_SIZE'			=> 'Dimensioner för visningsbild',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Ange bredden och höjden på visningsbilden, lämna tomt för att försöka automatiskt.',
	'LOGIN_EXPLAIN_UCP'			=> 'Logga in för att visa kontrollpanelen.',
	'LOGIN_REDIRECT'			=> 'Du loggades in.',
 	'LOGOUT_FAILED'				=> 'Du loggades inte ut, eftersom din begäran inte matchade din session. Kontakta forumadministratörerna om problemet kvarstår.',
	'LOGOUT_REDIRECT'			=> 'Du loggades ut.',

	'MARK_IMPORTANT'				=> 'Märk/Avmärk som viktig',
	'MARKED_MESSAGE'				=> 'Märkt meddelande',
	'MAX_FOLDER_REACHED'			=> 'Det maximala antalet användarskapade mappar har uppnåtts.',
	'MESSAGE_BY_AUTHOR'				=> 'från',
	'MESSAGE_COLOURS'				=> 'Meddelandefärger',
	'MESSAGE_DELETED'				=> 'Meddelandet togs bort.',
	'MESSAGE_HISTORY'				=> 'Meddelandehistorik',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Detta meddelande togs bort av dess författare innan det levererats.',
	'MESSAGE_SENT_ON'				=> '',
	'MESSAGE_STORED'				=> 'Meddelandet skickades.',
	'MESSAGE_TO'					=> 'Till',
	'MESSAGES_DELETED'				=> 'Meddelandena togs bort',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Flytta meddelandena till',
	'MOVE_DOWN'						=> 'Flytta ner',
	'MOVE_MARKED_TO_FOLDER'			=> 'Flytta markerade till %s',
	'MOVE_PM_ERROR'					=> 'Ett fel uppstod när meddelandena flyttades till den nya mappen, endast %1d av %2d meddelanden flyttades.',
	'MOVE_TO_FOLDER'				=> 'Flytta till mapp',
	'MOVE_UP'						=> 'Flytta upp',

	'NEW_EMAIL_ERROR'				=> 'E-postadresserna du angav stämmer inte överens.',
	'NEW_FOLDER_NAME'				=> 'Nytt mappnamn',
	'NEW_PASSWORD'					=> 'Nytt lösenord',
	'NEW_PASSWORD_ERROR'			=> 'Lösenorden du angav stämmer inte överens.',
	'NOTIFY_METHOD'					=> 'Meddelningsmetod',
	'NOTIFY_METHOD_BOTH'			=> 'Båda',
	'NOTIFY_METHOD_EMAIL'			=> 'Endast via e-post',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Metod för att skicka meddelanden som skickats via detta forum.',
	'NOTIFY_METHOD_IM'				=> 'Endast via Jabber',
	'NOTIFY_ON_PM'					=> 'Meddela mig vid nya personliga meddelanden',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Du kan inte lägga till den anonyma användaren till din lista över vänner.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Du kan inte lägga till sökrobotar till din lista över vänner.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Du kan inte lägga till dina ovänner på din lista över vänner.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Du kan inte lägga till dig själv till din lista över vänner.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Du kan inte lägga till administratörer och moderatorer till din lista över ovänner.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Du kan inte lägga till den anonyma användaren till din lista över ovänner.',
	'NOT_ADDED_FOES_BOTS'			=> 'Du kan inte lägga till sökrobotar till din lista över ovänner.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Du kan inte lägga till vänner till din lista över ovänner.',
	'NOT_ADDED_FOES_SELF'			=> 'Du kan inte lägga till dig själv till din lista över ovänner.',
	'NOT_AGREE'						=> 'Jag godkänner inte detta avtal',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Destinationsmappen “%s” verkar vara full. Den valda åtgärden har inte utförts.',
	'NOT_MOVED_MESSAGE'				=> 'Du har 1 personligt meddelande som hålls tillbaka på grund av full mapp.',
	'NOT_MOVED_MESSAGES'			=> 'Du har %d personliga meddelanden som hålls tillbaka på grund av full mapp.',
	'NO_ACTION_MODE'				=> 'Ingen meddelandeåtgärd specificerad.',
	'NO_AUTHOR'						=> 'Ingen författare definierad för detta meddelande',
	'NO_AVATAR_CATEGORY'			=> 'Ingen',
	'NO_AUTH_DELETE_MESSAGE'		=> 'Du har inte behörighet att ta bort personliga meddelanden.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Du har inte behörighet att redigera personliga meddelanden.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Du har inte behörighet att vidarebefordra personliga meddelanden.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Du har inte behörighet att skicka personliga meddelanden till grupper.',
 	'NO_AUTH_PASSWORD_REMINDER'		=> 'Du har inte behörighet att be om ett nytt lösenord.',
 	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Du har inte behörighet att läsa privata meddelanden som hålls tillbaka.',
	'NO_AUTH_READ_MESSAGE'			=> 'Du har inte behörighet att läsa personliga meddelanden.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Du kan inte läsa detta meddelande eftersom det togs bort av dess författare.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Du har inte behörighet att skicka personliga meddelanden.',
	'NO_AUTH_SIGNATURE'				=> 'Du har inte behörighet att använda signaturer.',
	'NO_BCC_RECIPIENT'			=> 'Ingen',
	'NO_BOOKMARKS'				=> 'Du har inga bokmärken.',
	'NO_BOOKMARKS_SELECTED'		=> 'Du valde inga bokmärken.',
	'NO_EDIT_READ_MESSAGE'		=> 'Personligt meddelande kan inte redigeras eftersom det redan har lästs.',
	'NO_EMAIL_USER'				=> 'Det finns ingen användare med den e-postadressen och användarnamnet.',
	'NO_FOES'					=> 'Inga ovänner definierade',
	'NO_FRIENDS'				=> 'Inga vänner definierade',
	'NO_FRIENDS_OFFLINE'		=> 'Inga vänner offline',
	'NO_FRIENDS_ONLINE'			=> 'Inga vänner online',
	'NO_GROUP_SELECTED'			=> 'Inga grupper angivna.',
	'NO_IMPORTANT_NEWS'			=> 'Inga viktiga anslag.',
	'NO_MESSAGE'				=> 'Det personliga meddelandet kunde inte hittas.',
	'NO_NEW_FOLDER_NAME'		=> 'Du måste ange ett nytt mappnamn.',
	'NO_NEWER_PM'				=> 'Inga nyare meddelanden.',
	'NO_OLDER_PM'				=> 'Inga äldre meddelanden.',
 	'NO_PASSWORD_SUPPLIED'		=> 'Du kan inte logga in utan ett lösenord.',
	'NO_RECIPIENT'				=> 'Ingen mottagare angiven.',
	'NO_RULES_DEFINED'			=> 'Inga regler definierade.',
	'NO_SAVED_DRAFTS'			=> 'Inga utkast sparade.',
	'NO_TO_RECIPIENT'			=> 'Ingen',
	'NO_WATCHED_FORUMS'			=> 'Du bevakar inga kategorier.',
	'NO_WATCHED_SELECTED'		=> 'Du har inte valt någon bevakad tråd eller kategori.',
	'NO_WATCHED_TOPICS'			=> 'Du bevakar inga trådar.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Lösenordet måste vara mellan %1$d och %2$d tecken långt och måste innehålla både stora och små bokstäver samt siffror.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Måste vara mellan %1$d och %2$d tecken.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Lösenordet måste vara mellan %1$d och %2$d tecken långt och måste innehålla både stora och små bokstäver.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Lösenordet måste vara mellan %1$d och %2$d tecken långt och måste innehålla både stora och små bokstäver, symboler samt siffror.',
 	'PASSWORD'					=> 'Lösenord',
	'PASSWORD_ACTIVATED'		=> 'Ditt nya lösenord aktiverades.',
	'PASSWORD_UPDATED'			=> 'Instruktioner om ditt nya lösenord skickades till den e-postadress, som är förknipad med ditt forumkonto.',
	'PERMISSIONS_RESTORED'		=> 'Återställde ursprungliga behörigheter.',
	'PERMISSIONS_TRANSFERRED'	=> 'Överförde behörigheter från <strong>%s</strong>, du kan nu använda forumet med användarens behörigheter.<br />Administrationsbehörigheter överfördes inte. Du kan återgå till dina egna behörigheter när som helst.',
	'PM_DISABLED'				=> 'Personliga meddelanden har inaktiverats på detta forum.',
	'PM_FROM'					=> 'Från',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Detta meddelande skickades från en användare som inte längre är registrerad.',
	'PM_ICON'					=> 'PM-ikon',
	'PM_INBOX'					=> 'Inkorg',
 	'PM_NO_USERS'				=> 'De valda användarna finns inte.',
	'PM_OUTBOX'					=> 'Utkorg',
	'PM_SENTBOX'				=> 'Skickat',
	'PM_SUBJECT'				=> 'Meddelandeämne',
	'PM_TO'						=> 'Skickat till',
	'PM_USERS_REMOVED_NO_PM'	=> 'Vissa av användarna kunde inte läggas till eftersom de har inaktiverat mottagande av personliga meddelanden.',
	'POPUP_ON_PM'				=> 'Öppna ett popup-fönster vid nytt personligt meddelande',
	'POST_EDIT_PM'				=> 'Redigera meddelande',
	'POST_FORWARD_PM'			=> 'Vidarebefordra meddelande',
	'POST_NEW_PM'				=> 'Skriv meddelande',
	'POST_PM_LOCKED'			=> 'Personliga meddelanden är låst.',
	'POST_PM_POST'				=> 'Citera inlägg',
	'POST_QUOTE_PM'				=> 'Citera meddelande',
	'POST_REPLY_PM'				=> 'Svara på meddelande',
	'PRINT_PM'					=> 'Utskriftsvänlig version',
	'PREFERENCES_UPDATED'		=> 'Dina inställningar sparades.',
	'PROFILE_INFO_NOTICE'		=> 'Denna information kan komma att visas för andra medlemmar. Var försiktig med personlig information. Fält märkta med * måste fyllas i.',
	'PROFILE_UPDATED'			=> 'Din profil uppdaterades.',

	'RECIPIENT'							=> 'Mottagare',
	'RECIPIENTS'						=> 'Mottagare',
	'REGISTRATION'						=> 'Registrering',
	'RELEASE_MESSAGES'					=> '%sSläpp alla tillbakahållna meddelanden%s… de kommer sorteras in i passande mapp om det finns tillräckligt med plats.',
	'REMOVE_ADDRESS'					=> 'Ta bort adress',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Ta bort valda bokmärken',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Är du säker på att du vill ta bort alla valda bokmärken?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Ta bort markerade bokmärken',
	'REMOVE_FOLDER'						=> 'Ta bort mapp',
	'REMOVE_FOLDER_CONFIRM'				=> 'Är du säker på att du vill ta bort denna mapp?',
	'RENAME'							=> 'Byt namn',
	'RENAME_FOLDER'						=> 'Byt namn på mappen',
	'REPLIED_MESSAGE'					=> 'Besvarat meddelande',
	'REPLY_TO_ALL'						=> 'Svara åt avsändaren och alla mottagare.',
	'REPORT_PM'							=> 'Rapportera personligt meddelande',
	'RESIGN_SELECTED'					=> 'Lämna vald grupp',
	'RETURN_FOLDER'						=> '%1$sÅtergå till föregående mapp%2$s',
	'RETURN_UCP'						=> '%sÅtergå till kontrollpanelen%s',
	'RULE_ADDED'						=> 'Lade till regel.',
	'RULE_ALREADY_DEFINED'				=> 'Denna regel fanns redan.',
	'RULE_DELETED'						=> 'Tog bort regel.',
	'RULE_NOT_DEFINED'					=> 'Regeln är felaktig.',
	'RULE_REMOVED_MESSAGE'				=> 'Ett personligt meddelande togs bort enligt angiven regel.',
	'RULE_REMOVED_MESSAGES'				=> '%d personliga meddelanden togs bort enligt angiven regel.',

	'SAME_PASSWORD_ERROR'		=> 'Det nya lösenordet du angav är samma som ditt nuvarande lösenord.',
	'SEARCH_YOUR_POSTS'			=> 'Visa dina inlägg',
	'SEND_PASSWORD'				=> 'Skicka lösenord',
	'SENT_AT'					=> 'Skickat',
	'SHOW_EMAIL'				=> 'Användare kan kontakta mig via e-post',
	'SIGNATURE_EXPLAIN'			=> 'Detta är ett textstycke som kan läggas till på slutet av inlägg som du gör. Maxlängd är %d tecken.',
	'SIGNATURE_PREVIEW'			=> 'Din signatur kommer att se ut så här i inlägg',
	'SIGNATURE_TOO_LONG'		=> 'Din signatur är för lång.',
	'SORT'						=> 'Sortera',
	'SORT_COMMENT'				=> 'Filkommentar',
	'SORT_DOWNLOADS'			=> 'Nerladdningar',
	'SORT_EXTENSION'			=> 'Filtyp',
	'SORT_FILENAME'				=> 'Filnamn',
	'SORT_POST_TIME'			=> 'Inläggstid',
	'SORT_SIZE'					=> 'Filstorlek',

	'TIMEZONE'					=> 'Tidszon',
	'TO'						=> 'Till',
	'TOO_MANY_RECIPIENTS'		=> 'Du försökte sända ett privat meddelande till för många mottagare.',
	'TOO_MANY_REGISTERS'		=> 'Du har överskridit det maximala antalet tillåtna registreringsförsök för denna session. Försök igen senare.',

	'UCP'						=> 'Kontrollpanel',
	'UCP_ACTIVATE'				=> 'Aktivera konto',
	'UCP_ADMIN_ACTIVATE'		=> 'Observera att du måste ange en giltig e-postadress för att ditt konto ska kunna aktiveras. Forumadministratörerna kommer att granska ditt konto och om det godkänns så kommer du då att få ett e-postmeddelande till e-postadressen du anger.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Bilagor',
	'UCP_COPPA_BEFORE'			=> 'Före %s',
	'UCP_COPPA_ON_AFTER'		=> 'På eller efter %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Observera att du måste ange en giltig e-postadress för att ditt konto ska kunna aktiveras. Du kommer att få ett e-postmeddelande till e-postadressen du anger med en kontoaktiveringslänk.',
	'UCP_ICQ'					=> 'ICQ-nummer',
	'UCP_JABBER'				=> 'Jabber-adress',
	'UCP_MAIN'					=> 'Översikt',
	'UCP_MAIN_ATTACHMENTS'		=> 'Hantera bilagor',
	'UCP_MAIN_BOOKMARKS'		=> 'Hantera bokmärken',
	'UCP_MAIN_DRAFTS'			=> 'Hantera utkast',
	'UCP_MAIN_FRONT'			=> 'Förstasidan',
	'UCP_MAIN_SUBSCRIBED'		=> 'Hantera bevakningar',
	'UCP_MSNM'					=> 'Windows Live Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Du har inte bifogat några filer.',
	'UCP_PREFS'					=> 'Inställningar',
	'UCP_PREFS_PERSONAL'		=> 'Ändra globala inställningar',
	'UCP_PREFS_POST'			=> 'Ändra postningsstandarder',
	'UCP_PREFS_VIEW'			=> 'Ändra visningsinställningar',
	'UCP_PM'					=> 'Personliga meddelanden',
	'UCP_PM_COMPOSE'			=> 'Skriv meddelande',
	'UCP_PM_DRAFTS'				=> 'Hantera PM-utkast',
	'UCP_PM_OPTIONS'			=> 'Regler, mappar &amp; inställningar',
	'UCP_PM_POPUP'				=> 'Personliga meddelanden',
	'UCP_PM_POPUP_TITLE'		=> 'Popup för personliga meddelande',
	'UCP_PM_UNREAD'				=> 'Olästa meddelanden',
	'UCP_PM_VIEW'				=> 'Visa meddelanden',
	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Ändra visningsbild',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Ändra profil',
	'UCP_PROFILE_REG_DETAILS'	=> 'Ändra kontoinställningar',
	'UCP_PROFILE_SIGNATURE'		=> 'Ändra signatur',
	'UCP_USERGROUPS'			=> 'Användargrupper',
	'UCP_USERGROUPS_MEMBER'		=> 'Ändra medlemskap',
	'UCP_USERGROUPS_MANAGE'		=> 'Hantera grupper',
	'UCP_REGISTER_DISABLE'					=> 'Det går inte att skapa nya konton just nu.',
	'UCP_REMIND'							=> 'Skicka lösenord.',
	'UCP_RESEND'							=> 'Skicka e-postmeddelande om aktivering.',
	'UCP_WELCOME'							=> 'Välkommen till kontrollpanelen. Härifrån kan du övervaka, visa, och uppdatera din profil, dina inställningar och dina alternativ och bevakade kategorier/trådar. Du kan också skicka meddelanden till andra användare. Försäkra dig om att du har läst eventuella meddelanden nedan innan du fortsätter.',
	'UCP_YIM'								=> 'Yahoo Messenger',
	'UCP_ZEBRA'								=> 'Vänner &amp; ovänner',
	'UCP_ZEBRA_FOES'						=> 'Hantera ovänner',
	'UCP_ZEBRA_FRIENDS'						=> 'Hantera vänner',
	'UNDISCLOSED_RECIPIENT'			=> 'Hemlig mottagare',
	'UNKNOWN_FOLDER'						=> 'Okänd mapp',
	'UNWATCH_MARKED'						=> 'Sluta bevaka markerade',
	'UPLOAD_AVATAR_FILE'					=> 'Ladda upp från din dator',
	'UPLOAD_AVATAR_URL'						=> 'Ladda upp från URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'				=> 'Ange URL:en till platsen som innehåller bilden. Bilden kommer att kopieras till denna webbplats.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'			=> 'Användarnamnet måste vara mellan %1$d och %2$d tecken långt och får endast innehålla alfanumeriska tecken.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'		=> 'Användarnamnet måste vara mellan %1$d och %2$d tecken långt och får endast innehålla alfanumeriska tecken, mellanslag eller -+_[].',
 	'USERNAME_ASCII_EXPLAIN'				=> 'Användarnamnet måste vara mellan %1$d och %2$d tecken långt och får endast innehålla ASCII-tecken, så inga speciella symboler.',
 	'USERNAME_LETTER_NUM_EXPLAIN'			=> 'Användarnamnet måste vara mellan %1$d och %2$d tecken långt och får endast innehålla bokstäver och siffror.',
 	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'	=> 'Användarnamnet måste vara mellan %1$d och %2$d tecken långt och får endast innehålla bokstäver, siffror, mellanslag och -+_[].',
	'USERNAME_CHARS_ANY_EXPLAIN'			=> 'Måste vara mellan %1$d och %2$d tecken.',
	'USERNAME_TAKEN_USERNAME'				=> 'Användarnamnet som du valde används redan, välj ett annat alternativ.',
	'USERNAME_DISALLOWED_USERNAME'			=> 'Användarnamnet som du valde är inte tillåtet eller innehåller ett otillåtet ord. Välj ett annat användarnamn.',
	'USER_NOT_FOUND_OR_INACTIVE'			=> 'Användarnamnen som du angav finns antingen inte eller så är de inte aktiverade.',

	'VIEW_AVATARS'				=> 'Visa visningsbilder',
	'VIEW_EDIT'					=> 'Visa/Ändra',
	'VIEW_FLASH'				=> 'Visa Flash-animationer',
	'VIEW_IMAGES'				=> 'Visa bilder i inlägg',
	'VIEW_NEXT_HISTORY'			=> 'Nästa PM i historiken',
	'VIEW_NEXT_PM'				=> 'Nästa PM',
	'VIEW_PM'					=> 'Visa meddelande',
	'VIEW_PM_INFO'				=> 'Meddelandedetaljer',
	'VIEW_PM_MESSAGE'			=> '1 meddelande',
	'VIEW_PM_MESSAGES'			=> '%d meddelanden',
	'VIEW_PREVIOUS_HISTORY'		=> 'Föregående PM i historiken',
	'VIEW_PREVIOUS_PM'			=> 'Föregående PM',
	'VIEW_SIGS'					=> 'Visa signaturer',
	'VIEW_SMILIES'				=> 'Visa smilies som bilder',
	'VIEW_TOPICS_DAYS'			=> 'Visa endast trådar nyare än',
	'VIEW_TOPICS_DIR'			=> 'Visa trådar i denna ordning',
	'VIEW_TOPICS_KEY'			=> 'Visa trådar sorterade efter',
	'VIEW_POSTS_DAYS'			=> 'Visa endast inlägg nyare än',
	'VIEW_POSTS_DIR'			=> 'Visa inlägg i denna ordning',
	'VIEW_POSTS_KEY'			=> 'Visa inlägg sorterade efter',

	'WATCHED_EXPLAIN'			=> 'Detta är en lista över kategorier och trådar som du bevakar. Du kommer att meddelas via e-post när nya inlägg görs i någon av dessa. För att sluta bevaka en kategori eller en tråd, markera de du vill sluta bevaka och klicka på <em>Sluta bevaka markerade</em>.',
	'WATCHED_FORUMS'			=> 'Bevakade kategorier',
	'WATCHED_TOPICS'			=> 'Bevakade trådar',
	'WRONG_ACTIVATION'			=> 'Aktiveringsnyckeln du angav matchar ingen i databasen.',

	'YOUR_DETAILS'				=> 'Din aktivitet',
	'YOUR_FOES'					=> 'Dina ovänner',
	'YOUR_FOES_EXPLAIN'			=> 'För att ta bort användare från denna lista, markera de du vill ta bort och klicka på <em>Skicka</em>.',
	'YOUR_FRIENDS'				=> 'Dina vänner',
	'YOUR_FRIENDS_EXPLAIN'		=> 'För att ta bort användare från denna lista, markera de du vill ta bort och klicka på <em>Skicka</em>.',
	'YOUR_WARNINGS'				=> 'Din varningsnivå',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Placera i mapp',
		'MARK_AS_READ'		=> 'Märk som läst',
		'MARK_AS_IMPORTANT'	=> 'Märk meddelande',
		'DELETE_MESSAGE'	=> 'Ta bort meddelande'
	),

	'PM_CHECK' => array(
		'SUBJECT'	=> 'Ämne',
		'SENDER'	=> 'Sändare',
		'MESSAGE'	=> 'Meddelande',
		'STATUS'	=> 'Meddelandestatus',
		'TO'		=> 'Skickat till'
	),

	'PM_RULE' => array(
		'IS_LIKE'		=> 'är lika med',
		'IS_NOT_LIKE'	=> 'inte är lika med',
		'IS'			=> 'är',
		'IS_NOT'		=> 'inte är',
		'BEGINS_WITH'	=> 'börjar med',
		'ENDS_WITH'		=> 'slutar med',
		'IS_FRIEND'		=> 'är vän',
		'IS_FOE'		=> 'är ovän',
		'IS_USER'		=> 'är användare',
		'IS_GROUP'		=> 'är medlem i användargrupp',
		'ANSWERED'		=> 'besvarat',
		'FORWARDED'		=> 'vidarebefordrad',
		'TO_GROUP'		=> 'till min standardgrupp',
		'TO_ME'			=> 'till mig'
	),

	'GROUPS_EXPLAIN'	=> 'Användargrupper låter administratörer hantera användare på ett enklare och smartare sätt. Du kommer som standard placeras i en specifik grupp, detta är din standardgrupp. Denna grupp bestämmer hur du visas för andra användare, till exempel användarnamnsfärg, visningsbild, titel, m.m. Om forumadministratörerna tillåter det så kan du möjligen byta standardgrupp. Du kan också placeras i eller gå med i andra grupper. Visa grupper kan ge extra tillgång till innehåll eller öka dina möjligheter på andra områden.',
	'GROUP_LEADER'		=> 'Grupper du leder',
	'GROUP_MEMBER'		=> 'Grupper du är medlem i',
	'GROUP_PENDING'		=> 'Grupper du ansökt om medlemskap i',
	'GROUP_NONMEMBER'	=> 'Grupper du inte är medlem i',
	'GROUP_DETAILS'		=> 'Gruppdetaljer',
	'NO_LEADER'		=> 'Du är inte ledare för någon grupp',
	'NO_MEMBER'		=> 'Du är inte medlem i någon grupp',
	'NO_PENDING'	=> 'Du har inte ansökt om medlemskap i några grupper',
	'NO_NONMEMBER'	=> 'Det finns inga grupper du inte är medlem i',
));
?>
