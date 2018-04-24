<?php

/* C:\xampp2\htdocs\devmail/themes/rainlab-bonjour/pages/import.htm */
class __TwigTemplate_abe7b40cf42f770a55131eb3bdd81f32f9a36401253d1a6029becec02534cb50 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("import"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\devmail/themes/rainlab-bonjour/pages/import.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'import' %}", "C:\\xampp2\\htdocs\\devmail/themes/rainlab-bonjour/pages/import.htm", "");
    }
}
