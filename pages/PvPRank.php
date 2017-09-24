                     <div id="Mcontainer">
                        <center>
                                <a href="/Home"><?=$SiteName?></a>
                                → <a href="/Rank">Rank</a>  →
                                <a href="/<?=$pagename?>"><?=$pagename?></a>
                            
                        </center>
                         <br/>
                         
<link rel="stylesheet" href="./css/rank.css" type="text/css" media="all" />
	<link rel="stylesheet" href="./css/jquery.qtip.css" type="text/css" media="all" />
	<script type="text/javascript" src="./js/jquery.qtip.min.js"></script>
	<script type="text/javascript" src="./js/lib.js"></script>

<noscript>
		<div id="noscriptPadding">&nbsp;</div>
		<div id="noScriptWarning">This site will not work properly with javascript disabled.</div>
	</noscript>
	<div id="content">
		<center><h2 class="title">PVP Rankings</h2></center>
		<form id="rankingsForm" name="rankingsForm" method="post" action="core/rank.controller.php">
			<fieldset class="border">
				<legend>Level Range</legend>
				<select name="level" class="rankingsFormFilter" style="width:100px;">
					<option value="">Any</option>
					<option value="1">1 - 15</option>
					<option value="2">20 - 30</option>
					<option value="3">31 - Max</option>
				</select>
			</fieldset>
			<fieldset class="border">
				<legend>Class</legend>
				<select name="class" class="rankingsFormFilter" style="width:100px;">
					<option value="">Any</option>
					<option value="fighter">Fighter</option>
					<option value="defender">Defender</option>
					<option value="archer">Archer</option>
					<option value="ranger">Ranger</option>
					<option value="mage">Mage</option>
					<option value="priest">Priest</option>
					<option value="warrior">Warrior</option>
					<option value="guardian">Guardian</option>
					<option value="hunter">Hunter</option>
					<option value="assassin">Assassin</option>
					<option value="pagan">Pagan</option>
					<option value="oracle">Oracle</option>
				</select>
			</fieldset>
			<fieldset class="border">
				<legend>Faction</legend>
				<select name="faction" class="rankingsFormFilter" style="width:100px;">
					<option value="">Any</option>
					<option value="1">Alliance of Light</option>
					<option value="2">Union of Fury</option>
				</select>
			</fieldset>
			<fieldset class="border">
				<legend>Filter</legend>
				<input type="button" id="rankingsFormSubmit" value="Go!" style="width:50px;" />
			</fieldset>
		</form>
		<div id="rankingsFormResult"></div>
	</div>
	<div id="footer">
		<center><i>Original programming by Abrasive, 2012. Updated by Trayne01, 2017. (using new MSSQL PDO Drivers)</i></center>
	</div>
	<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready(function(){
			var rankingsForm = new AjaxResultTable('rankingsForm',0,25,{'K1':'DESC'});
		});
		//]]>
	</script></div>