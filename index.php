﻿<?php
/*
 * HTML Model Constructor
 * Author: https://github.com/ManuDavila
 * Site: http://jquery-manual.blogspot.com
 */
require "ModelHtml/ModelHtml.php";

echo HTML::add("<!DOCTYPE HTML>\n");
echo HTML::add("<html>\n");
echo HTML::add("<head>\n");
/* Add slash alternative:
 echo HTML::meta("title", "HTML Model Constructor", "/");
 */
echo HTML::favicon("images/php.ico");
echo HTML::charset("UTF-8");
echo HTML::title("HTML Model Constructor");
echo HTML::meta("viewport", "width=device-width");
echo HTML::meta("title", "HTML Model Constructor");
echo HTML::meta("description", "Build HTML elements with one PHP Model");
echo HTML::meta("keywords", "html, html5, form, php, model, class");
echo HTML::meta("robots", "All");
echo HTML::script("http://code.jquery.com/jquery-1.11.1.min.js");
echo HTML::link_style("css/index.css");

echo HTML::open_script();
//Your Javascript code here
echo HTML::close_script();

echo HTML::open_style();
//Your CSS code here
echo HTML::close_style();

echo HTML::add("</head>\n");

echo HTML::add("<body>\n");

echo HTML::open_header();
echo HTML::open_div(array("class" => "container"));
echo HTML::h1("HTML Model Constructor", array("class" => "title"));
echo HTML::italic("This class lets you build HTML content.
Structure the website in a solid block correctly.
Includes the latest HTML5 tags.
Includes everything you need to build forms.");
echo HTML::close_div();
echo HTML::close_header();

echo HTML::open_main();
echo HTML::open_div(array("class" => "container"));
echo HTML::h3("Methods from HTML class:");
echo HTML::open_ul(array("id" => "list"));
foreach (get_class_methods('HTML') as $val)
{
   echo HTML::add_li($val); 
}
echo HTML::close_ul();
echo HTML::close_div();
echo HTML::close_main();

echo HTML::open_footer();
echo HTML::open_div(array("class" => "container"));
echo HTML::open_center();
echo HTML::small("Author: " . HTML::link("https://github.com/ManuDavila", "ManuDavila", array("target" => "_blank")));
echo HTML::close_center();
echo HTML::close_div();
echo HTML::close_footer();

echo HTML::add("</body>\n");
echo HTML::add("</html>\n");