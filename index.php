<?php
/*
 * HTML Model Constructor
 * Author: https://github.com/ManuDavila
 * Site: http://jquery-manual.blogspot.com
 */
require "ModelHtml/ModelHtml.php";

echo HTML::add("<!DOCTYPE HTML>\n");
echo HTML::open_html();
echo HTML::open_head();
/* Add slash alternative:
 echo HTML::meta("title", "HTML Model Constructor", "/");
 RESULT: <meta name='title' content='HTML Model Constructor'/>
 */
echo HTML::favicon("images/php.ico");
echo HTML::charset("UTF-8");
echo HTML::title("HTML Model Constructor");
echo HTML::meta("viewport", "width=device-width");
echo HTML::meta("title", "HTML Model Constructor");
echo HTML::meta("description", "This class can generate HTML5 documents programmatically.");
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

echo HTML::close_head();

echo HTML::open_body();

echo HTML::open_header();
echo HTML::open_div(array("class" => "container"));
echo HTML::h1("HTML Model Constructor", array("class" => "title"));
echo HTML::p("This class can generate HTML5 documents programmatically.
It provides an extensive list static functions that can take a few parameters and generate HTML open and close tags including some that were introduced in HTML5.
Currently it supports tags for document head and body, paragraphs and character formatting, links, forms, lists, embedding audio and video, JavaScript tags, etc..");
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
echo HTML::small("Author: " . HTML::a("https://github.com/ManuDavila", "ManuDavila", array("target" => "_blank")));
echo HTML::close_center();
echo HTML::close_div();
echo HTML::close_footer();

echo HTML::close_body();
echo HTML::close_html();