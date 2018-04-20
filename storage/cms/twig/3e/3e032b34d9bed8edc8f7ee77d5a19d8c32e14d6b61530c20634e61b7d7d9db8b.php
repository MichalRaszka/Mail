<?php

/* C:\xampp2\htdocs\mailing/themes/rainlab-bonjour/layouts/default.htm */
class __TwigTemplate_cc74222e54ce295b5f32ee228e0c2b7ae48b78eb81e93fad63fddb2d64a03c47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <link href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/editor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>   
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/editor.js");
        echo "\"></script>             
        ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "      

    </head>
    <body style=\"background: #e0715e; /* Old browsers */
        background: -moz-linear-gradient(top, #e0715e 50%, #f4f4f4 50%) fixed; /* FF3.6-15 */
        background: -webkit-linear-gradient(top, #e0715e 50%,#f4f4f4 50%) fixed; /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, #e0715e 50%,#f4f4f4 50%) fixed; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e0715e', endColorstr='#f4f4f4',GradientType=0 ); /* IE6-9 */
    \">

        <!-- Header -->
        <header id=\"layout-header\">
        </header>

        <!-- Nav -->
        ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "        

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 32
        echo "        </section>

        <!-- Help Popups -->
        ";
        // line 35
        $context['__placeholder_help_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('help', $context['__placeholder_help_default_contents']);
        unset($context['__placeholder_help_default_contents']);        // line 36
        echo "
        <!-- Scripts -->
        ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "
    </body>
</html>
<script type=\"text/javascript\">";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\mailing/themes/rainlab-bonjour/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 39,  80 => 38,  76 => 36,  74 => 35,  69 => 32,  67 => 31,  61 => 27,  57 => 26,  40 => 11,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <link href=\"{{'assets/css/editor.css'|theme}}\" rel=\"stylesheet\">
        <link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>   
        <script type=\"text/javascript\" src=\"{{'assets/javascript/editor.js'|theme}}\"></script>             
        {% partial 'site/meta' %}
      

    </head>
    <body style=\"background: #e0715e; /* Old browsers */
        background: -moz-linear-gradient(top, #e0715e 50%, #f4f4f4 50%) fixed; /* FF3.6-15 */
        background: -webkit-linear-gradient(top, #e0715e 50%,#f4f4f4 50%) fixed; /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, #e0715e 50%,#f4f4f4 50%) fixed; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e0715e', endColorstr='#f4f4f4',GradientType=0 ); /* IE6-9 */
    \">

        <!-- Header -->
        <header id=\"layout-header\">
        </header>

        <!-- Nav -->
        {% partial 'site/nav' %}
        

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Help Popups -->
        {% placeholder help %}

        <!-- Scripts -->
        {% partial 'site/scripts' %}

    </body>
</html>
<script type=\"text/javascript\">", "C:\\xampp2\\htdocs\\mailing/themes/rainlab-bonjour/layouts/default.htm", "");
    }
}
