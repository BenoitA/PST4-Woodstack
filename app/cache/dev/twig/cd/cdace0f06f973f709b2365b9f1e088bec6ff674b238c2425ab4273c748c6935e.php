<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c4bd373ea1c2a466acacf6d2ba3e5ce152ce7dc65b139bb6b418487ad3f61880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8161ea1fcaaaf7ae0a165006ed0709e4b6fafc10daefc1597100eee42319180f = $this->env->getExtension("native_profiler");
        $__internal_8161ea1fcaaaf7ae0a165006ed0709e4b6fafc10daefc1597100eee42319180f->enter($__internal_8161ea1fcaaaf7ae0a165006ed0709e4b6fafc10daefc1597100eee42319180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8161ea1fcaaaf7ae0a165006ed0709e4b6fafc10daefc1597100eee42319180f->leave($__internal_8161ea1fcaaaf7ae0a165006ed0709e4b6fafc10daefc1597100eee42319180f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99683c723308ec13c012f91d087b2caeb38b890839cc151ff5f3010c8c260676 = $this->env->getExtension("native_profiler");
        $__internal_99683c723308ec13c012f91d087b2caeb38b890839cc151ff5f3010c8c260676->enter($__internal_99683c723308ec13c012f91d087b2caeb38b890839cc151ff5f3010c8c260676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_99683c723308ec13c012f91d087b2caeb38b890839cc151ff5f3010c8c260676->leave($__internal_99683c723308ec13c012f91d087b2caeb38b890839cc151ff5f3010c8c260676_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55901f80d6a13da5bbbd153cc27e99b83b0c69f49f60e9ec055a2bbc980f1afb = $this->env->getExtension("native_profiler");
        $__internal_55901f80d6a13da5bbbd153cc27e99b83b0c69f49f60e9ec055a2bbc980f1afb->enter($__internal_55901f80d6a13da5bbbd153cc27e99b83b0c69f49f60e9ec055a2bbc980f1afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "\t
\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t
\t
";
        
        $__internal_55901f80d6a13da5bbbd153cc27e99b83b0c69f49f60e9ec055a2bbc980f1afb->leave($__internal_55901f80d6a13da5bbbd153cc27e99b83b0c69f49f60e9ec055a2bbc980f1afb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  58 => 10,  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* 	*/
/* 	{% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* 	*/
/* 	*/
/* {% endblock fos_user_content %}*/
/* */