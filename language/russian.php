<?
/* english.php - English language defines of the BetSter project (22.05.06)
 * Copyright (C) 2006  Harald Krцll
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
//require_once("configuration.php");

// general
DEFINE('_YES', 'Yes');
DEFINE('_NO', 'No');
DEFINE('_BET', 'Bet');
DEFINE('_BETS', 'Bets');
DEFINE('_DATE_TIME', 'Date/Time');
DEFINE('_POS', 'Possibility');
DEFINE('_POSSIBILITY', 'Possibility');

DEFINE('_QUOTE', 'Quote');
DEFINE('_CREDITS', 'Credits');
DEFINE('_FROM', 'from: ');
DEFINE('_UNTIL', 'until: ');


// highscore
DEFINE('_HIGHSCORE', 'Highscore');
DEFINE('_PLACE', 'Place');


// menu items
DEFINE('_HOME', 'Home');
DEFINE('_ARCHIVE', 'Archive');
DEFINE('_ABOUT_BETSTER', 'About Betster');
DEFINE('_CONTACT', 'Contakt');
DEFINE('_PRIVACY', 'Privacy');
DEFINE('_IMPRINT', 'Imprint');
DEFINE('_MY_BETS', 'My Bets');
DEFINE('_CATEGORIES', 'Categories');
DEFINE('_ALL_CATEGORIES', 'All Categories');
DEFINE('_STATISTICS', 'Statistics');
DEFINE('_BET_ACTUAL', 'Actual Bets');
DEFINE('_NO_ACTUAL_BETS', 'Sorry, no actual Bets');


// actions
DEFINE('_INSERT', 'Insert');
DEFINE('_GO', 'Go');
DEFINE('_BACK', 'Back');
DEFINE('_EDIT', 'Edit');
DEFINE('_REEDIT', 'Re-edit');
DEFINE('_NEXT', 'Next');
DEFINE('_PREVIOUS', 'Previous');
DEFINE('_DELETE', 'Delete');
DEFINE('_CANCEL', 'Cancel');
DEFINE('_STORE', 'Store');


// profile related
DEFINE('_USERNAME', 'Username');
DEFINE('_PASSWORD', 'Password');
DEFINE('_FIRSTNAME', 'First Name');
DEFINE('_LASTNAME', 'Surname');
DEFINE('_CHANGE_PWD', 'Change Password');
DEFINE('_OLD_PWD', 'Old Password');
DEFINE('_NEW_PWD', 'New Passwort');
DEFINE('_NEW_PWD_REP', 'Repeat new Passwort');
DEFINE('_EMAIL', 'Email');
DEFINE('_BALANCE', 'Balance');
DEFINE('_STATUS', 'State');
DEFINE('_BACK_USERLIST', 'Back to the Userlist');
DEFINE('_BACK_HOME', 'Back to the Homesite');
DEFINE('_BACK_PROFILE', 'Back to the profile');
DEFINE('_BACK_LIST', 'Back to the list');
DEFINE('_MY_WINS', 'My won Bets');
DEFINE('_YOUR_WINS', 'My won Bets');

DEFINE('_CONFIGURATIONS', 'Configurations');
DEFINE('_USER_LIST', 'Users');
DEFINE('_BET_LIST', 'Bets');
DEFINE('_TRANSACTION_LIST', 'Transactions');
DEFINE('_ALL_TRANSACTION_LIST', 'All Transactions');
DEFINE('_TRANSACTIONS_OF_USER', 'Users Transactions: ');
DEFINE('_USER_TRANSACTION_LIST', 'Users Transactions');
DEFINE('_USER_NO_TRANSACTIONS', 'The user did not make any transaction yet');
DEFINE('_CATEGORY_LIST', 'Categories');
DEFINE('_PROFILE_OF', 'User profile');

DEFINE('_YOUR_PROFILE_LOG_IN', 'You have to log in to see your profile');
DEFINE('_PROFILE_EDIT_OF', 'Edit profile of user');
DEFINE('_SUC_UNSET_BM', 'The user lost the betmaster');
DEFINE('_SUC_SET_BM', 'The user is now a betmaster');
DEFINE('_SUC_UNLOCK_USER', 'User successfully activated');
DEFINE('_SUC_LOCK_USER', 'User successfully locked');
DEFINE('_SUC_DELETE_USER', 'User successfully deleted');
DEFINE('_SUC_CH_BALANCE', 'Balance successfully changed');


// change balance
DEFINE('_ACTUAL_BALANCE', 'Actual balance: ');
DEFINE('_NEW_BALANCE', 'New balance: ');
DEFINE('_ASK_CH_BALANCE', 'Do you like to change the balance like this?');
DEFINE('_FAIL_CH_BALANCE', 'Please insert a correct numerical value for the balance.');


// useredit
DEFINE('_LOCK_USER', 'Lock user');
DEFINE('_UNLOCK_USER', 'Unlock user');
DEFINE('_SET_BM', 'Set betmaster');
DEFINE('_UNSET_BM', 'Unset betmaster');
DEFINE('_CH_BALANCE', 'Change balance');
DEFINE('_DELETE_USER', 'Delete user');
DEFINE('_FAIL_INACTIVE_USER', 'First the user has to be active.');
DEFINE('_ASK_SET_BM', 'Do you really want to make a betmaster of the user?');
DEFINE('_ASK_UNSET_BM', 'Do you really want to disable the betmaster from the user?');
DEFINE('_ASK_UNLOCK_USER', 'Do you want to unlock the user?');
DEFINE('_ASK_LOCK_USER', 'Do you want to lock the user?');
DEFINE('_ASK_DELETE_USER', 'Do you want to delete the user?');
DEFINE('_FAIL_SELF_DELETE_USER', 'You can not delete yourselfs');
DEFINE('_FAIL_LOCK_USER', 'You can not lock this user');
DEFINE('_FAIL_UNLOCK_USER', 'You can not unlock this user');
DEFINE('_FAIL_EXECUTE_OPERATION', 'This operation is invalid');


// useredit not by his own
DEFINE('_USER_NO_BM', 'This user is not a betmaster');
DEFINE('_USER_INACTIVE', 'This user is not active');
DEFINE('_USER_NOT_LOCKED', 'This user is not locked');


// for the menu for logged in users
DEFINE('_YOUR_BETS' , 'My bets');
DEFINE('_YOUR_BALANCE', 'My balance: ');
DEFINE('_GREET', 'Hello, ');
DEFINE('_YOUR_PROFILE', 'My Profile');
DEFINE('_EDIT_PROFILE', 'Edit Profile');


// not yet defined where to put
DEFINE('_SORRY_NO_BETS', 'Sorry, no actual bets online...');
DEFINE('_ACTIVE_UNTIL', 'Active until: ');
DEFINE('_CATEGORY_EDIT', 'Edit category');
DEFINE('_CATEGORY_IMG_FALSE', 'Your Image is wrong');
DEFINE('_SUC_CATEGORY_EDIT', 'Category successfully edited');
DEFINE('_CATEGORY_INPUTS_RIGHT', 'Your Inputs are right');


// phrases and words used during a bet accepcion procedure
DEFINE('_BET_TITLE_1', 'Betting (1/2)');
DEFINE('_BET_TITLE_2', 'Betting (2/2)');
DEFINE('_BET_EMPTY_INPUTS', 'Please insert the amount of Credits you want to bet');
DEFINE('_BET_FALSE_INPUTS', 'Please insert a correct amount of credits and select a possibility');
DEFINE('_BET_LESS_CREDITS', 'Your balance is not enough to bet like this');
DEFINE('_BET_UNVALID_POSSIBILITY','You can only bet on the same possibility');
DEFINE('_BET_ACCEPTED', 'Your bet has been accepted, you will get a confirmation mail');
DEFINE('_BET_PROPOSITION', 'Your Bet');
DEFINE('_BET_ASSICURATION', 'Continue if you are sure...');
DEFINE('_BET_CONTINUE', 'Execute bet');
DEFINE('_BET_DELETE', 'Delete Bet');
DEFINE('_BET_BACK', 'All Bets');
DEFINE('_BET_TO_YOUR_BETS', 'Your Bets');
DEFINE('_BET_WIN_CASE', 'With this quote you will win: ');
DEFINE('_BET_BALANCE_AFTER' , 'Your balance after the bet: ');
DEFINE('_BACK_BET_LIST', '');


// during creating or editing an account
DEFINE('_NEW_ACCOUNT', 'New Account');
DEFINE('_CREATE_ACCOUNT_TITLE', 'Create new account');
DEFINE('_FILL_IN', 'Fill in the following fields, and be sure to insert a correct mail address, because you will get a confirmation email to complete the registration.');
DEFINE('_ALREADY_REGISTERED', 'You are allready registered');
DEFINE('_USERNAME_INPUT', 'Your Username');
DEFINE('_EMAIL_INPUT', 'Email address');
DEFINE('_FIRST_NAME_INPUT', 'First Name');
DEFINE('_LAST_NAME_INPUT', 'Last Name');
DEFINE('_PASSWORD_INPUT', 'Password');
DEFINE('_PASSWORD_REPEAT', 'repeat password');
DEFINE('_FIELDS_INC', 'Please fill in the following fields. (Username max. 8 chars, Password min 5 chars)');
DEFINE('_PWD_DIF', 'Please insert the same password twice');
DEFINE('_PWD_SHORT', 'Please insert a password with min 5 characters');
DEFINE('_INSERTED', 'Your registration was successful. You got an email, which contains the link to activate your account.');
DEFINE('_UN_EXISTS', 'Please choose another username, this is allready occupied');
DEFINE('_UN_INVALID', 'Please chosse another username, this is invalid.');
DEFINE('_INPUTS_CORRECT', 'Your Profile was successfully edited');
DEFINE('_INPUTS_INCOMPLETE', 'Please insert all the fields.');
DEFINE('_PWD_MISSING', 'Please Insert your new password twice and your old password');
DEFINE('_NOT_EQUAL_PWD', 'Please insert two equal passwords');
 
 
// during the login process
DEFINE('_NO_UN_OR_PW', 'Please insert your username and password');
DEFINE('_WRONG_UN_OR_PW', 'Plase insert your correct username and password');


// when inserting a new bet
DEFINE('_INSERT_BET_MAIN_TITLE1', 'Create bet (1/5)');
DEFINE('_INSERT_BET_MAIN_TITLE2', 'Create bet (2/5)');
DEFINE('_INSERT_BET_MAIN_TITLE3', 'Create bet (3/5)');
DEFINE('_INSERT_BET_MAIN_TITLE4', 'Create bet (4/5)');
DEFINE('_INSERT_BET_MAIN_TITLE5', 'Create bet (5/5)');
DEFINE('_INSERT_BET_MESSAGE1', 'Please insert the following fields and look at the clues');
DEFINE('_INSERT_BET_MESSAGE2', 'Please insert the possibilities of the bet now');
DEFINE('_INSERT_BET_MESSAGE3', 'Choose a category for your bet');
DEFINE('_INSERT_BET_MESSAGE4', 'Please check if the bet looks like you want and click on go.');
DEFINE('_INSERT_BET_MESSAGE_NEW_CAT', 'Create new category: ');
DEFINE('_INSERT_BET_CHECK', 'Your inputs are correct');
DEFINE('_INSERT_BET_CHOOSE_CAT', 'Please choose a category');
DEFINE('_INSERT_BET_NO_CAT', 'Please create a category first');
DEFINE('_INSERT_BET_FALSE', 'Your inputs are incorrect, please check');
DEFINE('_INSERT_BET_FALSE_POS', 'You have to insert at least two possibilities with no dublicates');
DEFINE('_INSERT_BET_REEDIT', 'Please correct your inputs');
DEFINE('_INSERT_BET_TITLE', 'Title');
DEFINE('_INSERT_BET_SUBTITLE', 'Subtitle (not mandatory)');
DEFINE('_INSERT_BET_STARTDATE', 'Start (after now)');
DEFINE('_INSERT_BET_ENDDATE', 'End (after the start date)');
DEFINE('_INSERT_BET_IMAGE', 'Image (if empty, the category image is taken for the bet) only .JPG endings');
DEFINE('_INSERT_BET_POS_NR', 'Amount of Possibilities');
DEFINE('_INSERT_BET_POSTITLE', 'Please insert at least 2 possibilities');
DEFINE('_INSERT_BET_CATTITLE', 'Choose a category or create a new one');
DEFINE('_INSERT_BET_NEW_CATNAME', 'Name of the category (min. 3 chars, mandatory)');
DEFINE('_INSERT_BET_NEW_CATDESC', 'Description (not mandatory)');
DEFINE('_INSERT_BET_NEW_CATIMAGE', 'Image (Type: .jpg, leave empty if no image desired)');
DEFINE('_INSERT_BET_NEW_CATCOLOR', 'Color of the new category');
DEFINE('_INSERT_BET_IMAGE_TITLE', 'Your Image');
DEFINE('_INSERT_BET_VISIBLE_SOON', 'Your bet was successfully inserted');
DEFINE('_INSERT_BET_DELETE', 'Delete bet');
DEFINE('_INSERT_BET_ASK_DELETE', 'If you are sure to stop the bet insertion click the following link, your data will be lost');
DEFINE('_DELETE_BET', 'Stop inserting the bet');
DEFINE('_CONTINUE_BET', 'Continue');


// Logs
DEFINE('_LOGGED_IN', 'Logged in');
DEFINE('_LOGGED_OUT', 'Logged out');
DEFINE('_LOGIN_TRY_EMPTY', 'Logintry with empty field');
DEFINE('_LOGIN_TRY_WITH', 'Logingry with following data: ');
DEFINE('_BET_COMPLETED_WITH', 'Completed a bet with the following parameters');
DEFINE('_BALANCE_DECREASED', 'Balance decreased: ');
DEFINE('_NEW_ACCOUNT', 'Created a new account');
DEFINE('_CREDITS_ADDED', 'Balance increased: ');
DEFINE('_POSSIBILITY_DELETED', 'Possibility deleted: ');
DEFINE('_BET_DELETED', 'Bet deleted: ');
DEFINE('_SUCC_DELETE_BET', 'Bet deleted successful');
DEFINE('_CATEGORY_EDITED', 'Category edited');
DEFINE('_BM_SET_FROM', 'Betmaster set from: ');
DEFINE('_BALANCE_CHANGED', 'Has changed the balance of: ');

DEFINE('_PROFILE_EDITED', 'Has edited his profile');

DEFINE('_BET_DELETE_BEGIN', 'Has tried to delete the bet with the ID: ');

DEFINE('_CATEGORY_INSERTED', 'Has inserted a new category');
DEFINE('_BET_INSERTED', 'Created a new bet');


// when deleting a bet
DEFINE('_SURE_DELETE_BET', 'Are you sure to delete the bet? The betted credits will be booked back to the users');

// CMS related
DEFINE('_ADD_SITE', 'New Site');
DEFINE('_SITE_CHANGED', 'Site changed: ');
DEFINE('_SITE_INSERTED', 'New Site inserted: ');
DEFINE('_SITE_DELETED', 'Site deleted: ');

// delete site
DEFINE('_DEL_SITE', 'Delete site');
DEFINE('_SURE_DEL_SITE', 'Do you really want to delete the site?');
DEFINE('_DEL_SITE_SUC', 'Site deleted successfully');
DEFINE('_DEL_SITE_ID', 'Site with the following ID deleted: ');
DEFINE('_BACK_START', 'Back Home');

// freezing
DEFINE('_SET', 'Evaluate bet');
DEFINE('_FREEZE_BET', 'Evaluate winning possibility');
DEFINE('_FREEZE_BET_ID', 'Bet evaluated with ID: ');
DEFINE('_FREEZE_BET_SUC', 'Successfully evaluated bet');
DEFINE('_SURE_FREEZE_BET', 'Are you sure this is the right possiblity?');

// confirm account
DEFINE('_CONFIRM_ACCOUNT_TITLE', 'Confitm account');
DEFINE('_CONFIRM_ACCOUNT_SUC', 'Your account was successfully activated. Log in to bet');
DEFINE('_CONFIRM_ACCOUNT_FAIL', 'Account activation failed, please retry');
DEFINE('_ACCOUNT_REG_SUB', 'Account confirmation');

DEFINE('_ACCOUNT_REG_MSG', 'To activate your Account for the betoffice '.$bstConfig_name.' you have to click on the following link. Thanks for your interest!'."\n");

// closed office
DEFINE('_BET_OFFICE_CLOSED', 'The bet office is closed at the moment. Try later or contact the crew.');

// forgot password
DEFINE('_FORGOT_PWD', 'Forgot password');
DEFINE('_FORGOT_PWD_TITLE', 'Forgot password?');
DEFINE('_FILL_IN_PWD', 'Fill in the following fields, then you will get a mail with wich you can reset your password');
DEFINE('_FORGOT_PWD_SUB', 'Forgot password?');
DEFINE('_FORGOT_PWD_MSG', 'If you don\'t remember your password, you can follow this link and you will get another mail with a random Password. Under \"Profile edit\" you can change the password.');
DEFINE('_NEW_PWD_SUB', 'New password');
DEFINE('_NEW_PWD_MSG', 'With this password, you can now log in. And unter \"profile edit\" you can change your password.');
DEFINE('_FORGOT_PWD_MAIL_SENT', 'A confirmation mail was sent to your email addresse.');
DEFINE('_FORGOT_PWD_MAIL2_SENT', 'Your password was successfully changed. You will get a mail with the new password. Under \"Profile edit\" you can change the password.');

//mails
DEFINE('_BET_SUB', 'Your bet');
DEFINE('_BET_MSG', 'You made successfully the following bet: ');
DEFINE('_WIN_SUB', 'You won!');
DEFINE('_WIN_MSG', 'Congratulations, you won the following bet:');
DEFINE('_LOOSE_SUB', 'Bad luck...');
DEFINE('_LOOSE_MSG', 'Unfortunately you did not win this time, but try again!');

// change email
DEFINE('_CHANGE_EMAIL_TITLE', 'Change Email Adress');
DEFINE('_CHANGE_EMAIL_MSG', 'Click on the following Link to change your email adress');
DEFINE('_CHANGE_EMAIL_INSERT', 'Please insert your new email adress');

DEFINE('_EMAIL_UNVALID', 'Your email adress is invalid');
DEFINE('_EMAIL_CONF_MSG_SENT', 'You received a mail, to confirm your changing.');
DEFINE('_CHANGE_EMAIL_SUB', 'Change email adress');
DEFINE('_CHANGE_EMAIL_SUC', 'Your email adress was changed successfully');
DEFINE('_CHANGE_EMAIL_FAIL', 'There was an error while changing your email address, pleas try later.');
DEFINE('_EMAIL_CHANGED', 'Has changed his email adress to: ');

// insert category
DEFINE('_INSERT_CAT_TITLE1', 'Insert category');
DEFINE('_INSERT_CAT_WRONG_INPUTS', 'Your inputs are not correct, please follow the hints in the brackets');
DEFINE('_INSERT_CAT_SUCCESS', 'Category inserted successful');

// delete category
DEFINE('_SURE_DEL_CAT', 'Are you sure to delete this category?');
DEFINE('_DEL_CAT', 'Delete Category');
DEFINE('_DEL_CAT_SUC', 'Category deleted successful!');
DEFINE('_DEL_CAT_ID', 'Category deleted with this ID: ');
DEFINE('_DEL_CAT_FAIL', 'The Category can not be deleted until it contains bets, delete first the bets from this category'); // TODO

//to sort
DEFINE('_NEW_ACCOUNT_BALANCE_SET', 'Start balance set to: ');
DEFINE('_BM_UNSET_FROM', 'Has removed the title betmaster from: ');
DEFINE('_USER_DELETED', 'Deleted the user: ');
DEFINE('_CHANGE_EMAIL_SENT', 'Was sent a confirmation mail to change the email-address to: ');
DEFINE('_USER_ACTIVATED', 'Was activated');
DEFINE('_EMAIL_EXISTS', 'This email-address exists allready');

?>