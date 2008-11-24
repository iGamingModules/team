<?php
// $Id: admin.php 7121 2008-11-21 18:37:23Z algalochkin $ Russian translation. Charset: utf-8 (without BOM)
//%%%%%%        Admin Module Name  Articles         %%%%%
define("_AM_DBUPDATED","Database Updated Successfully!");
define("_AM_CONFIG","Настройки матча");
define("_AM_EDIT","Редактировать");
define("_AM_DELETE","Удалить");
define("_AM_EDITMATCH","Редактирование матча");
define("_AM_RUSUREDEL","Are you sure you want to delete this match and all its comments?");
define("_AM_MONTHC","Month:");
define("_AM_DAYC","Day:");
define("_AM_YEARC","Year:");
define("_AM_TIMEC","Time:");
define("_AM_ADD","Add");
define("_AM_EMPTYNODELETE","Матч незаполнен, невозможно удалить");
define("_AM_MATCHMNGR","Управление матчами");
define("_AM_POSMNGR","Управление положением");
define("_AM_MAPMNGR","Управление картами");
define("_AM_TEAMMNGR","Управление группами");
define("_AM_SERVERMNGR","Управление серверами");
define("_AM_ADDBUTTON", "Add -->");
define("_AM_DELBUTTON", "<-- Delete ");

//addedbyfrankblack
define("_AM_TEAMMATCHLISTFORALLTEAMS","Match List for All Teams");
define("_AM_TEAMADDMATCH","Добавить матч");
define("_AM_TEAMMATCHTYPE","Match Type:");
define("_AM_TEAMRESULT","Result");
define("_AM_TEAMOPPONENT","Opponent:");
define("_AM_TEAMNEWMAPNAME","New Map Name ");
define("_AM_TEAMADDSERVER","Add Server");
define("_AM_TEAMSERVERNAME","Server Name");
define("_AM_TEAMSERVERIP","Server IP");
define("_AM_TEAMSERVERPORT","Server Port");
define("_AM_TEAMPOSITIONADDED","Position Added");
define("_AM_TEAMPOSITIONMODIFIED","Position Modified");
define("_AM_TEAMPOSITIONDELETED","Position Deleted");
define("_AM_TEAMERRORWHILESAVINGSERVER","Error While Saving Server");
define("_AM_TEAMNAME","Team Name");
define("_AM_TEAMTYPE","Team Type");
define("_AM_TEAMMAPSPERMATCH","Maps Per Match");
define("_AM_TEAMNOPERMISSIONS","No Permissions");
define("_AM_TEAMPLAYERSADDED","Player(s) Added");
define("_AM_TEAMPLAYERSNOTADDED","Player(s) NOT Added");
define("_AM_TEAMPLAYERSREMOVED","Player(s) Removed");
define("_AM_TEAMPLAYERSNOTREMOVED","Player(s) NOT Removed");
define("_AM_TEAMMAPSADDED","Map(s) Added");
define("_AM_TEAMMAPSNOTADDED","Map(s) NOT added");
define("_AM_TEAMMAPSREMOVED","Map(s) Removed");
define("_AM_TEAMMAPSNOTREMOVED","Map(s) NOT Removed");
define("_AM_TEAMSERVERSADDED","Server(s) Added");
define("_AM_TEAMSERVERSNOTADDED","Server(s) NOT added");
define("_AM_TEAMSERVERSREMOVED","Server(s) Removed");
define("_AM_TEAMSERVERSNOTREMOVED","Server(s) NOT Removed");
define("_AM_TEAMPOSITIONSADDED","Position(s) Added");
define("_AM_TEAMPOSITIONSNOTADDED","Position(s) NOT added");
define("_AM_TEAMPOSITIONSREMOVED","Position(s) Removed");
define("_AM_TEAMPOSITIONSNOTREMOVED","Position(s) NOT Removed");
define("_AM_TEAMNONMEMBERS","Non-Members");
define("_AM_TEAMMEMBERADMIN","Member Admin");
define("_AM_TEAMTEAMMEMBERS","Team Members");
define("_AM_TEAMNONSELECTED","Non-Selected");
define("_AM_TEAMMAPSELECTION","Map Selection");
define("_AM_TEAMTEAMMAPS","Team Maps");
define("_AM_TEAMPOSITIONSELECTION","Position Selection");
define("_AM_TEAMPOSITIONSKILLSELECTION","Skill Selection");
define("_AM_TEAMSERVERSELECTION","Server Selection");
define("_AM_TEAMPOSITIONSHORT","Position Short");
define("_AM_TEAMPOSITIONNAME","Position Name");
define("_AM_TEAMTYPE2","Type");
define("_AM_TEAMORDER","Order");
define("_AM_TEAMSETASDEFAULTTEAM","Set as Default Team");
define("_AM_TEAMERRORDEFAULTTEAMNOTCHANGED","Error - Default Team NOT Changed");
define("_AM_TEAMMAPID","Mapid");
define("_AM_TEAMMAPNAME","Mapname");
define("_AM_TEAMADDTEAM","Add Team");
define("_AM_TEAMTEAMID","Teamid");
define("_AM_TEAMMAPSMATCH","Maps/Match");
define("_AM_TEAMDEFAULT","Default");
define("_AM_TEAMTEAMSELECTION","Team Selection");
define("_AM_TEAMDATE","Date");
define("_AM_TEAMADDED","Added");
define("_AM_TEAMMAPDELFROMPOOLMAP","Map Deleted From Map Pool");
define("_AM_TEAMDELETED","Team Deleted");
define("_AM_TEAMSERVERDELETED","Server Deleted");
define("_AM_TEAMSERVERDELBOOKNOT","Server Deleted - Bookings NOT Deleted");
define("_AM_TEAMERRSERVERNOTDEL","Error - Server NOT Deleted");
define("_AM_TEAMBACKTOTEAMLIST","Back to Team List");
define("_AM_TEAMADDEDTOMAPPOOL","Added to Map Pool");
define("_AM_TEAMMAPNAMEMODIF","Map Name Modified");
define("_AM_TEAMPOSITIONTYPE","Position Type");
define("_AM_SUBMITMATCH","Add Match");
define("_NW_POST","Save");
define("_AM_TEAMSIZE","Teamsize:");
define("_AM_TEAMMATCHRESULT","Match Result:");
define("_AM_TEAMWIN","Win");
define("_AM_TEAMLOSS","Loss");
define("_AM_TEAMDRAW","Draw");
define("_AM_TEAMFIRSTMAP","First Map:");
define("_AM_TEAMSECONDMAP","Second Map:");
define("_AM_TEAMTHIRDMAP","Third Map:");
define("_AM_TEAMUS","Us:");
define("_AM_TEAMTHEM","Them:");
define("_AM_TEAMSERVER","Server:");
define("_AM_TEAMACTIVE","Active");
define("_AM_TEAMEDITED","Edited");
define("_AM_TEAMOPTIONSFOR","Options for");

