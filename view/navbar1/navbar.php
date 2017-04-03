<?php
$urlHome  = $app->url->create("");
$urlAbout = $app->url->create("about");
$urlReport = $app->url->create("report");

$menu = array(
  'home'  => array('text'=>'HOME',  'url'=>$urlHome),
  'about'  => array('text'=>'ABOUT',  'url'=>$urlAbout),
  'report' => array('text'=>'REPORT', 'url'=>$urlReport),
);



class CNavigation
{
    public static function generateMenu($items, $class)
    {
        $html = "<nav class='$class'>\n";
        foreach ($items as $item) {
            $html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";
        }
        $html .= "</nav>\n";
        return $html;
    }
}

echo CNavigation::generateMenu($menu, "navbar transparent");?>

<article>
