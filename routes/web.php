<?php



$this->router->addRoute('/admin/dashboard', ['AdminController', 'viewAdminDashboard']);
$this->router->addRoute('/admin/appointments', ['AdminController', 'viewAppointments']);
$this->router->addRoute('/admin/activities', ['AdminController', 'viewActivities']);
