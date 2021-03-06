<?
/* german.php - German language defines of the BetSter project (22.05.06)
 * Copyright (C) 2006  Harald Kr�ll, Trenkwalder Platzer Hansj�rg
 * 
 * This program is free software; you can redistribute it and/or modify it 
 * under the terms of the GNU General Public License as published by the Free 
 * Software Foundation; either version 2 of the License, or (at your option) 
 * any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or 
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for 
 * more details.
 * 
 * You should have received a copy of the GNU General Public License along with 
 * this program; if not, write to the Free Software Foundation, Inc., 
 * 51 Franklin St, Fifth Floor, Boston, MA 02110, USA
 */

// includes
require_once("configuration.php");

// general Words
DEFINE('_YES', 'Ja');
DEFINE('_NO', 'Nein');
DEFINE('_BET', 'Wette');
DEFINE('_BETS', 'Wetten');
DEFINE('_DATE_TIME', 'Datum/Zeit');
DEFINE('_POS', 'M�glichkeit');
DEFINE('_POSSIBILITY', 'M�glichkeit');

DEFINE('_QUOTE', 'Quote');
DEFINE('_CREDITS', 'Credits');
DEFINE('_FROM', 'von: ');
DEFINE('_UNTIL', 'bis: ');


// highscore
DEFINE('_HIGHSCORE', 'Highscore');
DEFINE('_PLACE', 'Rang');


// menu items
DEFINE('_HOME', 'Home');
DEFINE('_ARCHIVE', 'Archiv');
DEFINE('_ABOUT_BETSTER', '�ber Betster');
DEFINE('_CONTACT', 'Kontakt');
DEFINE('_PRIVACY', 'Privacy');
DEFINE('_IMPRINT', 'Impressum');
DEFINE('_MY_BETS', 'Meine Wetten');
DEFINE('_CATEGORIES', 'Kategorien');
DEFINE('_ALL_CATEGORIES', 'Alle Kategorien');
DEFINE('_STATISTICS', 'Statistiken');
DEFINE('_BET_ACTUAL', 'Aktuelle Wetten');
DEFINE('_NO_ACTUAL_BETS', 'Leider keine Aktuellen Wetten');


// actions
DEFINE('_INSERT', 'Einf�gen');
DEFINE('_GO', 'Weiter');
DEFINE('_BACK', 'Zurueck');
DEFINE('_EDIT', '�ndern');
DEFINE('_REEDIT', 'Nochmal �ndern');
DEFINE('_NEXT', 'n�chster');
DEFINE('_PREVIOUS', 'vorheriger');
DEFINE('_DELETE', 'L�schen');
DEFINE('_CANCEL', 'Abbrechen');
DEFINE('_STORE', 'Speichern');


// profile related
DEFINE('_USERNAME', 'Benutzername');
DEFINE('_PASSWORD', 'Passwort');
DEFINE('_FIRSTNAME', 'Vorname');
DEFINE('_LASTNAME', 'Nachname');
DEFINE('_CHANGE_PWD', 'Passwort �ndern');
DEFINE('_OLD_PWD', 'Bisheriges Passwort');
DEFINE('_NEW_PWD', 'Neues Passwort');
DEFINE('_NEW_PWD_REP', 'Wdh. Neues Passwort');
DEFINE('_EMAIL', 'Email');
DEFINE('_BALANCE', 'Kontostand');
DEFINE('_STATUS', 'Status');
DEFINE('_BACK_USERLIST', 'Zur�ck zur Userliste');
DEFINE('_BACK_HOME', 'Zur�ck zur Startseite');
DEFINE('_BACK_PROFILE', 'Zur�ck zum Profil');
DEFINE('_BACK_LIST', 'Zur�ck zur Liste');
DEFINE('_MY_WINS', 'Meine gewonnenen Wetten');
DEFINE('_YOUR_WINS', 'Meine Gewinne');

