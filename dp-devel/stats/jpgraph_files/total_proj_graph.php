<?php
$relPath="./../../pinc/";
include_once($relPath.'dpsql.inc');
include_once($relPath.'site_vars.php');
include_once($relPath.'project_states.inc');
include_once($relPath.'connect.inc');
include_once($code_dir.'/stats/statestats.inc');
include_once($relPath.'gettext_setup.inc');
include_once('common.inc');

// Initialize the graph before anything else.
// This makes use of the jpgraph cache if enabled.
// Argument to init_projects_graph is the cache timeout in minutes.
$graph = init_projects_graph(60);

new dbConnect();

//Create "projects Xed per day" graph for all known history

$psd = get_project_status_descriptor( $_GET['which'] );

$timeframe = _('since stats began');


//query db and put results into arrays
$result = mysql_query("
	SELECT date, SUM(num_projects)
	FROM project_state_stats
	WHERE $psd->state_selector
	GROUP BY date
	ORDER BY date
");

list($datax,$y_cumulative) = dpsql_fetch_columns($result);

$datay1 = array_successive_differences($y_cumulative);
$datay1[] = 0;

draw_projects_graph(
	$graph,
	$datax,
	$datay1,
	'increments',
	$psd->color,
	"$psd->per_day_title ($timeframe)"
);

?>
