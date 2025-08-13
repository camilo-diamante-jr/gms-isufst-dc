<?php

require_once '../core/Controller.php';


class AdminController extends Controller
{

    // private $notificationModel;
    // private $transactionModel;
    // private $sectionModel;
    private $appointmentModel;


    public function __construct($pdo)
    {
        parent::__construct($pdo);
        // $this->notificationModel = $this->loadModel("NotificationModel");
        $this->appointmentModel = $this->loadModel("AppointmentModel");
        // $this->sectionModel = $this->loadModel('SectionModel');
    }

    public function viewAdminDashboard()
    {
        $data = [
            'contentHeaderTitle' => 'Dashboard | Admin',
            'breadcrumbActiveItem' => 'Dashboard',
        ];
        $this->renderView('/portals/admin/admin-dashboard', $data);
    }

    /* 

    METHODS  TO VIEW SCHEDULES 
    
    */

    public function viewAppointments()
    {

        $appointments = $this->appointmentModel->fetchAppointments();
        $data = [
            'contentHeaderTitle' => 'Appointments',
            'breadcrumbActiveItem' => 'Appointments',
            'appointments' => $appointments


        ];
        $this->renderView('/portals/admin/management/appointments/appointment', $data);
    }
}