DEFINE('_CONFIGURATIONS', 'Einstellungen');
DEFINE('_USER_LIST', 'User');
DEFINE('_BET_LIST', 'Wetten');
DEFINE('_TRANSACTION_LIST', 'Transaktionen');
DEFINE('_ALL_TRANSACTION_LIST', 'Alle Transaktionen');
DEFINE('_TRANSACTIONS_OF_USER', 'Transaktionen des Benutzers: ');
DEFINE('_USER_TRANSACTION_LIST', 'Transaktionen des Benutzers');
DEFINE('_USER_NO_TRANSACTIONS', 'Der Benutzer hat leider noch keine Transaktionen ausgef�hrt');
DEFINE('_CATEGORY_LIST', 'Kategorien');
DEFINE('_PROFILE_OF', 'Profil des Users');

DEFINE('_YOUR_PROFILE_LOG_IN', 'Sie m�ssen sich anmelden, um Ihr Profil sehen zu k�nnen');
DEFINE('_PROFILE_EDIT_OF', 'Profil �ndern des des Users');
DEFINE('_SUC_UNSET_BM', 'Dem Benutzer wurde der Titel Betmaster erfolgeich aberkannt.');
DEFINE('_SUC_SET_BM', 'Dem Benutzer wurde der Titel Betmaster erfolgreich verliehen');
DEFINE('_SUC_UNLOCK_USER', 'Der Benutzer wurde erfolgreich aktiviert');
DEFINE('_SUC_LOCK_USER', 'Der Benutzer wurde erfolgreich gesperrt');
DEFINE('_SUC_DELETE_USER', 'Der Benutzer wurde erfolgreich gel�scht.');
DEFINE('_SUC_CH_BALANCE', 'Der Kontostand des Benutzers wurde erfolgreich ver�ndert.');


// change balance
DEFINE('_ACTUAL_BALANCE', 'Aktueller Kontostand: ');
DEFINE('_NEW_BALANCE', 'Neuer Kontostand: ');
DEFINE('_ASK_CH_BALANCE', 'M�chten Sie den Kontostand wie folgt �ndern?');
DEFINE('_FAIL_CH_BALANCE', 'Geben Sie bitten einen g�ltigen Wert f�r den Kontostand ein.');


// useredit
DEFINE('_LOCK_USER', 'Benutzer Sperren');
DEFINE('_UNLOCK_USER', 'Benutzer entsperren');
DEFINE('_SET_BM', 'Betmaster verleihen');
DEFINE('_UNSET_BM', 'Betmaster aberkennen');
DEFINE('_CH_BALANCE', 'Kontostand �ndern');
DEFINE('_DELETE_USER', 'Benutzer l�schen');
DEFINE('_FAIL_INACTIVE_USER', 'Der User muss sich erst aktivieren, bevor er bearbeitet werden kann.');
DEFINE('_ASK_SET_BM', 'M�chten Sie dem ausgew�hlen Benutzer wirklich den Betmaster verleihen?');
DEFINE('_ASK_UNSET_BM', 'M�chten Sie dem ausgew�hlen Benutzer wirklich den Betmaster aberkennen?');
DEFINE('_ASK_UNLOCK_USER', 'M�chten Sie den ausgew�hlen Benutzer entsperren?');
DEFINE('_ASK_LOCK_USER', 'M�chten Sie den ausgew�hlen Benutzer wirklich sperren?');
DEFINE('_ASK_DELETE_USER', 'M�chten Sie den ausgew�hlen Benutzer wirklich l�schen?');
DEFINE('_FAIL_SELF_DELETE_USER', 'Sie k�nnen sich selbst nicht l�schen.');
DEFINE('_FAIL_LOCK_USER', 'Sie als Betmaster diesen Benutzer nicht sperren.');
DEFINE('_FAIL_UNLOCK_USER', 'Sie als Betmaster diesen Benutzer nicht entsperren.');
DEFINE('_FAIL_EXECUTE_OPERATION', 'Die gew�nschte Funktion steht leider nicht zur Auswahl.');


// useredit not by his own
DEFINE('_USER_NO_BM', 'Dieser User ist kein Betmaster');
DEFINE('_USER_INACTIVE', 'Dieser User ist nicht aktiv');
DEFINE('_USER_NOT_LOCKED', 'Dieser User ist nicht gesperrt');


