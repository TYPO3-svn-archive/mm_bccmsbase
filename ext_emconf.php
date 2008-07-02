<?php

########################################################################
# Extension Manager/Repository config file for ext: "mm_bccmsbase"
#
# Auto generated 19-06-2008 16:44
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'MM ECL - ExtensionClassLibrary',
	'description' => 'Baseclasses for Extensions. Mainly use bei the mm_ extensions',
	'category' => 'fe',
	'shy' => 0,
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => 0,
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author' => 'Mike Mitterer',
	'author_email' => 'office@bitcon.at',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '1.0.5',
	'_md5_values_when_last_written' => 'a:234:{s:9:"ChangeLog";s:4:"124e";s:10:"README.txt";s:4:"ee2d";s:12:"ext_icon.gif";s:4:"5867";s:25:"doc/history_bccmsbase.txt";s:4:"c2ec";s:14:"doc/manual.sxw";s:4:"e27b";s:18:"doc/mime_types.ods";s:4:"52db";s:19:"doc/wizard_form.dat";s:4:"9d69";s:20:"doc/wizard_form.html";s:4:"a026";s:33:"lib/class.mmlib_bcextfilefunc.php";s:4:"d5a1";s:25:"lib/class.mmlib_cache.php";s:4:"c0b9";s:25:"lib/class.mmlib_crypt.php";s:4:"7ccf";s:31:"lib/class.mmlib_extfrontend.php";s:4:"9fb9";s:45:"lib/class.mmlib_extfrontend.php-backup_060119";s:4:"1ff7";s:32:"lib/class.mmlib_filehandling.php";s:4:"e14b";s:28:"lib/class.mmlib_folderui.php";s:4:"6546";s:23:"lib/class.mmlib_log.php";s:4:"5a85";s:29:"lib/class.mmlib_mimetypes.php";s:4:"0fca";s:33:"lib/class.mmlib_minibenchmark.php";s:4:"e86a";s:24:"lib/class.mmlib_tree.php";s:4:"2637";s:32:"lib/class.mmlib_xajaxwrapper.php";s:4:"31c1";s:17:"phphelper/zip.php";s:4:"cafa";s:21:"phphelper/zip.php.old";s:4:"32de";s:17:"xajax/LICENSE.txt";s:4:"9e90";s:16:"xajax/README.txt";s:4:"e194";s:23:"xajax/copyright.inc.php";s:4:"3443";s:23:"xajax/release_notes.txt";s:4:"0cff";s:46:"xajax/xajax_plugins/response/googleMap.inc.php";s:4:"352a";s:49:"xajax/xajax_plugins/response/tableUpdater.inc.php";s:4:"89f3";s:44:"xajax/xajax_plugins/response/tableUpdater.js";s:4:"a687";s:36:"xajax/xajax_controls/content.inc.php";s:4:"6bd6";s:37:"xajax/xajax_controls/document.inc.php";s:4:"43a6";s:33:"xajax/xajax_controls/form.inc.php";s:4:"c9ac";s:34:"xajax/xajax_controls/group.inc.php";s:4:"4505";s:33:"xajax/xajax_controls/misc.inc.php";s:4:"a622";s:38:"xajax/xajax_controls/structure.inc.php";s:4:"b9cc";s:57:"xajax/xajax_controls/validate_HTML401TRANSITIONAL.inc.php";s:4:"110b";s:57:"xajax/xajax_controls/validate_XHTML10TRANSITIONAL.inc.php";s:4:"8e90";s:31:"xajax/xajax_core/legacy.inc.php";s:4:"fbd0";s:30:"xajax/xajax_core/xajax.inc.php";s:4:"526a";s:45:"xajax/xajax_core/xajaxArgumentManager.inc.php";s:4:"f25d";s:34:"xajax/xajax_core/xajaxCall.inc.php";s:4:"994b";s:38:"xajax/xajax_core/xajaxCompress.inc.php";s:4:"050e";s:37:"xajax/xajax_core/xajaxControl.inc.php";s:4:"7068";s:45:"xajax/xajax_core/xajaxLanguageManager.inc.php";s:4:"d7ea";s:36:"xajax/xajax_core/xajaxPlugin.inc.php";s:4:"bb5e";s:43:"xajax/xajax_core/xajaxPluginManager.inc.php";s:4:"9202";s:37:"xajax/xajax_core/xajaxRequest.inc.php";s:4:"7c31";s:38:"xajax/xajax_core/xajaxResponse.inc.php";s:4:"b2d0";s:45:"xajax/xajax_core/xajaxResponseManager.inc.php";s:4:"94b2";s:38:"xajax/xajax_core/xajax_lang_de.inc.php";s:4:"31f2";s:63:"xajax/xajax_core/plugin_layer/xajaxCallableObjectPlugin.inc.php";s:4:"b920";s:63:"xajax/xajax_core/plugin_layer/xajaxDefaultIncludePlugin.inc.php";s:4:"41d9";s:54:"xajax/xajax_core/plugin_layer/xajaxEventPlugin.inc.php";s:4:"e433";s:57:"xajax/xajax_core/plugin_layer/xajaxFunctionPlugin.inc.php";s:4:"3367";s:55:"xajax/xajax_core/plugin_layer/xajaxScriptPlugin.inc.php";s:4:"f1ab";s:65:"xajax/xajax_core/plugin_layer/support/xajaxCallableObject.inc.php";s:4:"f19e";s:56:"xajax/xajax_core/plugin_layer/support/xajaxEvent.inc.php";s:4:"bec2";s:63:"xajax/xajax_core/plugin_layer/support/xajaxUserFunction.inc.php";s:4:"bf0f";s:30:"xajax/documentation/index.html";s:4:"75a0";s:35:"xajax/documentation/styles/main.css";s:4:"e88b";s:38:"xajax/documentation/index/Classes.html";s:4:"71ac";s:40:"xajax/documentation/index/Constants.html";s:4:"4424";s:36:"xajax/documentation/index/Files.html";s:4:"6637";s:40:"xajax/documentation/index/Functions.html";s:4:"d93d";s:41:"xajax/documentation/index/Functions2.html";s:4:"6833";s:41:"xajax/documentation/index/Functions3.html";s:4:"ded5";s:41:"xajax/documentation/index/Functions4.html";s:4:"5641";s:41:"xajax/documentation/index/Functions5.html";s:4:"b70e";s:38:"xajax/documentation/index/General.html";s:4:"ef86";s:40:"xajax/documentation/index/General10.html";s:4:"71b3";s:39:"xajax/documentation/index/General2.html";s:4:"3cfd";s:39:"xajax/documentation/index/General3.html";s:4:"9872";s:39:"xajax/documentation/index/General4.html";s:4:"e8c1";s:39:"xajax/documentation/index/General5.html";s:4:"67c4";s:39:"xajax/documentation/index/General6.html";s:4:"fdb0";s:39:"xajax/documentation/index/General7.html";s:4:"aab8";s:39:"xajax/documentation/index/General8.html";s:4:"00c9";s:39:"xajax/documentation/index/General9.html";s:4:"544e";s:40:"xajax/documentation/index/Variables.html";s:4:"e609";s:41:"xajax/documentation/index/Variables2.html";s:4:"f529";s:48:"xajax/documentation/files/copyright-inc-php.html";s:4:"2e21";s:71:"xajax/documentation/files/xajax_plugins/response/googleMap-inc-php.html";s:4:"6909";s:74:"xajax/documentation/files/xajax_plugins/response/tableUpdater-inc-php.html";s:4:"7cc7";s:61:"xajax/documentation/files/xajax_controls/content-inc-php.html";s:4:"879d";s:62:"xajax/documentation/files/xajax_controls/document-inc-php.html";s:4:"48a2";s:58:"xajax/documentation/files/xajax_controls/form-inc-php.html";s:4:"36a1";s:59:"xajax/documentation/files/xajax_controls/group-inc-php.html";s:4:"22c4";s:58:"xajax/documentation/files/xajax_controls/misc-inc-php.html";s:4:"541f";s:63:"xajax/documentation/files/xajax_controls/structure-inc-php.html";s:4:"5462";s:55:"xajax/documentation/files/xajax_core/xajax-inc-php.html";s:4:"fef7";s:70:"xajax/documentation/files/xajax_core/xajaxArgumentManager-inc-php.html";s:4:"4a37";s:59:"xajax/documentation/files/xajax_core/xajaxCall-inc-php.html";s:4:"a3ef";s:63:"xajax/documentation/files/xajax_core/xajaxCompress-inc-php.html";s:4:"8b61";s:62:"xajax/documentation/files/xajax_core/xajaxControl-inc-php.html";s:4:"b99f";s:70:"xajax/documentation/files/xajax_core/xajaxLanguageManager-inc-php.html";s:4:"9b6b";s:61:"xajax/documentation/files/xajax_core/xajaxPlugin-inc-php.html";s:4:"67ca";s:68:"xajax/documentation/files/xajax_core/xajaxPluginManager-inc-php.html";s:4:"3fb7";s:62:"xajax/documentation/files/xajax_core/xajaxRequest-inc-php.html";s:4:"5ec5";s:63:"xajax/documentation/files/xajax_core/xajaxResponse-inc-php.html";s:4:"03f2";s:70:"xajax/documentation/files/xajax_core/xajaxResponseManager-inc-php.html";s:4:"bf4c";s:63:"xajax/documentation/files/xajax_core/xajax_lang_de-inc-php.html";s:4:"38ac";s:88:"xajax/documentation/files/xajax_core/plugin_layer/xajaxCallableObjectPlugin-inc-php.html";s:4:"3409";s:88:"xajax/documentation/files/xajax_core/plugin_layer/xajaxDefaultIncludePlugin-inc-php.html";s:4:"08ae";s:79:"xajax/documentation/files/xajax_core/plugin_layer/xajaxEventPlugin-inc-php.html";s:4:"fb54";s:82:"xajax/documentation/files/xajax_core/plugin_layer/xajaxFunctionPlugin-inc-php.html";s:4:"9658";s:80:"xajax/documentation/files/xajax_core/plugin_layer/xajaxScriptPlugin-inc-php.html";s:4:"964c";s:90:"xajax/documentation/files/xajax_core/plugin_layer/support/xajaxCallableObject-inc-php.html";s:4:"dc6e";s:81:"xajax/documentation/files/xajax_core/plugin_layer/support/xajaxEvent-inc-php.html";s:4:"b1f6";s:88:"xajax/documentation/files/xajax_core/plugin_layer/support/xajaxUserFunction-inc-php.html";s:4:"5de0";s:54:"xajax/documentation/files/examples/helloworld-php.html";s:4:"f7f5";s:62:"xajax/documentation/files/examples/xul/xulApplication-php.html";s:4:"c32b";s:57:"xajax/documentation/files/examples/xul/xulServer-php.html";s:4:"da8b";s:68:"xajax/documentation/files/examples/multiply/multiply-common-php.html";s:4:"67fe";s:61:"xajax/documentation/files/examples/multiply/multiply-php.html";s:4:"55c9";s:68:"xajax/documentation/files/examples/multiply/multiply-server-php.html";s:4:"7f65";s:66:"xajax/documentation/files/examples/thewall/thewall-common-php.html";s:4:"af22";s:59:"xajax/documentation/files/examples/thewall/thewall-php.html";s:4:"1688";s:66:"xajax/documentation/files/examples/thewall/thewall-server-php.html";s:4:"c489";s:64:"xajax/documentation/files/examples/signup/signup-common-php.html";s:4:"e651";s:57:"xajax/documentation/files/examples/signup/signup-php.html";s:4:"d45c";s:64:"xajax/documentation/files/examples/signup/signup-server-php.html";s:4:"e45e";s:66:"xajax/documentation/files/xajax_js/xajax_core_uncompressed-js.html";s:4:"260f";s:67:"xajax/documentation/files/xajax_js/xajax_debug_uncompressed-js.html";s:4:"2eae";s:69:"xajax/documentation/files/xajax_js/xajax_lang_de_uncompressed-js.html";s:4:"615b";s:68:"xajax/documentation/files/xajax_js/xajax_legacy_uncompressed-js.html";s:4:"1c91";s:69:"xajax/documentation/files/xajax_js/xajax_verbose_uncompressed-js.html";s:4:"cfe3";s:58:"xajax/documentation/files/tests/errorHandlingTest-php.html";s:4:"5b0f";s:46:"xajax/documentation/files/tests/index-php.html";s:4:"0fa5";s:59:"xajax/documentation/files/tests/registerObjectTest-php.html";s:4:"248c";s:58:"xajax/documentation/files/tests/searchReplaceTest-php.html";s:4:"94ef";s:58:"xajax/documentation/files/tests/xajaxResponseTest-php.html";s:4:"a994";s:74:"xajax/documentation/files/tests/legacy_tests/catchAllFunctionTest-php.html";s:4:"12d3";s:59:"xajax/documentation/files/tests/legacy_tests/index-php.html";s:4:"ab45";s:67:"xajax/documentation/files/tests/legacy_tests/jsLoadingTest-php.html";s:4:"3577";s:69:"xajax/documentation/files/tests/legacy_tests/preFunctionTest-php.html";s:4:"f1a5";s:60:"xajax/documentation/files/tests/suite/alert_confirm-php.html";s:4:"f7dc";s:60:"xajax/documentation/files/tests/suite/assign_append-php.html";s:4:"5f53";s:61:"xajax/documentation/files/tests/suite/callScriptTest-php.html";s:4:"5e49";s:77:"xajax/documentation/files/tests/suite/controls_html_401_transitional-php.html";s:4:"3543";s:77:"xajax/documentation/files/tests/suite/controls_xhtml_10_transitional-php.html";s:4:"4693";s:50:"xajax/documentation/files/tests/suite/css-php.html";s:4:"6d35";s:58:"xajax/documentation/files/tests/suite/delayEvents-php.html";s:4:"dd00";s:53:"xajax/documentation/files/tests/suite/events-php.html";s:4:"8c8d";s:56:"xajax/documentation/files/tests/suite/functions-php.html";s:4:"2644";s:52:"xajax/documentation/files/tests/suite/index-php.html";s:4:"76c3";s:60:"xajax/documentation/files/tests/suite/scriptContext-php.html";s:4:"3633";s:60:"xajax/documentation/files/tests/suite/server_events-php.html";s:4:"0891";s:55:"xajax/documentation/files/tests/suite/theFrame-php.html";s:4:"467d";s:38:"xajax/documentation/javascript/main.js";s:4:"345b";s:29:"xajax/examples/helloworld.php";s:4:"120a";s:37:"xajax/examples/xul/xulApplication.php";s:4:"3611";s:32:"xajax/examples/xul/xulClient.xul";s:4:"613f";s:32:"xajax/examples/xul/xulServer.php";s:4:"6ebe";s:43:"xajax/examples/multiply/multiply.common.php";s:4:"24b9";s:36:"xajax/examples/multiply/multiply.php";s:4:"c2e6";s:43:"xajax/examples/multiply/multiply.server.php";s:4:"b074";s:32:"xajax/examples/thewall/brick.jpg";s:4:"113d";s:41:"xajax/examples/thewall/thewall.common.php";s:4:"b653";s:34:"xajax/examples/thewall/thewall.php";s:4:"0346";s:41:"xajax/examples/thewall/thewall.server.php";s:4:"5bff";s:39:"xajax/examples/signup/signup.common.php";s:4:"bd97";s:32:"xajax/examples/signup/signup.php";s:4:"94a8";s:39:"xajax/examples/signup/signup.server.php";s:4:"d3fe";s:28:"xajax/xajax_js/xajax_core.js";s:4:"e939";s:41:"xajax/xajax_js/xajax_core_uncompressed.js";s:4:"e7e8";s:29:"xajax/xajax_js/xajax_debug.js";s:4:"5a16";s:42:"xajax/xajax_js/xajax_debug_uncompressed.js";s:4:"7aad";s:31:"xajax/xajax_js/xajax_lang_de.js";s:4:"a6e3";s:44:"xajax/xajax_js/xajax_lang_de_uncompressed.js";s:4:"a15e";s:30:"xajax/xajax_js/xajax_legacy.js";s:4:"391e";s:43:"xajax/xajax_js/xajax_legacy_uncompressed.js";s:4:"069e";s:31:"xajax/xajax_js/xajax_verbose.js";s:4:"74f0";s:44:"xajax/xajax_js/xajax_verbose_uncompressed.js";s:4:"6641";s:30:"xajax/tests/HTTPStatusTest.php";s:4:"dcb1";s:31:"xajax/tests/basicPluginTest.php";s:4:"579d";s:30:"xajax/tests/callScriptTest.php";s:4:"dfc7";s:34:"xajax/tests/callTechniquesTest.php";s:4:"1768";s:36:"xajax/tests/catchAllFunctionTest.php";s:4:"6e0d";s:31:"xajax/tests/changeEventTest.php";s:4:"6a66";s:32:"xajax/tests/charEncodingTest.php";s:4:"65b9";s:35:"xajax/tests/createFormInputTest.php";s:4:"b088";s:39:"xajax/tests/customResponseClassTest.php";s:4:"c771";s:40:"xajax/tests/disabledFormElementsTest.php";s:4:"cf89";s:33:"xajax/tests/errorHandlingTest.php";s:4:"3591";s:32:"xajax/tests/eventHandlerTest.php";s:4:"5ece";s:35:"xajax/tests/fluentInterfaceTest.php";s:4:"8827";s:34:"xajax/tests/formSubmissionTest.php";s:4:"b5c8";s:41:"xajax/tests/includeExternalScriptTest.php";s:4:"26a6";s:21:"xajax/tests/index.php";s:4:"d01a";s:33:"xajax/tests/largeResponseTest.php";s:4:"6a62";s:33:"xajax/tests/myExternalFunction.js";s:4:"a6c1";s:34:"xajax/tests/myExternalFunction.php";s:4:"0952";s:36:"xajax/tests/nonXajaxResponseTest.php";s:4:"09e7";s:27:"xajax/tests/performance.php";s:4:"8058";s:33:"xajax/tests/phpWhitespaceTest.php";s:4:"2f26";s:31:"xajax/tests/preFunctionTest.php";s:4:"1e44";s:28:"xajax/tests/redirectTest.php";s:4:"a145";s:44:"xajax/tests/registerExternalFunctionTest.php";s:4:"fea8";s:34:"xajax/tests/registerObjectTest.php";s:4:"f54c";s:33:"xajax/tests/searchReplaceTest.php";s:4:"0f61";s:33:"xajax/tests/xajaxResponseTest.php";s:4:"76f8";s:31:"xajax/tests/xajax_error_log.log";s:4:"a2e2";s:49:"xajax/tests/legacy_tests/catchAllFunctionTest.php";s:4:"8292";s:34:"xajax/tests/legacy_tests/index.php";s:4:"f357";s:42:"xajax/tests/legacy_tests/jsLoadingTest.php";s:4:"855d";s:44:"xajax/tests/legacy_tests/preFunctionTest.php";s:4:"dedf";s:35:"xajax/tests/suite/alert_confirm.php";s:4:"a372";s:48:"xajax/tests/suite/alert_confirm_external.inc.php";s:4:"3fa3";s:35:"xajax/tests/suite/assign_append.php";s:4:"130a";s:36:"xajax/tests/suite/callScriptTest.php";s:4:"520c";s:52:"xajax/tests/suite/controls_html_401_transitional.php";s:4:"e8ab";s:52:"xajax/tests/suite/controls_xhtml_10_transitional.php";s:4:"6717";s:25:"xajax/tests/suite/css.php";s:4:"5865";s:26:"xajax/tests/suite/css1.css";s:4:"f320";s:26:"xajax/tests/suite/css2.css";s:4:"c0c4";s:33:"xajax/tests/suite/delayEvents.php";s:4:"3944";s:28:"xajax/tests/suite/events.php";s:4:"4aa5";s:32:"xajax/tests/suite/frame_left.htm";s:4:"c9ce";s:33:"xajax/tests/suite/frame_right.php";s:4:"6042";s:30:"xajax/tests/suite/frameset.php";s:4:"2d59";s:31:"xajax/tests/suite/functions.php";s:4:"1361";s:31:"xajax/tests/suite/googleMap.php";s:4:"8689";s:27:"xajax/tests/suite/iframe.js";s:4:"ec4b";s:28:"xajax/tests/suite/iframe.php";s:4:"eb91";s:27:"xajax/tests/suite/index.php";s:4:"1dd9";s:26:"xajax/tests/suite/none.php";s:4:"f9ce";s:33:"xajax/tests/suite/options.inc.php";s:4:"1e72";s:32:"xajax/tests/suite/pluginTest.php";s:4:"f09f";s:35:"xajax/tests/suite/scriptContext.php";s:4:"ef74";s:35:"xajax/tests/suite/server_events.php";s:4:"1555";s:28:"xajax/tests/suite/tables.php";s:4:"d581";s:31:"xajax/tests/suite/theFrame.html";s:4:"9838";s:30:"xajax/tests/suite/theFrame.php";s:4:"4a33";s:31:"xajax/tests/suite/transport.php";s:4:"8a74";}',
	'constraints' => array(
		'depends' => array(
			'php' => '3.0.0-0.0.0',
			'typo3' => '3.5.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
);

?>