<?php
/*
 ===========================================================================================
 + Cerberus Content Management System.
 + ---
 + - Author : Gary Christopher Johnson
 + - E-Mail : TinkeSoftware@Protonmail.com // GCJohnsonChevalier@Protonmail.com
 + - Company: Tinke Software
 + - Notes  : View this file in a non-formatting text editor for correct indentation display
 + ---
 +
 +
 +
 +
 +
 +
 +
 +
 +
 +
 + ---
 + - File Location: root->Theme->IsazTechnologies->Theme.php
 + - File Version:  0.5 - Friday, May 14, 2021.
 + ---
 +%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
 +%%%()()%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()()()%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%/-\%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%|4|%  ~ Wynn ~
 +%%%()()%%()()()%%()%%()%%()()()%%()()()%%()%%()%%()()()%%()()()%%%%%%%%%%%%\-/% Build: 0.7
 ===========================================================================================
*/

/*
 ===========================
 +
 +
 + THEME FOLDER NAME
 +
 +
 ===========================
*/

$_THEME_DIRECTORY			= "IsazTechnologies";
$_THEME_DIRECTORY_IMAGE			= "Image";

/*
 ===========================
 +
 +
 + BLOCKS, LEFT TABLE
 +
 +
 ===========================
*/

$_THIS_THEMES_BLOCKS_1			= "
						<CENTER>
							<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">
								<TR>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Block/1.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"BI2\"></TD>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Block/3.png\" ALT=\"Image\"></TD>
								</TR>

								<TR>
									<TD CLASS=\"BI4\"></TD>
									<TD CLASS=\"BI5\" WIDTH=\"600\">
";

/*
 ===========================
 +
 +
 + BLOCKS, RIGHT TABLE
 +
 +
 ===========================
*/

$_THIS_THEMES_BLOCKS_2			= "
									<TD CLASS=\"BI6\"></TD>
								</TR>

								<TR>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Block/7.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"BI8\"></TD>
									<TD CLASS=\"BI9\"></TD>
								</TR>
							</TABLE>
						</CENTER>

						<BR>
";

/*
 ===========================
 +
 +
 + MODULES, CENTER TABLE
 +
 +
 ===========================
*/

$_THIS_THEMES_MODULES_1			= "
						<CENTER>
							<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">
								<TR>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Module/1.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"MI2\"></TD>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Module/3.png\" ALT=\"Image\"></TD>
								</TR>

								<TR>
									<TD CLASS=\"MI4\"></TD>
									<TD CLASS=\"MI5\" WIDTH=\"600\">
";

$_THIS_THEMES_MODULES_2			= "
									<TD CLASS=\"MI6\"></TD>
								</TR>

								<TR>
									<TD><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Module/7.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"MI8\"></TD>
									<TD CLASS=\"MI9\"></TD>
								</TR>
							</TABLE>
						</CENTER>
";

/*
 ===========================
 +
 +
 + META INFORMATION
 +
 +
 ===========================
*/

$_GLOBAL_META_TAGS			= "
		<Link REL=\"shortcut icon\" HREF=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Icon/FavIcon.ico\" TYPE=\"image/x-icon\">
		<META NAME=\"COPYRIGHT\" CONTENT=\"(C) Isaz Technologies\">
		<META NAME=\"KEYWORDS\" CONTENT=\"Isaz Technologies, Isaz, Technologies, Technology\">
		<META NAME=\"DESCRIPTION\" CONTENT=\"Isaz Technologies\">
		<META NAME=\"ROBOTS\" CONTENT=\"Isaz Technologies\">
		<META NAME=\"REVISIT-AFTER\" CONTENT=\"1 DAYS\">
		<META NAME=\"RATING\" CONTENT=\"GLOBAL\">
		<META NAME=\"GENERATOR\" CONTENT=\"Isaz Technologies\">
";

/*
 ===========================
 +
 +
 + LAYOUT VARIABLES [ 1 ]
 +
 +
 ===========================
*/

$_GLOBAL_LAYOUT_1			= "
		<CENTER><A HREF=\"?Application&#61;News\"><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Banner/Banner_Top.png\" WIDTH=\"90%\" HEIGHT=\"10%\" TITLE=\"Open Application :: News\" ALT=\"Open Application :: News\"></A></CENTER>

		<CENTER>
			<TABLE WIDTH=\"90%\">
				<TR>
					<TD VALIGN=\"Top\">
";

/*
 ===========================
 +
 +
 + LAYOUT VARIABLES [ 2 ]
 +
 +
 ===========================
*/

$_GLOBAL_LAYOUT_2			= "
					</TD>

					<TD VALIGN=\"Top\" WIDTH=\"100%\">
						$_THIS_THEMES_MODULES_1
";

/*
 ===========================
 +
 +
 + LAYOUT VARIABLES [ 3 ]
 +
 +
 ===========================
*/

$_GLOBAL_LAYOUT_3			= "
						$_THIS_THEMES_MODULES_2
					</TD>

					<TD VALIGN=\"Top\">
";

/*
 ===========================
 +
 +
 + LAYOUT VARIABLES [ 4 ]
 +
 +
 ===========================
*/

$_GLOBAL_LAYOUT_4			= "
					</TD>
				</TR>
			</TABLE>
		</CENTER>

		<CENTER><IMG SRC=\"Theme/$_THEME_DIRECTORY/$_THEME_DIRECTORY_IMAGE/Banner/Banner_Bottom.png\" WIDTH=\"100%\" TITLE=\"- Cerberus Content Management System -\" ALT=\"- Cerberus Content Management System -\"></CENTER>
";
?>
