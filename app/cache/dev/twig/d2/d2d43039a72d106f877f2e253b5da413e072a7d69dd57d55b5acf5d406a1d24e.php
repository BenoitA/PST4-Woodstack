<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9d14b5ad2aec52bc23c5a885f73cb6c2f80af39904b427183091a42fa6ecc61c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_674f227b65b2904862264223bb6811ef2f9b0bc4316417f2e3296549e85806ad = $this->env->getExtension("native_profiler");
        $__internal_674f227b65b2904862264223bb6811ef2f9b0bc4316417f2e3296549e85806ad->enter($__internal_674f227b65b2904862264223bb6811ef2f9b0bc4316417f2e3296549e85806ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_674f227b65b2904862264223bb6811ef2f9b0bc4316417f2e3296549e85806ad->leave($__internal_674f227b65b2904862264223bb6811ef2f9b0bc4316417f2e3296549e85806ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d8e140a26d18d4757038156ffb0d546bf709bf6a40c7840e112d6a51da85837 = $this->env->getExtension("native_profiler");
        $__internal_6d8e140a26d18d4757038156ffb0d546bf709bf6a40c7840e112d6a51da85837->enter($__internal_6d8e140a26d18d4757038156ffb0d546bf709bf6a40c7840e112d6a51da85837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6d8e140a26d18d4757038156ffb0d546bf709bf6a40c7840e112d6a51da85837->leave($__internal_6d8e140a26d18d4757038156ffb0d546bf709bf6a40c7840e112d6a51da85837_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */