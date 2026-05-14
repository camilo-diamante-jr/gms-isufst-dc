<?php

$this->router->addRoute('/dashboard', ['AdminController', 'viewAdminDashboard']);
$this->router->addRoute('/registry/students', ['AdminController', 'viewStudents']);