// for the menu for logged in users
DEFINE('_YOUR_BETS' , 'Meine Wetten');
DEFINE('_YOUR_BALANCE', 'Mein Kontostand:');
DEFINE('_GREET', 'Hallo, ');
DEFINE('_YOUR_PROFILE', 'Mein Profil');
DEFINE('_EDIT_PROFILE', 'Profil �ndern');


// not yet defined where to put
DEFINE('_SORRY_NO_BETS', 'Leider sind zur Zeit keine aktuellen Wetten online...');
DEFINE('_ACTIVE_UNTIL', 'Freigeschalten bis zum: ');
DEFINE('_CATEGORY_EDIT', 'Kategorie �ndern');
DEFINE('_CATEGORY_IMG_FALSE', 'Das Bild erf�llt die Anforderungen nicht.');
DEFINE('_SUC_CATEGORY_EDIT', 'Kategorie erfolgreich ge�ndert');
DEFINE('_CATEGORY_INPUTS_RIGHT', 'Eingaben korrekt.');


// phrases and words used during a bet accepcion procedure
DEFINE('_BET_TITLE_1', 'Wettvorgang (1/2)');
DEFINE('_BET_TITLE_2', 'Wettvorgang (2/2)');
DEFINE('_BET_EMPTY_INPUTS', 'Geben Sie bitte die Anzahl an Credits ein, die Sie wetten m�chten.');
DEFINE('_BET_FALSE_INPUTS', 'Geben Sie bitte eine g�ltige Anzahl von Credits ein.');
DEFINE('_BET_LESS_CREDITS', 'Ihr Kontostand reicht leider nicht aus um die gew�nschte Wette durchzuf�hren, freuen Sie sich  auf die n�chste Runde!');
DEFINE('_BET_UNVALID_POSSIBILITY','Sie k�nnen bei jeder Wette jeweils nur eine Stimme abgeben. Diese jedoch auch mehrmals');
DEFINE('_BET_ACCEPTED', 'Ihre Wette wurde angenommen, Sie erhalten eine Email als Best�tigung.');
DEFINE('_BET_PROPOSITION', 'Ihr Wettvorschlag');
DEFINE('_BET_ASSICURATION', 'Wenn sie sich Ihrer Wette und der Anzahl der Credits sicher sind klicken Sie auf weiter, andernfalls k�nne Sie die Wette abbrechen');
DEFINE('_BET_CONTINUE', 'Wette ausf�hren');
DEFINE('_BET_DELETE', 'Wette abbrechen');
DEFINE('_BET_BACK', 'Zur�ck zu den Wetten');
DEFINE('_BET_TO_YOUR_BETS', 'zu deinen Wetten');
DEFINE('_BET_WIN_CASE', 'Wenn deine M�glichkeit gewinnt, gewinnst du bei der derzeitigen Quote: ');
DEFINE('_BET_BALANCE_AFTER' , 'Dein Kontostand betr�gt nach der Wette: ');
DEFINE('_BACK_BET_LIST', '');


