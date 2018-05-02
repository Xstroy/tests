

<?php
$username='lidavzn';
echo "<pre>";
/*
print_r(getPublicInfo($username));

function getPublicInfo($username) {
    $url     = sprintf("https://www.instagram.com/$username");
    $content = file_get_contents($url);
    $content = explode("window._sharedData = ", $content)[1];
    $content = explode(";</script>", $content)[0];
    $data    = json_decode($content, true);
    return $data['entry_data']['ProfilePage'][0];
}
*/
$hashtag="москва";
print_r(getPublicHashtag($hashtag));
function getPublicHashtag($hashtag) {
    $url     = sprintf("https://www.instagram.com/explore/tags/$hashtag");
    $content = file_get_contents($url);
 //   $content = explode("window._sharedData = ", $content)[1];
//    $content = explode(";</script>", $content)[0];
preg_match('/(?<=window._sharedData = ).*?(?=;<\/script>)/is',$content,$x);
    $data    = json_decode($x[0], true);
    return $data;
}
?>