<?php

/* C:\xampp2\htdocs\mailing/themes/rainlab-bonjour/pages/login.htm */
class __TwigTemplate_e12695c59250219d0d19f5fb5967d9f9ac2fb2da2852ddd1fc39b3e4cfce7d03 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\mailing/themes/rainlab-bonjour/pages/login.htm";
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
        return new Twig_Source("{% component 'account' %}", "C:\\xampp2\\htdocs\\mailing/themes/rainlab-bonjour/pages/login.htm", "");
    }
}
