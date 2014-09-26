<?php
$content = file_get_contents('https://www.surveymonkey.com/s.aspx?sm=y2yCZIbeeUuiurya1qtXzw%3d%3d');
$content = str_replace('</title>','</title><base href="https://www.surveymonkey.com/" />', $content);
// $content = str_replace('</head>','<link rel="stylesheet" href="http://pribehy.igo.sk/css/style.css" /></head>', $content);
echo $content;