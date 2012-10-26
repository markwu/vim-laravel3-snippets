<?php

$vimSnippets = '';

foreach (glob("*.sublime-snippet") as $filename) {
    $doc = new DOMDocument();
    $doc->load($filename);
    $snippets = $doc->getElementsByTagName("snippet");
    foreach ($snippets as $snippet)
    {
        $tabTrigger = $snippet->getElementsByTagName("tabTrigger")->item(0)->nodeValue;
        $content = $snippet->getElementsByTagName('content')->item(0)->nodeValue;
        $description = $snippet->getElementsByTagName('description')->item(0)->nodeValue;
        $vimSnippets .= "snippet $tabTrigger";
        $vimSnippets .= !empty($description) ? " # $description\n" : "\n";
        $lines = explode("\n", $content);
        for($i = 0; $i < count($lines); $i++)
        {
            $lines[$i] = str_replace('\$','$',$lines[$i]);
            $lines[$i] = "\t".$lines[$i];
        }
        $content = implode("\n", $lines);
        $vimSnippets .= "$content\n\n";
    }
}
echo $vimSnippets;
file_put_contents('laravel.snippets', $vimSnippets);
