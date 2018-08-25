<?php
$a_blog_ch = curl_init();
curl_setopt($a_blog_ch, CURLOPT_URL, "http://blog.collarks.net/a/feed/");
curl_setopt($a_blog_ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($a_blog_ch, CURLOPT_HEADER, 0);

$a_blog_res = curl_exec($a_blog_ch);
$a_blog_rss = simplexml_load_string($a_blog_res);

$a_blog = is_array($a_blog_rss->channel) ? $a_blog_rss->channel->item : array();

curl_close($a_blog_ch);

function object2array($object) { return @json_decode(@json_encode($object),1); }