// during creating or editing an account
DEFINE('_NEW_ACCOUNT', 'Neu Anmelden');
DEFINE('_CREATE_ACCOUNT_TITLE', 'Neuen Account erstellen');
EFINE('_FILL_IN', 'F�llen Sie die folgenden Felder aus. Geben Sie eine g�ltige Email Adresse ein, da Ihnen ein Best�tigungsmail zugesand wird. Ohne welches der Account nicht registriert wird.');
DEFINE('_ALREADY_REGISTERED', 'Sie Sind bereits angemeldet');
DEFINE('_USERNAME_INPUT', 'Gew�nscher Benutzernamen');
DEFINE('_EMAIL_INPUT', 'Email Adresse');
DEFINE('_FIRST_NAME_INPUT', 'Vorname');
DEFINE('_LAST_NAME_INPUT', 'Nachname');
DEFINE('_PASSWORD_INPUT', 'Passwort');
DEFINE('_PASSWORD_REPEAT', 'Passwort Wiederholung');
DEFINE('_FIELDS_INC', 'Bitte F�llen Sie alle Felder aus. Der Benutzername darf maximal aus 8 Ziffern Bestehen. Das Passwort muss mindestens aus 5 Ziffern bestehen.');
DEFINE('_PWD_DIF', 'Bitte geben Sie zwei identische Passw�rter ein');
DEFINE('_PWD_SHORT', 'Bitte geben Sie ein Password ein, welches laenger als 4 Zeichen ist.');
DEFINE('_INSERTED', 'Sie wurden erfolgreich angemeldet und erhielten eine Email, in der Sie ihre Anmeldung noch best�tigen m�ssen! Sobald Sie dies erledigt haben ist ihr Account aktiv.');
DEFINE('_UN_EXISTS', 'Bitte w�hlen Sie einen anderen Benutzername, denn dieser ist bereits besetzet.');
DEFINE('_UN_INVALID', 'Bitte w�hlen Sie einen anderen Benutzername, denn dieser ist ung�ltig.');
DEFINE('_INPUTS_CORRECT', 'Ihr Profil wurde geaendert');
DEFINE('_INPUTS_INCOMPLETE', 'Geben Sie einen Vor- und Nachnamen, und ihr Passwort ein.');
DEFINE('_PWD_MISSING', 'Geben Sie Ihr neues Password zwei und ihr altes Passwort ein.');
DEFINE('_NOT_EQUAL_PWD', 'Geben Sie zwei gleiche Passw�rter ein.');
 
 
// during the login process
DEFINE('_NO_UN_OR_PW', 'Bitte Sie Username und Passwort ein!');
DEFINE('_WRONG_UN_OR_PW', 'Bitte Ihren richtigen Username und Passwort eingeben!');