//Added by Mithrandir 03/09-2003
define("_AM_TEAMSELECTED", "Выбрано");
define("_AM_TEAMSIZESELECTION", "Team Sizes");
define("_AM_TEAMSIZESADDED", "Team Sizes Added");
define("_AM_TEAMSIZESNOTADDED", "Team Sizes NOT Added");
define("_AM_TEAMSIZESREMOVED", "Team Sizes Removed");
define("_AM_TEAMSIZESNOTREMOVED", "Team Sizes NOT Removed");
define("_AM_TEAMSIZEMNGR", "Manage TeamSizes");
define("_AM_TEAMERRSIZENOTDEL", "Error - TeamSize NOT Deleted");
define("_AM_TEAMSIZEDELETED", "TeamSize Deleted");
define("_AM_TEAMERRORWHILESAVINGSIZE", "Error While Saving TeamSize");
define("_AM_TEAMADDSIZE", "Add TeamSize");
define("_AM_TEAMSIZEID", "TeamSize ID");
define("_AM_TEAMSIZES", "TeamSizes");
define("_AM_TEAMSIZENAME", "Team Size");
define("_AM_TEAMRANKSFORALLTEAMS", "Ranks For All Teams");
define("_AM_TEAMADDRANK", "Add Rank");
define("_AM_TEAMRANKID", "Rank ID");
define("_AM_TEAMRANK", "Rank");
define("_AM_TEAMRANKMNGR", "Manage Ranks");
define("_AM_TEAMTACTICSRANK", "Tactics");
define("_AM_TEAMMATCHRANK", "Matches");
define("_AM_TEAMRANKCOLOR", "Rank Colour");
define("_AM_TEAMERRORWHILESAVINGRANK", "Error While Saving Rank");
define("_AM_TEAMRANKSELECTION", "Rank Selection");
define("_AM_TEAMRANKSADDED", "Team Ranks Added");
define("_AM_TEAMRANKSNOTADDED", "Team Ranks NOT Added");
define("_AM_TEAMRANKSREMOVED", "Team Ranks Removed");
define("_AM_TEAMRANKSNOTREMOVED", "Team Ranks NOT Removed");

//added 0310
define("_AM_TEAMTEAMADDED","Added");
define("_AM_TEAMTEAMEDITED","Edited");

