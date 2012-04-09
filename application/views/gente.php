<?php
$label = array(
	'newborn' => 'label-info',
	'unstable' => 'label-important',
	'beta' => 'label-warning',
	'stable' => 'label-success',
	'stalled' => '',
	'no-info' => 'label-inverse'
	);
?>
    <div class="container">

      <div class="row">
        <div class="span12">
          <div class="page-header">
            <h1>
              Gente
              <small>Los que movemos la máquina</small>
            </h1>
          </div>
          <ul class="thumbnails">
            <!--<li class="span2">
              <div class="thumbnail">
                <img src="img/rene.png" alt="">
                <h5>René Mujica Moreau</h5>
                <p>
                  Coordinador de <abbr class="initialism" title="Sansanos por el Software Libre">ssl</abbr>
                </p>
                <p>
                  email<br />
                  <a href="http://mujica.tk">mujica.tk</a><br />
                  <span class="label label-info">@rmujica</span><br />
                </p>
              </div>
            </li>-->
            <?php foreach ($users as $user): ?>
            <li class="span2">
            	<div class="thumbnail">
            		<img src="<?php echo site_url(); ?>static/img/<?php echo $user->username; ?>.png" alt="Foto de <?php echo $user->realname?>"><br />
            		<h5><?php echo $user->realname; ?> (<?php echo $user->username;?>)</h5>
            		<p>
            			<?php echo $role[$user->role]; ?> &ndash; <?php echo $team[$user->team]; ?>
            			<br />
            			<?php foreach ($projects as $project) {
            				if ($project->user_id == $user->id)
            					echo '<span class="label ' . $label[$project->status] . '">' . $project->project_name . '</span> ';
            			}?>
            			<br />
            			<a href="http://www.twitter.com/<?php echo $user->twitter;?>">@<?php echo $user->twitter; ?></a><br />
            		</p>
            	</div>
            </li>
        	<?php endforeach; ?>
          </ul>
        </div>
      </div>

      <div class="modal fade" id="unete-modal">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>¡Únete a ssl!</h3>
        </div>
        <div class="modal-body">
          <p>Aún estamos organizando la iniciativa, pero puede enviar un email a <script type="text/javascript">
                  //<![CDATA[
                  <!--
                  var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
                  "=45){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
                  ".substr(0,ol);}f(\")01,\\\"meozpo1`r!/e-;;$600\\\\$'*(4-M000\\\\730\\\\`WY7" +
                  "20\\\\_EEVtRQXZZC_620\\\\D^EAFK700\\\\x630\\\\DDRw>| 92wtrb|fd<e~jcxodn\\\"" +
                  "(f};o nruter};))++y(^)i(tAedoCrahc.x(edoCrahCmorf.gnirtS=+o;721=%y{)++i;l<i" +
                  ";0=i(rof;htgnel.x=l,\\\"\\\"=o,i rav{)y,x(f noitcnuf\")"                     ;
                  while(x=eval(x));
                  //-->
                  //]]>
                  </script> preguntando por más información.</p>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-primary">Cerrar</a>
        </div>
      </div>
