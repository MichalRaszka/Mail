<?php

/* C:\xampp2\htdocs\mailing/themes/rainlab-bonjour/pages/import.htm */
class __TwigTemplate_9e5699e32fc226da0f59937c60d70995c576e62a04b49d1518af603871289ea8 extends Twig_Template
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
        return "C:\\xampp2\\htdocs\\mailing/themes/rainlab-bonjour/pages/import.htm";
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
        return new Twig_Source("{% component 'import' %}", "C:\\xampp2\\htdocs\\mailing/themes/rainlab-bonjour/pages/import.htm", "");
    }
}