// when inserting a new bet
DEFINE('_INSERT_BET_MAIN_TITLE1', 'Wette erstellen (1/5)');
DEFINE('_INSERT_BET_MAIN_TITLE2', 'Wette erstellen (2/5)');
DEFINE('_INSERT_BET_MAIN_TITLE3', 'Wette erstellen (3/5)');
DEFINE('_INSERT_BET_MAIN_TITLE4', 'Wette erstellen (4/5)');
DEFINE('_INSERT_BET_MAIN_TITLE5', 'Wette erstellen (5/5)');
DEFINE('_INSERT_BET_MESSAGE1', 'F�llen Sie folgende Felder aus und beachten Sie die Hinweise.');
DEFINE('_INSERT_BET_MESSAGE2', 'Sie haben die Allgemeinen Angeben zur Wette richtig eingebeben. Geben Sie nun die Moeglichkeiten ein.');
DEFINE('_INSERT_BET_MESSAGE3', 'Waehlen Sie nun eine Kategorie fuer die Wette aus.');
DEFINE('_INSERT_BET_MESSAGE4', 'Sie haben alle Eingeben fuer die Wette korrekt eingebeben. Bitte kontrollieren Sie in der Vorschau ob die Wette Ihren Wuenschen entspricht und aendern Sie im Falle die Eingaben ueber den Zurueck Button oder klicken Sie auf weiter um die Wette zu speichern.');
DEFINE('_INSERT_BET_MESSAGE_NEW_CAT', 'Neue Kategorie erstellen:');
DEFINE('_INSERT_BET_CHECK', 'Ihre Eingaben sind korrekt, �berpr�fen Sie sie bitte nocheinmal.');
DEFINE('_INSERT_BET_CHOOSE_CAT', 'W�hlen Sie eine Kategorie aus');
DEFINE('_INSERT_BET_NO_CAT', 'Erstellen Sie zuerst eine Kategorie');
DEFINE('_INSERT_BET_FALSE', 'Ihre Eingaben sind inkorrekt, beachten Sie die Angaben und korrigieren Sie');
DEFINE('_INSERT_BET_FALSE_POS', 'Ihre Moeglichkeiten sind nicht korrekt, sie muessen mindestens 2 eingeben, und es duerfen keine Duplikate vorkommen');
DEFINE('_INSERT_BET_REEDIT', 'Bitte korrigieren Sie Ihre eingaben.');
DEFINE('_INSERT_BET_TITLE', 'Titel (min. 10 Zeichen)');
DEFINE('_INSERT_BET_SUBTITLE', 'Untertitel (Kein Pflichtfeld)');
DEFINE('_INSERT_BET_STARTDATE', 'Start (muss nach dem heutigen Datum liegen)');
DEFINE('_INSERT_BET_ENDDATE', 'Ende (Muss nach dem Start-Datum liegen)');
DEFINE('_INSERT_BET_IMAGE', 'Bild (Wenn Sie keines ausw�hlen wird das Standardbild der Kategorie angezeigt. Das Bild sollte nicht zu detailreich sein, denn es wird automatisch auf eine Gr��e von 40 mal 40 Pixel zugeschnitten.)');
DEFINE('_INSERT_BET_POS_NR', 'Anzahl der Moeglichkeiten');
DEFINE('_INSERT_BET_POSTITLE', 'Geben Sie mindestens 2 verschiedene M�glichkeiten ein.');
DEFINE('_INSERT_BET_CATTITLE', 'W�hlen Sie eine Kategorie aus oder erstellen Sie eine neue.');
DEFINE('_INSERT_BET_NEW_CATNAME', 'Name der Kategorie');
DEFINE('_INSERT_BET_NEW_CATDESC', 'Beschreibung der neuen Kategorie (kein Pflichtfeld)');
DEFINE('_INSERT_BET_NEW_CATIMAGE', 'Bild (Das Bild sollte nicht zu detailreich sein, denn es wird automatisch auf eine Gr��e von 40 mal 40 Pixel zugeschnitten.)');
DEFINE('_INSERT_BET_NEW_CATCOLOR', 'Farbe der neuen Kategorie');
DEFINE('_INSERT_BET_IMAGE_TITLE', 'Ihr ausgew�hles Bild');
DEFINE('_INSERT_BET_VISIBLE_SOON', 'Ihre Wette wurde erfolgreich eingef�gt. Bitte denken Sie an das einfrieren der Wette nach ihrem Ablauf. Sie erhalten eine Email als bestaetigung.');
DEFINE('_INSERT_BET_DELETE', 'Wette loeschen');
DEFINE('_INSERT_BET_ASK_DELETE', 'Wenn Sie sich sicher sind das erstellen der Wette abzubrechen klicken Sie auf den folgenden Link. Dabei gehen alle Ihre engegebenen Daten verloren.');
DEFINE('_DELETE_BET', 'Erstellvorgang abbrechen');
DEFINE('_CONTINUE_BET', 'Erstellvorgang fortsetzen');


// Logs
DEFINE('_LOGGED_IN', 'Hat sich eingeloggt');
DEFINE('_LOGGED_OUT', 'Hat sich ausgeloggt');
DEFINE('_LOGIN_TRY_EMPTY', 'Loginversuch mit leeren Feldern');
DEFINE('_LOGIN_TRY_WITH', 'Loginversuch mit folgenden Daten: ');
DEFINE('_BET_COMPLETED_WITH', 'Hat eine Wette abgeschlossen mit folgenden Parametern');
DEFINE('_BALANCE_DECREASED', 'Der Kontostand des Users wurde vermindert um: ');
DEFINE('_NEW_ACCOUNT', 'Hat einen neuen Account erstellt');
DEFINE('_CREDITS_ADDED', 'Der Kontostand wurde erh�ht um: ');
DEFINE('_POSSIBILITY_DELETED', 'M�glichkeit gel�scht: ');
DEFINE('_BET_DELETED', 'Wette gel�scht: ');
DEFINE('_SUCC_DELETE_BET', 'Wette gel�scht successful');
DEFINE('_CATEGORY_EDITED', 'Kategore ge�ndert');
DEFINE('_BM_SET_FROM', 'Wurde zum betmaster ernannt von: ');
DEFINE('_BALANCE_CHANGED', 'Hat den Kontostand ver�ndert von: ');

DEFINE('_PROFILE_EDITED', 'Hat sein Profil ge�ndert');

