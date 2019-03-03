<?php

/* admin.html.twig */
class __TwigTemplate_345c5ae2ae4bf6f38888dbc336a7c395b4b1bf27270f3a1a6f7fc6b273735c7b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Computer Science : Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/metisMenu/dist/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/timeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 29
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

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin");
        echo "\">Computer Science Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                       <i class=\"fa fa-user fa-fw\"></i> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 60, $this->source); })()), "getFirstname", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 60, $this->source); })()), "getSurname", []), "html", null, true);
        echo "
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_change_password");
        echo "\"><i class=\"fa fa-stack-exchange fa-fw\"></i> Change Password</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
        echo "\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li class=\"active\">
                        <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("add_sessions");
        echo "\"><i class=\"fa fa-fw fa-trello\"></i> Session</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("add_students");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Student</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("add_lecturers");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Lecturer</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("add_courses");
        echo "\"><i class=\"fa fa-fw fa-archive\"></i> Course</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id=\"page-wrapper\">
            ";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/metisMenu/dist/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/morris-data.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function goto(param){
            result=confirm('Delete course?. Note that deleting a course will cause all assciated documents to be deleted.');
            if(result){
                window.location.href=param;
            }
        }
        function goto1(param){
            result=confirm('Delete order?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto2(param){
            result=confirm('Delete document?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto3(param){
            result=confirm('Delete student?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto4(param){
            result=confirm('Delete comment?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto6(param){
            result=confirm('Delete news?.');
            if(result){
                window.location.href=param;
            }
        }
        function printDiv(divName){
            var printContents= document.getElementById(divName).innerHTML;
            var originalContents=document.body.innerHTML;
            document.body.innerHTML=printContents;
            window.print();
            document.body.innerHTML=originalContents;
        }
        
        \$.datetimepicker.setLocale('en');
        \$('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: \$(\"#datetimepicker_format_value\").val()});
        console.log(\$('#datetimepicker_format').datetimepicker('getValue'));

        \$(\"#datetimepicker_format_change\").on(\"click\", function(e){
                \$(\"#datetimepicker_format\").data('xdsoft_datetimepicker').setOptions({format: \$(\"#datetimepicker_format_value\").val()});
        });
        \$(\"#datetimepicker_format_locale\").on(\"change\", function(e){
                \$.datetimepicker.setLocale(\$(e.currentTarget).val());
        });
        
        \$('.datetimepicker').datetimepicker({
            yearOffset:0,
            lang:'en',
            timepicker:false,
            format:'Y/m/d',
            formatDate:'Y/m/d',
            minDate:'-2007/08/12', // yesterday is minimum date
            maxDate:'+2017/01/02' // and tommorow is maximum date calendar
        });
    </script>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 101
        echo "                
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 101,  303 => 100,  222 => 125,  216 => 122,  212 => 121,  208 => 120,  202 => 117,  196 => 114,  190 => 111,  180 => 103,  178 => 100,  165 => 90,  159 => 87,  153 => 84,  147 => 81,  141 => 78,  126 => 66,  120 => 63,  112 => 60,  102 => 53,  75 => 29,  69 => 26,  63 => 23,  57 => 20,  52 => 18,  46 => 15,  30 => 1,);
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

    <title>Computer Science : Admin</title>

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

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{url(\"admin\")}}\">Computer Science Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                       <i class=\"fa fa-user fa-fw\"></i> {{user.getFirstname}} {{user.getSurname}}
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"{{ url(\"admin_change_password\") }}\"><i class=\"fa fa-stack-exchange fa-fw\"></i> Change Password</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"{{url('logout')}}\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li class=\"active\">
                        <a href=\"{{ url(\"admin\") }}\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=\"{{ url(\"add_sessions\") }}\"><i class=\"fa fa-fw fa-trello\"></i> Session</a>
                        </li>
                        <li>
                            <a href=\"{{ url(\"add_students\") }}\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Student</a>
                        </li>
                        <li>
                            <a href=\"{{ url(\"add_lecturers\") }}\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Lecturer</a>
                        </li>
                        <li>
                            <a href=\"{{ url(\"add_courses\") }}\"><i class=\"fa fa-fw fa-archive\"></i> Course</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id=\"page-wrapper\">
            {% block body %}
                
            {% endblock body %}
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
    <script type=\"text/javascript\">
        function goto(param){
            result=confirm('Delete course?. Note that deleting a course will cause all assciated documents to be deleted.');
            if(result){
                window.location.href=param;
            }
        }
        function goto1(param){
            result=confirm('Delete order?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto2(param){
            result=confirm('Delete document?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto3(param){
            result=confirm('Delete student?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto4(param){
            result=confirm('Delete comment?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto6(param){
            result=confirm('Delete news?.');
            if(result){
                window.location.href=param;
            }
        }
        function printDiv(divName){
            var printContents= document.getElementById(divName).innerHTML;
            var originalContents=document.body.innerHTML;
            document.body.innerHTML=printContents;
            window.print();
            document.body.innerHTML=originalContents;
        }
        
        \$.datetimepicker.setLocale('en');
        \$('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: \$(\"#datetimepicker_format_value\").val()});
        console.log(\$('#datetimepicker_format').datetimepicker('getValue'));

        \$(\"#datetimepicker_format_change\").on(\"click\", function(e){
                \$(\"#datetimepicker_format\").data('xdsoft_datetimepicker').setOptions({format: \$(\"#datetimepicker_format_value\").val()});
        });
        \$(\"#datetimepicker_format_locale\").on(\"change\", function(e){
                \$.datetimepicker.setLocale(\$(e.currentTarget).val());
        });
        
        \$('.datetimepicker').datetimepicker({
            yearOffset:0,
            lang:'en',
            timepicker:false,
            format:'Y/m/d',
            formatDate:'Y/m/d',
            minDate:'-2007/08/12', // yesterday is minimum date
            maxDate:'+2017/01/02' // and tommorow is maximum date calendar
        });
    </script>
</body>

</html>
", "admin.html.twig", "/Project/Student Project/PHP/online-blog/app/Resources/views/admin.html.twig");
    }
}
