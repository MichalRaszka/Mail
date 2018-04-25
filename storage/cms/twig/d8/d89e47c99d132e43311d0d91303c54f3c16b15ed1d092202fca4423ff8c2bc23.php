<?php

/* C:\xampp2\htdocs\devmail/themes/rainlab-bonjour/pages/mail.htm */
class __TwigTemplate_4386a015049cfce90b7eda8db777fbedcb42be389f84baa0dc02ac99149d3f50 extends Twig_Template
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

        <form 
        onsubmit=\"getData()\" 
        data-request=\"onSend\"
        data-request-loading=\"#load\"
        >
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
            <input name=\"about\" type=\"hidden\">
            <div id=\"editor-container\"></div>
            <button class=\"btn btn-primary\" type=\"submit\">Save Profile</button>
          
        </form>
      </div>
      <div id=\"load\" style=\"display:none\">
        <img src=\"";
        // line 75
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icon_loading_email_512px.gif");
        echo "\" alt=\"loading...\" style=\"width: 200px;height: 200px; margin-left: 35%\">
      </div>
</div>
<script>
var quill = new Quill('#editor-container', {
  modules: {
    toolbar: '#toolbar',
  },
  placeholder: 'Utwórz wiadomość',  
  theme: 'snow'
});


var form = document.querySelector('form');
function getData() {
  // Populate hidden form on submit
  var about = document.querySelector('input[name=about]');
  about.value = JSON.stringify(quill.getContents());
  
  console.log(\"Submitted\", \$(form).serialize(), \$(form).serializeArray());
  
  // No back end to actually submit to!
  alert('Open the console to see the submit data!')
  return false;
};
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\devmail/themes/rainlab-bonjour/pages/mail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 75,  23 => 2,  19 => 1,);
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

        <form 
        onsubmit=\"getData()\" 
        data-request=\"onSend\"
        data-request-loading=\"#load\"
        >
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
            <input name=\"about\" type=\"hidden\">
            <div id=\"editor-container\"></div>
            <button class=\"btn btn-primary\" type=\"submit\">Save Profile</button>
          
        </form>
      </div>
      <div id=\"load\" style=\"display:none\">
        <img src=\"{{ 'assets/images/icon_loading_email_512px.gif' | theme }}\" alt=\"loading...\" style=\"width: 200px;height: 200px; margin-left: 35%\">
      </div>
</div>
<script>
var quill = new Quill('#editor-container', {
  modules: {
    toolbar: '#toolbar',
  },
  placeholder: 'Utwórz wiadomość',  
  theme: 'snow'
});


var form = document.querySelector('form');
function getData() {
  // Populate hidden form on submit
  var about = document.querySelector('input[name=about]');
  about.value = JSON.stringify(quill.getContents());
  
  console.log(\"Submitted\", \$(form).serialize(), \$(form).serializeArray());
  
  // No back end to actually submit to!
  alert('Open the console to see the submit data!')
  return false;
};
</script>", "C:\\xampp2\\htdocs\\devmail/themes/rainlab-bonjour/pages/mail.htm", "");
    }
}
