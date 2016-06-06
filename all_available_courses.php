
<h1><?php echo 'All the Available Courses in Dept. of CSE, BUET'?></h1>
		<legend></legend>
<?php if ($all_available_courses):?>
	<?php foreach($all_available_courses as $r) : ?> 
	 
	  <h3><?php echo  $r->course_id;?>
	  <?php echo  anchor("course/show_course_detail_for_non_registered_member/$r->course_id",$r->course_name);?></h3>

	<?php endforeach; ?> 

	<?php else: echo 'No courses';?>

	<?php endif?>
		<legend></legend>

