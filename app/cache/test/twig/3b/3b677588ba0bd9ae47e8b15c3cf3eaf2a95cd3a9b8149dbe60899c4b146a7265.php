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
        $__internal_59ab7968652cd12e13945a5e4ff707ddeb5b81c620a33d32388b36b64a63a6a6 = $this->env->getExtension("native_profiler");
        $__internal_59ab7968652cd12e13945a5e4ff707ddeb5b81c620a33d32388b36b64a63a6a6->enter($__internal_59ab7968652cd12e13945a5e4ff707ddeb5b81c620a33d32388b36b64a63a6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_59ab7968652cd12e13945a5e4ff707ddeb5b81c620a33d32388b36b64a63a6a6->leave($__internal_59ab7968652cd12e13945a5e4ff707ddeb5b81c620a33d32388b36b64a63a6a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05fcd7336a0cd8736a356eaf1ba8d1e6c1fc74c585475d74e588bccd29d97d90 = $this->env->getExtension("native_profiler");
        $__internal_05fcd7336a0cd8736a356eaf1ba8d1e6c1fc74c585475d74e588bccd29d97d90->enter($__internal_05fcd7336a0cd8736a356eaf1ba8d1e6c1fc74c585475d74e588bccd29d97d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_05fcd7336a0cd8736a356eaf1ba8d1e6c1fc74c585475d74e588bccd29d97d90->leave($__internal_05fcd7336a0cd8736a356eaf1ba8d1e6c1fc74c585475d74e588bccd29d97d90_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_af29a7deee2279343039885d243342ddd12b1a41962005bddb62abf7d1949cc2 = $this->env->getExtension("native_profiler");
        $__internal_af29a7deee2279343039885d243342ddd12b1a41962005bddb62abf7d1949cc2->enter($__internal_af29a7deee2279343039885d243342ddd12b1a41962005bddb62abf7d1949cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_af29a7deee2279343039885d243342ddd12b1a41962005bddb62abf7d1949cc2->leave($__internal_af29a7deee2279343039885d243342ddd12b1a41962005bddb62abf7d1949cc2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ffc8ab6f6779d08c5585982653e3022350f7146ed6d0ee559f8f5d6b63330409 = $this->env->getExtension("native_profiler");
        $__internal_ffc8ab6f6779d08c5585982653e3022350f7146ed6d0ee559f8f5d6b63330409->enter($__internal_ffc8ab6f6779d08c5585982653e3022350f7146ed6d0ee559f8f5d6b63330409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ffc8ab6f6779d08c5585982653e3022350f7146ed6d0ee559f8f5d6b63330409->leave($__internal_ffc8ab6f6779d08c5585982653e3022350f7146ed6d0ee559f8f5d6b63330409_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3b1073c8519aaf8efa3e870febc5cd4808558835f0ccae8e9ec4ea6700d73c6 = $this->env->getExtension("native_profiler");
        $__internal_a3b1073c8519aaf8efa3e870febc5cd4808558835f0ccae8e9ec4ea6700d73c6->enter($__internal_a3b1073c8519aaf8efa3e870febc5cd4808558835f0ccae8e9ec4ea6700d73c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a3b1073c8519aaf8efa3e870febc5cd4808558835f0ccae8e9ec4ea6700d73c6->leave($__internal_a3b1073c8519aaf8efa3e870febc5cd4808558835f0ccae8e9ec4ea6700d73c6_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20a3b19ca8c1617bc899cff88b8472c73e51f01de512807fa291e6ccf2adcab5 = $this->env->getExtension("native_profiler");
        $__internal_20a3b19ca8c1617bc899cff88b8472c73e51f01de512807fa291e6ccf2adcab5->enter($__internal_20a3b19ca8c1617bc899cff88b8472c73e51f01de512807fa291e6ccf2adcab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_20a3b19ca8c1617bc899cff88b8472c73e51f01de512807fa291e6ccf2adcab5->leave($__internal_20a3b19ca8c1617bc899cff88b8472c73e51f01de512807fa291e6ccf2adcab5_prof);

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
