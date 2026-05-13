<?php

require_once '../core/Controller.php';


class AdminController extends Controller
{

    private $notificationModel;
    // private $transactionModel;
    // private $sectionModel;
    private $scheduleModel;


    public function __construct($pdo)
    {
        parent::__construct($pdo);
        $this->notificationModel = $this->loadModel("NotificationModel");
        $this->scheduleModel = $this->loadModel("ScheduleModel");
        // $this->sectionModel = $this->loadModel('SectionModel');
    }

    public function viewAdminDashboard()
    {
        $data = [
            'contentHeaderTitle' => 'Dashboard | Admin',
            'breadcrumbActiveItem' => 'Dashboard',
        ];
        $this->renderView('/portals/admin/dashboard/index', $data);
    }

    /* 

    METHODS  TO VIEW SCHEDULES 
    
    */

    public function viewStudents()
    {

        $schedules = $this->scheduleModel->fetchSchedules();
        $data = [
            'contentHeaderTitle' => 'Students',
            'breadcrumbActiveItem' => 'Students',
            // 'schedules' => $schedules
        ];
        $this->renderView('/portals/admin/registry/students', $data);
    }

    /* 

    METHODS  TO VIEW ACTIVIIES
    */

    public function viewActivities()
    {

        $schedules = $this->scheduleModel->fetchSchedules();
        $data = [
            'contentHeaderTitle' => 'Schedules',
            'breadcrumbActiveItem' => 'Schedules',
            'schedules' => $schedules
        ];
        $this->renderView('/portals/admin/management/activities/list-of-activity', $data);
    }
}
