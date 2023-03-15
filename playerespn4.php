
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPN4 PLAYER</title>
    <style>
        body {
            background: #000;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100% !important;
            height: 100vh !important;
        }

        #player {
            height: 100% !important;
            width: 100% !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="player"></div>
    </div>
    <script>
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
            var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }
        var source = getParameterByName('get');
        var getIMG = getParameterByName('img');
        var key = getParameterByName('key');
        var key2 = getParameterByName('key2');
    </script>
    <script src="//ssl.p.jwpcdn.com/player/v/8.26.0/jwplayer.js"></script>
    <script> jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';
    </script>
    <script>
        var playerInstance = jwplayer("player");
        playerInstance.setup({
            playlist: [
                {
                    //image: atob(getIMG),
                    sources: [
                        {
                            default: false,
                            type: "dash",
                            file: atob(source),
                            drm: {
                                clearkey: { keyId: atob(key), key: atob(key2) },
                            },
                            label: "0",
                        },
                    ],
                },
            ],
            height: "100%",
            width: "100%",
            aspectratio: "",
            mediaid: "player",
            mute: false,
            autostart: true,
            language: "es",
            
        });
        // Preview Hack
        setTimeout(function () {
            jwplayer().setMute(true);
            jwplayer().setControls(true);
        }, 1000);
        jwplayer().onTime(function (object) {
            if (object.position > object.duration - 11) {
                jwplayer().pause();
            }
        });
    </script>
</body>

<!-- ads-->

<script type='text/javascript' src='//uncovereasel.com/ac/58/bb/ac58bbe800329453de3d4b2f28050b55.js'></script>

<!-- ads-->

<!-- adcash-->
<script src="//acdcdn.com/script/suv4.js" data-adel="lwsu" cdnd="acdcdn.com" zid="4681243"></script>
<!-- adcash-->

   <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4455589,4,0,0,0,00000000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4455589&101" alt="contadores web" border="0"></a></noscript>
<!-- Histats.com  END  -->


<!--contador-->
<script id="_wauykh">var _wau = _wau || []; _wau.push(["tab", "mn6pnu92ye", "ykh", ""]);</script><script async src="//waust.at/t.js"></script>
<!--contador-->


</html>
