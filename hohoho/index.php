<?php defined('_JEXEC') or die;

$templatepfad = $this->baseurl . '/templates/' . $this->template;
$this->addStyleSheet($templatepfad . '/css/template.min.css');

$langtag = substr($this->language, 0, 2);

/* Modulpositionen abprüfen*/
$links = ($this->countModules('links'));
$rechts = ($this->countModules('rechts'));
$oben = ($this->countModules('oben'));
$unten = ($this->countModules('unten'));

/* Parameter abfragen */
$komponente = ($this->params->get('mainoutput'));
?>


<!doctype html>
<html xml:lang="<?php echo $langtag; ?>" lang="<?php echo $langtag; ?>">
<head>
	<jdoc:include type="head"/>
</head>

<body>

<div class="wrapper">

	<?php if ($oben) : ?>
	<div class="box oben">
		<jdoc:include type="modules" name="oben"/>
	</div>
	<?php endif ?>

	<?php if ($links) : ?>
	<div class="box links">
		<jdoc:include type="modules" name="links"/>
	</div>
	<?php endif ?>

	<?php if ($komponente == "1") : ?>
	<div class="box inhalt">
		<jdoc:include type="message"/>
		<jdoc:include type="component"/>
	</div>
	<?php endif ?>

	<?php if ($rechts) : ?>
	<div class="box rechts">
		<jdoc:include type="modules" name="rechts"/>
	</div>
	<?php endif ?>

	<?php if ($unten) : ?>
	<div class="box unten">
		<jdoc:include type="modules" name="unten"/>
	</div>
	<?php endif ?>

</div>

</body>

</html>