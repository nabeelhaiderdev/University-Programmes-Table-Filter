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

$management_level_terms = get_terms(
    array(
        'taxonomy' => 'management-level',
        'hide_empty' => false,
    )
);

$programmes_category_terms = get_terms(
    array(
        'taxonomy' => 'programmes',
        'hide_empty' => false,
    )
);

$programmes_category_terms = get_terms(
    array(
        'taxonomy' => 'programmes',
        'hide_empty' => false,
    )
);


// Get all posts
$dates_args = array(
    'post_type' => 'programme', // Adjust the post type as needed
    'posts_per_page' => -1,
);

$dates_posts = get_posts($dates_args);

// Array to store unique months
$unique_months = array();

// Loop through each post
foreach ($dates_posts as $post) {
    // Get the post meta value for 'plugin_name_date'
    $date = get_post_meta($post->ID, 'plugin_name_date', true);

     // Check if the value is not empty and extract the month
    if (!empty($date)) {
        $month = date('F', strtotime($date));

        // Check if the month is not already in the unique_months array
        if (!in_array($month, $unique_months)) {
            // Add the month to the unique_months array
            $unique_months[] = $month;
        }
    }
}

// Sort the unique months in the original month order
function sortMonths($a, $b) {
    $monthOrder = array(
        'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
    );

    $aIndex = array_search($a, $monthOrder);
    $bIndex = array_search($b, $monthOrder);

    return $aIndex - $bIndex;
}

usort($unique_months, 'sortMonths');

