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

        <!-- Main Quill library -->
        <script src=\"//cdn.quilljs.com/1.3.6/quill.js\"></script>
        <script src=\"//cdn.quilljs.com/1.3.6/quill.min.js\"></script>

        <!-- Theme included stylesheets -->
        <link href=\"//cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
        <link href=\"//cdn.quilljs.com/1.3.6/quill.bubble.css\" rel=\"stylesheet\">
        <link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
        ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "      

    </head>
    <body style=\"background: #e0715e; /* Old browsers */
        background: -moz-linear-gradient(top, #a6bed9 50%, #f4f4f4 50%) fixed; /* FF3.6-15 */
        background: -webkit-linear-gradient(top, #a6bed9 50%,#f4f4f4 50%) fixed; /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, #a6bed9 50%,#f4f4f4 50%) fixed; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e0715e', endColorstr='#f4f4f4',GradientType=0 ); /* IE6-9 */
    \">

        <!-- Header -->
        <header id=\"layout-header\">
        </header>

        <!-- Nav -->
        ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "        

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 38
        echo "        </section>

        <!-- Help Popups -->
        ";
        // line 41
        $context['__placeholder_help_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('help', $context['__placeholder_help_default_contents']);
        unset($context['__placeholder_help_default_contents']);        // line 42
        echo "
        <!-- Scripts -->
        ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "
    </body>
</html>";
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
        return array (  84 => 45,  80 => 44,  76 => 42,  74 => 41,  69 => 38,  67 => 37,  61 => 33,  57 => 32,  40 => 17,  36 => 16,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>

        <!-- Main Quill library -->
        <script src=\"//cdn.quilljs.com/1.3.6/quill.js\"></script>
        <script src=\"//cdn.quilljs.com/1.3.6/quill.min.js\"></script>

        <!-- Theme included stylesheets -->
        <link href=\"//cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
        <link href=\"//cdn.quilljs.com/1.3.6/quill.bubble.css\" rel=\"stylesheet\">
        <link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
        {% partial 'site/meta' %}
      

    </head>
    <body style=\"background: #e0715e; /* Old browsers */
        background: -moz-linear-gradient(top, #a6bed9 50%, #f4f4f4 50%) fixed; /* FF3.6-15 */
        background: -webkit-linear-gradient(top, #a6bed9 50%,#f4f4f4 50%) fixed; /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, #a6bed9 50%,#f4f4f4 50%) fixed; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
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
</html>", "C:\\xampp2\\htdocs\\mailing/themes/rainlab-bonjour/layouts/default.htm", "");
    }
}
