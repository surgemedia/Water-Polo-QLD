<?php
/**
 * Template Name: Club (Linked with Play)
 */
?>
<?php
	
	$heading_gap = "heading-gap";
	if(get_field('heading-gap') === false){
		$heading_gap = "heading-gap-top";
	}
	get_component([ 'template' =>
'organism/page-heading',
											'remove_tags'=> get_field('remove_elements'),
											'vars' => [
														"class" => '',
														"title" => get_field('title'),
														"subtitle" => get_field('subtitle'),
														"content" => get_field('content'),
														"background" => get_field('background'),
														"image" => get_field('image'),
														"button" => get_field('button_list_button'),
														 "heading-gap" => $heading_gap

														]
											 ]);
	unset($heading_gap);
 ?>
<section class="club">
    <div id="clubs">
    </div>
</section>
<script src="https://npmcdn.com/babel-core@5.8.38/browser.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react.min.js" type="text/javascript">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react-dom.min.js" type="text/javascript">
</script>
<script type="text/babel">
    var ClubCard = React.createClass({
	  render: function() {

  	return <article className={this.props.coreclass}>
		<div className="col-md-6 col-xs-12 pull-left text-center">
				<img className="img-responsive img-circle" src={this.props.logo} alt=""></img>
		</div>
		<div className="wrapper col-md-6 col-xs-12 col-md-6 card club padding-4-top padding-4-bottom  molecule ">
		<hgroup>
			<h1>{this.props.title}</h1>
		</hgroup>
		<p dangerouslySetInnerHTML={{__html: this.props.content}}>
		</p>
		  	<div className="button-list">
				<a className="btn text-uppercase btn text-uppercase" href="{this.props.clublink}"> About the club </a>
				
				</div>
	</article>;
	  }
	});
<?php 
function url_get_contents ($Url) {
    if (!function_exists('curl_init')){ 
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$clubWebsite = 'http://dev-play-water-polo.pantheonsite.io/wp-json/rest/clubs/';
?>


var data = <?php echo file_get_contents($clubWebsite); ?>;

 var ClubList = React.createClass({
	  render: function() {
	  	var rows = [];
			for (var i=0; i < this.props.clublist.length; i++) {
					var main_classes = "col-md-6 card club padding-4-top padding-4-bottom molecule  "+this.props.clublist[i].color;
					var clubLink = '<?php echo $clubWebsite; ?>'+this.props.slug;
			    rows.push(<ClubCard logo={this.props.clublist[i].logo} title={this.props.clublist[i].title} content={this.props.clublist[i].content} clublink={clubLink} coreclass={main_classes}></ClubCard>);
			}
	    return <div>{rows}</div>;
	  }
	});
ReactDOM.render(
		  <ClubList clublist={data}></ClubList>,
		  document.getElementById('clubs')
		);
</script>
<?php 
if (!is_front_page()){
	$vars['front_page'] = get_option('page_on_front');
	$vars['builder'] = get_field('layout',$vars['front_page']);
	foreach ($vars['builder'] as $key =>
$layout) {

		if($layout['acf_fc_layout'] == 'contact'){					
			//Section Options
			$layout["section"] = $layout['acf_fc_layout'];
			$layout['section_data'] = get_section_options($layout);

			//Call file for display
			echo '
<section '.$layout['section_data'].'="">
    ';
					get_component([
								'template' => 'organism/contact',
								'vars' => $layout
					]);
						
			echo '
</section>
';
			
		}
	} 
}
?>
