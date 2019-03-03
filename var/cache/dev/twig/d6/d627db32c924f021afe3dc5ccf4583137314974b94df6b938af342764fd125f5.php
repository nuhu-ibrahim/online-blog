<?php

/* admin/change_password.html.twig */
class __TwigTemplate_6cfaf4d8d6f68f99b8c09dd820396e348f09f55b301a963e54aad1e565048b8d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/change_password.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/change_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["page_header"]) || array_key_exists("page_header", $context) ? $context["page_header"] : (function () { throw new Twig_Error_Runtime('Variable "page_header" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\"> 
        <div class=\"col-md-6\"> 
            ";
        // line 13
        if (((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new Twig_Error_Runtime('Variable "success" does not exist.', 13, $this->source); })()) == "yes")) {
            // line 14
            echo "                <div class=\"alert alert-info\" role=\"alert\">
                    Password changed successfully.
                </div>
            ";
        }
        // line 18
        echo "            <h2>Change Password</h2>
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            ";
        // line 20
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), 'errors')) {
            // line 21
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), 'errors');
            echo "
                </div>
            ";
        } elseif (        // line 24
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
                // line 27
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            ";
        }
        // line 31
        echo "            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Old Password</label>
                ";
        // line 33
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "password", []), 'errors')) {
            // line 34
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "password", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 38
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "password", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>       
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">New Password</label>
                ";
        // line 42
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "newPassword", []), 'errors')) {
            // line 43
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "newPassword", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 47
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "newPassword", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>       
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Confirm Password</label>
                ";
        // line 51
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "cPassword", []), 'errors')) {
            // line 52
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "password", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 56
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "cPassword", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>       
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "submit", []), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo " 
        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  174 => 58,  168 => 56,  162 => 53,  159 => 52,  157 => 51,  149 => 47,  143 => 44,  140 => 43,  138 => 42,  130 => 38,  124 => 35,  121 => 34,  119 => 33,  115 => 31,  112 => 30,  103 => 27,  100 => 26,  95 => 25,  93 => 24,  88 => 22,  85 => 21,  83 => 20,  79 => 19,  76 => 18,  70 => 14,  68 => 13,  58 => 6,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                {{ page_header }}
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\"> 
        <div class=\"col-md-6\"> 
            {% if success == 'yes' %}
                <div class=\"alert alert-info\" role=\"alert\">
                    Password changed successfully.
                </div>
            {% endif %}
            <h2>Change Password</h2>
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            {% if form_errors(form) %}
                <div class=\"alert alert-danger\" role=\"alert\">
                    {{ form_errors(form) }}
                </div>
            {% elseif errors%}
                {%  for error in errors %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ error }}
                    </div>
                {% endfor %}
            {% endif %}
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Old Password</label>
                {% if form_errors(form.password) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.password) }}
                    </div>
                {% endif %}
                {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }}  
            </div>       
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">New Password</label>
                {% if form_errors(form.newPassword) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.newPassword) }}
                    </div>
                {% endif %}
                {{ form_widget(form.newPassword, {'attr': {'class': 'form-control'}}) }}  
            </div>       
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Confirm Password</label>
                {% if form_errors(form.cPassword) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.password) }}
                    </div>
                {% endif %}
                {{ form_widget(form.cPassword, {'attr': {'class': 'form-control'}}) }}  
            </div>       
            {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }} 
        {{ form_end(form) }}
        </div>
    </div>   
{% endblock %}
", "admin/change_password.html.twig", "/Project/Student Project/PHP/online-blog/app/Resources/views/admin/change_password.html.twig");
    }
}
