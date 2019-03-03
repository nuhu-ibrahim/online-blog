<?php

/* admin/add_session.html.twig */
class __TwigTemplate_555b6560be19585eaf0d4387fb94300606d1780825c05b6f86e301294b4f916e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/add_session.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_session.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_session.html.twig"));

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
        <div class=\"col-md-7\"> 
            <h2>Create Session</h2>
            ";
        // line 14
        if ((isset($context["create_msg"]) || array_key_exists("create_msg", $context) ? $context["create_msg"] : (function () { throw new Twig_Error_Runtime('Variable "create_msg" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["create_msg"]) || array_key_exists("create_msg", $context) ? $context["create_msg"] : (function () { throw new Twig_Error_Runtime('Variable "create_msg" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "
                    </div>
            ";
        }
        // line 19
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("add_sessions")]]);
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
                <label for=\"exampleInputEmail1\">Session Title</label>
                ";
        // line 33
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "session_title", []), 'errors')) {
            // line 34
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "session_title", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 38
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "session_title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "submit", []), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo " 
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "update", []), 'widget', ["attr" => ["style" => "visibility:hidden"]]);
        echo "
        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
        </div>
        
        <div class=\"col-md-5\">
            ";
        // line 46
        if ((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "                <table class=\"table table-striped\">
                    <tr>
                            <th>#</th>
                            <th>Session Title</th>
                            <th>Action</th>
                    <tr>
                        ";
            // line 53
            $context["num"] = 0;
            // line 54
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new Twig_Error_Runtime('Variable "sessions" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 55
                echo "                        <tr>
                            ";
                // line 56
                $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 56, $this->source); })()) + 1);
                // line 57
                echo "                            <td>";
                echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "getSessionTitle", []), "html", null, true);
                echo "</td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("edit_sessions", ["edit" => twig_get_attribute($this->env, $this->source, $context["session"], "getSessionId", [])]), "html", null, true);
                echo "\">Edit</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
                </table>
            ";
        } else {
            // line 67
            echo "                <h1 align=\"center\">No sessions yet!.</h1>
            ";
        }
        // line 69
        echo "        </div>
    </div>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/add_session.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 69,  200 => 67,  195 => 64,  185 => 60,  180 => 58,  175 => 57,  173 => 56,  170 => 55,  165 => 54,  163 => 53,  155 => 47,  153 => 46,  146 => 42,  142 => 41,  138 => 40,  132 => 38,  126 => 35,  123 => 34,  121 => 33,  117 => 31,  114 => 30,  105 => 27,  102 => 26,  97 => 25,  95 => 24,  90 => 22,  87 => 21,  85 => 20,  80 => 19,  74 => 16,  71 => 15,  69 => 14,  58 => 6,  53 => 3,  44 => 2,  15 => 1,);
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
        <div class=\"col-md-7\"> 
            <h2>Create Session</h2>
            {% if create_msg %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        {{ create_msg }}
                    </div>
            {% endif%}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'action' : url(\"add_sessions\")}}) }}
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
                <label for=\"exampleInputEmail1\">Session Title</label>
                {% if form_errors(form.session_title) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.session_title) }}
                    </div>
                {% endif %}
                {{ form_widget(form.session_title, {'attr': {'class': 'form-control'}}) }}  
            </div>
            {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }} 
            {{ form_widget(form.update, {'attr': {'style' : 'visibility:hidden'}}) }}
        {{ form_end(form) }}
        </div>
        
        <div class=\"col-md-5\">
            {% if sessions %}
                <table class=\"table table-striped\">
                    <tr>
                            <th>#</th>
                            <th>Session Title</th>
                            <th>Action</th>
                    <tr>
                        {% set num = 0 %}
                        {% for session in sessions %}
                        <tr>
                            {% set num=num+1  %}
                            <td>{{ num }}</td>
                            <td>{{session.getSessionTitle}}</td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"{{url(\"edit_sessions\", {'edit': session.getSessionId })}}\">Edit</a>
                            </td>
                        </tr>
                    {% endfor %}

                </table>
            {%else%}
                <h1 align=\"center\">No sessions yet!.</h1>
            {% endif %}
        </div>
    </div>   
{% endblock %}
", "admin/add_session.html.twig", "/Project/Student Project/PHP/online-blog/app/Resources/views/admin/add_session.html.twig");
    }
}