$unique_months = array(
        'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
    );
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
							<ul id="programmes-categories">
								<?php foreach ($programmes_category_terms as $programme_category) { ?>
								<li>
									<label>
										<input type="checkbox" checked name="<?php echo $programme_category->slug; ?>"
											id="<?php echo $programme_category->slug; ?>">
										<span class="label-text"><?php echo $programme_category->name; ?></span>
									</label>
								</li>
								<?php } ?>
							</ul>
							<div class="menuInfo">
								<a class="btnUncheck" id="uncheck-all-categories">Uncheck All</a>
							</div>
							<div class="menuInfo">
								<a class="btnUncheck" id="check-all-categories">Check All</a>
							</div>
						</div>
					</div>
					<?php if (!empty($management_level_terms)) { ?>
					<div class="sideMenu activeSideMenu">
						<h3><a href="javascript:;" class="sideOpener">Management Level</a></h3>
						<div class="sideMenuDetails">
							<ul id="programmes-levels">
								<?php foreach ($management_level_terms as $management_level) { ?>
								<li>
									<label>
										<input type="checkbox" checked name="<?php echo $management_level->slug; ?>"
											id="<?php echo $management_level->slug; ?>">
										<span class="label-text"><?php echo $management_level->name; ?></span>
									</label>
								</li>
								<?php } ?>
							</ul>
							<div class="menuInfo">
								<a class="btnUncheck" id="uncheck-all-levels">Uncheck All</a>
							</div>
							<div class="menuInfo">
								<a class="btnUncheck" id="check-all-levels">Check All</a>
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="sideMenu activeSideMenu">
						<h3><a href="javascript:;" class="sideOpener">Month</a></h3>
						<div class="sideMenuDetails">
							<ul id="programmes-months">
								<?php // Display the sorted unique months
								foreach ($unique_months as $month) { ?>
								<li>
									<label>
										<input type="checkbox" checked id="<?php echo strtolower($month); ?>">
										<span class="label-text">
											<?php echo $month . '<br>'; ?>
										</span>
									</label>
								</li>
								<?php } ?>
							</ul>
							<div class="menuInfo">
								<a class="btnUncheck" id="uncheck-all-months">Uncheck All</a>
							</div>
							<div class="menuInfo">
								<a class="btnUncheck" id="check-all-months">Check All</a>
							</div>
						</div>
					</div>
				</aside>
				<div class="finderContent">

					<?php // Get all terms within the 'programme' taxonomy
								$terms = get_terms(array(
									'taxonomy' => 'programmes',
									'hide_empty' => false,
								));
								
								// Loop through each term
								foreach ($terms as $term) {
									$term_id = $term->term_id;
								?>
					<div class="programsTableHolder">
						<div class="programsTableWrap">
							<table class="programsTable" id="full-cat-posts-<?php echo $term->slug; ?>">
								<thead>
									<tr>
										<th><strong class="title"><?php echo $term->name; ?></strong></th>

										<?php
										$months = array(
											'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
										);
										?>

										<!-- Display months using foreach loop -->
										<?php foreach ($months as $index => $month) : ?>
										<th id="month-name-<?php echo strtolower($month); ?>"><strong
												class="subtitle"><?php echo $month; ?></strong></th>
										<?php endforeach; ?>

									</tr>
								</thead>
								<?php 
								// Set up the query arguments
								$args = array(
									'post_type' => 'programme', // Adjust the post type as needed
									'tax_query' => array(
										array(
											'taxonomy' => 'programmes',
											'field' => 'term_id',
											'terms' => $term_id,
										),
									),
								);

								$query = new WP_Query($args);
								// The Loop
								if ($query->have_posts()) {
								?>
								<tbody>
									<?php 
										while ($query->have_posts()) {
										$query->the_post();
										$terms = get_the_terms(get_the_ID(), 'management-level');
										if ($terms && !is_wp_error($terms)) {
											foreach ($terms as $term) {
												$term_id = $term->term_id;
												$term_name = $term->name;
												$term_slug = $term->slug;
												break;
											}
										}
										if($term_name == 'Top'){
											$current_hex_color = '#35aa47';
										} elseif($term_name == 'Senior'){
											$current_hex_color = '#4b8df8';
										} elseif($term_name == 'Middle'){
											$current_hex_color = '#d84a38';
										}  
										 $date = get_post_meta($post->ID, 'plugin_name_date', true);
										 $date_end = get_post_meta($post->ID, 'plugin_name_end_date', true);
										  if($date){
											$date_start_display = date('d', strtotime($date));
										 } else {
											$date_start_display = '';
										 }
										 if($date_end){
											$date_end_display = date('d', strtotime($date_end));
										 } else {
											$date_end_display = '';
										 }
										 $month = date('F', strtotime($date));
										 
									?>
									<tr class="row-highlight" id="current-management-level-<?php echo $term_slug; ?>">
										<td><strong class="title"><?php the_title(); ?>
											</strong></td>
										<?php
											$date = get_post_meta($post->ID, 'plugin_name_date', true);
											$month = date('F', strtotime($date));
											
											for ($m = 1; $m <= 12; $m++) {
												$monthTitle = '';

												// Assign month title based on the value of $m
												if ($m === 1) {
													$monthTitle = 'january';
												} elseif ($m === 2) {
													$monthTitle = 'february';
												} elseif ($m === 3) {
													$monthTitle = 'march';
												} elseif ($m === 4) {
													$monthTitle = 'april';
												} elseif ($m === 5) {
													$monthTitle = 'may';
												} elseif ($m === 6) {
													$monthTitle = 'june';
												} elseif ($m === 7) {
													$monthTitle = 'july';
												} elseif ($m === 8) {
													$monthTitle = 'august';
												} elseif ($m === 9) {
													$monthTitle = 'september';
												} elseif ($m === 10) {
													$monthTitle = 'october';
												} elseif ($m === 11) {
													$monthTitle = 'november';
												} elseif ($m === 12) {
													$monthTitle = 'december';
												}
												
												echo '<td><strong style="color: '.$current_hex_color.'" class="subtitle" id="programme-month-'.$monthTitle.'">';
												if ($month === date('F', mktime(0, 0, 0, $m, 1))) {
													echo '<a href="'. get_the_permalink() .'">' . $date_start_display .' - '. $date_end_display  . '</a>';
												} else {
													echo '&nbsp;';
												}
												echo '</strong></td>';
											}
											?>
									</tr>
									<?php } ?>
								</tbody>
								<?php }  /* Restore original Post Data */
								wp_reset_postdata();
								}  ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>