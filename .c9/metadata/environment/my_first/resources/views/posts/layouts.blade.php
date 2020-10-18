{"changed":true,"filter":false,"title":"layouts.blade.php","tooltip":"/my_first/resources/views/posts/layouts.blade.php","value":"{{-- 全ページに共通する部分  --}}\n\n<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <meta charset=\"UTF-8\">\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">\n    <link rel=\"stylesheet\" \n          href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" \n          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" \n          crossorigin=\"anonymous\">\n    \n    <title>人生逆転サロン</title>\n</head>\n<body>\n    <header class=\"navbar navbar-dark bg-danger\">\n        <div class=\"container\">\n            <a class=\"navbar-brand\" href=\"{{ url('')}}\">\n                Gyakuten\n            </a>\n        </div>\n    </header>\n    \n    @yield('content')\n    {{-- contentを読み込む部分  --}}\n    {{-- https://laravel.com/docs/8.x/blade#extending-a-layout  --}}\n    {{-- https://qiita.com/janet_parker/items/d0cbbb09e6446bc36a81 --}}\n\n</body>\n</html> ","undoManager":{"mark":40,"position":41,"stack":[[{"start":{"row":0,"column":0},"end":{"row":43,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"en\">","<head>","    <meta charset=\"UTF-8\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">","    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">","    <link rel=\"stylesheet\" ","          href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" ","          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" ","          crossorigin=\"anonymous\">","    ","    <title>人生逆転サロン</title>","</head>","<body>","    <header class=\"navbar navbar-dark bg-danger\">","        <div class=\"container\">","            <a class=\"navbar-brand\" href=\"{{ url('')}}\">","                Gyakuten","            </a>","        </div>","    </header>","    ","    <div class=\"container mt-4\">","        <div class =\"card mt-4\">","            ","            <div class =\"card-header mb-2\">","            ","            </div>","            <div class =\"card-body\">","                <p class=\"card-text\">","                    body","                </p>","            ","            </div>","            <div class =\"card-footer\">","                <span class=\"mr-2\">","                    投稿日時","                </span>","            </div>","            ","        </div>","    </div>","</body>","</html>"],"id":1}],[{"start":{"row":43,"column":7},"end":{"row":43,"column":8},"action":"insert","lines":[" "],"id":2}],[{"start":{"row":22,"column":4},"end":{"row":41,"column":10},"action":"remove","lines":["<div class=\"container mt-4\">","        <div class =\"card mt-4\">","            ","            <div class =\"card-header mb-2\">","            ","            </div>","            <div class =\"card-body\">","                <p class=\"card-text\">","                    body","                </p>","            ","            </div>","            <div class =\"card-footer\">","                <span class=\"mr-2\">","                    投稿日時","                </span>","            </div>","            ","        </div>","    </div>"],"id":3}],[{"start":{"row":22,"column":4},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":22,"column":4},"end":{"row":22,"column":5},"action":"insert","lines":["@"],"id":5}],[{"start":{"row":22,"column":5},"end":{"row":22,"column":6},"action":"insert","lines":["y"],"id":6},{"start":{"row":22,"column":6},"end":{"row":22,"column":7},"action":"insert","lines":["i"]},{"start":{"row":22,"column":7},"end":{"row":22,"column":8},"action":"insert","lines":["e"]},{"start":{"row":22,"column":8},"end":{"row":22,"column":9},"action":"insert","lines":["l"]}],[{"start":{"row":22,"column":9},"end":{"row":22,"column":10},"action":"insert","lines":["d"],"id":7}],[{"start":{"row":22,"column":10},"end":{"row":22,"column":11},"action":"insert","lines":["("],"id":8},{"start":{"row":22,"column":11},"end":{"row":22,"column":12},"action":"insert","lines":["'"]}],[{"start":{"row":22,"column":12},"end":{"row":22,"column":13},"action":"insert","lines":["'"],"id":9},{"start":{"row":22,"column":13},"end":{"row":22,"column":14},"action":"insert","lines":[")"]}],[{"start":{"row":22,"column":12},"end":{"row":22,"column":13},"action":"insert","lines":["c"],"id":10},{"start":{"row":22,"column":13},"end":{"row":22,"column":14},"action":"insert","lines":["o"]},{"start":{"row":22,"column":14},"end":{"row":22,"column":15},"action":"insert","lines":["n"]},{"start":{"row":22,"column":15},"end":{"row":22,"column":16},"action":"insert","lines":["t"]},{"start":{"row":22,"column":16},"end":{"row":22,"column":17},"action":"insert","lines":["e"]},{"start":{"row":22,"column":17},"end":{"row":22,"column":18},"action":"insert","lines":["n"]},{"start":{"row":22,"column":18},"end":{"row":22,"column":19},"action":"insert","lines":["t"]},{"start":{"row":22,"column":19},"end":{"row":22,"column":20},"action":"insert","lines":["a"]}],[{"start":{"row":22,"column":19},"end":{"row":22,"column":20},"action":"remove","lines":["a"],"id":11}],[{"start":{"row":22,"column":19},"end":{"row":22,"column":20},"action":"insert","lines":["s"],"id":12}],[{"start":{"row":22,"column":19},"end":{"row":22,"column":20},"action":"remove","lines":["s"],"id":13}],[{"start":{"row":22,"column":21},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":22},"action":"insert","lines":["{{-- 全ページに共通する部分  --}}"],"id":16}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":5},"action":"insert","lines":["{"],"id":17},{"start":{"row":25,"column":5},"end":{"row":25,"column":6},"action":"insert","lines":["{"]},{"start":{"row":25,"column":6},"end":{"row":25,"column":7},"action":"insert","lines":["-"]},{"start":{"row":25,"column":7},"end":{"row":25,"column":8},"action":"insert","lines":["-"]}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":9},"action":"insert","lines":[" "],"id":18},{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"insert","lines":[" "]},{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"insert","lines":[" "]},{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"insert","lines":["="]}],[{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"insert","lines":["="],"id":19},{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["}"]}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":["}"],"id":20},{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"remove","lines":["="]},{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"remove","lines":["="]}],[{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"insert","lines":["-"],"id":21},{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"insert","lines":["-"]},{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["}"]},{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"insert","lines":["}"]}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":9},"action":"remove","lines":[" "],"id":22}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":9},"action":"insert","lines":["c"],"id":23},{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"insert","lines":["o"]},{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"insert","lines":["n"]},{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"insert","lines":["t"]},{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"insert","lines":["e"]},{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["n"]},{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"insert","lines":["t"]}],[{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"insert","lines":["　"],"id":24}],[{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"remove","lines":["　"],"id":25}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":9},"action":"insert","lines":[" "],"id":26}],[{"start":{"row":25,"column":16},"end":{"row":25,"column":17},"action":"insert","lines":["を"],"id":27}],[{"start":{"row":25,"column":17},"end":{"row":25,"column":21},"action":"insert","lines":["読み込む"],"id":28},{"start":{"row":25,"column":21},"end":{"row":25,"column":23},"action":"insert","lines":["部分"]}],[{"start":{"row":25,"column":29},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":29},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"remove","lines":["    "],"id":30},{"start":{"row":25,"column":29},"end":{"row":26,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":25,"column":29},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":31},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"insert","lines":["{"]},{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"insert","lines":["{"]}],[{"start":{"row":26,"column":6},"end":{"row":26,"column":7},"action":"insert","lines":["-"],"id":32},{"start":{"row":26,"column":7},"end":{"row":26,"column":8},"action":"insert","lines":["-"]}],[{"start":{"row":26,"column":8},"end":{"row":26,"column":9},"action":"insert","lines":[" "],"id":33},{"start":{"row":26,"column":9},"end":{"row":26,"column":10},"action":"insert","lines":[" "]},{"start":{"row":26,"column":10},"end":{"row":26,"column":11},"action":"insert","lines":[" "]}],[{"start":{"row":26,"column":11},"end":{"row":26,"column":12},"action":"insert","lines":["-"],"id":34},{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"insert","lines":["-"]},{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"insert","lines":["}"]},{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":["}"]}],[{"start":{"row":26,"column":9},"end":{"row":26,"column":62},"action":"insert","lines":["https://laravel.com/docs/8.x/blade#extending-a-layout"],"id":35}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"insert","lines":["["],"id":36},{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"insert","lines":["["]}],[{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"remove","lines":["["],"id":37},{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"remove","lines":["["]}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"insert","lines":["{"],"id":38},{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"insert","lines":["{"]},{"start":{"row":27,"column":6},"end":{"row":27,"column":7},"action":"insert","lines":["-"]},{"start":{"row":27,"column":7},"end":{"row":27,"column":8},"action":"insert","lines":["-"]}],[{"start":{"row":27,"column":8},"end":{"row":27,"column":9},"action":"insert","lines":[" "],"id":39}],[{"start":{"row":27,"column":9},"end":{"row":27,"column":66},"action":"insert","lines":["https://qiita.com/janet_parker/items/d0cbbb09e6446bc36a81"],"id":41}],[{"start":{"row":27,"column":66},"end":{"row":27,"column":67},"action":"insert","lines":[" "],"id":42},{"start":{"row":27,"column":67},"end":{"row":27,"column":68},"action":"insert","lines":["-"]},{"start":{"row":27,"column":68},"end":{"row":27,"column":69},"action":"insert","lines":["-"]},{"start":{"row":27,"column":69},"end":{"row":27,"column":70},"action":"insert","lines":["}"]},{"start":{"row":27,"column":70},"end":{"row":27,"column":71},"action":"insert","lines":["}"]}],[{"start":{"row":28,"column":0},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":43}]]},"ace":{"folds":[],"scrolltop":52.5,"scrollleft":1.5,"selection":{"start":{"row":29,"column":0},"end":{"row":29,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1603005986755}