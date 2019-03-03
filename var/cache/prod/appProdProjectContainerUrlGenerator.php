<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'add_documents' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddAttachmentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add_document',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_courses' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddCourseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/courses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_lecturers' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddLecturerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/lecturer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddNewsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_sessions' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddSessionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/session',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_students' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddStudentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/student',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdminPasswordController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/change_password_admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'class_blog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ClassBlogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/class_blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_attachment' => array (  0 =>   array (    0 => 'delete',  ),  1 =>   array (    'delete' => 0,    '_controller' => 'AppBundle\\Controller\\DeleteAttachmentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'delete',    ),    1 =>     array (      0 => 'text',      1 => '/admin/delete_attachment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_courses' => array (  0 =>   array (    0 => 'delete',  ),  1 =>   array (    'delete' => 0,    '_controller' => 'AppBundle\\Controller\\DeleteCourseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'delete',    ),    1 =>     array (      0 => 'text',      1 => '/admin/delete_course',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_news' => array (  0 =>   array (    0 => 'delete',  ),  1 =>   array (    'delete' => 0,    '_controller' => 'AppBundle\\Controller\\DeleteNewsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'delete',    ),    1 =>     array (      0 => 'text',      1 => '/admin/delete_news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_students' => array (  0 =>   array (    0 => 'delete',  ),  1 =>   array (    'delete' => 0,    '_controller' => 'AppBundle\\Controller\\DeleteStudentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'delete',    ),    1 =>     array (      0 => 'text',      1 => '/admin/delete_student',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_documents' => array (  0 =>   array (    0 => 'edit',  ),  1 =>   array (    'edit' => 0,    '_controller' => 'AppBundle\\Controller\\EditAttachmentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'edit',    ),    1 =>     array (      0 => 'text',      1 => '/admin/edit_document',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_courses' => array (  0 =>   array (    0 => 'edit',  ),  1 =>   array (    'edit' => 0,    '_controller' => 'AppBundle\\Controller\\EditCourseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'edit',    ),    1 =>     array (      0 => 'text',      1 => '/admin/edit_course',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_lecturers' => array (  0 =>   array (    0 => 'edit',  ),  1 =>   array (    'edit' => 0,    '_controller' => 'AppBundle\\Controller\\EditLecturerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'edit',    ),    1 =>     array (      0 => 'text',      1 => '/admin/edit_lecturer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_news' => array (  0 =>   array (    0 => 'edit',  ),  1 =>   array (    'edit' => 0,    '_controller' => 'AppBundle\\Controller\\EditNewsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'edit',    ),    1 =>     array (      0 => 'text',      1 => '/admin/edit_news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_sessions' => array (  0 =>   array (    0 => 'edit',  ),  1 =>   array (    'edit' => 0,    '_controller' => 'AppBundle\\Controller\\EditSessionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'edit',    ),    1 =>     array (      0 => 'text',      1 => '/admin/edit_session',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_students' => array (  0 =>   array (    0 => 'edit',  ),  1 =>   array (    'edit' => 0,    '_controller' => 'AppBundle\\Controller\\EditStudentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'edit',    ),    1 =>     array (      0 => 'text',      1 => '/admin/edit_student',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'general_blog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GeneralBlogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/general_blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lecture_discussion' => array (  0 =>   array (    0 => 'group_id',  ),  1 =>   array (    'group_id' => 0,    '_controller' => 'AppBundle\\Controller\\LectureBlogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'group_id',    ),    1 =>     array (      0 => 'text',      1 => '/lecture-discussion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lecturer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LecturerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lecturer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LoginController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => 0,    '_controller' => 'AppBundle\\Controller\\MaterialController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/material',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NewsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PasswordController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/change_password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reload' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ReloadMsgClassController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reload2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ReloadMsgGeneralController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reload2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reload3' => array (  0 =>   array (    0 => 'group_id',  ),  1 =>   array (    'group_id' => 0,    '_controller' => 'AppBundle\\Controller\\ReloadMsgLectureController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'group_id',    ),    1 =>     array (      0 => 'text',      1 => '/reload3',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