DEFINE('_BET_DELETE_BEGIN', 'Hat versucht eine Wette zu l�schen mit der ID: ');

DEFINE('_CATEGORY_INSERTED', 'Hat eine neue Kategorie erstellt');
DEFINE('_BET_INSERTED', 'Hat eine neue Wette erstellt');


// when deleting a bet
DEFINE('_SURE_DELETE_BET', 'Sind sie sicher die ausgew�hlte Wette l�schen zu wollen. Das L�schen einer Wette ist nur f�r Ausnahmef�lle vorgesehen. Falls die Wette bereits aktiv ist werden die gewetteten Einheiten den Usern zur�ckgegeben.');

// CMS related
DEFINE('_ADD_SITE', 'Neue Seite');
DEFINE('_SITE_CHANGED', 'Hat die Seite mit folgemdem Titel ge�ndert: ');
DEFINE('_SITE_INSERTED', 'Hat eine Seite mit folgendem Titel hinzugef�gt: ');
DEFINE('_SITE_DELETED', 'Hat die Seite mit folgendem Titel gel�scht: ');

// delete site
DEFINE('_DEL_SITE', 'Seite L�schen');
DEFINE('_SURE_DEL_SITE', 'M�chten Sie diese Seite wirklich l�schen?');
DEFINE('_DEL_SITE_SUC', 'Seite erfolgreich gel�scht');
DEFINE('_DEL_SITE_ID', 'Seite mit folgender ID gel�scht: ');
DEFINE('_BACK_START', 'Zur�ck zur Startseite');

// freezing
DEFINE('_SET', 'M�glichkeit setzen');
DEFINE('_FREEZE_BET', 'Gewinn-M�glichkeit setzen');
DEFINE('_FREEZE_BET_ID', 'Wette gesetzt mit folgender ID: ');
DEFINE('_FREEZE_BET_SUC', 'Gewinn-M�glichkeit erfolgreich gesetzt!');
DEFINE('_SURE_FREEZE_BET', 'Sind Sie sich sicher, dass die gew�hlte M�glichkeit	die Wette gewonnen hat?');

// confirm account
DEFINE('_CONFIRM_ACCOUNT_TITLE', 'Account aktivieren');
DEFINE('_CONFIRM_ACCOUNT_SUC', 'Ihr Account wurde erfolgreich aktiviert. Loggen Sie sich ein um Wetten abschliessen zu k�nnen.');
DEFINE('_CONFIRM_ACCOUNT_FAIL', 'Die Aktivierung des Accounts ist fehlgeschlagen, versuchen Sie es nocheinmal.');
DEFINE('_ACCOUNT_REG_SUB', 'Best�tigung des Accounts');

DEFINE('_ACCOUNT_REG_MSG', 'Um Ihren Account beim Online Wettb�ro '.$bstConfig_name.' zu aktivieren m�ssen Sie folgenden Link bet�tigen. Vielen Dank f�r Ihr Interesse!\n');

// closed office
DEFINE('_BET_OFFICE_CLOSED', 'Das Wettb�ro ist zur Zeit geschlossen. versuchen Sie es zu einem anderen Zeitpunkt wieder und kontaktieren Sie die Crew.');

// forgot password
DEFINE('_FORGOT_PWD', 'Passwort vergessen');
DEFINE('_FORGOT_PWD_TITLE', 'Passwort vergessen?');
DEFINE('_FILL_IN_PWD', 'F�llen Sie die beiden Felder aus, dann wird Ihnen ein Mail zugesand, mit welchem Sie Ihr Passwort zur�cksetzen k�nnen.');
DEFINE('_FORGOT_PWD_SUB', 'Passwort vergessen?');
DEFINE('_FORGOT_PWD_MSG', 'Falls Sie Ihr Password nicht mehr wissen, klicken Sie einfach auf den Folgenden Link, dann wird Ihnen ein Zufallspasswort zugesand.');
DEFINE('_NEW_PWD_SUB', 'Neues Passwort');
DEFINE('_NEW_PWD_MSG', 'Mit dem unten stehendenm Password k�nnen Sie sich nun einloggen und im Link "Profil �ndern" ihr Passwort dann �ndern.');
DEFINE('_FORGOT_PWD_MAIL_SENT', 'Ein Mail zur Best�tigung wurde an Ihre Email-Adresse gesendet');
DEFINE('_FORGOT_PWD_MAIL2_SENT', 'Ihr Password wurde erfolgreich zur�ckgesetzt, sie haben eine Mail mit dem neuen Password erhalten, mit dem Sie sich anmelden k�nnen. Die k�nnen Sie dann mit dem Link "Profil �ndern" �ndern');

