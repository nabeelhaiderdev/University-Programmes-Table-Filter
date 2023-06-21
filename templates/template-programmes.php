<?php
/**
 * Template Name: Programmes
 * Template Post Type: page
 *
 * This template is for displaying home page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Spring AI-Generator
 * @since 1.0.0
 *
 */

/**
 * Redirects non-logged-in users to a custom page.
 *
 * @since 1.0.0
 *
 * @return void
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;

$springai_pagetitle = (isset($fields['springai_pagetitle']) && $fields['springai_pagetitle']!='' ) ? $fields['springai_pagetitle'] : get_the_title();

?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
	href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
	rel="stylesheet">
<div class="pageTable">
	<div class="programFinder">
		<div class="container">
			<header class="sectionHeader">
				<h2>Programme Finder</h2>
				<a href="#" class="btnApply">Apply Now</a>
			</header>
			<div class="finderTwoCols">
				<aside class="finderSidebar">
					<div class="sideMenu activeSideMenu">
						<h3><a href="javascript:;" class="sideOpener">Programme Categories</a></h3>
						<div class="sideMenuDetails">
							<ul>
								<li>
									<label>
										<input type="checkbox" checked name="item-1">
										<span class="label-text">General Management</span>
									</label>
								</li>
							</ul>
							<div class="menuInfo">
								<a href="#" class="btnUncheck">Uncheck All</a>
							</div>
						</div>
					</div>
					<div class="sideMenu activeSideMenu">
						<h3><a href="javascript:;" class="sideOpener">Programme Categories</a></h3>
						<div class="sideMenuDetails">
							<ul>
								<li>
									<label>
										<input type="checkbox" checked name="item-1">
										<span class="label-text">General Management</span>
									</label>
								</li>
							</ul>
							<div class="menuInfo">
								<a href="#" class="btnUncheck">Uncheck All</a>
							</div>
						</div>
					</div>
					<div class="sideMenu activeSideMenu">
						<h3><a href="javascript:;" class="sideOpener">Programme Categories</a></h3>
						<div class="sideMenuDetails">
							<ul>
								<li>
									<label>
										<input type="checkbox" checked name="item-1">
										<span class="label-text">General Management</span>
									</label>
								</li>
							</ul>
							<div class="menuInfo">
								<a href="#" class="btnUncheck">Uncheck All</a>
							</div>
						</div>
					</div>
				</aside>
				<div class="finderContent">
					<div class="programsTableHolder">
						<div class="programsTableWrap">
							<table class="programsTable">
								<thead>
									<tr>
										<th><strong class="title">General Management</strong></th>
										<th><strong class="subtitle">Jun</strong></th>
										<th><strong class="subtitle">Jul</strong></th>
										<th><strong class="subtitle">Aug</strong></th>
										<th><strong class="subtitle">Sep</strong></th>
										<th><strong class="subtitle">Oct</strong></th>
										<th><strong class="subtitle">Nov</strong></th>
										<th><strong class="subtitle">Dec</strong></th>
										<th><strong class="subtitle">Jan</strong></th>
										<th><strong class="subtitle">Feb</strong></th>
										<th><strong class="subtitle">Mar</strong></th>
										<th><strong class="subtitle">Apr</strong></th>
										<th><strong class="subtitle">May</strong></th>
									</tr>
								</thead>
								<tbody>
									<tr class="row-highlight">
										<td><strong class="title">Management Development Programme </strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td class="highlight"><strong class="subtitle textGreen"><a
													href="#">30-10</a></strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
									</tr>
									<tr class="row-highlight">
										<td><strong class="title">Venture Advancement Programme</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td class="highlight"><strong class="subtitle textRed"><a
													href="#">17-22</a></strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
									</tr>
									<tr>
										<td><strong class="title">Venture Advancement Programme</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td class="highlight"><strong class="subtitle textBlue"><a
													href="#">17-22</a></strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
										<td><strong class="subtitle">&nbsp;</strong></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
