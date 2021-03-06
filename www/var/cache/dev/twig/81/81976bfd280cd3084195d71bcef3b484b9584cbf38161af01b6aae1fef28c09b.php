<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ee925419d7a2eea112207658b7c4fc64eff26ecc07de81dc3dcfd8dbbb60141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcb1155fdd1dd073f2b8642f1d12284fe2870eee24f8c02548fee21c5a12f583 = $this->env->getExtension("native_profiler");
        $__internal_fcb1155fdd1dd073f2b8642f1d12284fe2870eee24f8c02548fee21c5a12f583->enter($__internal_fcb1155fdd1dd073f2b8642f1d12284fe2870eee24f8c02548fee21c5a12f583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb1155fdd1dd073f2b8642f1d12284fe2870eee24f8c02548fee21c5a12f583->leave($__internal_fcb1155fdd1dd073f2b8642f1d12284fe2870eee24f8c02548fee21c5a12f583_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3da438f9ea3b821b84644e793f11c0f9d1415e928f4980ae343b194781c88bac = $this->env->getExtension("native_profiler");
        $__internal_3da438f9ea3b821b84644e793f11c0f9d1415e928f4980ae343b194781c88bac->enter($__internal_3da438f9ea3b821b84644e793f11c0f9d1415e928f4980ae343b194781c88bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3da438f9ea3b821b84644e793f11c0f9d1415e928f4980ae343b194781c88bac->leave($__internal_3da438f9ea3b821b84644e793f11c0f9d1415e928f4980ae343b194781c88bac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bd59d837a0818a4e4df3dda93f9aee7be9ee0a449813098bd9b104b5da82f11 = $this->env->getExtension("native_profiler");
        $__internal_6bd59d837a0818a4e4df3dda93f9aee7be9ee0a449813098bd9b104b5da82f11->enter($__internal_6bd59d837a0818a4e4df3dda93f9aee7be9ee0a449813098bd9b104b5da82f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6bd59d837a0818a4e4df3dda93f9aee7be9ee0a449813098bd9b104b5da82f11->leave($__internal_6bd59d837a0818a4e4df3dda93f9aee7be9ee0a449813098bd9b104b5da82f11_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_944cbb683c5afe0279ff41e228e350f7772e31ee06690e8f196d674c4dccd6fe = $this->env->getExtension("native_profiler");
        $__internal_944cbb683c5afe0279ff41e228e350f7772e31ee06690e8f196d674c4dccd6fe->enter($__internal_944cbb683c5afe0279ff41e228e350f7772e31ee06690e8f196d674c4dccd6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_944cbb683c5afe0279ff41e228e350f7772e31ee06690e8f196d674c4dccd6fe->leave($__internal_944cbb683c5afe0279ff41e228e350f7772e31ee06690e8f196d674c4dccd6fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
