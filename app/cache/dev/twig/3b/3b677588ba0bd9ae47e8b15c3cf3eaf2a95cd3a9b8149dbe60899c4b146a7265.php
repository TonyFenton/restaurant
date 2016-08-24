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
        $__internal_805d2b40d6959c2823bfb4ca688c4a343d72255c3023e15be533248fa0985db4 = $this->env->getExtension("native_profiler");
        $__internal_805d2b40d6959c2823bfb4ca688c4a343d72255c3023e15be533248fa0985db4->enter($__internal_805d2b40d6959c2823bfb4ca688c4a343d72255c3023e15be533248fa0985db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_805d2b40d6959c2823bfb4ca688c4a343d72255c3023e15be533248fa0985db4->leave($__internal_805d2b40d6959c2823bfb4ca688c4a343d72255c3023e15be533248fa0985db4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ba0d5288e0a8c1d35fdcf43b06cfedd96d9375e72250268c6dc82f418abb33b = $this->env->getExtension("native_profiler");
        $__internal_3ba0d5288e0a8c1d35fdcf43b06cfedd96d9375e72250268c6dc82f418abb33b->enter($__internal_3ba0d5288e0a8c1d35fdcf43b06cfedd96d9375e72250268c6dc82f418abb33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3ba0d5288e0a8c1d35fdcf43b06cfedd96d9375e72250268c6dc82f418abb33b->leave($__internal_3ba0d5288e0a8c1d35fdcf43b06cfedd96d9375e72250268c6dc82f418abb33b_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_9fe5493c1fd701748a519a38cd1b27df2175ddf42d2f6fb69e706eee3e40d222 = $this->env->getExtension("native_profiler");
        $__internal_9fe5493c1fd701748a519a38cd1b27df2175ddf42d2f6fb69e706eee3e40d222->enter($__internal_9fe5493c1fd701748a519a38cd1b27df2175ddf42d2f6fb69e706eee3e40d222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_9fe5493c1fd701748a519a38cd1b27df2175ddf42d2f6fb69e706eee3e40d222->leave($__internal_9fe5493c1fd701748a519a38cd1b27df2175ddf42d2f6fb69e706eee3e40d222_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5328b22e44b8891fbb5654140718e641607f8a5b26bdd2165cc730c7b0640af = $this->env->getExtension("native_profiler");
        $__internal_e5328b22e44b8891fbb5654140718e641607f8a5b26bdd2165cc730c7b0640af->enter($__internal_e5328b22e44b8891fbb5654140718e641607f8a5b26bdd2165cc730c7b0640af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e5328b22e44b8891fbb5654140718e641607f8a5b26bdd2165cc730c7b0640af->leave($__internal_e5328b22e44b8891fbb5654140718e641607f8a5b26bdd2165cc730c7b0640af_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_df45c6f58b44fc9a3a7a9c8848225366bf6a7e0b8dfa9a5e3a2ed34591de2308 = $this->env->getExtension("native_profiler");
        $__internal_df45c6f58b44fc9a3a7a9c8848225366bf6a7e0b8dfa9a5e3a2ed34591de2308->enter($__internal_df45c6f58b44fc9a3a7a9c8848225366bf6a7e0b8dfa9a5e3a2ed34591de2308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df45c6f58b44fc9a3a7a9c8848225366bf6a7e0b8dfa9a5e3a2ed34591de2308->leave($__internal_df45c6f58b44fc9a3a7a9c8848225366bf6a7e0b8dfa9a5e3a2ed34591de2308_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_623215cafcdb7ca358efcbc591e63a4c37153f93cab036b39125f47e72b5e598 = $this->env->getExtension("native_profiler");
        $__internal_623215cafcdb7ca358efcbc591e63a4c37153f93cab036b39125f47e72b5e598->enter($__internal_623215cafcdb7ca358efcbc591e63a4c37153f93cab036b39125f47e72b5e598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_623215cafcdb7ca358efcbc591e63a4c37153f93cab036b39125f47e72b5e598->leave($__internal_623215cafcdb7ca358efcbc591e63a4c37153f93cab036b39125f47e72b5e598_prof);

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
