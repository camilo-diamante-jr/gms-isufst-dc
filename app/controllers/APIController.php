<?php

require_once '../core/Controller.php';

class APIController extends Controller
{
    private $scheduleModel;

    public function __construct($pdo)
    {

        parent::__construct($pdo);
        $this->scheduleModel = $this->loadModel("ScheduleModel");
    }

<<<<<<< HEAD
    public function getSectionById()
=======
    public function get()
>>>>>>> 01dcdc0d700303676f7ddf847efab3f928d232bc
    {
        require_once 'API/api-section.php';
    }

    public function getBellSchedule()
    {
        $schedules = $this->scheduleModel->fetchSchedules();

        header('Content-Type: application/json');
        echo json_encode(['schedules' => $schedules]);
    }
}
