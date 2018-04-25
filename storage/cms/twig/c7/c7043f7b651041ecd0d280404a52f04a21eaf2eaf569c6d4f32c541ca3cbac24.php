<?php

/* C:\xampp2\htdocs\devmail/themes/rainlab-bonjour/layouts/default.htm */
class __TwigTemplate_12e69c9e985b817d60e389f64074d30b2c93d24d0192cc8dba38faccb63a1c53 extends Twig_Template
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
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='http://cdn.quilljs.com/1.3.6/quill.snow.css'>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src='http://cdn.quilljs.com/1.3.6/quill.js'></script>
        <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
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
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "        

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 37
        echo "        </section>

        <!-- Help Popups -->
        ";
        // line 40
        $context['__placeholder_help_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('help', $context['__placeholder_help_default_contents']);
        unset($context['__placeholder_help_default_contents']);        // line 41
        echo "
        <!-- Scripts -->
        ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\devmail/themes/rainlab-bonjour/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 44,  79 => 43,  75 => 41,  73 => 40,  68 => 37,  66 => 36,  60 => 32,  56 => 31,  39 => 16,  35 => 15,  19 => 1,);
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
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='http://cdn.quilljs.com/1.3.6/quill.snow.css'>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src='http://cdn.quilljs.com/1.3.6/quill.js'></script>
        <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
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
</html>", "C:\\xampp2\\htdocs\\devmail/themes/rainlab-bonjour/layouts/default.htm", "");
    }
}
