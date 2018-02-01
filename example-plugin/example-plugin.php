<?php
/**
*Plugin Name: Example Plugin
*Author: Casey Smith
*Description: Just a simple plugin for learning purposes
**/



// A SIMPLE FUNCTION THAT CREATES A SHORTCODE TO EASILY ADD DUMMY TEXT TO POSTS AND PAGES.
function casey_example_function() {

	$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mattis ex vel tincidunt sagittis. Phasellus augue tellus, eleifend at felis sed, semper fringilla nunc. Sed eget metus sed dolor congue iaculis. Pellentesque lectus lectus, tincidunt a leo bibendum, sagittis accumsan ex. Nulla vel pretium lectus, quis cursus nunc. Aliquam erat volutpat. Donec sed metus ultricies, sollicitudin sapien sed, ultrices tortor. Ut vulputate massa metus, quis cursus nibh condimentum a. Vestibulum gravida bibendum tortor, at rhoncus ligula vehicula sed. Proin imperdiet in nisl ut facilisis. Pellentesque suscipit erat sit amet hendrerit maximus. Phasellus ac eros vel nulla interdum laoreet. Donec sed posuere nulla, sed vulputate augue. Maecenas a velit egestas, pellentesque odio ac, dapibus massa. Pellentesque efficitur est a purus tristique, at cursus sapien accumsan.";

	return $content;
}

add_shortcode('dummytext', 'casey_example_function');

?>