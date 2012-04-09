<?php
$label = array(
  'newborn' => 'label-info',
  'unstable' => 'label-important',
  'beta' => 'label-warning',
  'stable' => 'label-success',
  'stalled' => '',
  'no-info' => 'label-inverse'
  );

$nombre = array(
  'newborn' => 'nuevo',
  'unstable' => 'inestable',
  'beta' => 'beta',
  'stable' => 'estable',
  'stalled' => 'inactivo',
  'no-info' => 'sin info'
  );

$nombre_tipo = array(
  0 => 'SSL',
  1 => 'Difusión',
  2 => 'Desarrollo'
  );
?>
<div class="container">

      <div class="row">
        <div class="span12">
          <div class="page-header">
            <h1>
              Proyectos de <?php echo $nombre_tipo[$tipo]; ?>
              <small><?php if (count($proyectos) == 0) { echo 'No hay proyectos'; } else if (count($proyectos == 1)) { echo '1 proyecto.'; } else { echo count($proyectos) . ' proyecto'; } ?></small>
            </h1>
          </div>
          <div class="row">
            <?php foreach ($proyectos as $proyecto): ?>
            <div class="span6">
              <div class="row">
                <div class="span4">
                  <h2><?php echo $proyecto->name; ?></h2>
                  <p><?php echo $proyecto->desc; ?></p>
                  <h3>Colaboradores</h3>
                  <?php foreach ($usuarios as $usuario): ?>
                  <?php if ($usuario->project_id == $proyecto->id) { ?>
                    <span class="label label-info"><?php echo $usernames[$usuario->user_id]; ?></span>
                  <?php } ?>
                  <?php endforeach; ?>
                </div>
                <div class="span2">
                  <div style="padding: 8px 0;" class="well">
                    <ul class="nav nav-list">
                      <li class="nav-header">
                        Sobre <?php echo $proyecto->name; ?>
                      </li>
                      <li>
                        <i class="icon-user"></i>
                        Liderado por <?php echo $usernames[$proyecto->leader_id]; ?>
                      </li>
                      <li>
                        <a href="<?php echo $proyecto->repo_url; ?>">
                          <i class="icon-home"></i>
                          Repositorio git
                        </a>
                      </li>
                      <li>
                        <i class="icon-refresh"></i>
                        Estado: <span class="label <?php echo $label[$proyecto->status]; ?>"><?php echo $nombre[$proyecto->status]; ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>          
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