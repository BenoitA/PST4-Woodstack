<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_de3196ede1b50f00670cc598c121031fb043980bbfd688248a93ecea5c31e9f4 extends Twig_Template
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
        $__internal_4d064eda475028c6a8dad6dde6e08d8c6a6ddf6e07c3111deff6c289d0e9a3c3 = $this->env->getExtension("native_profiler");
        $__internal_4d064eda475028c6a8dad6dde6e08d8c6a6ddf6e07c3111deff6c289d0e9a3c3->enter($__internal_4d064eda475028c6a8dad6dde6e08d8c6a6ddf6e07c3111deff6c289d0e9a3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4d064eda475028c6a8dad6dde6e08d8c6a6ddf6e07c3111deff6c289d0e9a3c3->leave($__internal_4d064eda475028c6a8dad6dde6e08d8c6a6ddf6e07c3111deff6c289d0e9a3c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
