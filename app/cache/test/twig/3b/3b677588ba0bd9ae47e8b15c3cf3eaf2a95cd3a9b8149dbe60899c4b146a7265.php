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
        $__internal_574f7c4f8d57851c79165de955010c2648ab275cfb4f9563eacf895b41cbf4e0 = $this->env->getExtension("native_profiler");
        $__internal_574f7c4f8d57851c79165de955010c2648ab275cfb4f9563eacf895b41cbf4e0->enter($__internal_574f7c4f8d57851c79165de955010c2648ab275cfb4f9563eacf895b41cbf4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_574f7c4f8d57851c79165de955010c2648ab275cfb4f9563eacf895b41cbf4e0->leave($__internal_574f7c4f8d57851c79165de955010c2648ab275cfb4f9563eacf895b41cbf4e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6b4c295e6a65317e9dfbac5e271b326979f9efe317c58ea2f41d3723b8b13c9 = $this->env->getExtension("native_profiler");
        $__internal_d6b4c295e6a65317e9dfbac5e271b326979f9efe317c58ea2f41d3723b8b13c9->enter($__internal_d6b4c295e6a65317e9dfbac5e271b326979f9efe317c58ea2f41d3723b8b13c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d6b4c295e6a65317e9dfbac5e271b326979f9efe317c58ea2f41d3723b8b13c9->leave($__internal_d6b4c295e6a65317e9dfbac5e271b326979f9efe317c58ea2f41d3723b8b13c9_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_8e0e0bba3cc5ac582c343f7b87a2fbb2a2f281bb27e114721266c5ab1bb74ab2 = $this->env->getExtension("native_profiler");
        $__internal_8e0e0bba3cc5ac582c343f7b87a2fbb2a2f281bb27e114721266c5ab1bb74ab2->enter($__internal_8e0e0bba3cc5ac582c343f7b87a2fbb2a2f281bb27e114721266c5ab1bb74ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_8e0e0bba3cc5ac582c343f7b87a2fbb2a2f281bb27e114721266c5ab1bb74ab2->leave($__internal_8e0e0bba3cc5ac582c343f7b87a2fbb2a2f281bb27e114721266c5ab1bb74ab2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c006f986c3b42c2e1f612766aad4b00f3f043d886874f9d989644c9813903d0c = $this->env->getExtension("native_profiler");
        $__internal_c006f986c3b42c2e1f612766aad4b00f3f043d886874f9d989644c9813903d0c->enter($__internal_c006f986c3b42c2e1f612766aad4b00f3f043d886874f9d989644c9813903d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c006f986c3b42c2e1f612766aad4b00f3f043d886874f9d989644c9813903d0c->leave($__internal_c006f986c3b42c2e1f612766aad4b00f3f043d886874f9d989644c9813903d0c_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_d12515b04048348b840d42a2ba59ce6c88162c70f0ce60f76cbb3bc0c9fa7072 = $this->env->getExtension("native_profiler");
        $__internal_d12515b04048348b840d42a2ba59ce6c88162c70f0ce60f76cbb3bc0c9fa7072->enter($__internal_d12515b04048348b840d42a2ba59ce6c88162c70f0ce60f76cbb3bc0c9fa7072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d12515b04048348b840d42a2ba59ce6c88162c70f0ce60f76cbb3bc0c9fa7072->leave($__internal_d12515b04048348b840d42a2ba59ce6c88162c70f0ce60f76cbb3bc0c9fa7072_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84e2adaae57861d534f593b0ec1eb7389324b8a357cae59b9a099b3ae9d6a0eb = $this->env->getExtension("native_profiler");
        $__internal_84e2adaae57861d534f593b0ec1eb7389324b8a357cae59b9a099b3ae9d6a0eb->enter($__internal_84e2adaae57861d534f593b0ec1eb7389324b8a357cae59b9a099b3ae9d6a0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_84e2adaae57861d534f593b0ec1eb7389324b8a357cae59b9a099b3ae9d6a0eb->leave($__internal_84e2adaae57861d534f593b0ec1eb7389324b8a357cae59b9a099b3ae9d6a0eb_prof);

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
