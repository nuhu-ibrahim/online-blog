<?php

/* login/login.html.twig */
class __TwigTemplate_3d2378af73bd7a395a21ea5d4a9e90ae393c0271b265e39faa9b629ee3a06693 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Computer Science: Login</title>

    <!-- Bootstrap Core CSS -->
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/metisMenu/dist/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/timeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">
            <!-- Blog Sidebar Widgets Column -->
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Please Sign In</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form name=\"login_form\" method=\"POST\" action=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
        echo "\">
                            ";
        // line 53
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 53, $this->source); })())) {
            // line 54
            echo "                                <div class=\"alert alert-danger\" role=\"alert\">
                                    ";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 55, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 55, $this->source); })()), "messageData", []), "security"), "html", null, true);
            echo "
                                </div>
                            ";
        }
        // line 58
        echo "                            <fieldset>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Email\" name=\"_username\" type=\"email\" autofocus>
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Password\" name=\"_password\" type=\"password\" value=\"\">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type='submit' class=\"btn btn-lg btn-success btn-block\" value='Login'>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
           
            </div>
        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p style=\"text-align:center\">Copyright &copy; www.computersci.com 2017</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

     <!-- jQuery -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/metisMenu/dist/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/morris-data.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 105,  179 => 102,  175 => 101,  171 => 100,  165 => 97,  159 => 94,  153 => 91,  119 => 60,  115 => 58,  109 => 55,  106 => 54,  104 => 53,  100 => 52,  75 => 30,  69 => 27,  63 => 24,  57 => 21,  52 => 19,  46 => 16,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Computer Science: Login</title>

    <!-- Bootstrap Core CSS -->
    <!-- Bootstrap Core CSS -->
    <link href=\"{{asset(\"bower_components/bootstrap/dist/css/bootstrap.min.css\")}}\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"{{asset(\"bower_components/metisMenu/dist/metisMenu.min.css\")}}\" rel=\"stylesheet\">

    <link href=\"{{asset(\"dist/css/timeline.css\")}}\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"{{asset(\"dist/css/sb-admin-2.css\")}}\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"{{asset(\"bower_components/morrisjs/morris.css\")}}\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"{{asset(\"bower_components/font-awesome/css/font-awesome.min.css\")}}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">
            <!-- Blog Sidebar Widgets Column -->
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Please Sign In</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form name=\"login_form\" method=\"POST\" action=\"{{ url(\"login\") }}\">
                            {% if errors %}
                                <div class=\"alert alert-danger\" role=\"alert\">
                                    {{ errors.messageKey|trans(errors.messageData, 'security') }}
                                </div>
                            {% endif %}
                            <fieldset>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" value=\"{{ last_username }}\" placeholder=\"Email\" name=\"_username\" type=\"email\" autofocus>
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Password\" name=\"_password\" type=\"password\" value=\"\">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type='submit' class=\"btn btn-lg btn-success btn-block\" value='Login'>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
           
            </div>
        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p style=\"text-align:center\">Copyright &copy; www.computersci.com 2017</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

     <!-- jQuery -->
    <script src=\"{{asset(\"bower_components/jquery/dist/jquery.min.js\")}}\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"{{asset(\"bower_components/bootstrap/dist/js/bootstrap.min.js\")}}\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"{{asset(\"bower_components/metisMenu/dist/metisMenu.min.js\")}}\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"{{asset(\"bower_components/raphael/raphael-min.js\")}}\"></script>
    <script src=\"{{asset(\"bower_components/morrisjs/morris.min.js\")}}\"></script>
    <script src=\"{{asset(\"js/morris-data.js\")}}\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"{{asset(\"dist/js/sb-admin-2.js\")}}\"></script>

</body>

</html>
", "login/login.html.twig", "/Project/Student Project/PHP/online-blog/app/Resources/views/login/login.html.twig");
    }
}
