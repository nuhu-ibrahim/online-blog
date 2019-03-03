<?php

/* admin/add_lecturer.html.twig */
class __TwigTemplate_d316f770e1e28e266d57ecc2b3a255c967aeee681703aff076a273c60896a3bb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/add_lecturer.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_lecturer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_lecturer.html.twig"));

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
        <div class=\"col-md-5\"> 
            <h2>Add Lecturer</h2>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("add_lecturers")]]);
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
                <label for=\"exampleInputEmail1\">Staff ID</label>
                ";
        // line 33
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "staff_id", []), 'errors')) {
            // line 34
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "staff_id", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 38
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "staff_id", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Surname</label>
                ";
        // line 42
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "surname", []), 'errors')) {
            // line 43
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "surname", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 47
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "surname", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Othername</label>
                ";
        // line 51
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "othername", []), 'errors')) {
            // line 52
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "othername", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 56
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "othername", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Firstname</label>
                ";
        // line 60
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "firstname", []), 'errors')) {
            // line 61
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "firstname", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 65
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "firstname", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Mobile Number</label>
                ";
        // line 69
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "mobile", []), 'errors')) {
            // line 70
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 71
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "mobile", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 74
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "mobile", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Email</label>
                ";
        // line 78
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "email", []), 'errors')) {
            // line 79
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 80
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "email", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 83
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Gender</label>
                ";
        // line 87
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "sex", []), 'errors')) {
            // line 88
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 89
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), "sex", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 92
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->source); })()), "sex", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Marital Status</label>
                ";
        // line 96
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->source); })()), "mstatus", []), 'errors')) {
            // line 97
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->source); })()), "mstatus", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 101
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), "mstatus", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Residential Address</label>
                ";
        // line 105
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->source); })()), "address", []), 'errors')) {
            // line 106
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 107
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->source); })()), "address", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 110
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->source); })()), "address", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Passport</label>
                ";
        // line 114
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->source); })()), "passport", []), 'errors')) {
            // line 115
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 116
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->source); })()), "passport", []), 'errors');
            echo "
                    </div>
                ";
        }
        // line 119
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->source); })()), "passport", []), 'widget');
        echo "  
            </div>
            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->source); })()), "submit", []), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo " 
            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->source); })()), "update", []), 'widget', ["attr" => ["style" => "visibility:hidden"]]);
        echo "
        ";
        // line 123
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->source); })()), 'form_end');
        echo "
        </div>
        
        <div class=\"col-md-7 table-responsive\">
            ";
        // line 127
        if ((isset($context["lecturers"]) || array_key_exists("lecturers", $context) ? $context["lecturers"] : (function () { throw new Twig_Error_Runtime('Variable "lecturers" does not exist.', 127, $this->source); })())) {
            // line 128
            echo "                <br>
                <h4>All Lecturers</h4>
            
                <table class=\"table table-striped\">
                    <tr>
                            <th>#</th>
                            <th>Staff ID</th>
                            <th>Passport</th>
                            <th>Full name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Action</th>
                    <tr>
                        ";
            // line 142
            $context["num"] = 0;
            // line 143
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lecturers"]) || array_key_exists("lecturers", $context) ? $context["lecturers"] : (function () { throw new Twig_Error_Runtime('Variable "lecturers" does not exist.', 143, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lecturer"]) {
                // line 144
                echo "                        <tr>
                            ";
                // line 145
                $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 145, $this->source); })()) + 1);
                // line 146
                echo "                            <td>";
                echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 146, $this->source); })()), "html", null, true);
                echo "</td>
                            <td>";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lecturer"], "getStaffID", []), "html", null, true);
                echo "</td>
                            <td><img src='";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_join_filter([0 => "passports/", 1 => twig_get_attribute($this->env, $this->source, $context["lecturer"], "getPassport", [])])), "html", null, true);
                echo "' height='90' width='90'></td>
                            <td>";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lecturer"], "getFirstname", []), "html", null, true);
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["lecturer"], "Othername", [])) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lecturer"], "getOthername", []), "html", null, true);
                    echo ",";
                }
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lecturer"], "getSurname", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lecturer"], "getMobile", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lecturer"], "getEmail", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lecturer"], "getSex", []), "html", null, true);
                echo "</td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("edit_lecturers", ["edit" => twig_get_attribute($this->env, $this->source, $context["lecturer"], "getStaffId", [])]), "html", null, true);
                echo "\">Edit</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lecturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "
                </table>
            ";
        } else {
            // line 161
            echo "                <h1 align=\"center\">No lecturers yet!.</h1>
            ";
        }
        // line 163
        echo "        </div>
    </div>   
    <br/>
    <br/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/add_lecturer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 163,  406 => 161,  401 => 158,  391 => 154,  386 => 152,  382 => 151,  378 => 150,  367 => 149,  363 => 148,  359 => 147,  354 => 146,  352 => 145,  349 => 144,  344 => 143,  342 => 142,  326 => 128,  324 => 127,  317 => 123,  313 => 122,  309 => 121,  303 => 119,  297 => 116,  294 => 115,  292 => 114,  284 => 110,  278 => 107,  275 => 106,  273 => 105,  265 => 101,  259 => 98,  256 => 97,  254 => 96,  246 => 92,  240 => 89,  237 => 88,  235 => 87,  227 => 83,  221 => 80,  218 => 79,  216 => 78,  208 => 74,  202 => 71,  199 => 70,  197 => 69,  189 => 65,  183 => 62,  180 => 61,  178 => 60,  170 => 56,  164 => 53,  161 => 52,  159 => 51,  151 => 47,  145 => 44,  142 => 43,  140 => 42,  132 => 38,  126 => 35,  123 => 34,  121 => 33,  117 => 31,  114 => 30,  105 => 27,  102 => 26,  97 => 25,  95 => 24,  90 => 22,  87 => 21,  85 => 20,  80 => 19,  74 => 16,  71 => 15,  69 => 14,  58 => 6,  53 => 3,  44 => 2,  15 => 1,);
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
        <div class=\"col-md-5\"> 
            <h2>Add Lecturer</h2>
            {% if create_msg %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        {{ create_msg }}
                    </div>
            {% endif%}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'action' : url(\"add_lecturers\")}}) }}
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
                <label for=\"exampleInputEmail1\">Staff ID</label>
                {% if form_errors(form.staff_id) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.staff_id) }}
                    </div>
                {% endif %}
                {{ form_widget(form.staff_id, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Surname</label>
                {% if form_errors(form.surname) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.surname) }}
                    </div>
                {% endif %}
                {{ form_widget(form.surname, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Othername</label>
                {% if form_errors(form.othername) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.othername) }}
                    </div>
                {% endif %}
                {{ form_widget(form.othername, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Firstname</label>
                {% if form_errors(form.firstname) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.firstname) }}
                    </div>
                {% endif %}
                {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Mobile Number</label>
                {% if form_errors(form.mobile) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.mobile) }}
                    </div>
                {% endif %}
                {{ form_widget(form.mobile, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Email</label>
                {% if form_errors(form.email) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.email) }}
                    </div>
                {% endif %}
                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Gender</label>
                {% if form_errors(form.sex) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.sex) }}
                    </div>
                {% endif %}
                {{ form_widget(form.sex, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Marital Status</label>
                {% if form_errors(form.mstatus) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.mstatus) }}
                    </div>
                {% endif %}
                {{ form_widget(form.mstatus, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Residential Address</label>
                {% if form_errors(form.address) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.address) }}
                    </div>
                {% endif %}
                {{ form_widget(form.address, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Passport</label>
                {% if form_errors(form.passport) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.passport) }}
                    </div>
                {% endif %}
                {{ form_widget(form.passport) }}  
            </div>
            {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }} 
            {{ form_widget(form.update, {'attr': {'style' : 'visibility:hidden'}}) }}
        {{ form_end(form) }}
        </div>
        
        <div class=\"col-md-7 table-responsive\">
            {% if lecturers %}
                <br>
                <h4>All Lecturers</h4>
            
                <table class=\"table table-striped\">
                    <tr>
                            <th>#</th>
                            <th>Staff ID</th>
                            <th>Passport</th>
                            <th>Full name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Action</th>
                    <tr>
                        {% set num = 0 %}
                        {% for lecturer in lecturers %}
                        <tr>
                            {% set num=num+1  %}
                            <td>{{ num }}</td>
                            <td>{{lecturer.getStaffID}}</td>
                            <td><img src='{{asset([\"passports/\",lecturer.getPassport]|join)}}' height='90' width='90'></td>
                            <td>{{lecturer.getFirstname}} {% if lecturer.Othername %}{{lecturer.getOthername}},{% endif %} {{lecturer.getSurname}}</td>
                            <td>{{lecturer.getMobile}}</td>
                            <td>{{lecturer.getEmail}}</td>
                            <td>{{lecturer.getSex}}</td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"{{url(\"edit_lecturers\", {'edit': lecturer.getStaffId })}}\">Edit</a>
                            </td>
                        </tr>
                    {% endfor %}

                </table>
            {%else%}
                <h1 align=\"center\">No lecturers yet!.</h1>
            {% endif %}
        </div>
    </div>   
    <br/>
    <br/>
{% endblock %}
", "admin/add_lecturer.html.twig", "/Project/Student Project/PHP/online-blog/app/Resources/views/admin/add_lecturer.html.twig");
    }
}
