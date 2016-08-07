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
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa7a7722f47db92c3e437f0304bc4b5e500aad5b164c5122d3fb2d6e11d7e8a8 = $this->env->getExtension("native_profiler");
        $__internal_aa7a7722f47db92c3e437f0304bc4b5e500aad5b164c5122d3fb2d6e11d7e8a8->enter($__internal_aa7a7722f47db92c3e437f0304bc4b5e500aad5b164c5122d3fb2d6e11d7e8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"description\" content=\"";
        // line 6
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
\t\t<meta name=\"keywords\" content=\"";
        // line 7
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link href='https://fonts.googleapis.com/css?family=Lato:400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_aa7a7722f47db92c3e437f0304bc4b5e500aad5b164c5122d3fb2d6e11d7e8a8->leave($__internal_aa7a7722f47db92c3e437f0304bc4b5e500aad5b164c5122d3fb2d6e11d7e8a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_582635801be2cae88e07c8263362045b847d63380bdade6e20179c2d34c9c7b8 = $this->env->getExtension("native_profiler");
        $__internal_582635801be2cae88e07c8263362045b847d63380bdade6e20179c2d34c9c7b8->enter($__internal_582635801be2cae88e07c8263362045b847d63380bdade6e20179c2d34c9c7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_582635801be2cae88e07c8263362045b847d63380bdade6e20179c2d34c9c7b8->leave($__internal_582635801be2cae88e07c8263362045b847d63380bdade6e20179c2d34c9c7b8_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_d3c1d5a8415667b932ec72f3f45bbd9a2ff3528e10fe1f86be3984de282b6710 = $this->env->getExtension("native_profiler");
        $__internal_d3c1d5a8415667b932ec72f3f45bbd9a2ff3528e10fe1f86be3984de282b6710->enter($__internal_d3c1d5a8415667b932ec72f3f45bbd9a2ff3528e10fe1f86be3984de282b6710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_d3c1d5a8415667b932ec72f3f45bbd9a2ff3528e10fe1f86be3984de282b6710->leave($__internal_d3c1d5a8415667b932ec72f3f45bbd9a2ff3528e10fe1f86be3984de282b6710_prof);

    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_a77dc3512ab2e9cab5f97cfa26e2dc1243db99f22d927b8c6d011980bdc9c67e = $this->env->getExtension("native_profiler");
        $__internal_a77dc3512ab2e9cab5f97cfa26e2dc1243db99f22d927b8c6d011980bdc9c67e->enter($__internal_a77dc3512ab2e9cab5f97cfa26e2dc1243db99f22d927b8c6d011980bdc9c67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_a77dc3512ab2e9cab5f97cfa26e2dc1243db99f22d927b8c6d011980bdc9c67e->leave($__internal_a77dc3512ab2e9cab5f97cfa26e2dc1243db99f22d927b8c6d011980bdc9c67e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c561508805449356f49012e05a4647303932232d4111e9ec00bdc295fce60eeb = $this->env->getExtension("native_profiler");
        $__internal_c561508805449356f49012e05a4647303932232d4111e9ec00bdc295fce60eeb->enter($__internal_c561508805449356f49012e05a4647303932232d4111e9ec00bdc295fce60eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c561508805449356f49012e05a4647303932232d4111e9ec00bdc295fce60eeb->leave($__internal_c561508805449356f49012e05a4647303932232d4111e9ec00bdc295fce60eeb_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bdf4eb370267b5e1ad948775ae0fd2cb3b7185dfb2051e11a707b4421dc9a13 = $this->env->getExtension("native_profiler");
        $__internal_5bdf4eb370267b5e1ad948775ae0fd2cb3b7185dfb2051e11a707b4421dc9a13->enter($__internal_5bdf4eb370267b5e1ad948775ae0fd2cb3b7185dfb2051e11a707b4421dc9a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5bdf4eb370267b5e1ad948775ae0fd2cb3b7185dfb2051e11a707b4421dc9a13->leave($__internal_5bdf4eb370267b5e1ad948775ae0fd2cb3b7185dfb2051e11a707b4421dc9a13_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d47dc10825c9d044c00842d72a2940be16c58c317aa46e59d009a69a6bd1fdc3 = $this->env->getExtension("native_profiler");
        $__internal_d47dc10825c9d044c00842d72a2940be16c58c317aa46e59d009a69a6bd1fdc3->enter($__internal_d47dc10825c9d044c00842d72a2940be16c58c317aa46e59d009a69a6bd1fdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d47dc10825c9d044c00842d72a2940be16c58c317aa46e59d009a69a6bd1fdc3->leave($__internal_d47dc10825c9d044c00842d72a2940be16c58c317aa46e59d009a69a6bd1fdc3_prof);

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
        return array (  125 => 14,  114 => 13,  103 => 8,  92 => 7,  81 => 6,  70 => 5,  61 => 15,  58 => 14,  56 => 13,  48 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/* 		<meta name="description" content="{% block description %}{% endblock %}" />*/
/* 		<meta name="keywords" content="{% block keywords %}{% endblock %}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* 		<link href='https://fonts.googleapis.com/css?family=Lato:400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
