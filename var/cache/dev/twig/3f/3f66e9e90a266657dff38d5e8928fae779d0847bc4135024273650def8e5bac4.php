<?php

/* admin/add_course.html.twig */
class __TwigTemplate_ef2b8f13cfce01ff3fc49373d25cfb58d99f533e64765ce549fb85caeec4610c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/add_course.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_course.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_course.html.twig"));

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
            <h2>Create Course</h2>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("add_courses")]]);
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
                <label for=\"exampleInputEmail1\">Course Code</label>
                ";
        // line 33
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "course_code", []), 'errors')) {
            // line 34
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "course_code", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 38
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "course_code", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Course Title</label>
                ";
        // line 42
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "course_title", []), 'errors')) {
            // line 43
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "course_title", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 47
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "course_title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Course Level</label>
                ";
        // line 51
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "course_level", []), 'errors')) {
            // line 52
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "course_level", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 56
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "course_level", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "submit", []), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo " 
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "update", []), 'widget', ["attr" => ["style" => "visibility:hidden"]]);
        echo "
        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
        </div>
        
        <div class=\"col-md-6\">
            <form method='POST' action=''>
                <div class=\"form-group\">
                    <label>Search Course Level</label>
                    <select name='search' class='form-control'>
                        <option value=''>All Courses</option>
                        <option value='ND I'>ND I</option>
                        <option value='ND II'>ND II</option>
                        <option value='HND I'>HND I</option>
                        <option value='HND II'>HND II</option>
                    </select>
                </div>
                <input type=\"submit\" name=\"submit\" value=\"Search Courses\" class='btn btn-primary'> 
            </form>
            ";
        // line 77
        if ((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new Twig_Error_Runtime('Variable "courses" does not exist.', 77, $this->source); })())) {
            // line 78
            echo "                <br>
                <h4>";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new Twig_Error_Runtime('Variable "search" does not exist.', 79, $this->source); })()), "html", null, true);
            echo " Courses</h4>
            
                <table class=\"table table-striped\">
                    <tr>
                            <th>#</th>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Course Level</th>
                            <th>Action</th>
                    <tr>
                        ";
            // line 89
            $context["num"] = 0;
            // line 90
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new Twig_Error_Runtime('Variable "courses" does not exist.', 90, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 91
                echo "                        <tr>
                            ";
                // line 92
                $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 92, $this->source); })()) + 1);
                // line 93
                echo "                            <td>";
                echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 93, $this->source); })()), "html", null, true);
                echo "</td>
                            <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "getCourseCode", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "getCourseTitle", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "getCourseLevel", []), "html", null, true);
                echo "</td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("edit_courses", ["edit" => twig_get_attribute($this->env, $this->source, $context["course"], "getCourseId", [])]), "html", null, true);
                echo "\">Edit</a>
                                <a class=\"btn btn-danger\" onclick='goto(\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("delete_courses", ["delete" => twig_get_attribute($this->env, $this->source, $context["course"], "getCourseId", [])]), "html", null, true);
                echo "\")' id='delete_category'  href='#'>Delete</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "
                </table>
            ";
        } else {
            // line 106
            echo "                <h1 align=\"center\">No courses yet!.</h1>
            ";
        }
        // line 108
        echo "        </div>
    </div>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/add_course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 108,  271 => 106,  266 => 103,  256 => 99,  252 => 98,  247 => 96,  243 => 95,  239 => 94,  234 => 93,  232 => 92,  229 => 91,  224 => 90,  222 => 89,  209 => 79,  206 => 78,  204 => 77,  184 => 60,  180 => 59,  176 => 58,  170 => 56,  164 => 53,  161 => 52,  159 => 51,  151 => 47,  145 => 44,  142 => 43,  140 => 42,  132 => 38,  126 => 35,  123 => 34,  121 => 33,  117 => 31,  114 => 30,  105 => 27,  102 => 26,  97 => 25,  95 => 24,  90 => 22,  87 => 21,  85 => 20,  80 => 19,  74 => 16,  71 => 15,  69 => 14,  58 => 6,  53 => 3,  44 => 2,  15 => 1,);
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
            <h2>Create Course</h2>
            {% if create_msg %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        {{ create_msg }}
                    </div>
            {% endif%}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'action' : url(\"add_courses\")}}) }}
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
                <label for=\"exampleInputEmail1\">Course Code</label>
                {% if form_errors(form.course_code) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.course_code) }}
                    </div>
                {% endif %}
                {{ form_widget(form.course_code, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Course Title</label>
                {% if form_errors(form.course_title) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.course_title) }}
                    </div>
                {% endif %}
                {{ form_widget(form.course_title, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Course Level</label>
                {% if form_errors(form.course_level) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.course_level) }}
                    </div>
                {% endif %}
                {{ form_widget(form.course_level, {'attr': {'class': 'form-control'}}) }}  
            </div>
            {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }} 
            {{ form_widget(form.update, {'attr': {'style' : 'visibility:hidden'}}) }}
        {{ form_end(form) }}
        </div>
        
        <div class=\"col-md-6\">
            <form method='POST' action=''>
                <div class=\"form-group\">
                    <label>Search Course Level</label>
                    <select name='search' class='form-control'>
                        <option value=''>All Courses</option>
                        <option value='ND I'>ND I</option>
                        <option value='ND II'>ND II</option>
                        <option value='HND I'>HND I</option>
                        <option value='HND II'>HND II</option>
                    </select>
                </div>
                <input type=\"submit\" name=\"submit\" value=\"Search Courses\" class='btn btn-primary'> 
            </form>
            {% if courses %}
                <br>
                <h4>{{search}} Courses</h4>
            
                <table class=\"table table-striped\">
                    <tr>
                            <th>#</th>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Course Level</th>
                            <th>Action</th>
                    <tr>
                        {% set num = 0 %}
                        {% for course in courses %}
                        <tr>
                            {% set num=num+1  %}
                            <td>{{ num }}</td>
                            <td>{{course.getCourseCode}}</td>
                            <td>{{course.getCourseTitle}}</td>
                            <td>{{course.getCourseLevel}}</td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"{{url(\"edit_courses\", {'edit': course.getCourseId })}}\">Edit</a>
                                <a class=\"btn btn-danger\" onclick='goto(\"{{url(\"delete_courses\", {'delete': course.getCourseId })}}\")' id='delete_category'  href='#'>Delete</a>
                            </td>
                        </tr>
                    {% endfor %}

                </table>
            {%else%}
                <h1 align=\"center\">No courses yet!.</h1>
            {% endif %}
        </div>
    </div>   
{% endblock %}
", "admin/add_course.html.twig", "/Project/Student Project/PHP/online-blog/app/Resources/views/admin/add_course.html.twig");
    }
}
