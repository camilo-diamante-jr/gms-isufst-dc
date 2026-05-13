<?php

$this->router->addRoute('/dashboard', ['AdminController', 'viewDashboard']);
$this->router->addRoute('/registry/students', ['AdminController', 'viewStudents']);
