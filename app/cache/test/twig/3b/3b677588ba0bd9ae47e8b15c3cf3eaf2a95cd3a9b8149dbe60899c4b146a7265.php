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
        $__internal_0d18c16ad6e819f5072bc6c40f8dafcc9799e3cfe6ac282d2da735c3dc66581e = $this->env->getExtension("native_profiler");
        $__internal_0d18c16ad6e819f5072bc6c40f8dafcc9799e3cfe6ac282d2da735c3dc66581e->enter($__internal_0d18c16ad6e819f5072bc6c40f8dafcc9799e3cfe6ac282d2da735c3dc66581e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0d18c16ad6e819f5072bc6c40f8dafcc9799e3cfe6ac282d2da735c3dc66581e->leave($__internal_0d18c16ad6e819f5072bc6c40f8dafcc9799e3cfe6ac282d2da735c3dc66581e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbf2913e61d3d41d4def4e4925acfb5b071fe9b80274e99c1570a48b335c5191 = $this->env->getExtension("native_profiler");
        $__internal_dbf2913e61d3d41d4def4e4925acfb5b071fe9b80274e99c1570a48b335c5191->enter($__internal_dbf2913e61d3d41d4def4e4925acfb5b071fe9b80274e99c1570a48b335c5191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dbf2913e61d3d41d4def4e4925acfb5b071fe9b80274e99c1570a48b335c5191->leave($__internal_dbf2913e61d3d41d4def4e4925acfb5b071fe9b80274e99c1570a48b335c5191_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_ac38d1e70a0b28720b0cfe22538c1fc717c38f1dcae2dc7f5831ebbfdc31a35a = $this->env->getExtension("native_profiler");
        $__internal_ac38d1e70a0b28720b0cfe22538c1fc717c38f1dcae2dc7f5831ebbfdc31a35a->enter($__internal_ac38d1e70a0b28720b0cfe22538c1fc717c38f1dcae2dc7f5831ebbfdc31a35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_ac38d1e70a0b28720b0cfe22538c1fc717c38f1dcae2dc7f5831ebbfdc31a35a->leave($__internal_ac38d1e70a0b28720b0cfe22538c1fc717c38f1dcae2dc7f5831ebbfdc31a35a_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa52063f26a09c3a70824a9dc39289ab92e16b703d804530d0eaabfece26fb23 = $this->env->getExtension("native_profiler");
        $__internal_aa52063f26a09c3a70824a9dc39289ab92e16b703d804530d0eaabfece26fb23->enter($__internal_aa52063f26a09c3a70824a9dc39289ab92e16b703d804530d0eaabfece26fb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aa52063f26a09c3a70824a9dc39289ab92e16b703d804530d0eaabfece26fb23->leave($__internal_aa52063f26a09c3a70824a9dc39289ab92e16b703d804530d0eaabfece26fb23_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_de88e4ec52bbb1e89a71a9b582b51cbc84e53d053ada52b01a263701743e2128 = $this->env->getExtension("native_profiler");
        $__internal_de88e4ec52bbb1e89a71a9b582b51cbc84e53d053ada52b01a263701743e2128->enter($__internal_de88e4ec52bbb1e89a71a9b582b51cbc84e53d053ada52b01a263701743e2128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de88e4ec52bbb1e89a71a9b582b51cbc84e53d053ada52b01a263701743e2128->leave($__internal_de88e4ec52bbb1e89a71a9b582b51cbc84e53d053ada52b01a263701743e2128_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce0fe870800c48d2b372283db6a9dc02172f81b48b2932a938ab6e48bed11b91 = $this->env->getExtension("native_profiler");
        $__internal_ce0fe870800c48d2b372283db6a9dc02172f81b48b2932a938ab6e48bed11b91->enter($__internal_ce0fe870800c48d2b372283db6a9dc02172f81b48b2932a938ab6e48bed11b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_ce0fe870800c48d2b372283db6a9dc02172f81b48b2932a938ab6e48bed11b91->leave($__internal_ce0fe870800c48d2b372283db6a9dc02172f81b48b2932a938ab6e48bed11b91_prof);

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
