<?php

/* C:\xampp2\htdocs\mailing/plugins/dev/mailing/components/import/default.htm */
class __TwigTemplate_cfc0c773455ae4edd6aae6285403cf131d8bfa3999b99041fc594156c8ca0b81 extends Twig_Template
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
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 2
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 3
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("files" => true, "request" => "onSave")));
        echo "
   <input type=\"file\" name=\"file\" />
   <button type=\"submit\" >Send to serve</button>
";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
<form data-request=\"onSave\" method=\"post\" id=\"importFrm\" enctype=\"multipart/form-data\">
                <input type=\"file\" name=\"file\" />
                <input type=\"submit\" class=\"btn btn-primary\" name=\"importSubmit\" value=\"IMPORT\">
</form>
<form onsubmit=\"Import()\">
 
  <div class=\"form-group\">
    <label for=\"exampleInputFile\">Import adresów email</label>
    <input type=\"file\" class=\"form-control-file\" id=\"exampleInputFile\" aria-describedby=\"fileHelp\">
    <small id=\"fileHelp\" class=\"form-text text-muted\">Wskaż plik z bazą danych adresów email.</small>
  </div>

  <button type=\"submit\" class=\"btn btn-primary\">Importuj</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\mailing/plugins/dev/mailing/components/import/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% framework %}
{% framework extras %}
{{ form_open({ files: true ,request: 'onSave'}) }}
   <input type=\"file\" name=\"file\" />
   <button type=\"submit\" >Send to serve</button>
{{ form_close() }}
<form data-request=\"onSave\" method=\"post\" id=\"importFrm\" enctype=\"multipart/form-data\">
                <input type=\"file\" name=\"file\" />
                <input type=\"submit\" class=\"btn btn-primary\" name=\"importSubmit\" value=\"IMPORT\">
</form>
<form onsubmit=\"Import()\">
 
  <div class=\"form-group\">
    <label for=\"exampleInputFile\">Import adresów email</label>
    <input type=\"file\" class=\"form-control-file\" id=\"exampleInputFile\" aria-describedby=\"fileHelp\">
    <small id=\"fileHelp\" class=\"form-text text-muted\">Wskaż plik z bazą danych adresów email.</small>
  </div>

  <button type=\"submit\" class=\"btn btn-primary\">Importuj</button>
</form>
", "C:\\xampp2\\htdocs\\mailing/plugins/dev/mailing/components/import/default.htm", "");
    }
}
