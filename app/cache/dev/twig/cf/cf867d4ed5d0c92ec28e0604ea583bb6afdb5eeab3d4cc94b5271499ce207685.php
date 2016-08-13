<?php

/* ::base.html.twig */
class __TwigTemplate_bcc2f572028ccde0a0655c3a1cb2a36d8f0c749fef76ab661cee0c0c10328f22 extends Twig_Template
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
        $__internal_f15debcc5118be350277e0bc2589efd345b6d39847f3309a04bf058befbb44c2 = $this->env->getExtension("native_profiler");
        $__internal_f15debcc5118be350277e0bc2589efd345b6d39847f3309a04bf058befbb44c2->enter($__internal_f15debcc5118be350277e0bc2589efd345b6d39847f3309a04bf058befbb44c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f15debcc5118be350277e0bc2589efd345b6d39847f3309a04bf058befbb44c2->leave($__internal_f15debcc5118be350277e0bc2589efd345b6d39847f3309a04bf058befbb44c2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_59511bb82b2339acf4555ca66b3d568f16505ed91a4a7aba0ac4f15a0318c03b = $this->env->getExtension("native_profiler");
        $__internal_59511bb82b2339acf4555ca66b3d568f16505ed91a4a7aba0ac4f15a0318c03b->enter($__internal_59511bb82b2339acf4555ca66b3d568f16505ed91a4a7aba0ac4f15a0318c03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_59511bb82b2339acf4555ca66b3d568f16505ed91a4a7aba0ac4f15a0318c03b->leave($__internal_59511bb82b2339acf4555ca66b3d568f16505ed91a4a7aba0ac4f15a0318c03b_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_db0760f8302647d733a17071b174f1459fef2b1f401fae72b57d192b40890c39 = $this->env->getExtension("native_profiler");
        $__internal_db0760f8302647d733a17071b174f1459fef2b1f401fae72b57d192b40890c39->enter($__internal_db0760f8302647d733a17071b174f1459fef2b1f401fae72b57d192b40890c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_db0760f8302647d733a17071b174f1459fef2b1f401fae72b57d192b40890c39->leave($__internal_db0760f8302647d733a17071b174f1459fef2b1f401fae72b57d192b40890c39_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7ae54a062d32654a9acc34dabe6fc80d09ed9049fbe94e6687c2bd4086cc0fc = $this->env->getExtension("native_profiler");
        $__internal_d7ae54a062d32654a9acc34dabe6fc80d09ed9049fbe94e6687c2bd4086cc0fc->enter($__internal_d7ae54a062d32654a9acc34dabe6fc80d09ed9049fbe94e6687c2bd4086cc0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d7ae54a062d32654a9acc34dabe6fc80d09ed9049fbe94e6687c2bd4086cc0fc->leave($__internal_d7ae54a062d32654a9acc34dabe6fc80d09ed9049fbe94e6687c2bd4086cc0fc_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef8aff4ffa126b50dfc11245247a94c861192abc2649c7e560c40e88e1ee581a = $this->env->getExtension("native_profiler");
        $__internal_ef8aff4ffa126b50dfc11245247a94c861192abc2649c7e560c40e88e1ee581a->enter($__internal_ef8aff4ffa126b50dfc11245247a94c861192abc2649c7e560c40e88e1ee581a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef8aff4ffa126b50dfc11245247a94c861192abc2649c7e560c40e88e1ee581a->leave($__internal_ef8aff4ffa126b50dfc11245247a94c861192abc2649c7e560c40e88e1ee581a_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f582719f562867721f37bcc3c7b2f206e4249a11627e81d61731c4682c9d2049 = $this->env->getExtension("native_profiler");
        $__internal_f582719f562867721f37bcc3c7b2f206e4249a11627e81d61731c4682c9d2049->enter($__internal_f582719f562867721f37bcc3c7b2f206e4249a11627e81d61731c4682c9d2049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_f582719f562867721f37bcc3c7b2f206e4249a11627e81d61731c4682c9d2049->leave($__internal_f582719f562867721f37bcc3c7b2f206e4249a11627e81d61731c4682c9d2049_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
