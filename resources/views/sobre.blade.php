

    @extends('layout.master')
    @section('title', 'Sobre')
    @section('container')

        <link type="text/css" rel="stylesheet" href="rhinoslider/css/rhinoslider-1.05.css" />
        <style type="text/css">
            /*body { background-color:#000; }*/

            #slider {
                width:600px;
                height:250px;

                /*IE bugfix*/
                padding:0;
                margin:0;
            }

            #slider li { list-style:none; }

            #page {
                width:600px;
                margin:100px auto;
            }
        </style>

        {{--<h2>Sobre</h2>--}}
            {{--<p>Seja bem vindos a nossa página web</p>--}}
        <body>
        <div id="page">
            <ul id="slider">
                <li><img src="rhinoslider/img/slider/deboxe.jpg" alt="" title="Babiii fazeendo babiceees" class="img-responsive" width="600" height="270" /></li>
                <li><img src="rhinoslider/img/slider/logo.jpg" alt="" class="img-responsive" width="600" height="250"/></li>
                <li><img src="rhinoslider/img/slider/03.jpg" alt="" /></li>
                <li><img src="rhinoslider/img/slider/04.jpg" alt="" /></li>
                <li><img src="rhinoslider/img/slider/05.jpg" alt="" /></li>
            </ul>
        </div>
        </body>

        <script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#slider').rhinoslider({
                    effect: 'transfer',
                    showCaptions: 'always',
                    captionsOpacity: 0.3
                });
            });
        </script>
    @endsection