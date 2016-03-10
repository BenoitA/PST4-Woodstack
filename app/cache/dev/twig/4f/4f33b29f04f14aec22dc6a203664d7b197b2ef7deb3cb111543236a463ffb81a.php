<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_230ae6906fbe843856fc21561a1269777d7f727303a72184c7f95bd03644c115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e51eb50d8f8a1dad70c2ec8a6a869c6f3314f9ff55afd809d92cea7690c7125a = $this->env->getExtension("native_profiler");
        $__internal_e51eb50d8f8a1dad70c2ec8a6a869c6f3314f9ff55afd809d92cea7690c7125a->enter($__internal_e51eb50d8f8a1dad70c2ec8a6a869c6f3314f9ff55afd809d92cea7690c7125a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e51eb50d8f8a1dad70c2ec8a6a869c6f3314f9ff55afd809d92cea7690c7125a->leave($__internal_e51eb50d8f8a1dad70c2ec8a6a869c6f3314f9ff55afd809d92cea7690c7125a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e9824e9f5f4e1cfa3ca738d32f48e1421c99f0b7c6cfa709edb2dccd5f8e5ba = $this->env->getExtension("native_profiler");
        $__internal_4e9824e9f5f4e1cfa3ca738d32f48e1421c99f0b7c6cfa709edb2dccd5f8e5ba->enter($__internal_4e9824e9f5f4e1cfa3ca738d32f48e1421c99f0b7c6cfa709edb2dccd5f8e5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4e9824e9f5f4e1cfa3ca738d32f48e1421c99f0b7c6cfa709edb2dccd5f8e5ba->leave($__internal_4e9824e9f5f4e1cfa3ca738d32f48e1421c99f0b7c6cfa709edb2dccd5f8e5ba_prof);

    }

    // line 8
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_47c04d602fa43082c720444362bfb035a8d0cee6933125eb2032642ff40b1f3d = $this->env->getExtension("native_profiler");
        $__internal_47c04d602fa43082c720444362bfb035a8d0cee6933125eb2032642ff40b1f3d->enter($__internal_47c04d602fa43082c720444362bfb035a8d0cee6933125eb2032642ff40b1f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 9
        echo "
\t<h2>Modifier une annonce</h2>
\t
\t";
        // line 12
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "
\t
\t<p>Vous éditez une annonce déjà existante, merci de ne pas 
\tchanger l'annonce.
\t</p>
\t
\t<p>
\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>
\t
\t";
        
        $__internal_47c04d602fa43082c720444362bfb035a8d0cee6933125eb2032642ff40b1f3d->leave($__internal_47c04d602fa43082c720444362bfb035a8d0cee6933125eb2032642ff40b1f3d_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  62 => 12,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/* 	<h2>Modifier une annonce</h2>*/
/* 	*/
/* 	{{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* 	*/
/* 	<p>Vous éditez une annonce déjà existante, merci de ne pas */
/* 	changer l'annonce.*/
/* 	</p>*/
/* 	*/
/* 	<p>*/
/* 		<a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour à l'annonce*/
/* 		</a>*/
/* 	</p>*/
/* 	*/
/* 	{% endblock %}*/
/* 	*/