//mails
DEFINE('_BET_SUB', 'Deine Wette');
DEFINE('_BET_MSG', 'Sie haben erfolreich folgende Wette abgeschlossen:');
DEFINE('_WIN_SUB', 'Sie haben gewonnen!');
DEFINE('_WIN_MSG', 'Herzlichen Gl�ckwunsch, Sie haben folgende Wette gewonnen:');
DEFINE('_LOOSE_SUB', 'Pech gehabt...');
DEFINE('_LOOSE_MSG', 'Leider hatten Sie diesmal kein Gl�ck denn Sie haben folgende Wette verloren. Versuchen Sie es erneut, (Life is a bitch)');

// change email
DEFINE('_CHANGE_EMAIL_TITLE', 'Email Adresse �ndern');
DEFINE('_CHANGE_EMAIL_MSG', 'Klicken Sie auf folgenden Link um die �nderung Ihrer Email-Adresse abzuschliessen.');
DEFINE('_CHANGE_EMAIL_INSERT', 'Geben Sie die gew�schte neue Email Adresse ein.');

DEFINE('_EMAIL_UNVALID', 'Deine Email-adresse ist leider ung�litg');
DEFINE('_EMAIL_CONF_MSG_SENT', 'Ihnen wurde ein Best�tigungs-Mail gesendet, mit welchem Sie die �nderung der Email Adresse abschliesssen k�nnen.');
DEFINE('_CHANGE_EMAIL_SUB', '�nderung Email Adresse');
DEFINE('_CHANGE_EMAIL_SUC', 'Ihre Email Adresse wurde erfolgreich ge�ndert');
DEFINE('_CHANGE_EMAIL_FAIL', 'Die �nderung Ihrer Email Adresse ist fehlgeschlage. Versuchen Sie es nocheinmal.');
DEFINE('_EMAIL_CHANGED', 'Hat seine Email Adresse auf folgende ge�ndert: ');

// insert category
DEFINE('_INSERT_CAT_TITLE1', 'Kategore erstellen');
DEFINE('_INSERT_CAT_WRONG_INPUTS', 'Ihre Eingaben sind nicht korrekt.');
DEFINE('_INSERT_CAT_SUCCESS', 'Kategorie erfolgreich eingef�gt');

// delete category
DEFINE('_SURE_DEL_CAT', 'M�chten Sie diese Kategore wirklich l�schen?');
DEFINE('_DEL_CAT', 'Kategore l�schen');
DEFINE('_DEL_CAT_SUC', 'Kategorie erfolgreich gel�scht!');
DEFINE('_DEL_CAT_ID', 'Kategorie mit folgender ID gel�scht: ');
DEFINE('_DEL_CAT_FAIL', 'Diese Kategorie kann nicht gel�scht werden, da sie noch Wetten enth�llt, l�schen Sie zuerst die Wetten');

//to sort
DEFINE('_NEW_ACCOUNT_BALANCE_SET', 'Der Startaccount wurde gesetzt auf: ');
DEFINE('_BM_UNSET_FROM', 'Hat folgendem Benutzer den Betmaster aberkannt: ');
DEFINE('_USER_DELETED', 'Hat folgenden Benutzer gel�scht: ');
DEFINE('_CHANGE_EMAIL_SENT', 'Wurde ein Best�tigungsmail gesendet um die Email auf wie folgt zu �ndern: ');
DEFINE('_USER_ACTIVATED', 'Wurde aktiviert');
DEFINE('_EMAIL_EXISTS', 'Die Email Addresse existiert bereits.');

?>