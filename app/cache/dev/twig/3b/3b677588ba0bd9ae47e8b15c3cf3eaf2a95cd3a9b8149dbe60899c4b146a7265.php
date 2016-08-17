<?php

/* base.html.twig */
class __TwigTemplate_a2fe4fd61c697fa9c433220ae8e6e8057407debddc88ecc0b78752661997dccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7d4a2bd1afb8572ab12d3ab60ef08ffae0292581b6cda0ee292a03f010093b8 = $this->env->getExtension("native_profiler");
        $__internal_b7d4a2bd1afb8572ab12d3ab60ef08ffae0292581b6cda0ee292a03f010093b8->enter($__internal_b7d4a2bd1afb8572ab12d3ab60ef08ffae0292581b6cda0ee292a03f010093b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_b7d4a2bd1afb8572ab12d3ab60ef08ffae0292581b6cda0ee292a03f010093b8->leave($__internal_b7d4a2bd1afb8572ab12d3ab60ef08ffae0292581b6cda0ee292a03f010093b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5283dc3942daf3eb69e04fabb289ac81b5284b9193efaa141a942b3a26ea28e = $this->env->getExtension("native_profiler");
        $__internal_b5283dc3942daf3eb69e04fabb289ac81b5284b9193efaa141a942b3a26ea28e->enter($__internal_b5283dc3942daf3eb69e04fabb289ac81b5284b9193efaa141a942b3a26ea28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b5283dc3942daf3eb69e04fabb289ac81b5284b9193efaa141a942b3a26ea28e->leave($__internal_b5283dc3942daf3eb69e04fabb289ac81b5284b9193efaa141a942b3a26ea28e_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_00805fd30ab22163dbe983caa0691d1a1cfb102e53a510bf5e66006d1183bbef = $this->env->getExtension("native_profiler");
        $__internal_00805fd30ab22163dbe983caa0691d1a1cfb102e53a510bf5e66006d1183bbef->enter($__internal_00805fd30ab22163dbe983caa0691d1a1cfb102e53a510bf5e66006d1183bbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_00805fd30ab22163dbe983caa0691d1a1cfb102e53a510bf5e66006d1183bbef->leave($__internal_00805fd30ab22163dbe983caa0691d1a1cfb102e53a510bf5e66006d1183bbef_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce35909832b2ed847662dc7b0ad83bbb8deca0d188ae9ad1b6f41abadb26e786 = $this->env->getExtension("native_profiler");
        $__internal_ce35909832b2ed847662dc7b0ad83bbb8deca0d188ae9ad1b6f41abadb26e786->enter($__internal_ce35909832b2ed847662dc7b0ad83bbb8deca0d188ae9ad1b6f41abadb26e786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<!--[if lt IE 9]>
\t\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t\t<![endif]-->
\t\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_ce35909832b2ed847662dc7b0ad83bbb8deca0d188ae9ad1b6f41abadb26e786->leave($__internal_ce35909832b2ed847662dc7b0ad83bbb8deca0d188ae9ad1b6f41abadb26e786_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_62d398c9ad8a414187e420dec897e6e5d74102c0972b7b791a68d925bca2f68b = $this->env->getExtension("native_profiler");
        $__internal_62d398c9ad8a414187e420dec897e6e5d74102c0972b7b791a68d925bca2f68b->enter($__internal_62d398c9ad8a414187e420dec897e6e5d74102c0972b7b791a68d925bca2f68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62d398c9ad8a414187e420dec897e6e5d74102c0972b7b791a68d925bca2f68b->leave($__internal_62d398c9ad8a414187e420dec897e6e5d74102c0972b7b791a68d925bca2f68b_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bdfeb1dbc643445ac5c8572cff9ca8bdbf4f9d71643572d142fa68abbfd2f714 = $this->env->getExtension("native_profiler");
        $__internal_bdfeb1dbc643445ac5c8572cff9ca8bdbf4f9d71643572d142fa68abbfd2f714->enter($__internal_bdfeb1dbc643445ac5c8572cff9ca8bdbf4f9d71643572d142fa68abbfd2f714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_bdfeb1dbc643445ac5c8572cff9ca8bdbf4f9d71643572d142fa68abbfd2f714->leave($__internal_bdfeb1dbc643445ac5c8572cff9ca8bdbf4f9d71643572d142fa68abbfd2f714_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 23,  129 => 22,  123 => 21,  112 => 20,  103 => 15,  94 => 10,  88 => 9,  77 => 8,  66 => 7,  57 => 25,  54 => 21,  52 => 20,  45 => 17,  43 => 9,  39 => 8,  35 => 7,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}{% endblock %}</title>*/
/* 		<meta name="description" content="{% block description %}{% endblock %}" />*/
/*         {% block stylesheets %}*/
/* 			<link href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* 			<!--[if lt IE 9]>*/
/* 				<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/* 				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* 			<![endif]-->*/
/* 			<link href="{{asset('css/style.css')}}" rel="stylesheet" />*/
/* 		{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/* 			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* 			<script src="{{ asset('bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>*/
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
