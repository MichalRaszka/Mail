<?php

/* C:\xampp2\htdocs\mailing/themes/rainlab-bonjour/pages/mail.htm */
class __TwigTemplate_e38c7c574e5bc73c54430e323bc53091a8d421fed22caf36e2e6d1283241128a extends Twig_Template
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
        echo "<div style=\"border-radius:5px;
            background-color:white;
            padding:40px; 
            margin: 10%;
            margin-left: 30%;
            height: 500px; 
            width: 800px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
           \">
  <form>
    <div class=\"row\">
    <div class=\"col-lg-12 nopadding\">
        <div id=\"txtEditor\"></div> 
      </div>
  </div>

    <div class=\"form-group\">
      <label for=\"exampleTextarea\">Treść wiadomości</label>
      <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
    </div>
    
    <button type=\"submit\" class=\"btn btn-primary\">Wyślij wiadomość</button>
  </form>
<div>


<script type=\"text/javascript\">
\$(document).ready( function() {
\$(\"#txtEditor\").Editor();                   
});
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\mailing/themes/rainlab-bonjour/pages/mail.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"border-radius:5px;
            background-color:white;
            padding:40px; 
            margin: 10%;
            margin-left: 30%;
            height: 500px; 
            width: 800px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
           \">
  <form>
    <div class=\"row\">
    <div class=\"col-lg-12 nopadding\">
        <div id=\"txtEditor\"></div> 
      </div>
  </div>

    <div class=\"form-group\">
      <label for=\"exampleTextarea\">Treść wiadomości</label>
      <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
    </div>
    
    <button type=\"submit\" class=\"btn btn-primary\">Wyślij wiadomość</button>
  </form>
<div>


<script type=\"text/javascript\">
\$(document).ready( function() {
\$(\"#txtEditor\").Editor();                   
});
</script>", "C:\\xampp2\\htdocs\\mailing/themes/rainlab-bonjour/pages/mail.htm", "");
    }
}
