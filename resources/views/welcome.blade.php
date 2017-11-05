<!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=Edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0"/>
    <title>Hyphenate web demo</title>
    <!-- HTML5 element  -->
    <script src="/js/demo/javascript/dist/browser-polyfill.min.js"></script>
</head>

<body>
<section id='main' class='w100'>
    <article id='demo'></article>
    <article id='components'></article>
</section>

<!--config-->
<script src="/js/demo/javascript/dist/webim.config.js"></script>
<script>
    if (WebIM.config.isWindowSDK) {
        document.title = "Hyphenate web demo with Windows SDK";
    }
    if (WebIM.config.isDebug) {
        document.write("<script src='/js/sdk/dist/strophe-1.2.8.js'><\/script>");
    } else {
        <!--A JavaScript library for XMPP over Websocket-->
        document.write("<script src='/js/sdk/dist/strophe-1.2.8.min.js'><\/script>");
    }
</script>

<!--sdk-->
<script src='/js/sdk/dist/websdk-1.4.11.js'></script>
<!--webrtc-->
<script>
    if (WebIM.config.isWebRTC) {
        document.write("<script src='/js/webrtc/dist/adapter.js'><\/script>");
        document.write("<script src='/js/webrtc/dist/webrtc-1.4.11.js'><\/script>");
    }
</script>

<!--[if lte IE 9]>
<script src="./demo/javascript/dist/swfupload/swfupload.min.js"></script>
<![endif]-->

<!--demo javascript-->
<script src="/js/demo/javascript/dist/demo-1.4.11.js"></script>

</body>
</html>