//Added version 1.30 - Mithrandir
define("_AM_RUSUREDELTEAM", "Are you sure you want to delete this team and all of its items?");
define("_AM_RUSUREDELSERVER", "Are you sure you want to delete this server?");
define("_AM_RUSUREDELMAP", "Are you sure you want to delete this map?");
define("_AM_RUSUREDELPOS", "Are you sure you want to delete this position?");
define("_AM_RUSUREDELRANK", "Are you sure you want to delete this rank?");
define("_AM_RUSUREDELSIZE", "Are you sure you want to delete this teamsize?");
define("_AM_RUSUREDELSIDE", "Are you sure you want to delete this teamside?");
define("_AM_TEAMSIDE","Страница:");
define("_AM_TEAMSIDESELECTION", "Страницы группы");
define("_AM_TEAMSIDESADDED", "Team Side(s) Added");
define("_AM_TEAMSIDESNOTADDED", "Team Side(s) NOT Added");
define("_AM_TEAMSIDESREMOVED", "Team Side(s) Removed");
define("_AM_TEAMSIDESNOTREMOVED", "Team Side(s) NOT Removed");
define("_AM_TEAMSIDEMNGR", "Manage Sides");
define("_AM_TEAMERRSIDENOTDEL", "Error - Side NOT Deleted");
define("_AM_TEAMSIDEDELETED", "Side Deleted");
define("_AM_TEAMERRORWHILESAVINGSIDE", "Error While Saving Side");
define("_AM_TEAMADDSIDE", "Add Side");
define("_AM_TEAMSIDEID", "Side ID");
define("_AM_TEAMSIDES", "Sides");
define("_AM_TEAMSIDESHORT", "Short");
define("_AM_TEAMSIDENAME", "Side");
define("_AM_TEAMERRORWHILESAVINGTEAM", "Error While Saving Team");
define("_AM_TEAMCONFIG","Team Configuration");
define("_AM_TEAMEDITSERVER", "Edit Server");
define("_AM_TEAMEDITRANK", "Edit Rank");
define("_AM_TEAMEDITTEAM", "Edit Team");

// Added 17.11.2003 - Jace
define("_AM_TEAMLAYOUTMNGR","Manage Layout");
define("_AM_TEAMLAYOUTCOLORSTATUSACTIVE","Color (Player status active)");
define("_AM_TEAMLAYOUTCOLORSTATUSINACTIVE","Color (Player status inactive)");
define("_AM_TEAMLAYOUTCOLORSTATUSONLEAVE","Color (Player status on leave)");
define("_AM_TEAMLAYOUTCOLORSTATUSPENDING","Color (Match pending)");
define("_AM_TEAMLAYOUTCOLORSTATUSWIN","Color (Match won)");
define("_AM_TEAMLAYOUTCOLORSTATUSLOSS","Color (Match lost)");
define("_AM_TEAMLAYOUTCOLORSTATUSDRAW","Color (Match draw)");
define("_AM_SAVE","Save");
define("_AM_TEAMERRORWHILESAVINGLAYOUT","Error While Saving Layout");
define("_AM_TEAMLAYOUTSAVED","Layout Saved");
define("_AM_MATCHREVIEW","Review:");
define("_AM_CUSTOMSERVER","Custom Server");
define("_AM_MAYCHOOSECUSTOMSERVER","or choose \"Custom Server\" and enter ip/port/description here:");

// Added 24.11.2003 - Jace
define("_AM_TEAMLADDERNAME","Ladder Name");
define("_AM_TEAMLADDERVISIBLE","Laddermatches visible in overview?");
define("_AM_YES","Yes");
define("_AM_NO","No");
define("_AM_LADDERMNGR","Manage Ladders");
define("_AM_TEAMLADDERDELETED","Ladder Deleted");
define("_AM_RUSUREDELLADDER", "Are you sure you want to delete this ladder?");
define("_AM_TEAMLADDERADDED","Ladder Added");
define("_AM_TEAMLADDERMODIFIED","Ladder Modified");
define("_AM_TEAMLADDERSELECTION", "Team Ladders");
define("_AM_TEAMLADDERSADDED", "Team Ladder(s) Added");
define("_AM_TEAMLADDERSNOTADDED", "Team Ladder(s) NOT Added");
define("_AM_TEAMLADDERSREMOVED", "Team Ladder(s) Removed");
define("_AM_TEAMLADDERSNOTREMOVED", "Team Ladder(s) NOT Removed");
define("_AM_SCREENSHOTS", "Screenshots:");
define("_AM_SCREENSHOTNAME", "Screenshot");
define("_AM_ADDSCREENSHOTS", "Click to modify or upload");
define("_AM_TEAMERRORWHILESAVINGSCREENSHOT","Error While Saving Screenshot");

// added 04-12-2003 Mithrandir
define("_AM_TEAMSCORESVISIBLE", "Match Scores visible for non-members?");

// added 09-01-2004 Mithrandir
define ("_AM_TEAMLAYOUTPERFECTCOLOR", "Perfect Colour");
define ("_AM_TEAMLAYOUTGOODCOLOR", "Good Colour");
define ("_AM_TEAMLAYOUTWARNCOLOR", "Warning Colour");
define ("_AM_TEAMLAYOUTBADCOLOR", "Bad Colour");
?>
