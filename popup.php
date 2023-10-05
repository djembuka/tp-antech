<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Wizard");
?>

<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="styles.css">

    <link href="css/app.1f07605a.css" rel="preload" as="style">
    <link href="js/app.f381f368.js" rel="preload" as="script">
    <link href="js/chunk-vendors.1a128d77.js" rel="preload" as="script">
    <link href="css/app.1f07605a.css" rel="stylesheet">

<style>
@media(max-width: 767px) {
#wizardModal.modal .modal-dialog,#wizard[data-v-app],#wizard-step-main,.wizard-step-main__wrapper{min-height: calc(100vh - 100px) !important;}
}
</style>

<div class="container">
	<noscript>
		<strong>We're sorry but wizard doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
  
  <a class="banner-slider__button" data-toggle="modal" data-target="#wizardModal" data-url="/dev/wizard.php">Узнать стоимость изготовления</a>
    
  <div class="modal fade in" tabindex="-1" role="dialog" id="wizardModal">
    <div class="modal-dialog" role="document">
      <button class="close" id="close_form" type="button" data-dismiss="modal" aria-label="Close"></button>
      <div class="modal-content" style="background-color: #fff;">
        <div id="wizard"></div>
      </div>
    </div>
  </div>
  
</div>

<script src="store.js"> </script>
<script src="js/chunk-vendors.1a128d77.js"></script><script src="js/app.f381f368.js"></script>
<script>
$('#wizard').on('hide.bs.modal', function () {
  if (window.ym) {
    window.ym(103630, 'reachGoal', 'WIZARD-CLOSE-POPUP');
  }
});
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>