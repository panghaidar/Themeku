<script>
jQuery(document).ready(function() {
// hide orbit slider on load when user browses to page
$('#featured.orbit').hide(); // hide div, may need to change id to match yours
$('.loading').show(); // show the loading gif instead

// then when the window has fully loaded
$(window).bind('load', function() {
$('.loading').hide(); // hide loading gif
$('#featured.orbit').fadeIn('slow'); // show orbit
});
});
$(document).foundation();
</script>
