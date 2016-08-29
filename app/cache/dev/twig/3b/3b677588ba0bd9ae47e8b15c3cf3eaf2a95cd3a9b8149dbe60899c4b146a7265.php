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
        $__internal_3b46d78b1f471576852d2720315ef18b7b80e0bf75a7afe9bc9f65caf83d821e = $this->env->getExtension("native_profiler");
        $__internal_3b46d78b1f471576852d2720315ef18b7b80e0bf75a7afe9bc9f65caf83d821e->enter($__internal_3b46d78b1f471576852d2720315ef18b7b80e0bf75a7afe9bc9f65caf83d821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "\t\t
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" />
\t\t
\t\t<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
\t\t\t<script type=\"text/javascript\">
\t\t\t\twindow.cookieconsent_options = {\"message\":\"Strona korzysta z plików cookies w celu realizacji usług i zgodnie z Polityką Plików Cookies.\",\"dismiss\":\"Rozumiem\",\"learnMore\":\"Dowiedz się więcej\",\"link\":null,\"theme\":\"dark-floating\"};
\t\t\t</script>

\t\t\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js\"></script>
\t\t<!-- End Cookie Consent plugin -->

    </head>
    <body>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>";
        
        $__internal_3b46d78b1f471576852d2720315ef18b7b80e0bf75a7afe9bc9f65caf83d821e->leave($__internal_3b46d78b1f471576852d2720315ef18b7b80e0bf75a7afe9bc9f65caf83d821e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cbbca11d2152dffb97ca6511d5f9b0504664156022c63c3562cba4767aaed51 = $this->env->getExtension("native_profiler");
        $__internal_9cbbca11d2152dffb97ca6511d5f9b0504664156022c63c3562cba4767aaed51->enter($__internal_9cbbca11d2152dffb97ca6511d5f9b0504664156022c63c3562cba4767aaed51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9cbbca11d2152dffb97ca6511d5f9b0504664156022c63c3562cba4767aaed51->leave($__internal_9cbbca11d2152dffb97ca6511d5f9b0504664156022c63c3562cba4767aaed51_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_6cc205cee43c86e4db40bdb90a1e432f205c53370888b23a10e1cf19e1413b1b = $this->env->getExtension("native_profiler");
        $__internal_6cc205cee43c86e4db40bdb90a1e432f205c53370888b23a10e1cf19e1413b1b->enter($__internal_6cc205cee43c86e4db40bdb90a1e432f205c53370888b23a10e1cf19e1413b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_6cc205cee43c86e4db40bdb90a1e432f205c53370888b23a10e1cf19e1413b1b->leave($__internal_6cc205cee43c86e4db40bdb90a1e432f205c53370888b23a10e1cf19e1413b1b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66c7c159cf8b8a4d92204d7863e836a02cde548e02802e849459954fc120e291 = $this->env->getExtension("native_profiler");
        $__internal_66c7c159cf8b8a4d92204d7863e836a02cde548e02802e849459954fc120e291->enter($__internal_66c7c159cf8b8a4d92204d7863e836a02cde548e02802e849459954fc120e291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<!--[if lt IE 9]>
\t\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t\t<![endif]-->
\t\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_66c7c159cf8b8a4d92204d7863e836a02cde548e02802e849459954fc120e291->leave($__internal_66c7c159cf8b8a4d92204d7863e836a02cde548e02802e849459954fc120e291_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8e5e12a2442060c6e8882b9ebad90d8bfda552fd92fc5f3022209fe1c2ccb3b = $this->env->getExtension("native_profiler");
        $__internal_c8e5e12a2442060c6e8882b9ebad90d8bfda552fd92fc5f3022209fe1c2ccb3b->enter($__internal_c8e5e12a2442060c6e8882b9ebad90d8bfda552fd92fc5f3022209fe1c2ccb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c8e5e12a2442060c6e8882b9ebad90d8bfda552fd92fc5f3022209fe1c2ccb3b->leave($__internal_c8e5e12a2442060c6e8882b9ebad90d8bfda552fd92fc5f3022209fe1c2ccb3b_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e2be2903521ffa222653ad978377f82df1cf1dcbcf8980f711c5f109853017a = $this->env->getExtension("native_profiler");
        $__internal_4e2be2903521ffa222653ad978377f82df1cf1dcbcf8980f711c5f109853017a->enter($__internal_4e2be2903521ffa222653ad978377f82df1cf1dcbcf8980f711c5f109853017a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_4e2be2903521ffa222653ad978377f82df1cf1dcbcf8980f711c5f109853017a->leave($__internal_4e2be2903521ffa222653ad978377f82df1cf1dcbcf8980f711c5f109853017a_prof);

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
        return array (  143 => 34,  140 => 33,  134 => 32,  123 => 31,  114 => 16,  105 => 11,  99 => 10,  88 => 8,  77 => 7,  69 => 36,  66 => 32,  64 => 31,  49 => 19,  46 => 18,  44 => 10,  39 => 8,  35 => 7,  27 => 1,);
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
/* 		*/
/*         {% block stylesheets %}*/
/* 			<link href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* 			<!--[if lt IE 9]>*/
/* 				<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/* 				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* 			<![endif]-->*/
/* 			<link href="{{asset('css/base.css')}}" rel="stylesheet" />*/
/* 		{% endblock %}*/
/* 		*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />*/
/* 		*/
/* 		<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->*/
/* 			<script type="text/javascript">*/
/* 				window.cookieconsent_options = {"message":"Strona korzysta z plików cookies w celu realizacji usług i zgodnie z Polityką Plików Cookies.","dismiss":"Rozumiem","learnMore":"Dowiedz się więcej","link":null,"theme":"dark-floating"};*/
/* 			</script>*/
/* */
/* 			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>*/
/* 		<!-- End Cookie Consent plugin -->*/
/* */
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/* 			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* 			<script src="{{ asset('bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>*/
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
