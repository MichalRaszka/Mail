<?php

/* C:\xampp\htdocs\mailing/themes/rainlab-bonjour/pages/mail.htm */
class __TwigTemplate_c767a136b31bc90590e35a5d1b31d8ac8741acac82578e62f54fbe784bf4de14 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mailing"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "






<div class=\"modal-content\" style=\"border-radius:5px;
            background-color:white;
            padding:40px;
            margin: 10%;
            margin-left: 25%;
            min-height: 500px;
            max-width: 1000px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
           \">

    <div class=\"modal-body\">
        <form onsubmit=\"getData()\" data-request=\"onSend\">

            <label>Treść wiadomości</label>

            <div id=\"toolbar\">
                        <span class=\"ql-formats\">
                            <select class=\"ql-font\"></select>
                            <select class=\"ql-size\"></select>
                            </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-bold\"></button>
                            <button class=\"ql-italic\"></button>
                            <button class=\"ql-underline\"></button>
                            <button class=\"ql-strike\"></button>
                        </span>
                <span class=\"ql-formats\">
                            <select class=\"ql-color\"></select>
                            <select class=\"ql-background\"></select>
                            </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-script\" value=\"sub\"></button>
                            <button class=\"ql-script\" value=\"super\"></button>
                        </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-header\" value=\"1\"></button>
                            <button class=\"ql-header\" value=\"2\"></button>
                            <button class=\"ql-blockquote\"></button>
                            <button class=\"ql-code-block\"></button>
                        </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-list\" value=\"ordered\"></button>
                            <button class=\"ql-list\" value=\"bullet\"></button>
                            <button class=\"ql-indent\" value=\"-1\"></button>
                            <button class=\"ql-indent\" value=\"+1\"></button>
                        </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-direction\" value=\"rtl\"></button>
                            <select class=\"ql-align\"></select>
                        </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-link\"></button>
                            <button class=\"ql-image\"></button>
                            <button class=\"ql-video\"></button>
                            <button class=\"ql-formula\"></button>
                        </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-clean\"></button>
                        </span>
            </div>

            <input id=\"content\" name=\"content\" type=\"hidden\">
            <div id=\"editor\"></div>


            <button type=\"submit\" class=\"btn btn-primary\">Wyślij wiadomość</button>


        </form>
    </div>

</div>

<!-- <div style=\"border-radius:5px;
            background-color:white;
            padding:40px;
            margin: 10%;
            margin-left: 30%;
            height: 500px;
            width: 800px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
           \">

</div>
-->
<script>
    var quill = new Quill('#editor', {
        modules: {
            formula: true,
            syntax: true,
            toolbar: '#toolbar'
        },
        placeholder: 'Utwórz wiadomość',
        theme: 'snow'
    });

    function getData() {
        var form = document.querySelector(form);
        var content = form.querySelector('input[name=\"pwd\"]');
        alert(content);
    };

</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\mailing/themes/rainlab-bonjour/pages/mail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'mailing' %}







<div class=\"modal-content\" style=\"border-radius:5px;
            background-color:white;
            padding:40px;
            margin: 10%;
            margin-left: 25%;
            min-height: 500px;
            max-width: 1000px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
           \">

    <div class=\"modal-body\">
        <form onsubmit=\"getData()\" data-request=\"onSend\">

            <label>Treść wiadomości</label>

            <div id=\"toolbar\">
                        <span class=\"ql-formats\">
                            <select class=\"ql-font\"></select>
                            <select class=\"ql-size\"></select>
                            </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-bold\"></button>
                            <button class=\"ql-italic\"></button>
                            <button class=\"ql-underline\"></button>
                            <button class=\"ql-strike\"></button>
                        </span>
                <span class=\"ql-formats\">
                            <select class=\"ql-color\"></select>
                            <select class=\"ql-background\"></select>
                            </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-script\" value=\"sub\"></button>
                            <button class=\"ql-script\" value=\"super\"></button>
                        </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-header\" value=\"1\"></button>
                            <button class=\"ql-header\" value=\"2\"></button>
                            <button class=\"ql-blockquote\"></button>
                            <button class=\"ql-code-block\"></button>
                        </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-list\" value=\"ordered\"></button>
                            <button class=\"ql-list\" value=\"bullet\"></button>
                            <button class=\"ql-indent\" value=\"-1\"></button>
                            <button class=\"ql-indent\" value=\"+1\"></button>
                        </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-direction\" value=\"rtl\"></button>
                            <select class=\"ql-align\"></select>
                        </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-link\"></button>
                            <button class=\"ql-image\"></button>
                            <button class=\"ql-video\"></button>
                            <button class=\"ql-formula\"></button>
                        </span>
                <span class=\"ql-formats\">
                            <button class=\"ql-clean\"></button>
                        </span>
            </div>

            <input id=\"content\" name=\"content\" type=\"hidden\">
            <div id=\"editor\"></div>


            <button type=\"submit\" class=\"btn btn-primary\">Wyślij wiadomość</button>


        </form>
    </div>

</div>

<!-- <div style=\"border-radius:5px;
            background-color:white;
            padding:40px;
            margin: 10%;
            margin-left: 30%;
            height: 500px;
            width: 800px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
           \">

</div>
-->
<script>
    var quill = new Quill('#editor', {
        modules: {
            formula: true,
            syntax: true,
            toolbar: '#toolbar'
        },
        placeholder: 'Utwórz wiadomość',
        theme: 'snow'
    });

    function getData() {
        var form = document.querySelector(form);
        var content = form.querySelector('input[name=\"pwd\"]');
        alert(content);
    };

</script>", "C:\\xampp\\htdocs\\mailing/themes/rainlab-bonjour/pages/mail.htm", "");
    }
}
