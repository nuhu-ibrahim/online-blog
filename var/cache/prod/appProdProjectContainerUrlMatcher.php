<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/admin')) {
            // add_documents
            if ('/admin/add_document' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AddAttachmentController::indexAction',  '_route' => 'add_documents',);
            }

            // add_courses
            if ('/admin/courses' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AddCourseController::indexAction',  '_route' => 'add_courses',);
            }

            // add_lecturers
            if ('/admin/lecturer' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AddLecturerController::indexAction',  '_route' => 'add_lecturers',);
            }

            // add_news
            if ('/admin/news' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AddNewsController::indexAction',  '_route' => 'add_news',);
            }

            // add_sessions
            if ('/admin/session' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AddSessionController::indexAction',  '_route' => 'add_sessions',);
            }

            // add_students
            if ('/admin/student' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AddStudentController::indexAction',  '_route' => 'add_students',);
            }

            // admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/admin/delete_')) {
                // delete_attachment
                if (0 === strpos($pathinfo, '/admin/delete_attachment') && preg_match('#^/admin/delete_attachment(?:/(?P<delete>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_attachment')), array (  'delete' => 0,  '_controller' => 'AppBundle\\Controller\\DeleteAttachmentController::indexAction',));
                }

                // delete_courses
                if (0 === strpos($pathinfo, '/admin/delete_course') && preg_match('#^/admin/delete_course(?:/(?P<delete>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_courses')), array (  'delete' => 0,  '_controller' => 'AppBundle\\Controller\\DeleteCourseController::indexAction',));
                }

                // delete_news
                if (0 === strpos($pathinfo, '/admin/delete_news') && preg_match('#^/admin/delete_news(?:/(?P<delete>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_news')), array (  'delete' => 0,  '_controller' => 'AppBundle\\Controller\\DeleteNewsController::indexAction',));
                }

                // delete_students
                if (0 === strpos($pathinfo, '/admin/delete_student') && preg_match('#^/admin/delete_student(?:/(?P<delete>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_students')), array (  'delete' => 0,  '_controller' => 'AppBundle\\Controller\\DeleteStudentController::indexAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/edit_')) {
                // edit_documents
                if (0 === strpos($pathinfo, '/admin/edit_document') && preg_match('#^/admin/edit_document(?:/(?P<edit>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_documents')), array (  'edit' => 0,  '_controller' => 'AppBundle\\Controller\\EditAttachmentController::indexAction',));
                }

                // edit_courses
                if (0 === strpos($pathinfo, '/admin/edit_course') && preg_match('#^/admin/edit_course(?:/(?P<edit>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_courses')), array (  'edit' => 0,  '_controller' => 'AppBundle\\Controller\\EditCourseController::indexAction',));
                }

                // edit_lecturers
                if (0 === strpos($pathinfo, '/admin/edit_lecturer') && preg_match('#^/admin/edit_lecturer(?:/(?P<edit>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_lecturers')), array (  'edit' => 0,  '_controller' => 'AppBundle\\Controller\\EditLecturerController::indexAction',));
                }

                // edit_news
                if (0 === strpos($pathinfo, '/admin/edit_news') && preg_match('#^/admin/edit_news(?:/(?P<edit>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_news')), array (  'edit' => 0,  '_controller' => 'AppBundle\\Controller\\EditNewsController::indexAction',));
                }

                // edit_sessions
                if (0 === strpos($pathinfo, '/admin/edit_session') && preg_match('#^/admin/edit_session(?:/(?P<edit>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_sessions')), array (  'edit' => 0,  '_controller' => 'AppBundle\\Controller\\EditSessionController::indexAction',));
                }

                // edit_students
                if (0 === strpos($pathinfo, '/admin/edit_student') && preg_match('#^/admin/edit_student(?:/(?P<edit>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_students')), array (  'edit' => 0,  '_controller' => 'AppBundle\\Controller\\EditStudentController::indexAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/change_password')) {
            // admin_change_password
            if ('/change_password_admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminPasswordController::indexAction',  '_route' => 'admin_change_password',);
            }

            // change_password
            if ('/change_password' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PasswordController::indexAction',  '_route' => 'change_password',);
            }

        }

        // class_blog
        if ('/class_blog' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ClassBlogController::indexAction',  '_route' => 'class_blog',);
        }

        // general_blog
        if ('/general_blog' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\GeneralBlogController::indexAction',  '_route' => 'general_blog',);
        }

        // home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // lecture_discussion
            if (0 === strpos($pathinfo, '/lecture-discussion') && preg_match('#^/lecture\\-discussion(?:/(?P<group_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lecture_discussion')), array (  'group_id' => 0,  '_controller' => 'AppBundle\\Controller\\LectureBlogController::indexAction',));
            }

            // lecturer
            if ('/lecturer' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\LecturerController::indexAction',  '_route' => 'lecturer',);
            }

            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\LoginController::indexAction',  '_route' => 'login',);
            }

            // logout
            if ('/logout' === $pathinfo) {
                return array('_route' => 'logout');
            }

        }

        // material
        if (0 === strpos($pathinfo, '/material') && preg_match('#^/material(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'material')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\MaterialController::indexAction',));
        }

        // news
        if ('/news' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\NewsController::indexAction',  '_route' => 'news',);
        }

        if (0 === strpos($pathinfo, '/reload')) {
            // reload
            if ('/reload' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ReloadMsgClassController::indexAction',  '_route' => 'reload',);
            }

            // reload2
            if ('/reload2' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ReloadMsgGeneralController::indexAction',  '_route' => 'reload2',);
            }

            // reload3
            if (0 === strpos($pathinfo, '/reload3') && preg_match('#^/reload3(?:/(?P<group_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reload3')), array (  'group_id' => 0,  '_controller' => 'AppBundle\\Controller\\ReloadMsgLectureController::indexAction',));
            }

        }

        // student
        if ('/student' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\StudentController::indexAction',  '_route' => 'student',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
