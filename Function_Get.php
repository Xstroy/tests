<? php
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
