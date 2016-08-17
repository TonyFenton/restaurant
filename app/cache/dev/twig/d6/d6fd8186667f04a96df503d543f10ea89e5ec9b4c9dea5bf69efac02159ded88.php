<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_8b46e5ab357fb4454d5ba4a7437e8e09cf9113a1d0d9f2a2514065920c24f143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f17fdc5d5932bb27e207e4924f65cd3e0e654730c83299522071fc95346cfac3 = $this->env->getExtension("native_profiler");
        $__internal_f17fdc5d5932bb27e207e4924f65cd3e0e654730c83299522071fc95346cfac3->enter($__internal_f17fdc5d5932bb27e207e4924f65cd3e0e654730c83299522071fc95346cfac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 3
        if (array_key_exists("invalid_username", $context)) {
            // line 4
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
    </div>
    <div>
        <input class=\"btn btn-success login_button\" type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_f17fdc5d5932bb27e207e4924f65cd3e0e654730c83299522071fc95346cfac3->leave($__internal_f17fdc5d5932bb27e207e4924f65cd3e0e654730c83299522071fc95346cfac3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  36 => 6,  30 => 4,  28 => 3,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*     <div>*/
/*         {% if invalid_username is defined %}*/
/*             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>*/
/*         {% endif %}*/
/*         <input type="text" id="username" name="username" required="required" class="form-control" placeholder="{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}"/>*/
/*     </div>*/
/*     <div>*/
/*         <input class="btn btn-success login_button" type="submit" value="{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
