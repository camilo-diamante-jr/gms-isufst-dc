<?php



$this->router->addRoute('/dashboard', ['AdminController', 'viewAdminDashboard']);
$this->router->addRoute('/registry/students', ['AdminController', 'viewStudents']);
$this->router->addRoute('/activities', ['AdminController', 'viewActivities']);
