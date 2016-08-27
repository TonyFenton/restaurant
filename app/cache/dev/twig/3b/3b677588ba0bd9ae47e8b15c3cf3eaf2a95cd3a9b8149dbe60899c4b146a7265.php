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
        $__internal_7cb106a51966a224202209dd07f3f02dabaec71a3958f5d342e73a2a10ec6708 = $this->env->getExtension("native_profiler");
        $__internal_7cb106a51966a224202209dd07f3f02dabaec71a3958f5d342e73a2a10ec6708->enter($__internal_7cb106a51966a224202209dd07f3f02dabaec71a3958f5d342e73a2a10ec6708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t
\t\t<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.cookieconsent_options = {\"message\":\"Strona korzysta z plików cookies w celu realizacji usług i zgodnie z Polityką Plików Cookies.\",\"dismiss\":\"Rozumiem\",\"learnMore\":\"Dowiedz się więcej\",\"link\":null,\"theme\":\"dark-floating\"};
\t\t</script>

\t\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js\"></script>
\t\t<!-- End Cookie Consent plugin -->

    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
        
        $__internal_7cb106a51966a224202209dd07f3f02dabaec71a3958f5d342e73a2a10ec6708->leave($__internal_7cb106a51966a224202209dd07f3f02dabaec71a3958f5d342e73a2a10ec6708_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2281278bd2dad6a34ecffb9f985529ff5b372671f19ece1d1992058413bf5efe = $this->env->getExtension("native_profiler");
        $__internal_2281278bd2dad6a34ecffb9f985529ff5b372671f19ece1d1992058413bf5efe->enter($__internal_2281278bd2dad6a34ecffb9f985529ff5b372671f19ece1d1992058413bf5efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2281278bd2dad6a34ecffb9f985529ff5b372671f19ece1d1992058413bf5efe->leave($__internal_2281278bd2dad6a34ecffb9f985529ff5b372671f19ece1d1992058413bf5efe_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_f07fadd7c8c6d4d8880c0a2079671a874e9c50ef49324ad26c0c516fadbf9e7e = $this->env->getExtension("native_profiler");
        $__internal_f07fadd7c8c6d4d8880c0a2079671a874e9c50ef49324ad26c0c516fadbf9e7e->enter($__internal_f07fadd7c8c6d4d8880c0a2079671a874e9c50ef49324ad26c0c516fadbf9e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_f07fadd7c8c6d4d8880c0a2079671a874e9c50ef49324ad26c0c516fadbf9e7e->leave($__internal_f07fadd7c8c6d4d8880c0a2079671a874e9c50ef49324ad26c0c516fadbf9e7e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d27f90ab5d26875eb0683e42548afdb46a4128fc4189b36765df763760d0582 = $this->env->getExtension("native_profiler");
        $__internal_2d27f90ab5d26875eb0683e42548afdb46a4128fc4189b36765df763760d0582->enter($__internal_2d27f90ab5d26875eb0683e42548afdb46a4128fc4189b36765df763760d0582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2d27f90ab5d26875eb0683e42548afdb46a4128fc4189b36765df763760d0582->leave($__internal_2d27f90ab5d26875eb0683e42548afdb46a4128fc4189b36765df763760d0582_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_f71723a02d91df96f8a60ab085e61c3ce2bd906f6974d2af804e20eb7f1e3a0c = $this->env->getExtension("native_profiler");
        $__internal_f71723a02d91df96f8a60ab085e61c3ce2bd906f6974d2af804e20eb7f1e3a0c->enter($__internal_f71723a02d91df96f8a60ab085e61c3ce2bd906f6974d2af804e20eb7f1e3a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f71723a02d91df96f8a60ab085e61c3ce2bd906f6974d2af804e20eb7f1e3a0c->leave($__internal_f71723a02d91df96f8a60ab085e61c3ce2bd906f6974d2af804e20eb7f1e3a0c_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8762f9d7e2a9ee578362cc50d17302b4467209f2ac896391e16f592faa51b9ae = $this->env->getExtension("native_profiler");
        $__internal_8762f9d7e2a9ee578362cc50d17302b4467209f2ac896391e16f592faa51b9ae->enter($__internal_8762f9d7e2a9ee578362cc50d17302b4467209f2ac896391e16f592faa51b9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_8762f9d7e2a9ee578362cc50d17302b4467209f2ac896391e16f592faa51b9ae->leave($__internal_8762f9d7e2a9ee578362cc50d17302b4467209f2ac896391e16f592faa51b9ae_prof);

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
        return array (  141 => 32,  138 => 31,  132 => 30,  121 => 29,  112 => 15,  103 => 10,  97 => 9,  86 => 8,  75 => 7,  66 => 34,  63 => 30,  61 => 29,  45 => 17,  43 => 9,  39 => 8,  35 => 7,  27 => 1,);
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
/* 		*/
/* 		<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->*/
/* 		<script type="text/javascript">*/
/* 			window.cookieconsent_options = {"message":"Strona korzysta z plików cookies w celu realizacji usług i zgodnie z Polityką Plików Cookies.","dismiss":"Rozumiem","learnMore":"Dowiedz się więcej","link":null,"theme":"dark-floating"};*/
/* 		</script>*/
/* */
/* 		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>*/
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
/* */
