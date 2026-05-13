<?php



<<<<<<< HEAD
$this->router->addRoute('/dashboard', ['AdminController', 'viewAdminDashboard']);
$this->router->addRoute('/registry/students', ['AdminController', 'viewStudents']);
$this->router->addRoute('/activities', ['AdminController', 'viewActivities']);
=======
$this->router->addRoute('/admin/dashboard', ['AdminPortalController', 'viewAdminDashboard']);
$this->router->addRoute('/admin/appointments', ['AdminPortalController', 'viewAppointments']);
$this->router->addRoute('/admin/students', ['AdminPortalController', 'viewStudents']);
$this->router->addRoute('/admin/courses', ['AdminPortalController', 'viewCourses']);
>>>>>>> 01dcdc0d700303676f7ddf847efab3f928d232bc
