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
        $__internal_7cb2f42984298cdfcef815db7c3946a8166fe4a5ce6c0911873e0bcb13adc116 = $this->env->getExtension("native_profiler");
        $__internal_7cb2f42984298cdfcef815db7c3946a8166fe4a5ce6c0911873e0bcb13adc116->enter($__internal_7cb2f42984298cdfcef815db7c3946a8166fe4a5ce6c0911873e0bcb13adc116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7cb2f42984298cdfcef815db7c3946a8166fe4a5ce6c0911873e0bcb13adc116->leave($__internal_7cb2f42984298cdfcef815db7c3946a8166fe4a5ce6c0911873e0bcb13adc116_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f4d3492b5baa4e49cf6f9b03ce93240f63214a9bc47976bf50141fc51648615 = $this->env->getExtension("native_profiler");
        $__internal_5f4d3492b5baa4e49cf6f9b03ce93240f63214a9bc47976bf50141fc51648615->enter($__internal_5f4d3492b5baa4e49cf6f9b03ce93240f63214a9bc47976bf50141fc51648615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5f4d3492b5baa4e49cf6f9b03ce93240f63214a9bc47976bf50141fc51648615->leave($__internal_5f4d3492b5baa4e49cf6f9b03ce93240f63214a9bc47976bf50141fc51648615_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_b6518612beee52f8d65733ece63ef82fd6bd8bee85fb49fa362a2d9b9c1ef3ec = $this->env->getExtension("native_profiler");
        $__internal_b6518612beee52f8d65733ece63ef82fd6bd8bee85fb49fa362a2d9b9c1ef3ec->enter($__internal_b6518612beee52f8d65733ece63ef82fd6bd8bee85fb49fa362a2d9b9c1ef3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_b6518612beee52f8d65733ece63ef82fd6bd8bee85fb49fa362a2d9b9c1ef3ec->leave($__internal_b6518612beee52f8d65733ece63ef82fd6bd8bee85fb49fa362a2d9b9c1ef3ec_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b586f916427ad12df65a898028bca49d488f72901ace8ee08921623e329252a8 = $this->env->getExtension("native_profiler");
        $__internal_b586f916427ad12df65a898028bca49d488f72901ace8ee08921623e329252a8->enter($__internal_b586f916427ad12df65a898028bca49d488f72901ace8ee08921623e329252a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b586f916427ad12df65a898028bca49d488f72901ace8ee08921623e329252a8->leave($__internal_b586f916427ad12df65a898028bca49d488f72901ace8ee08921623e329252a8_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd2d4a746cf566437086583b05054b282644ba5b056a33fc839b2318bc877362 = $this->env->getExtension("native_profiler");
        $__internal_fd2d4a746cf566437086583b05054b282644ba5b056a33fc839b2318bc877362->enter($__internal_fd2d4a746cf566437086583b05054b282644ba5b056a33fc839b2318bc877362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fd2d4a746cf566437086583b05054b282644ba5b056a33fc839b2318bc877362->leave($__internal_fd2d4a746cf566437086583b05054b282644ba5b056a33fc839b2318bc877362_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64279f6d1f6830c946c17cf9ed98aa62b82102384c69c8311d0f2466dc1d5dfd = $this->env->getExtension("native_profiler");
        $__internal_64279f6d1f6830c946c17cf9ed98aa62b82102384c69c8311d0f2466dc1d5dfd->enter($__internal_64279f6d1f6830c946c17cf9ed98aa62b82102384c69c8311d0f2466dc1d5dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_64279f6d1f6830c946c17cf9ed98aa62b82102384c69c8311d0f2466dc1d5dfd->leave($__internal_64279f6d1f6830c946c17cf9ed98aa62b82102384c69c8311d0f2466dc1d5dfd_prof);

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
