<?php
/*
 * HTML Model Constructor
 * Author: https://github.com/ManuDavila
 * Site: http://jquery-manual.blogspot.com
 */

class HTML {
    
    public static function add($html=null)
    {
        return $html;
    }
    
    public static function add_audio($src=null, $type=null, $attributes=null, $slash=null)
    {
        $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<source src='$src' type='$type'$attr$slash>\n";
         }
         else
         {
             return "<source src='$src' type='$type'$slash>\n";
         }
    }
    
    public static function add_li($content=null, $attributes=null)
    {
        $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<li$attr>$content</li>\n";
         }
         else
         {
             return "<li>$content</li>\n";
         }
    }
    
    public static function add_option($content=null, $value=null, $attributes=null)
    {
        $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<option value='$value'$attr>$content</option>\n";
         }
         else
         {
             return "<option value='$value'>$content</option>\n";
         }
    }
    
    public static function add_row(array $columns, $type='td', $attributes=null)
    {
        $cols = null;
        if (is_array($columns))
        {
            foreach ($columns as $value)
            {
                $cols .= "<$type>$value</$type>";
            }
            return "<tr>$cols</tr>\n";
        }
    }
    
    public static function addslashes($string=null)
    {
        return addslashes($string);
    }
    
    public static function add_video($src, $type, $attributes=null, $slash=null)
    {
        $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<source src='$src' type='$type'$attr$slash>\n";
         }
         else
         {
             return "<source src='$src' type='$type'$slash>\n";
         }
    }
    
    public static function blockquote($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<blockquote$attr>$content</blockquote>\n";
         }
         else
         {
             return "<blockquote>$content</blockquote>\n";
         }
    }
    
    public static function br($number=1, $slash=null)
    {
        $x = 1;
        $br = null;
        while($x <= $number)
        {
            $br .= "<br$slash>\n";
            $x++;
        }
        return $br;
    }
    
        public static function button($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='button' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='button' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function charset($charset='UTF-8', $slash=null)
    {
        return "<meta charset='$charset'$slash>\n";
    }
    
        public static function checkbox($name=null, $checked='', $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='checkbox' name='$name' $checked$attr$slash>\n";
         }
         else
         {
             return "<input type='checkbox' name='$name' $checked$slash>\n";
         }
    }
    
    public static function cite($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<cite$attr>$content</cite>\n";
         }
         else
         {
             return "<cite>$content</cite>\n";
         }
    }
    
    public static function close_address()
    {
        return "</address>\n";
    }
    
    public static function close_article()
    {
        return "</article>\n";
    }
    
    public static function close_aside()
    {
        return "</aside>\n";
    }
    
    public static function close_audio()
    {
        return "</audio>\n";
    }
    
    public static function close_canvas()
    {
        return "</canvas>\n";
    }
    
    public static function close_center()
    {
        return "</center>\n";
    }
    
    public static function close_details()
    {
        return "</details>\n";
    }
    
    public static function close_div()
    {
        return "</div>\n";
    }
    
    public static function close_figure()
    {
        return "</figure>\n";
    }
    
    public static function close_footer()
    {
        return "</footer>\n";
    }
    
    public static function close_form()
    {
        return "</form>\n";
    }
    
    public static function close_header()
    {
        return "</header>\n";
    }
    
    public static function close_main()
    {
        return "</main>\n";
    }
    
    public static function close_nav()
    {
        return "</nav>\n";
    }
    
    public static function close_section()
    {
        return "</section>\n";
    }
    
    public static function close_script()
    {
        return "</script>\n";
    }
    
    public static function close_select()
    {
        return "</select>\n";
    }
    
    public static function close_style()
    {
        return "</style>\n";
    }
    
    public static function close_table()
    {
        return "</table>\n";
    }
    
     public static function close_ul()
    {
        return "</ul>\n";
    }
    
    public static function close_video()
    {
        return "</video>\n";
    }
    
    public static function color($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='color' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='color' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function date($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='date' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='date' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function datetime($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='datetime' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='datetime' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function datetime_local($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='datetime-local' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='datetime-local' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function dialog($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<dialog open$attr>$content</dialog>\n";
         }
         else
         {
             return "<dialog open>$content</dialog>\n";
         }
    }
    
    public static function entities($string=null)
    {
        return htmlentities($string);
    }
    
    public static function entities_decode($string=null)
    {
        return html_entity_decode($string);
    }
    
    public static function error_for_input($id, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<div id='$id'$attr></div>\n";
         }   
         else
         {
             return "<div id='$id'></div>\n";
         }
    }
    
    public static function div($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<div$attr>$content</div>\n";
         }
         else
         {
             return "<div>$content</div>\n";
         }
    }
    
    public static function email($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='email' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='email' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function favicon($href=null, $slash=null)
    {
        return "<link rel='icon' type='image/x-icon' href='$href'$slash>\n";
    }
    
        public static function figcaption($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<figcaption$attr>$content</figcaption>\n";
         }
         else
         {
             return "<figcaption>$content</figcaption>\n";
         }
    }
    
        public static function file($name=null, $multiple='', $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='file' name='$name'$multiple$attr$slash>\n";
         }
         else
         {
             return "<input type='file' name='$name'$multiple$slash>\n";
         }
    }
    
        public static function h1($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<h1$attr>$content</h1>\n";
         }
         else
         {
             return "<h1>$content</h1>\n";
         }
    }

        public static function h2($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<h2$attr>$content</h2>\n";
         }
         else
         {
             return "<h2>$content</h2>\n";
         }
    }
    
        public static function h3($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<h3$attr>$content</h3>\n";
         }
         else
         {
             return "<h3>$content</h3>\n";
         }
    }
    
        public static function h4($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<h4$attr>$content</h4>\n";
         }
         else
         {
             return "<h4>$content</h4>\n";
         }
    }
    
        public static function h5($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<h5$attr>$content</h5>\n";
         }
         else
         {
             return "<h5>$content</h5>\n";
         }
    }
    
        public static function h6($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<h6$attr>$content</h6>\n";
         }
         else
         {
             return "<h6>$content</h6>\n";
         }
    }
    
    public static function hidden($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='hidden' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='hidden' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function hr($number=1, $slash=null)
    {
        $x = 1;
        $hr = null;
        while($x <= $number)
        {
            $hr .= "<hr$slash>\n";
            $x++;
        }
        return $hr;
    }
    
    public static function iframe($src=null, $attributes=null)
    {
        if (is_array($attributes))
        {
            $attr = null;
            foreach ($arrtibutes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<iframe src='$src'$attr></iframe>\n";
        }
        else
        {
            return "<iframe src='$src'></iframe>\n";
        }
    }
    
    public static function image($src=null, $attributes=null, $slash=null)
    {
        if (is_array($attributes))
        {
            $attr = null;
            foreach ($arrtibutes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<img src='$src'$attr$slash>\n";
        }
        else
        {
            return "<img src='$src'$slash>\n";
        }
    }
    
    public static function input($type, $name=null, $value=null, $attributes=null, $slash=null)
    {
            if (is_array($attributes))
        {
            $attr = null;
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<input type='$type' name='$name' value='$value'$attr$slash>\n";
        }
        else
        {
            return "<input type='$type' name='$name' value='$value'$slash>\n";
        }
    }
    
        public static function italic($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<i$attr>$content</i>\n";
         }
         else
         {
             return "<i>$content</i>\n";
         }
    }
    
    public static function label($content=null, $for=null, $attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<label for='$for'$attr>$content</label>\n";
        }
        else
        {
            return "<label for='$for'>$content</label>\n";
        }
    }
    
    public static function link($href=null, $content=null, $attributes=null)
    {
        if (is_array($attributes))
        {
            $attr = null;
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<a href='$href'$attr>$content</a>\n";
        }
        else
        {
            return "<a href='$href'>$content</a>\n";
        }
    }
    
    public static function link_style($href=null, $slash=null)
    {
            return "<link rel='stylesheet' type='text/css' href='$href'$slash>\n";
    }
    
        public static function mark($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<mark$attr>$content</mark>\n";
         }
         else
         {
             return "<mark>$content</mark>\n";
         }
    }
    
    public static function meta($name=null, $content=null, $slash=null)
    {
        return "<meta name='$name' content='$content'$slash>\n";
    }
    
    public static function month($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='month' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='month' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function number($name=null, $value=null, $min=0, $max=100, $step=1, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='number' name='$name' value='$value' min='$min' max='$max' step='$step'$attr$slash>\n";
         }
         else
         {
             return "<input type='number' name='$name' value='$value' min='$min' max='$max' step='$step'$slash>\n";
         }
    }
    
    public static function object($src=null, $attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<object data='$src'$attr></object>\n";
        }
        else
        {
            return "<object data='$src'></object>\n";  
        }
    }
    
    public static function open_address($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<address$attr>\n";
        }
        else
        {
             return "<address>\n";   
        }
    }
    
    public static function open_article($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<article$attr>\n";
        }
        else
        {
             return "<article>\n";   
        }
    }
    
    public static function open_aside($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<aside$attr>\n";
        }
        else
        {
             return "<aside>\n";   
        }
    } 
    
    public static function open_audio($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<audio controls$attr>\n";
        }
        else
        {
             return "<audio controls>\n";   
        }
    } 
    
    public static function open_canvas($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<canvas$attr>\n";
        }
        else
        {
             return "<canvas>\n";   
        }
    } 
    
    public static function open_center($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<center$attr>\n";
        }
        else
        {
             return "<center>\n";   
        }
    } 
    
    public static function open_details($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<details$attr>\n";
        }
        else
        {
             return "<details>\n";   
        }
    }  
    
    public static function open_div($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<div$attr>\n";
        }
        else
        {
             return "<div>\n";   
        }
    } 
    
    public static function open_figure($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<figure$attr>\n";
        }
        else
        {
             return "<figure>\n";   
        }
    }
    
    public static function open_footer($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<footer$attr>\n";
        }
        else
        {
             return "<footer>\n";   
        }
    }
    
    public static function open_form($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<form$attr>\n";
        }
        else
        {
             return "<form>\n";   
        }
    }
    
    public static function open_header($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<header$attr>\n";
        }
        else
        {
             return "<header>\n";   
        }
    }
    
    public static function open_main($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<main$attr>\n";
        }
        else
        {
             return "<main>\n";   
        }
    }
    
    public static function open_nav($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<nav$attr>\n";
        }
        else
        {
             return "<nav>\n";   
        }
    }
    
    public static function open_section($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<section$attr>\n";
        }
        else
        {
             return "<section>\n";   
        }
    }
    
    public static function open_script()
    {
        return "<script>\n";
    }
    
    public static function open_select($name=null, $attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<select name='$name'$attr>\n";
        }
        else
        {
             return "<select name='$name'>\n";   
        }
    }
    
    public static function open_style()
    {
        return "<style>\n";
    }
    
    public static function open_table($attributes=null)
    {
            $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<table$attr>\n";
        }
        else
        {
             return "<table>\n";   
        }
    }
    
    public static function open_ul($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<ul$attr>\n";
        }
        else
        {
             return "<ul>\n";   
        }
    }
    
    public static function open_video($attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<video controls$attr>\n";
        }
        else
        {
             return "<video controls>\n";   
        }
    }
    
    public static function p($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<p$attr>$content</p>\n";
         }
         else
         {
             return "<p>$content</p>\n";
         }
    }
    
    public static function password($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='password' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='password' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function pre($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<pre$attr>".htmlspecialchars($content)."</pre>\n";
         }
         else
         {
             return "<pre>".htmlspecialchars($content)."</pre>\n";
         }
    }
    
    public static function progress($value=50, $max=100, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<progress value='$value' max='$max'$attr></progress>\n";
         }
         else
         {
             return "<progress value='$value' max='$max'></progress>\n";
         }
    }
    
        public static function radio($name=null, $value=null, $checked='', $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='radio' name='$name' value='$value'$checked$attr$slash>\n";
         }
         else
         {
             return "<input type='radio' name='$name' value='$value'$checked$slash>\n";
         }
    }
    
    public static function range($name=null, $value=null, $min=0, $max=100, $step=1, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='range' name='$name' value='$value' min='$min' max='$max' step='$step'$attr$slash>\n";
         }
         else
         {
             return "<input type='range' name='$name' value='$value' min='$min' max='$max' step='$step'$slash>\n";
         }
    }
    
    public static function script($src=null)
    {
        return "<script type='text/javascript' src='$src'></script>\n";
    }
    
    public static function search($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='search' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='search' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function small($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<small$attr>$content</small>\n";
         }
         else
         {
             return "<small>$content</small>\n";
         }
    }
    
    public static function span($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<span$attr>$content</span>\n";
         }
         else
         {
             return "<span>$content</span>\n";
         }
    }
    
    public static function specialchars($string=null)
    {
        return htmlspecialchars($string);
    }
    
    public static function specialchars_decode($string=null)
    {
        return htmlspecialchars_decode($string);
    }
    
    public static function strong($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<strong$attr>$content</strong>\n";
         }
         else
         {
             return "<strong>$content</strong>\n";
         }
    }
    
    public static function submit($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='submit' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='submit' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function summary($content=null, $attributes=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<summary$attr>$content</summary>\n";
         }
         else
         {
             return "<summary>$content</summary>\n";
         }
    }
    
    public static function tel($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='tel' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='tel' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function text($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='text' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='text' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function textarea($name=null, $value=null, $attributes=null)
    {
        $attr = null;
        if (is_array($attributes))
        {
            foreach ($attributes as $key => $val)
            {
                $attr .= " $key='$val'";
            }
            return "<textarea name='$name'$attr>$value</textarea>\n";
        }
        else
        {
            return "<textarea name='$name'>$value</textarea>\n";
        }
    }
    
    public static function title($content=null)
    {
        return "<title>$content</title>\n";
    }
    
    public static function time($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='time' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='time' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function token($slash=null)
    {
        $_SESSION['token'] = sha1(md5(rand(100000, 999999)));
        $value = $_SESSION['token'];
        return "<input type='hidden' name='token' value='$value'$slash>";
    }
    
    public static function url($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='url' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='url' name='$name' value='$value'$slash>\n";
         }
    }
    
    public static function url_encode($string=null)
    {
        return urlencode($string);
    }
    
    public static function url_dedoce($string=null)
    {
        return urldecode($string);
    }
    
    public static function week($name=null, $value=null, $attributes=null, $slash=null)
    {
         $attr = null;
         if (is_array($attributes))
         {
             foreach($attributes as $key => $val)
             {
                 $attr .= " $key='$val'";
             }
             return "<input type='week' name='$name' value='$value'$attr$slash>\n";
         }
         else
         {
             return "<input type='week' name='$name' value='$value'$slash>\n";
         }
    }
    
}